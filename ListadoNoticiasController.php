<?php

namespace Drupal\listado_noticias\Controller;

use Drupal\Core\Controller\ControllerBase;

class ListadoNoticiasController extends ControllerBase {

  public function page(){

    $items = [
      ['title' => 'Noticia 1'],
      ['title' => 'Noticia 2'],
      ['title' => 'Noticia 3'],
      ['title' => 'Noticia 4'],
      ['title' => 'Noticia 5'],
      ['title' => 'Noticia 6'],
      ['title' => 'Noticia 7'],
      ['title' => 'Noticia 8'],
      ['title' => 'Noticia 9'],
      ['title' => 'Noticia 10'],
    ];

    return [
      '#theme' => 'listado_noticias',
      '#items' => $items,
      '#title' => 'Listado de noticias'
    ];

  }

}