@extends('layouts.header')
<main>
  <div>
    <form method="post" action="{{url('cadastrar')}}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="Autor">Autor:</label>
          <input type="text" class="form-control" value="{{old('autor')}}" name="autor">
          @if ($errors->has('autor'))
            <span style="visibility: visible; color:red; font-size: 14px;">
                {{ $errors->first('autor') }}
            </span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="Titulo">Título:</label>
          <input type="text" class="form-control" value="{{old('titulo')}}" name="titulo">
          @if ($errors->has('titulo'))
            <span style="visibility: visible; color:red; font-size: 14px;">
                {{ $errors->first('titulo') }}
            </span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="Descricao">Descrição:</label>
          <textarea class="form-control" value="{{old('descricao')}}" name="descricao"></textarea>
          @if ($errors->has('descricao'))
            <span style="visibility: visible; color:red; font-size: 14px;">
                {{ $errors->first('descricao') }}
            </span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <input type="file" name="file" accept="image/png,image/jpeg,image/jpg">
          @if ($errors->has('file'))
            <span style="visibility: visible; color:red; font-size: 14px;">
                {{ $errors->first('file') }}
            </span>
          @endif
       </div>
     </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4" style="margin-top:60px">
          <button type="submit" class="btn btn-success">Postar</button>
          <a href="{{url('index')}}"class="btn btn-cancel">Cancelar</a>
        </div>
      </div>
    </form>
  </div>
</main>
