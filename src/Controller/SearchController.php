<?php
namespace SimpleSystem\Controller;

use SimpleSystem\Interface\ABController;
use SimpleSystem\Model\ContentModel;

class SearchController extends ABController{
  public function search(){
    if(!$this->request->Has('query')){
      return $this->Rendrer([
        'ok' => false,
        'error' => 'query not found'
      ]);
    }

    $content_model = new ContentModel();
    $result = [];
    foreach($content_model->searchKeyword($this->request->query) as $r){
      $result[$r['name']] = [
        'count' => $r['b_count'],
        'words' => explode(' ', $r['b_value'])
      ];
    }

    return $this->Rendrer([
      'ok' => true,
      'error' => '',
      'result' => $result
    ]);
  }
}
