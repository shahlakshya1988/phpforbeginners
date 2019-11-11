<?php 
/*

 */
function getRelatedArticle($id){
	$conn = getDb();
	$sql = "SELECT * FROM `article` where `id` = ?";
	$stmt = mysqli_prepare($conn,$sql);
	if(!$stmt){
		echo mysqli_error($stmt);
		die();
	}else{
		mysqli_stmt_bind_param($stmt,"i",$id);
		if(mysqli_stmt_execute($stmt)){
				$result = mysqli_stmt_get_result($stmt);
				return mysqli_fetch_array($result,MYSQLI_ASSOC);
		}	
	}
}

function validateArticle($title,$content,$published_at){
	$error=[];
	 if(trim($title)==""){
	     $error[]="Title Is Required";
	 }
	 if(trim($content)==""){
	     $error[]="Content Is Required";
	 }
	 if(trim($published_at) == ""){
	     $published_at = NULL;
	 }else{
	     //var_dump($published_at);
	     $published_at = date("d-m-Y h:i:s A",strtotime($published_at));
	     //var_dump($published_at);
	     $date_time = date_create_from_format("d-m-Y h:i:s A",$published_at);
	     //var_dump($date_time); die();
	     if(!$date_time){
	         $error[]="Please Enter Proper Date Time";
	     }
	     $date_error = date_get_last_errors();
	     //var_dump($date_time);
	// var_dump($date_error);
	 //var_dump(count($date_error["warnings"]) > 0);
	 //var_dump($error);
	     if(count($date_error["warnings"]) > 0){

	         $error[]="Enter Proper Date ";
	     }
	 }
	 return $error;
}