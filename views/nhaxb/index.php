<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Danh sách Nhà Xuất Bản</h1>
        </div>
    </div>
    <div class="content-box-header">
        
        <div class="clear"></div>
        
    </div> <!-- End .category-header -->

<div class="category-box-category">
    
    <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
        
        <table class="table table-striped table-hover">
            
                <thead>
                    <tr>
                        <th><input class="check-all" type="checkbox" /></th>
                        <th>Mã nhà xuất bản</th>
                        <th>Tên nhà xuất bản</th>
                        <th>Thao tác</th>
                    </tr>

                </thead>
            
            <tbody>
                    <?php
                        foreach($dataNxb as $nhaxb){
                    ?>

                    <tr>
                        <td><input type="checkbox" /></td>
                        <td><?php echo $nhaxb["manxb"] ?></td>
                        <td><?php echo $nhaxb["tennxb"] ?></td>
                        <td>
                            <!-- Icons -->
                            <a href="index.php?controller=nxb&action=edit&manxb=<?php echo $nhaxb["manxb"] ?>"
                                title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                            <a href="index.php?controller=nxb&action=delete&manxb=<?php echo $nhaxb["manxb"] ?>"
                                title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>

                        </td>
                    </tr>
                    <?php
                                    }
                                ?>
                </tbody>
            
        </table>
        
    </div> <!-- End #tab1 -->
    
</div> <!-- End .content-box-content -->
    
</section>