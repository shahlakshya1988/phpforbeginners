<?php 
if(isset($error)){
   // var_dump($error);
   if(!empty($error)){
       echo "<ul>";
        foreach($error as $err):
            echo "<li>".$err."</li>";
        endforeach;
        echo "</ul>";
   }
}
var_dump($published_at);
?>
<form action="" method="POST">
    <div>
        <label for="title">Article Title</label>
        <input type="text" name="title" id="title" placeholder="Article Title" value="<?php echo isset($title)?htmlspecialchars($title):null; ?>">
    </div>
    <div>
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Enter Content"><?php echo isset($content)? htmlspecialchars($content) : null; ?></textarea>
    </div>
    <div>
        <label for="published_at">Published At</label>
        <input type="datetime-local" name="published_at" id="published_at" placeholder="published At" value="<?php echo isset($published_at) ? date("Y-m-d\TH:i:s",strtotime($published_at)) : null; ?>" >
    </div>
    <div>
        <button type="submit" name="add_article">Save Form</button>
    </div>
</form>
