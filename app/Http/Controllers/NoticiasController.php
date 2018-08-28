<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Classes\DBQuery;
use App\Http\Controllers\NoticiasController;

class NoticiasController extends Controller
{
    public function index()
    {
      $postagens = DBQuery::getPostagens();
      // return $postagens;
      return view('noticias.index')->with('postagens', $postagens);
    }

    public function detalhes(Request $request)
    {
      $id = $request->id;

      $post = DBQuery::getPost($id);
      $post = $post !== [] ? $post[0] : null;
      // return $post;
      return view('noticias.detalhes')->with('post', $post);
    }

    public function cadastrar()
    {
      return view('noticias.form-cadastro');
    }

    public function validar(Request $request)
    {
      $messages = [
        'autor.required' => 'Informe o autor.',
        'titulo.required' => 'Informe o título.',
        'descricao.required' => 'Informe a descrição.',
        'file.required' => 'Anexe uma foto.',
        'file.mimes' => 'É permitido apenas arquivos jpg, jpeg e png.',
        'file.max' => 'É permitido apenas imagens com tamanho 2MB.',
      ];

      $rules = [
        'autor' => 'required',
        'titulo' => 'required',
        'descricao' => 'required',
        'file' => 'required|mimes:jpg,jpeg,png|max:2000',
      ];

      $validator = Validator::make($request->all(), $rules, $messages);

      if ($validator->fails()) {
        return redirect('cadastrar')
        ->WithErrors($validator)
        ->WithInput();
      }

      $autor = $request->input('autor');
      $titulo = $request->input('titulo');
      $descricao = $request->input('descricao');
      $imagem = $request->file('file');

      // TRATAMENTO IMAGEM
      $destino = "img/foto-post/";
      $extension = $imagem->getClientOriginalExtension();
      $filename = $imagem->getClientOriginalName();
      $filename = str_replace(" ", "", $filename);
      $data_file = date('d-m-Y_H_i_s');
      $data_file = $data_file."-".$filename;
      $imagem->move($destino, $filename);
      $url_imagem = $destino.$filename;

      // INSERCAO DAS INFORMACOES DO FORMULARIO NA TABELA NOTICIA
      DBQuery::setPostagem($titulo, $descricao, $url_imagem, $autor);

      return view('noticias.aviso');
    }
}
