<div class="block-border">
    <div class="block-header">
        <h1>Blog Info</h1>
    </div>
    <form  class="block-content form" action="" method="post">
        <div class="_100">
            <p><label for="textfield">Blog Title</label><?php echo $blog_info->blog_title;?></p>
        </div>
        <div class="_100">
            <?php foreach($all_category as $v_category){ ?>
                        <?php if($v_category->category_id==$blog_info->category_id){ ?>
                                    <p><label for="textfield">Category</label><?php echo $v_category->category_name;?></p>
                        <?php } ?>           
            <?php } ?>
        </div>
        <div class="_100">
            <p><label for="textfield">Author Name</label><?php echo $blog_info->author_name;?></p>
        </div>

        <div class="_100">
            <p><label for="textarea">Blog Short Description</label><?php echo $blog_info->blog_short_description;?></p>
        </div>
        
        <div class="_100">
            <p><label for="textarea">Blog Long Description</label><?php echo $blog_info->blog_long_description;?></p>
        </div>
        
        

        <div class="clear"></div>
        <div class="block-actions">
            <ul class="actions-left">
                <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
            </ul>
        </div>
    </form>
</div>