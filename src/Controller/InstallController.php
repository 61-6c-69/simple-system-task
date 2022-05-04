<?php
namespace SimpleSystem\Controller;

use SimpleSystem\Interface\ABController;
use SimpleSystem\Model\ContentModel;

class installController extends ABController{
  public function index(){
    $content = new ContentModel();

    try{
      $content->Select("*")->get();
    }catch(\Exception $e){
      /*$content->Columns([
        'id' =>['INT', 'NOT NULL', 'AUTO_INCREMENT'],
        'b_political' => ['TEXT', 'NOT NULL'],
        'b_medicine' => ['TEXT', 'NOT NULL'],
        'b_sport' => ['TEXT', 'NOT NULL'],
        'b_economy' => ['TEXT', 'NOT NULL'],
        "PRIMARY KEY (<id>)"
      ])->Options([
        "ENGINE" => "MyISAM",
	      "AUTO_INCREMENT" => 1
      ])->Create();*/
      return $this->Rendrer("<h1>import database and set connection info</h1>");
    }

    $data = json_decode(file_get_contents("assets/data.json"));
    $p = explode(' ', $data->political);
    $m = explode(' ', $data->medicine);
    $s = explode(' ', $data->sport);
    $e = explode(' ', $data->economy);

    for($i=0; $i<=19; $i++){
      $content->insert([
        'b_political' => $p[$i],
        'b_medicine' => $m[$i],
        'b_sport' => $s[$i],
        'b_economy' => $e[$i],
      ]);
    }
    return $this->Rendrer("<h1>Done.</h1>");
  }
}
