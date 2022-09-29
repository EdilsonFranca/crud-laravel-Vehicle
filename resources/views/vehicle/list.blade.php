@extends('layout')
@section('conteudo')

    <div class="d-flex py-2 align-items-center w-100">
        <div class="col-6 d-flex"><h5 class="ms-2">Imoveis </h5><span class="ms-2">Painel de Controle</span></div>
        <div class="col-6 d-flex justify-content-end">
            <a type="button" class="btn btn-success d-flex align-items-center me-2" href="{{ route('create') }}">
                <svg width="16" height="16" fill="#FFF" class="bi bi-plus-lg me-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                </svg>
                <span>Cadastrar</span>
            </a>
        </div>
    </div>
    @isset($type)
        <div class="text-center alert alert-{{$type}} alert-dismissible fade show col-12" role="alert">
            {{ $msn }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endisset
    <div class="border ">
        <div class="container mt-5">
            <table class="table">
                <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano de Fabricação</th>
                    <th>Placa</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody class="border bg-white">
                @forelse ($vehicles as $vehicle)
                    <tr>
                        <td>{{ $vehicle->brand }}</td>
                        <td>{{ $vehicle->model }}</td>
                        <td>{{ $vehicle->year_manufacture }}</td>
                        <td>{{ $vehicle->board }}</td>
                        <td>
                            <div class='dropdown'>
                                <button class='btn border btn-d dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'> </button>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item small' href="{{ route('vehicle_show', ['id' =>  $vehicle->id , 'type' =>  'read']) }}">Ver</a></li>
                                    <li><a class='dropdown-item small' href="{{ route('vehicle_show', ['id' =>  $vehicle->id , 'type' =>  'update']) }}">Editar</a></li>
                                    <li><hr class='dropdown-divider'></li>
                                    <li><a class='dropdown-item small' href="{{ route('vehicle_remove', ['id' =>  $vehicle->id ]) }}">Remover</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @empty
                    <p class="mt-3"><small class="text-danger">Nenhum Automóvel Cadastrado</small></p>
                @endforelse
                </tbody>
            </table>
            {{ $vehicles->links() }}
        </div>
    </div>
@stop
