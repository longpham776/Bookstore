<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Danh sách Books</h1>
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
                    <th>Mã sách &ensp;&ensp;</th>
                    <th>Tên sách &ensp;&ensp;</th>
                    <th>Giá &ensp;&ensp;</th>
                    <th>Thao tác</th></th>
                </tr>
                
            </thead>
            
            <tbody>
                    <?php
                    foreach($dataSach as $sach){
                    ?>
                    <tr>
                        <td><?php echo $sach["masach"] ?></td>
                        <td><?php echo $sach["tensach"] ?></td>
                        <td><?php echo $sach["gia"] ?></td>
                        <td>
                            <!-- Icons -->
                            <a href="index.php?controller=sach&action=edit&masach=<?php echo $sach["masach"] ?>"
                                title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>

                            <a href="index.php?controller=sach&action=delete&masach=<?php echo $sach["masach"] ?>"
                            onclick="return confirm('Bạn muốn xóa sách có mã là <?php echo $sach['masach'] ?> ?')"
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