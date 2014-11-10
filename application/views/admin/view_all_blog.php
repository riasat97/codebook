<div class="grid_12">
    <div class="block-border">
        <div class="block-header">
            <h1>Sortable Table (DataTables)</h1><span></span>
        </div>
        <div class="block-content">
            <table id="table-example" class="table">
                <thead>
                    <tr>
                        <th>Blog Id</th>
                        <th>Blog Title</th>
                        <th>Author Name</th>
                        <th>Short Description</th>
                        <th>Publication Status </th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($all_blog as $v_blog )
                        {
                    ?>
                    <tr class="gradeX">
                        <td><?php echo $v_blog->blog_id?></td>
                        <td><?php echo $v_blog->blog_title?></td>
                        <td><?php echo $v_blog->author_name?></td>
                        <td><?php echo $v_blog->blog_short_description?></td>
                        <td><?php  
                                if($v_blog->publication_status == 1)
                                {
                                    echo "Published";
                                }
                                else{
                                    echo "Unpublished";
                                }
                                
                                ?>
                        </td>
                        <td class="center">
                            <a href="<?php echo base_url();?>super_admin/view_blog/<?php echo $v_blog->blog_id?>">View!</a>
                            <a href="<?php echo base_url();?>super_admin/delete_blog/<?php echo $v_blog->blog_id?>" onclick=" return checkDelete();">Delete!</a>
                            <?php if($v_blog->publication_status==1){ ?>
                                        <a href="<?php echo base_url();?>super_admin/unpublish_blog/<?php echo $v_blog->blog_id?>">Unpublish!</a>
                            <?php }else{ ?>
                                        <a href="<?php echo base_url();?>super_admin/publish_blog/<?php echo $v_blog->blog_id?>">Publish!</a>
                            <?php } ?>
                        </td>
                        
                    </tr> 
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>