@extends('layouts.header')

<style>
.msg{
  text-align: center;
}
.button{
  padding: 10px;
}
</style>

<main>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 msg">
      <h2>AVISO</h2>
      Postagem concuída com sucesso!
      <div class="button">
        <a  href="{{url('index')}}" class="btn btn-success">Ver postagens</a>
      </div>
    </div>
  </div>
</main>
