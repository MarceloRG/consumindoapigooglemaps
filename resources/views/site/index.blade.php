@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="dev-title text-center">API Google Maps</h1>
        <section>
            {!! Form::open(['route' => ['busca']]) !!}
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="cidade" placeholder="Cidade" required>
                </div>
                <div class="form-group col-md-8">
                    <input type="text" class="form-control" name="endereco" placeholder="Endereço" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
            {!! Form::close() !!}
        </section>
        @if(Session::has('zero_results'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('zero_results') }}
            </div>
        @endif
        <div class="map-container">
            <div id="map" data-geo="{{$map['lat'] or ''}}|{{$map['lng'] or ''}}"></div>
        </div>
    </div>
@stop