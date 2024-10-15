	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" ></script>
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/admin.js"></script>
	<script src="<?php echo base_url();?>assets/js/vendors.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script> 
	<script src="<?php echo base_url();?>assets/js/app.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/datepicker/bootstrap-datepicker.js" ></script>
	<script src="<?php echo base_url() ?>assets/js/datepicker/timepicker.js" ></script>
	<script src="<?php echo base_url() ?>assets/js/jquery-confirm.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
	<script src="<?php echo base_url();?>assets/js/form-validation.js"></script>
	<script src="<?php echo base_url();?>assets/js/popover/popover.js"></script>	
	<script src="<?php echo base_url() ?>assets/js/bootstrap-multiselect.js" ></script>
	<!-- Bootstrup Select With Search-->
	<script src="<?php echo base_url();?>assets/js/bootstrap-select.min.js"></script>
	<script>
	/* $(function() {
	   $(".fileUpload").bind("change", function() {
			var errorCode = $(this).attr('errorCode');
			var fileUpload = $(".image")[0];
			var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.jpeg)$");
			if (regex.test(fileUpload.value.toLowerCase())) {
				if (typeof(fileUpload.files) != "undefined") {
					var reader = new FileReader();
					reader.readAsDataURL(fileUpload.files[0]);
					reader.onload = function(e) {
						var image = new Image();
						image.src = e.target.result;
						image.onload = function() {
							var height = this.height;
							var width = this.width;
							var size = parseFloat($(".image")[0].files[0].size / 1024).toFixed(2);
							if(size <= 10240 )
							{							
								$('#'+errorCode).html('');
								$(".submit").removeAttr('disabled');
								 return true;
							}
							else
							{
								$('#'+errorCode).html('Please upload File size less than 2 Mb');
								$(".submit").attr('disabled','disabled');
								return false;
							}	
						};
					}
				} else {
					alert("This browser does not support HTML5.");
					return false;
				}
			} else {
				$('#'+errorCode).html('Please upload Jpg or Png only.');
				$(".submit").attr('disabled','disabled');
				return false;
			}
		});
	}); */

	$(document).ready(function(){
        $( document ).on( 'focus', ':input', function(){
            $( this ).attr( 'autocomplete', 'off' );
        });
    });
	$('.timepicker').timepicker();
	$('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
        $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
    } );
	 <!-- Selectpicker With Search -->
    $(function() {
    	$('.selectpicker').selectpicker();
    });
	</script>