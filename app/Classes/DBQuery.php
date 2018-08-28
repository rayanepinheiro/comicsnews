<?php
namespace App\Classes;

use Illuminate\Support\Facades\DB;

class DBQuery
{
  public static function getPostagens()
  {
    $sql = "SELECT * FROM comicsnews.noticia ORDER BY data DESC";
    return DB::connection('mysql')->select($sql);
  }

  public static function setPostagem($titulo, $descricao, $img, $autor)
  {
    $sql = "INSERT INTO comicsnews.noticia (
            titulo,
            descricao,
            img,
            data,
            autor)

    VALUES (:titulo,:descricao,:img,SYSDATE(),:autor)";

    return DB::connection()->insert($sql, [
      'titulo' => $titulo,
      'descricao' => $descricao,
      'img' => $img,
      'autor' => $autor,
    ]);
  }

  public static function getPost($id)
  {
    $sql = "SELECT * FROM comicsnews.noticia CN
            WHERE CN.ID = :id";
    return DB::connection()->select($sql, [
      'id' => $id,
    ]);
  }
}
