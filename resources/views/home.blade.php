@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <title></title>


    </head>
    <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="header">
                  <h1>Sopa de Letra</h1>
                </div>
                <div class="col-md-12 col-xs-12">
                <strong class="h4">Seleccione Matriz a Comparar</strong><br>
                    <div class="form-group col-lg-2 col-md-4 col-xs-12">
                     {!! Form::label('dimension', 'Dimensión') !!}
                     {!! Form::select('dimension', array('3'=>'3x3', '1'=>'1x10',
                     '5'=>'5x5', '7'=>'7x2'),'S',['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <strong class="h4">Matriz seleccionada: </strong>
                    @if($dimension)
                    @include('show')
                    @endif
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-4"><br>
            <button id="calcular" type="button" class="btn btn-primary btn-lg btn-block">Calcular</button>
        </div>  
    </div>

@endsection

@section('script')

<script src="{{ asset('js/script.js') }}"></script>

@endsection