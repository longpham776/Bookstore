<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Danh Sách Loại Sách</h1>
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
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th>Thao tác</th>
                </tr>

            </thead>
            
            <tbody>
                <?php
                    foreach($dataLoai as $loai){
                ?>

                <tr>
                    <td><input type="checkbox" /></td>
                    <td><?php echo $loai["maloai"] ?></td>
                    <td><?php echo $loai["tenloai"] ?></td>
                    <td>
                        <!-- Icons -->
                        <a href="index.php?controller=loaisach&action=edit&maloai=<?php echo $loai["maloai"] ?>"
                            title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                        <a href="index.php?controller=loaisach&action=delete&maloai=<?php echo $loai["maloai"] ?>"
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