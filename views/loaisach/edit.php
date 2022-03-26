<div class="content-box">
    <!-- Start Content Box -->

    <div class="content-box-header">

        <h3>Sửa loại sách</h3>

        <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

        <div class="tab-content default-tab" id="tab2">

            <form action="index.php?controller=loaisach&action=update&maloai=<?php echo $loaiById[0]["maloai"] ?>"
                method="post" enctype="multipart/form-data">

                <fieldset>
                    <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

                    <p>
                        <label>Tên loại</label>
                        <input class="text-input medium-input datepicker" type="text" id="medium-input"
                            name="tenloai" value="<?php echo $loaiById[0]["tenloai"] ?>" />
                    </p>

                    <p>
                        <input class="button" type="submit" value="Lưu" />
                    </p>

                </fieldset>

                <div class="clear"></div><!-- End .clear -->

            </form>

        </div>
    </div> <!-- End .content-box-content -->

</div>