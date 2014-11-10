<div class="post">
    <h2 class="title"><a href="#"><?php echo $blog_info->blog_title;?></a></h2>
    <p class="meta"><span class="date"><?php echo $blog_info->created_date_time ;?></span><span class="posted">Posted by <a href="#"><?php echo $blog_info->author_name;?></a></span></p>
    <div style="clear: both;">&nbsp;</div>
    <div class="entry">
        <?php echo $blog_info->blog_long_description;?>
    </div>
    <div>
        <h3>All Comments</h3><h3>--</h3>
        <?php foreach($all_pcomments as $v_pcomments){ ?>
                    <p>
                        <strong>
                            <?php echo $v_pcomments->comments_author_name;?>
                        </strong>
                        <p>
                            <?php echo $v_pcomments->comments_description;?>
                        </p>
                    </p>
        <?php } ?>
    </div>
    <?php echo $comments_form; ?>
</div>