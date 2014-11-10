<div class="block-border">
    <div class="block-header">
        <h1>Post Comments</h1>
        <span>
            <h3>
                <?php
                    $message = $this->session->userdata('message');
                    if (isset($message)) 
                    {
                        echo "--" . $message;
                        $this->session->unset_userdata('message');
                    }
                ?>
            </h3>
        </span>
    </div>
    <form  class="block-content form" action="<?php echo base_url(); ?>home/save_comments" method="post">
        <div class="_100">
            <p><label for="textfield">Author Name </label><input id="textfield" name="comments_author_name" class="required" type="text" value="" /></p>
            <input type="hidden" name="blog_id" value="<?php echo $blog_info->blog_id; ?>">
            <input type="hidden" name="blogger_id" value="<?php echo $blogger_id ?>">
        </div>
        <div class="_100">
            <p><label for="textfield">Email </label><input id="textfield" name="comments_author_email" class="required" type="text" value="" /></p>
        </div>
        <div class="_100">
            <p><label for="textarea"> Comments Description </label><textarea id="textarea" name="comments_description" class="required" rows="5" cols="40"></textarea></p>
        </div>
        <div class="clear"></div>
        <div class="block-actions">
            <input type="submit" class="button" value="Submit Comment">
        </div>
    </form>
</div>