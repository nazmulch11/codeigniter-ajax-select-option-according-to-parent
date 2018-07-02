
    <div class="form-group">
        <label class="col-md-3 control-label">Vendor</label>
        <div class="col-md-9">
            <select class="form-control select2" name="vendor_id" id="vendor_id" required>
                <option value="" >Choose Vendor</option>
                <?php foreach ($all_vendors as $vendor) { ?>
                    <option value="<?php echo $vendor['vendor_id']; ?>" >
                        <?php echo $vendor['vendor_name']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Brand</label>
        <div class="col-md-9">
            <select class="form-control select2" name="brand_id" id="brand_id">
                <option>-- Select Brand --</option>
            </select>
        </div>
    </div>



     <script>
         $(document).ready(function () {
             $(document).on("change","#vendor_id",function () {
                 vendor_id = $("#vendor_id").val();
                 //console.log(vendor_id);
                 $.ajax({
                     url: '<?php echo base_url(); ?>controller/vendor_ajax_brand',
                     method: 'post',
                     data: {
                         vendor_id: vendor_id
                     },
                     success: function (response) {

                         //console.log(response);

                         abcd = jQuery.parseJSON(response);

                         // Remove options
                         $("#brand_id").find('option').not(':first').remove();
                         //console.log(abcd);

                         $.each(abcd, function (key,data) {
                             //console.log(data['brand_name']);
                             $("#brand_id").append('<option value="' + data['brand_id'] + '">' + data['brand_name'] + '</option>');
                         });
                     }
                 });
             //    end ajax
             });
         });
     </script>
