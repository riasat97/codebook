<div class="grid_12">
    <div class="block-border">
        <div class="block-header">
            <h1>Sortable Table (DataTables)
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
        <div class="block-content">
            <table id="table-example" class="table">
                <thead>
                    <tr>
                        <th>Comments Id</th>
                        <th>Comments Author Name</th>
                        <th>Comments Description </th>
                        <th>Publication Status </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($all_comments as $v_comments )
                        {
                    ?>
                    <tr class="gradeX">
                        <td><?php echo $v_comments->comments_id?></td>
                        <td><?php echo $v_comments->comments_author_name?></td>
                        <td><?php echo $v_comments->comments_description?></td>
                        <td><?php  
                                if($v_comments->publication_status == 1)
                                {
                                    echo "Published";
                                }
                                else{
                                    echo "Unpublished";
                                }
                                
                                ?>
                        </td>
                        <td>
                            <a href="<?php echo base_url();?>super_user/check_blog_status/<?php echo $v_comments->blog_id?>">Go To Blog</a> 
                        </td>
                    </tr> 
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>