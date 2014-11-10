<div class="block-border">
    <div class="block-header">
        <h1>Post Blog
            <?php
            $message=$this->session->userdata('message');
            if(isset($message))
            {
                echo "--".$message;
                $this->session->unset_userdata('message');
                        
            }
            ?>
        </h1><span></span>
    </div>
    <form  class="block-content form" action="<?php echo base_url();?>super_admin/save_blog" method="post">
        <div class="_100">
            <p><label for="textfield">Blog Title</label><input id="textfield" name="blog_title" class="required" type="text" value="" /></p>
        </div>
        <div class="_100">
            <p><label for="textfield">Select Category</label>
                <select name="category_id">
                    <?php foreach($all_category as $v_category){ ?>
                                <option value="<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></option>
                    <?php } ?>
                </select>
            </p>
        </div>
        <div class="_100">
            <p><label for="textfield">Author Name</label><input id="textfield" name="author_name" class="required" type="text" value="" /></p>
        </div>

        <div class="_100">
            <p><label for="textarea">Blog Short Description</label><textarea id="ck_editor" name="blog_short_description" class="required" rows="5" cols="40"></textarea><?php echo display_ckeditor($editor['ckeditor']); ?></p>
        </div>
        
        <div class="_100">
            <p><label for="textarea">Blog Long Description</label><textarea id="ck_editor1" name="blog_long_description" class="required" rows="5" cols="40"></textarea><?php echo display_ckeditor($editor1['ckeditor']); ?></p>
        </div>
        <div class="_50">
            <p>
                <span class="label">Publication Status</span>
                <label><input type="radio" name="publication_status" value="1" />Published</label>
                <label><input type="radio" name="publication_status" value="0" />Unpublished</label>
            </p>
        </div>
        

        <div class="clear"></div>
        <div class="block-actions">
            <ul class="actions-left">
                <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
            </ul>
            <ul class="actions-right">
                <li><input type="submit" class="button" value="Save Blog"></li>
            </ul>
        </div>
    </form>
</div>