<?php
class Paginator{
  public $limit;
  public $offset;
  public $previous;
  public $next;
  public $total_record;
  public function __construct($page,$records_per_page,$total_record){
    //var_dump($page);
    $page = filter_var($page,FILTER_VALIDATE_INT);
    //var_dump($page);
    if($page<=1){
      $page=1;
    }
    $this->limit = $records_per_page;
    $this->offset = $records_per_page * ($page-1);
    $this->previous = $page -1;
    
  
    $this->total_record =$total_record;
    $total_pages = $this->total_record / $records_per_page;
    $total_pages = ceil($total_pages);
    //var_dump($this->total_record);
    if($page<$total_pages){
      $this->next = $page+1;
    }else{
      $this->next = null;
    }

    
  }


}
