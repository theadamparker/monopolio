<?php

$data = $pages->find('buy');
$json = [];

foreach($data as $article) {

  $json[] = [
    'url'   => (string)$article->url(),
    'title' => (string)$article->title(),
    'text'  => (string)$article->text(),
    'date'  => (string)$article->date()
  ];

}

echo json_encode($json);
