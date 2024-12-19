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
						<h4 class="card-title" id="horz-layout-colored-controls"><?php echo $page_title; ?><a style="float:right;" href="<?php echo base_url('pages');?>" class="btn btn-danger">Back </a></h4>
					</div>
					<div class="card-body collapse in">
					   <div class="card-block">
							<form id="FormValidation" class="form form-horizontal" method="post" action="<?php echo base_url() . 'pages/update_pages/' . $pages->id;?>." enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-6">
									<div class="form-group row">
    <label class="col-md-3 label-control">Title<span class="required"> *</span></label>
    <div class="col-md-9">
        <select name="title" class="form-control required selectpicker" data-live-search="true" title="Title">
            <option value="Terms and Conditions" <?php if($pages->title == 'Terms and Conditions'){ echo 'selected'; } ?> 
                <?php if($pages->title != 'Terms and Conditions'){ echo 'disabled'; } ?>>Terms and Conditions</option>
            <option value="Privacy Policy" <?php if($pages->title == 'Privacy Policy'){ echo 'selected'; } ?> 
                <?php if($pages->title != 'Privacy Policy'){ echo 'disabled'; } ?>>Privacy Policy</option>
            <option value="Cancellation Policy" <?php if($pages->title == 'Cancellation Policy'){ echo 'selected'; } ?> 
                <?php if($pages->title != 'Cancellation Policy'){ echo 'disabled'; } ?>>Cancellation Policy</option>
            <option value="Refund Policy" <?php if($pages->title == 'Refund Policy'){ echo 'selected'; } ?> 
                <?php if($pages->title != 'Refund Policy'){ echo 'disabled'; } ?>>Refund Policy</option>
        </select>
    </div>
</div>


											<?php
											echo get_input_tag_required('text','Priority','priority','','',$pages->priority);
											
										?>
										<div class="form-group row">
                                                    <label class="col-md-3 label-control">Show In Footer<span
                                                            class="required">*</span></label>
                                                    <div class="col-md-9">
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-check-label">

                                                                <input type="hidden" name="show_in_footer" value="0">

                                                                <input class="form-check-input" type="checkbox"
                                                                    name="show_in_footer" id="statusActive" value="1"
                                                                    <?php echo ($pages->show_in_footer == 1) ? 'checked' : ''; ?>>
																	Show In Footer
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
                                                                        type="radio" name="is_active" id="statusActive"
                                                                       value="1"
                                                                        <?php echo ($pages->is_active == 1) ? 'checked' : ''; ?>>
                                                                    Active
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input required"
                                                                        type="radio" name="is_active" id="statusInactive"
                                                                        value="0"  <?php echo ($pages->is_active == 0) ? 'checked' : ''; ?>>
                                                                    Inactive
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
									</div>
                                        <div class="col-md-6">


					
									
										<div class="form-group row">
											<label class="col-md-3 label-control">Meta Title<span class="required"></span></label>
											<div class="col-md-9">
												<textarea class="form-control" placeholder="Meta Keyword" name="meta_title"><?php echo $pages->meta_title; ?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Meta Description<span class="required"></span></label>
											<div class="col-md-9">
												<textarea class="form-control" placeholder="Meta Description" name="meta_description"><?php echo $pages->meta_desc; ?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 label-control">Meta Keyword<span class="required"></span></label>
											<div class="col-md-9">
												<textarea class="form-control" placeholder="Meta Keyword" name="meta_keyword"><?php echo $pages->meta_keyword; ?></textarea>
											</div>
										</div>
										
									
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group row">
										
										<div class="col-md-9" style="margin-left:100px;">
										  <textarea class="form-control required" id="description" placeholder="Content" name="content"><?php echo $pages->content; ?></textarea>
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
</script><script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/super-build/ckeditor.js"></script>

<script>

 $(document).ready(function() {
        CKEDITOR.ClassicEditor.create(document.getElementById("description"), {
            toolbar: {
                items: [
                    'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo', 'fontColor', 'fontBackgroundColor', '|',
                    'alignment', '|',
                    'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'htmlEmbed', '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|'
                ],
                shouldNotGroupWhenFull: true
            },
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            placeholder: 'Enter Description',
            htmlSupport: {
                allow: [{
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }]
            },
            htmlEmbed: {
                showPreviews: true
            },
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            mention: {
                feeds: [{
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy',
                        '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake',
                        '@gingerbread', '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum',
                        '@pudding', '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
            },
            removePlugins: [
                'CKBox',
                'CKFinder',
                'EasyImage',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                'MathType'
            ]
        });
    });
</script>
<!-- JS Content End -->