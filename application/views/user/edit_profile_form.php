<div class="block-border">
    <div class="block-header">
        <h1>Edit Profile
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
    <form  class="block-content form" action="<?php echo base_url();?>super_user/update_blogger_profile/<?php echo $blogger_info->blogger_id?>" method="post">
        <div class="_100">
            <p><label for="textfield">First Name</label><input id="textfield" name="first_name" class="required" type="text" value="<?php echo $blogger_info->first_name;?>" /></p>
        </div>
        <div class="_100">
            <p><label for="textfield">Last Name</label><input id="textfield" name="last_name" class="required" type="text" value="<?php echo $blogger_info->last_name;?>" /></p>
        </div>
        <div class="_100">
            <p><label for="textfield">Email</label><input type="email" name="email_address" class="required" type="text" value="<?php echo $blogger_info->email_address;?>" /></p>
        </div>
        <div class="_100">
            <p><label for="textfield">Password</label><input type="password" name="password" class="required" type="text" value="<?php echo $blogger_info->password;?>" /></p>
        </div>
        <div class="_100">
            <p><label for="textfield">Mobile Number</label><input type="text" name="mobile_no" class="required" type="text" value="<?php echo $blogger_info->mobile_no;?>" /></p>
        </div>
        <div class="_100">
            <p><label for="textarea">Address</label><textarea name="address" class="required" rows="5" cols="40"><?php echo $blogger_info->address;?></textarea></p>
        </div>
        <div class="_100">
            <p><label for="textfield">Gender</label><input type="text" name="gender" class="required" type="text" value="<?php echo $blogger_info->gender;?>" /></p>
        </div>
        <div class="_100">
            <p><label for="textfield">City</label><input type="text" name="city" class="required" type="text" value="<?php echo $blogger_info->city;?>" /></p>
        </div>
        <div class="_100">
            <p><label for="textfield">Country</label><input type="text" name="country" class="required" type="text" value="<?php echo $blogger_info->country;?>" /></p>
        </div>
        <div class="_100">
            <p><label for="textfield">Zip Code</label><input type="text" name="zip_code" class="required" type="text" value="<?php echo $blogger_info->zip_code;?>" /></p>
        </div>
        <div class="clear"></div>
        <div class="block-actions">
            <ul class="actions-left">
                <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
            </ul>
            <ul class="actions-right">
                <li><input type="submit" class="button" value="Save Profile"></li>
            </ul>
        </div>
    </form>
</div>