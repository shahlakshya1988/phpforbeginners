<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="phpforbeginners_cms";
$conn= mysqli_connect($db_host,$db_user,$db_pass,$db_name);
//var_dump($conn);
$sql="SELECT * FROM `article`";
$select_query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
/* $result = mysqli_fetch_assoc($select_query);
//print_r($result);
echo "<pre>",print_r($result),"</pre>";
$result = mysqli_fetch_assoc($select_query);
//print_r($result);
echo "<pre>",print_r($result),"</pre>";echo "<pre>",print_r($result),"</pre>";*/
while($result = mysqli_fetch_assoc($select_query)){
    echo PHP_EOL."<pre>",print_r($result),"</pre>".PHP_EOL;
}