@extends('layouts.header')

<style>
.msg{
  text-align: center;
}
img{
  max-width:100%;
  max-height:60%;
  width: auto;
  height: auto;
}
a{
  font-size: 14pt;
}

.button{
  padding: 10px;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    height:50%;
    position: absolute;

}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 20px 20px;
}
</style>

<main>
  <div>
    @forelse ($postagens as $postagem)
      <div class="card col-md-4" >
        <img src={{$postagem->img}}>
        <div class="container">
          <a href="{{url('detalhes') . '/' . $postagem->ID }}"><b>{{$postagem->titulo}}</b></a>
          <p>{{$postagem->autor." - ".$postagem->data}}</p>
        </div>
      </div>
    @empty
      <div class="col-md-4"></div>
      <div class="col-md-4 msg">
        <h2>AVISO</h2>
        Não existem postagens!
        <div class="button">
          <a  href="{{url('cadastrar')}}" class="btn btn-success">Postar</a>
        </div>
      </div>
      <div class="col-md-4"></div>
      <p></p>
    @endforelse
  </div>
</main>
