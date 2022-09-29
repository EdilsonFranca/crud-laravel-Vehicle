@extends('layout')
@section('conteudo')
    <div class="d-flex py-2 align-items-center w-100">
        <div class="col-6 d-flex"><h5 class="ms-2">Veículos </h5><span class="ms-2">Cadastrar</span></div>
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
        <form action="/vehicles/store" method="POST" class=" row ">
            @csrf
            <div class="p-3 row col-md-9 border bg-white m-auto p-4">
                <div class="mb-3 col-md-12">
                    <div class="d-flex justify-content-between">
                        <label for="brand" class="form-label fw-bold obrigatorio me-2">Marca</label>
                        @error('brand')
                        <div class="alert text-danger p-0">{{ $message }}</div>
                        @enderror
                    </div>

                    <input name="brand" class="form-control rounded-0" value="{{ old('brand') }}">
                </div>
                <div class="mb-3 col-md-12">
                    <div class="d-flex justify-content-between">
                        <label for="model" class="form-label fw-bold obrigatorio me-2">Modelo</label>
                        @error('model')
                        <div class="alert text-danger p-0">{{ $message }}</div>
                        @enderror
                    </div>
                    <input name="model" class="form-control rounded-0" value="{{ old('model') }}">
                </div>
                <div class="mb-3 col-md-12">
                    <div class="d-flex justify-content-between">
                        <label for="year_manufacture" class="form-label fw-bold obrigatorio me-2">Ano de Fabricação</label>
                        @error('year_manufacture')
                        <div class="alert text-danger p-0">{{ $message }}</div>
                        @enderror
                    </div>

                    <input name="year_manufacture" class="form-control rounded-0"  data-mask="0000" value="{{ old('year_manufacture') }}">
                </div>
                <div class="mb-3 col-md-12">
                    <div class="d-flex justify-content-between">
                        <label for="board" class="form-label fw-bold obrigatorio me-2">Placa</label>
                        @error('board')
                        <div class="alert text-danger p-0">{{ $message }}</div>
                        @enderror
                    </div>
                    <input name="board" class="form-control rounded-0 bg-light" data-mask='AAA-AAAA' value="{{ old('board') }}">
                </div>
                <div class="mb-3 col-md-12">
                    <button type="submit" class="btn btn-success d-flex align-items-center me-2">
                        <svg width="16" height="16" fill="#FFF" class="bi bi-plus-lg me-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                        </svg>
                        <span>Cadastrar</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
@stop
