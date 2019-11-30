<?php
class Paginator{
  public $limit;
  public $offset;
  public function __construct($page,$records_per_page){
    if($page<=1){
      $page=1;
    }
    $this->limit = $records_per_page;
    $this->offset = $records_per_page * ($page-1);
  }
}
