<?php if (! empty($article->errors)) : ?>
    <ul>
        <?php foreach ($article->errors as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post">

    <div>
        <label for="title">Title</label>
        <input name="title" id="title" placeholder="Article title" value="<?= htmlspecialchars($article->title); ?>">
    </div>

    <div>
        <label for="content">Content</label>
        <textarea name="content" rows="4" cols="40" id="content" placeholder="Article content"><?= htmlspecialchars($article->content); ?></textarea>
    </div>

    <div>
        <label for="published_at">Publication date and time</label>
        <input type="datetime-local" name="published_at" id="published_at" value="<?= htmlspecialchars(date('Y-m-d\TH:i:s', strtotime($article->published_at))); ?>">
    </div>
    <fieldset>
        <legend>Categories</legend>
        <?php foreach($categories as $category){  ?>
            <div>
                <input type="checkbox" name="category[]" value="<?=$category->id?>" id="category<?=$category->id?>" 
        <?php if(in_array($category->id,$article_category_id)):?> checked <?php endif; ?>
                 >
                <label for="category<?=$category->id?>"><?=htmlspecialchars($category->name);?></label>
            </div>
        <?php } ?>
    </fieldset>

    <button>Save</button>

</form>
