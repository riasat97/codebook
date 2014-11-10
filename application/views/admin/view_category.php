<div class="grid_12">
    <div class="block-border">
        <div class="block-header">
            <h1>Sortable Table (DataTables)</h1><span></span>
        </div>
        <div class="block-content">
            <table id="table-example" class="table">
                <thead>
                    <tr>
                        <th>Category Id</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($all_category as $v_category ){ ?>
                                <tr class="gradeX">
                                    <td><?php echo $v_category->category_id?></td>
                                    <td><?php echo $v_category->category_name?></td>
                                    <td>
                                        <?php  
                                            if($v_category->publication_status==1)
                                            {
                                                echo "Published";
                                            }
                                            else{
                                                echo "Unpublished";
                                            }
                                        ?>
                                    </td>
                                    <td class="center">
                                        <a href="<?php echo base_url();?>super_admin/edit_category/<?php echo $v_category->category_id?>">Edit</a> ! 
                                        <a href="<?php echo base_url();?>super_admin/delete_category/<?php echo $v_category->category_id?>" onclick="return checkDelete();">Delete</a> !
                                        <?php if($v_category->publication_status==1){ ?>
                                                    <a href="<?php echo base_url();?>super_admin/unpublish_category/<?php echo $v_category->category_id?>">Unpublished</a>
                                        <?php }else{ ?>
                                                    <a href="<?php echo base_url();?>super_admin/publish_category/<?php echo $v_category->category_id?>">Published</a>
                                        <?php } ?>
                                    </td>
                                </tr> 
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>