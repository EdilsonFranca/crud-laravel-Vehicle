@extends('layout')
@section('conteudo')
    <div class="d-flex py-2 align-items-center w-100">
        <div class="col-6 d-flex"><h5 class="ms-2">Veículos </h5><span class="ms-2">Editar</span></div>
        <div class="col-6 d-flex justify-content-end">
            <a type="button" class="btn btn-success d-flex align-items-center me-2" href="{{ route('vehicles') }}">
                <svg  width="16" height="16" fill="currentColor" class="bi bi-arrow-left me-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                <span>Voltar</span>
            </a>
        </div>
    </div>

    <div>
        <form action="/vehicles/update" method="POST" class=" row ">
            @csrf
            <div class="p-3 row col-md-9 border bg-white m-auto p-4">
                <div class="mb-3 col-md-12">
                    <div class="d-flex justify-content-between">
                        @if($type != "read")
                            <input name="id" hidden value="{{ $vehicle->id }}">
                        @endif

                        <label for="brand" class="form-label fw-bold obrigatorio me-2">Marca</label>
                        @error('brand')
                        <div class="alert text-danger p-0">{{ $message }}</div>
                        @enderror
                    </div>

                    <input name="brand" @class(['form-control', 'rounded-0','disabled' => $type == "read"])  value="{{ $vehicle->brand ?? old('brand') }}">
                </div>
                <div class="mb-3 col-md-12">
                    <div class="d-flex justify-content-between">
                        <label for="model" class="form-label fw-bold obrigatorio me-2">Modelo</label>
                        @error('model')
                        <div class="alert text-danger p-0">{{ $message }}</div>
                        @enderror
                    </div>
                    <input name="model" @class(['form-control', 'rounded-0','disabled' => $type == "read"])  value="{{$vehicle->model ?? old('model') }}">
                </div>
                <div class="mb-3 col-md-12">
                    <div class="d-flex justify-content-between">
                        <label for="year_manufacture" class="form-label fw-bold obrigatorio me-2">Ano de Fabricação</label>
                        @error('year_manufacture')
                        <div class="alert text-danger p-0">{{ $message }}</div>
                        @enderror
                    </div>

                    <input name="year_manufacture" @class(['form-control', 'rounded-0','disabled' => $type == "read"])  data-mask="0000" value="{{$vehicle->year_manufacture ?? old('year_manufacture') }}">
                </div>
                <div class="mb-3 col-md-12">
                    <div class="d-flex justify-content-between">
                        <label for="board" class="form-label fw-bold obrigatorio me-2">Placa</label>
                        @error('board')
                        <div class="alert text-danger p-0">{{ $message }}</div>
                        @enderror
                    </div>
                    <input name="board" @class(['form-control', 'rounded-0','disabled' => $type == "read"])  data-mask='AAA-AAAA' value=" {{ $vehicle->board ?? old('board') }}">
                </div>
                <div class="mb-3 col-md-12">
                    @if($type != "read")
                        <button type="submit" class="btn btn-success d-flex align-items-center me-2">
                            <svg width="16" height="16" fill="currentColor" class="bi bi-pencil-square me-2" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            <span>Editar</span>
                        </button>
                    @endif
                </div>
            </div>
        </form>
    </div>
@stop
