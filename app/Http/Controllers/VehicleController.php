<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class VehicleController extends Controller
{
    public function index(Request $request)
    {
        if ($request->type)
        {
            return view('vehicle/list')->with('vehicles', Vehicle::paginate(10))
                                            ->with('type', $request->type)
                                            ->with('msn', $request->msn);
        }

        return view('vehicle/list')->with('vehicles', Vehicle::paginate(10));
    }

    public function create()
    {
        return view('vehicle/form');
    }

    /**
     * @throws ValidationException
     */
    public function store(StorePostRequest $request): \Illuminate\Http\RedirectResponse
    {
        $board = $this->ValidBoardUnique($request);

        $create = array(
            'brand'            => $request->brand,
            'model'            => $request->model,
            'year_manufacture' => preg_replace("/[^0-9]/", "", $request->year_manufacture),
            'board'            => strtoupper($board),
        );

        Vehicle::create($create);

        return redirect()->route('vehicles', ['type' => 'success', 'msn' => "Veiculo Criado com sucesso !"]);
    }

    public function show(Request $request)
    {
        $this->checkId($request);

        $vehicle = Vehicle::find($request->id);

        if (!$vehicle)
            return redirect()->route('vehicles');

        return view('vehicle/formEdit')->with('vehicle', $vehicle)
                                            ->with('type', $request->type);
    }

    /**
     * @throws ValidationException
     */
    public function update(StorePostRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->checkId($request);

        $board = $this->ValidBoardUnique($request);

        $Vehicle = Vehicle::find($request->id);

        $fill = array(
            'brand'            => $request->brand,
            'model'            => $request->model,
            'year_manufacture' => $request->year_manufacture,
            'board'            => $board,
        );

        $Vehicle->fill($fill);
        $Vehicle->save();

        return redirect()->route('vehicles', ['type' => 'success', 'msn' => "Veiculo Editado com sucesso !"]);
    }

    public function remove(Request $request)
    {
        $this->checkId($request);

        $vehicle = Vehicle::find($request->id);
        return view('vehicle/delete')->with('vehicle', $vehicle);
    }

    public function destroy(Request $request): \Illuminate\Http\RedirectResponse
    {
        $this->checkId($request);

        $Vehicle = Vehicle::find($request->id);
        $Vehicle->delete();

        return redirect()->route('vehicles', ['type' => 'success', 'msn' => "Veiculo removido com sucesso !"]);
    }


    /**
     * @throws ValidationException
     */
    private function ValidBoardUnique($request)
    {
        $board = str_replace("-","",$request->board);

        $valid = array(
            'board' => $board
        );

        $rules = array(
            'board' => 'unique:vehicles,board,'.$request->id
        );

        $messages = array(
            'board.unique' => 'Já existe um veículo cadastrado com esta placa ',
        );

        Validator::make($valid, $rules, $messages)->validate();

        return $board;
    }

    private function checkId(Request $request): void
    {
        if (!$request->id) {
            redirect()->route('vehicles');
        }
    }
}
