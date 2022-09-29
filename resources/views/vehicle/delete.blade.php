@extends('layout')
@section('conteudo')
    <div class="d-flex py-2 align-items-center w-100">
        <div class="col-6 d-flex"><h5 class="ms-2">Veículos </h5><span class="ms-2">Remover</span></div>
        <div class="col-6 d-flex justify-content-end">
            <a type="button" class="btn btn-success d-flex align-items-center me-2" href="{{ route('vehicles') }}">
                <svg width="16" height="16" fill="currentColor" class="bi bi-arrow-left me-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                <span>Voltar</span>
            </a>
        </div>
    </div>

    <div>
        <form action="/vehicles"  method="post" class=" row ">
            @method('DELETE')
            @csrf
            <div class="p-3 row col-md-9 border bg-white m-auto p-4">
                <div class="mb-3 col-md-12">
                    <div class="d-flex justify-content-between">
                        <label for="board" class="form-label fw-bold  me-2">Placa</label>
                    </div>
                    <input name="id" hidden value="{{ $vehicle->id }}">

                    <input name="board" @class(['form-control', 'rounded-0','disabled'])  data-mask='AAA-AAAA' value=" {{ $vehicle->board }}">
                </div>

                <div class="mb-3 col-md-12">
                    <button type="submit" class="btn btn-danger d-flex align-items-center me-2">
                        <svg width="16" height="16" fill="currentColor" class="bi bi-trash3 me-2" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg>
                        <span>Remover</span>
                    </button>
                </div>

            </div>
        </form>
    </div>
@stop
