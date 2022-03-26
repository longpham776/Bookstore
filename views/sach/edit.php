<div class="content-box">
    <!-- Start Content Box -->

    <div class="content-box-header">

        <h3>Sửa sách</h3>

        <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

        <div class="tab-content default-tab" id="tab2">

            <form action="index.php?controller=sach&action=update" method="post" enctype="multipart/form-data">

                <fieldset>
                    <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

                    <p>
                        <label>Mã sách</label>
                        <input class="text-input small-input" type="text" id="small-input" name="masach"
                            value="<?php echo $dataSachById[0]["masach"] ?>" readonly/>
                    </p>

                    <p>
                        <label>Tên sách</label>
                        <input class="text-input medium-input datepicker" type="text" id="medium-input"
                            name="tensach" value="<?php echo $dataSachById[0]["tensach"] ?>" />
                    </p>
                    <p>
                        <label>Giá sách</label>
                        <input class="text-input small-input" type="text" id="small-input" name="giasach"
                            value="<?php echo $dataSachById[0]["gia"] ?>" />
                    </p>

                    <p>
                        <label>Loại sách</label>
                        <select name="loaisach" id="">
                            <?php
                                        foreach($dataLoai as $loai){
                                            $isSelected= "";
                                            if($loai["maloai"] == $dataSachById[0]["maloai"]){
                                                $isSelected="selected";
                                            }
                                            ?>
                            <option value="<?php echo $loai["maloai"] ?>" <?php echo $isSelected ?>>
                                <?php echo $loai["tenloai"] ?></option>
                            <?php
                                        }
                                    ?>
                        </select>
                    </p>

                    <p>
                        <label>Nhà xuất bản</label>
                        <select name="nhaxb" id="">
                            <?php
                                        foreach($dataNxb as $nxb){
                                            $isSelected= "";
                                            if($nxb["manxb"] == $dataSachById[0]["manxb"]){
                                                $isSelected="selected";
                                            }
                                            ?>
                            <option value="<?php echo $nxb["manxb"] ?>" <?php echo $isSelected ?>>
                                <?php echo $nxb["tennxb"] ?></option>
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
                            rows="15"><?php echo $dataSachById[0]["mota"] ?></textarea>
                    </p>

                    <p>
                        <input class="button" type="submit" value="Submit" />
                    </p>

                </fieldset>

                <div class="clear"></div><!-- End .clear -->

            </form>

        </div>
    </div> <!-- End .content-box-content -->

</div><!-- End .content-box -->
<div class="clear"></div>