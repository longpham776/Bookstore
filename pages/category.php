<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Danh sách Books</h1>
            <p>
                
            </p>
        </div>
    </div>
    <div class="content-box-header">
    
        <h3>Có <?php echo $n ?> kết quả</h3>
        
        <div class="clear"></div>
        
    </div> <!-- End .category-header -->

<div class="category-box-category">
    
    <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
        
        <table class="table table-striped table-hover">
            
            <thead>
                <tr>
                    <th><input class="check-all" name="DH51800895_check-all" type="checkbox" />
                    <th>Mã sách &ensp;&ensp;</th>
                    <th>Tên sách &ensp;&ensp;</th>
                    <th>Giá &ensp;&ensp;</th>
                    <th>Hình &ensp;&ensp;</th>
                    <th>Số lượng &ensp;&ensp;</th>
                    <th>Thêm giỏ hàng</th></th>
                </tr>
                
            </thead>
            
            <tbody>
                <?php 
                foreach($data as $book)
                {
                    ?>
                     <tr>
                     <form action="cart.php" method="post">
                        <td><input type="checkbox" name="DH51800895_cb" /></td>
                        <td><input type="hidden" name="DH51800895_masach" value="<?php echo $book->masach ?>"/><?php echo $book->masach ?>&ensp;&ensp;</td>
                        <td><input type="hidden" name="DH51800895_tensach" value="<?php echo $book->tensach ?>"/><?php echo $book->tensach ?>&ensp;&ensp;</td>
                        <td><input type="hidden" name="DH51800895_gia" value="<?php echo $book->gia ?>"/><?php echo $book->gia ?>&ensp;&ensp;</td>
                        <td><input type="hidden" name="DH51800895_hinh" value="<?php echo $book->hinh ?>"/><img src='./img/product/<?php echo $book->hinh ?>'>&ensp;&ensp; </td>
                        <td><input type="number" name="DH51800895_soluong" min="1" max="10" value="1"></td>
                        <td>
                            <input type="submit" name="DH51800895_addcart" value="Đặt hàng">
                            <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                            </div>
                        </td>
                    </form>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
            
        </table>
        
    </div> <!-- End #tab1 -->
    
</div> <!-- End .content-box-content -->
    
</section>