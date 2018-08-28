@extends('layouts.header')

<style>
img{
  max-width:100%;
  max-height:60%;
  width: 100%;
  height: 300px
}
.imagem{
  height:auto;
  width: 100%;
}
.msg{
  text-align: center;
}
.text{
  text-align: justify;
}
.button{
  padding: 10px;
  text-align: center;
}
.autor{
  color: green;
  text-align: center;
  padding: 20px;
}
</style>
<main>
  <div class="row">
    <div class="imagem">
      <img src="{{"../".$post->img}}">
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4 text">
      <h2>{{$post->titulo}}</h2>
      <div class="autor">
        {{$post->autor . " - " . $post->data}}
      </div>
      {{$post->descricao}}
      {{$post->img}}
    </div>
  </div>
  <div class="button">
    <a  href="{{url('index')}}" class="btn btn-success">Ver outras postagens</a>
  </div>
</main>
