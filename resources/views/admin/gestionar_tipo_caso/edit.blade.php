@extends('admin.layouts.template')
@section('title')
    @lang('Editar Tipo de Caso')
@endsection
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>
 @endif
<div class="row">
    <div class="card shadow col-md-4 offset-md-4">
        <form action="{{route('admin.tiposT.update',$tipo->id)}}" method="POST">
         {{ csrf_field() }}
            <div class="form-group mt-4">
                <label for="full_name_id" class="control-label">@lang('Nombre')</label>
                <input type="text" class="form-control" id="full_name_id" name="nombre" placeholder="Nombre" value="{{$tipo->nombre}}"> 
            </div>    
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn100" value="Aceptar">
            </div>     
        </form>
    </div>
</div>

@endsection