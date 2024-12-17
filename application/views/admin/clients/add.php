<div class="robust-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-body">
            <?php echo message_box('success'); ?>
            <?php echo message_box('error'); ?>
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-colored-controls"><?php echo $page_title; ?><a
                                        style="float:right;" href="<?php echo base_url('Clients');?>"
                                        class="btn btn-danger">Back </a></h4>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <form id="FormValidation" class="form form-horizontal" method="post"
                                        action="<?php echo base_url();?>clients/save_clients"
                                        enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6">

                                                    <?php
														echo get_input_tag_required('text','Name','name','','');
													
														
                                                      
													?>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Image<span
                                                                class="required">*</span></label>
                                                        <div class="col-md-9">
                                                            <input type="file" name="image"
                                                                class="label-control form-control required" value=""
                                                                id="">
                                                        </div>
                                                    </div>
                                                    <?php
										echo get_input_tag('text','Image Alt Tag','image_alt_tag','','');
                                        echo get_input_tag_required('text','Priority','priority','','');
										
									?>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Show In Home<span
                                                                class="required">*</span></label>
                                                        <div class="col-md-9">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <!-- Hidden input to ensure a default value -->
                                                                    <input type="hidden" name="show_home" value="0">
                                                                    <!-- Checkbox input -->
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="show_home" id="statusActive" value="1">
                                                                    Is Show In Home
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control">Status<span
                                                                class="required">*</span></label>
                                                        <div class="col-md-9">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input required"
                                                                        type="radio" name="status" id="statusActive"
                                                                        value="1">
                                                                    Active
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input required"
                                                                        type="radio" name="status" id="statusInactive"
                                                                        value="0">
                                                                    Inactive
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>


                                        <?php	
											echo get_submit_tag();
											echo get_form_tag_close();
										?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>



<!-- JS Content Start -->
<?php $this->load->view('layout/common_js'); ?>



<!-- JS Content End -->