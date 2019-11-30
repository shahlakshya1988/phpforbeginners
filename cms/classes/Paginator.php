<?php
class Paginator{
  public $limit;
  public $offset;
  public $previous;
  public $next;
  public function __construct($page,$records_per_page){
    //var_dump($page);
    $page = filter_var($page,FILTER_VALIDATE_INT);
    //var_dump($page);
    if($page<=1){
      $page=1;
    }
    $this->limit = $records_per_page;
    $this->offset = $records_per_page * ($page-1);
    $this->previous = $page -1;
    $this->next = $page+1;
  }
}
