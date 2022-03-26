<div class="content-box">
    <!-- Start Content Box -->

    <div class="content-box-header">

        <h3>Thêm sách</h3>

        <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

        <div class="tab-content default-tab" id="tab2">

            <form action="index.php?controller=sach&action=addNew" method="post" enctype="multipart/form-data">

                <fieldset>
                    <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

                    <p>
                        <label>Mã sách</label>
                        <input class="text-input small-input" type="text" id="small-input" name="masach" />
                    </p>

                    <p>
                        <label>Tên sách</label>
                        <input class="text-input medium-input datepicker" type="text" id="medium-input"
                            name="tensach" />
                    </p>
                    <p>
                        <label>Giá sách</label>
                        <input class="text-input small-input" type="number" id="small-input"
                            name="giasach" />
                    </p>

                    <p>
                        <label>Loại sách</label>
                        <select name="loaisach" id="">
                            <option value="">choose your choice</option>
                            <?php
                                        foreach($dataLoai as $loai){
                                            ?>
                            <option value="<?php echo $loai["maloai"] ?>"><?php echo $loai["tenloai"] ?></option>
                            <?php
                                        }
                                    ?>
                        </select>
                    </p>

                    <p>
                        <label>Nhà xuất bản</label>
                        <select name="nhaxb" id="">
                            <option value="">choose your choice</option>
                            <?php
                                        foreach($dataNxb as $nxb){
                                            ?>
                            <option value="<?php echo $nxb["manxb"] ?>"><?php echo $nxb["tennxb"] ?></option>
                            <?php
                                        }
                                    ?>
                        </select>
                    </p>
                    <p>
                        <label>Hình ảnh</label>
                        <input type="file" name="hinh">
                    </p>
                    <p>
                        <label>Mô tả sách</label>
                        <textarea class="text-input textarea " id="textarea" name="mota" cols="79"
                            rows="15"></textarea>
                    </p>

                    <p>
                        <input class="button" type="submit" value="Submit" />
                    </p>

                </fieldset>

                <div class="clear"></div><!-- End .clear -->

            </form>

        </div>
    </div> <!-- End .content-box-content -->

</div>