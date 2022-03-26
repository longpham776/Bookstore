
    <div class="content-box-header">

<h3>Thêm nhà xuất bản</h3>

<div class="clear"></div>

</div> <!-- End .content-box-header -->
<div class="content-box-content">

    <div class="tab-content default-tab" id="tab2">

        <form action="index.php?controller=nxb&action=insert" method="post" enctype="multipart/form-data">

            <fieldset>
                <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

                <p>
                    <label>Mã Nhà xuất bản</label>
                    <input class="text-input small-input" type="text" id="small-input" name="manhaxb" />
                </p>

                <p>
                    <label>Tên nhà xuất bản</label>
                    <input class="text-input medium-input datepicker" type="text" id="medium-input"
                        name="tennhaxb" />
                </p>

                <p>
                    <input class="button" type="submit" value="Thêm" />
                </p>

            </fieldset>

            <div class="clear"></div><!-- End .clear -->

        </form>

    </div>
</div>