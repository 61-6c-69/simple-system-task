<?php
namespace SimpleSystem\Model;

use SimpleSystem\Interface\ABModel;

class ContentModel extends ABModel{
  protected const TABLE_NAME = 'content';

  public function searchKeyword($keywords){
    $keyword = "SET @_keywords = :keywords;";
    $this->query($keyword, [
      ':keywords' => $keywords
    ]);
    
    $query = "
      SELECT GROUP_CONCAT(b_political) AS b_value, COUNT(id) as b_count, CONCAT('political') as name FROM `ss_content` where MATCH(b_political) AGAINST(@_keywords) union all
      SELECT GROUP_CONCAT(b_medicine) AS b_value, COUNT(id) as b_count, CONCAT('medicine') as name FROM `ss_content` where MATCH(b_medicine) AGAINST(@_keywords) union all
      SELECT GROUP_CONCAT(b_sport) AS b_value, COUNT(id) as b_count, CONCAT('sport') as name FROM `ss_content` where MATCH(b_sport) AGAINST(@_keywords) union all
      SELECT GROUP_CONCAT(b_economy) AS b_value, COUNT(id) as b_count, CONCAT('economy') as name FROM `ss_content` where MATCH(b_economy) AGAINST(@_keywords)
      order by b_count desc";

    return $this->query($query)->fetchAll();
  }
}
