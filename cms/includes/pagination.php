<?php $filename= strtok($_SERVER["REQUEST_URI"],"?"); ?>
<nav>
        <ul>
            <?php if($paginator->previous>0){ ?> 
                <li><a href="<?=$filename?>?page=<?=$paginator->previous;?>"><?=$paginator->previous;?></a></li>
            <?php } ?>
            <?php if($paginator->next){?>
                <li><a href="<?=$filename?>?page=<?=$paginator->next;?>"><?=$paginator->next;?></a></li>
            <?php } ?>
            
        </ul>
    </nav>
