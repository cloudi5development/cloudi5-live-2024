<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/* get current date and time */

if (! function_exists ( 'get_date_time' )) {
	function get_date_time() {
		return date ( "Y-m-d H:i:s" );
	}
}
/* get current date  */
if (! function_exists ( 'get_date' )) {
	function get_date() {
		return date ( "Y-m-d" );
	}
}

/*  function used to get session values */
if (! function_exists ( 'get_session' )) {
	function get_session($sess_name) {
		$CI = & get_instance ();
		return  $CI->session->userdata($sess_name);
	}
}
/*  function used to get Uri values */
if (! function_exists ( 'get_uri' )) {
	function get_uri($value) {
		$CI = & get_instance ();
		return  $CI->uri->segment($value);
	}
}
/*  function used to get Last query  */
if (! function_exists ( 'get_query' )) {
	function get_query() {
		$CI = & get_instance ();
		return  $CI->db->last_query();
	}
}

/*  function used to get Textarea tag */
if (! function_exists ( 'get_textarea_required' )) {
	function get_textarea_required($label="",$name="",$id="",$class="",$value="") {
		return  '<div class="form-group row">
					<label class="col-md-3 label-control">'.$label.'<span class="required">*</span></label>
					<div class="col-md-9">
					  <textarea rows="4" cols="50" type="text" id="'.$id.'" class="form-control '.$class.' required" placeholder="'.$label.'" name="'.$name.'" >'.$value.'</textarea>
					</div>
				</div>';
	}
}
/*  function used to get Textarea tag */
if (! function_exists ( 'get_textarea' )) {
	function get_textarea($label="",$name="",$id="",$class="",$value="") {
		return  '<div class="form-group row">
					<label class="col-md-3 label-control">'.$label.'<span class="required"></span></label>
					<div class="col-md-9">
					  <textarea rows="4" cols="50" type="text" id="'.$id.'" class="form-control '.$class.' " placeholder="'.$label.'" name="'.$name.'" >'.$value.'</textarea>
					</div>
				</div>';
	}
}/*  function used to get input tag */
if (! function_exists ( 'get_input_tag' )) {
	function get_input_tag_required($type="",$label="",$name="",$id="",$class="",$value="",$extra="") {
		return  '<div class="form-group row">
					<label class="col-md-3 label-control">' . $label . '<span class="required" style="color:red;">*</span></label>
					<div class="col-md-9">
					  <input type="'. $type .'" id="'. $id .'" class="form-control required '. $class .'" placeholder="' . $label . '" name="'.$name.'" value="'.$value.'" '.$extra.'>
					</div>
				</div>';
	}
}
/*  function used to get input tag */
if (! function_exists ( 'get_input_tag' )) {
	function get_input_tag($type="",$label="",$name="",$id="",$class="",$value="",$extra="") {
		return  '<div class="form-group row">
					<label class="col-md-3 label-control">' . $label . '<span class="required" style="color:red;"></span></label>
					<div class="col-md-9">
					  <input type="'. $type .'" id="'. $id .'" class="form-control '. $class .'" placeholder="' . $label . '" name="'.$name.'"  value="'.$value.'" '.$extra.'>
					</div>
				</div>';
	}
}
/*  function used to get Check box tag */
if (! function_exists ( 'get_checkbox_tag' )) {
	function get_checkbox_tag($label="",$name="",$id="",$class="",$value="",$checked="") {
		return  '<div class="form-group row">
					<label class="col-md-3 label-control">' . $label . '<span class="required" style="color:red;"></span></label>
					<div class="col-md-9">
					  <input type="checkbox" id="'. $id .'" class=" '. $class .'"  name="'.$name.'" value="'.$value.'"  '.$checked.'>
					</div>
				</div>';
	}
}
/*  function used to get Select tag */
if ( ! function_exists('get_dropdown'))
{
	function get_dropdown_required($label="",$data = '',$id="",$class="", $options = array(), $selected = array(), $extra = '')
	{
		$defaults = array();

		if (is_array($data))
		{
			if (isset($data['selected']))
			{
				$selected = $data['selected'];
				unset($data['selected']); // select tags don't have a selected attribute
			}

			if (isset($data['options']))
			{
				$options = $data['options'];
				unset($data['options']); // select tags don't use an options attribute
			}
		}
		else
		{
			$defaults = array('name' => $data);
		}

		is_array($selected) OR $selected = array($selected);
		is_array($options) OR $options = array($options);

		// If no selected state was submitted we will attempt to set it automatically
		if (empty($selected))
		{
			if (is_array($data))
			{
				if (isset($data['name'], $_POST[$data['name']]))
				{
					$selected = array($_POST[$data['name']]);
				}
			}
			elseif (isset($_POST[$data]))
			{
				$selected = array($_POST[$data]);
			}
		}

		$extra = _attributes_to_string($extra);

		$multiple = (count($selected) > 1 && stripos($extra, 'multiple') === FALSE) ? ' multiple="multiple"' : '';

		$form = '<div class="form-group row">
					<label class="col-md-3 label-control">'.$label.'<span class="required">*</span></label>
						<div class="col-md-9">
							<select id="'.$id.'" class="form-control required '.$class.'" '.rtrim(_parse_form_attributes($data, $defaults)).">\n<option value=''>Select ".$label."</option>\n";

		foreach ($options as $key => $val)
		{
			$key = (string) $key;

			if (is_array($val))
			{
				if (empty($val))
				{
					continue;
				}

				//$form .= '<optgroup label="'.$key."\">\n";

				foreach ($val as $optgroup_key => $optgroup_val)
				{
					$sel = in_array($optgroup_key, $selected) ? ' selected="selected"' : '';
					$form .= '<option value="'.html_escape($optgroup_key).'"'.$sel.'>'
						.(string) $optgroup_val."</option>\n";
				}

				//$form .= "</optgroup>\n";
			}
			else
			{
				$form .= '<option value="'.html_escape($key).'"'
					.(in_array($key, $selected) ? ' selected="selected"' : '').'>'
					.(string) $val."</option>\n";
			}
		}

		return $form."</select></div></div>\n";
	}
}
/*  function used to get Select tag */
if ( ! function_exists('get_dropdown_search'))
{
	function get_dropdown_search($label="",$data = '',$id="",$class="", $options = array(), $selected = array(), $extra = '')
	{
		$defaults = array();

		if (is_array($data))
		{
			if (isset($data['selected']))
			{
				$selected = $data['selected'];
				unset($data['selected']); // select tags don't have a selected attribute
			}

			if (isset($data['options']))
			{
				$options = $data['options'];
				unset($data['options']); // select tags don't use an options attribute
			}
		}
		else
		{
			$defaults = array('name' => $data);
		}

		is_array($selected) OR $selected = array($selected);
		is_array($options) OR $options = array($options);

		// If no selected state was submitted we will attempt to set it automatically
		if (empty($selected))
		{
			if (is_array($data))
			{
				if (isset($data['name'], $_POST[$data['name']]))
				{
					$selected = array($_POST[$data['name']]);
				}
			}
			elseif (isset($_POST[$data]))
			{
				$selected = array($_POST[$data]);
			}
		}

		$extra = _attributes_to_string($extra);

		$multiple = (count($selected) > 1 && stripos($extra, 'multiple') === FALSE) ? ' multiple="multiple"' : '';

		$form = '<div class="form-group row">
					<label class="col-md-3 label-control">'.$label.'<span class="required">*</span></label>
						<div class="col-md-9">
							<select data-live-search="true" id="'.$id.'" class="form-control selectpicker  required '.$class.'" '.rtrim(_parse_form_attributes($data, $defaults)).">\n<option value=''>Select ".$label."</option>\n";

		foreach ($options as $key => $val)
		{
			$key = (string) $key;

			if (is_array($val))
			{
				if (empty($val))
				{
					continue;
				}

				//$form .= '<optgroup label="'.$key."\">\n";

				foreach ($val as $optgroup_key => $optgroup_val)
				{
					$sel = in_array($optgroup_key, $selected) ? ' selected="selected"' : '';
					$form .= '<option value="'.html_escape($optgroup_key).'"'.$sel.'>'
						.(string) $optgroup_val."</option>\n";
				}

				//$form .= "</optgroup>\n";
			}
			else
			{
				$form .= '<option value="'.html_escape($key).'"'
					.(in_array($key, $selected) ? ' selected="selected"' : '').'>'
					.(string) $val."</option>\n";
			}
		}

		return $form."</select></div></div>\n";
	}
}

/*  function used to get Form tag */
if (! function_exists ( 'get_form_tag' )) {
	function get_form_tag($action="") {
		
		return  '<form class="form form-horizontal" id="FormValidation" method="post" action="'.$action.'" enctype="multipart/form-data">';
	}
}
/*  function used to get Form Close tag */
if (! function_exists ( 'get_form_tag_close' )) {
	function get_form_tag_close() {
		
		return  '</form>';
	}
}
/*  function used to get Submit tag */
if (! function_exists ( 'get_submit_tag' )) {
	function get_submit_tag($id="",$class="") {
		
		return  '<div class="form-actions center">
	                <button type="submit" id="'.$id.'" class="submit btn btn-success '.$class.' ">Submit</button>
				</div>';
	}
}
/*  function used to get Data Table Tag */

if ( ! function_exists('get_data_table'))
{
	function get_data_table($id="",$options = array())
	{
		is_array($options) OR $options = array($options);
		
		$form = '<table id="'.$id.'" class="display table  table-bordered " cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>S.No</th>';

		if(!empty($options))
		{
			foreach ($options as $key => $val)
			{
				if(!empty($val))
				{
					$form .= "<th>".$val."</th>\n";
				}
				else
				{
					$form .= "<th></th>\n";
				}
			}
		}
		return $form."</tr></thead><tbody></tbody></table>\n";
	}
}
/*  function used to get popup tag */
if (! function_exists ( 'get_popup_tag' )) {
	function get_popup_tag($popup_id="",$content_id="",$action="") {
		
		return  '<div class="modal fade" id="'.$popup_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<form class="form-horizontal striped-labels" id="FormValidation" novalidate method="post" action="'.$action.'">
								<div class="modal-body">
									<div class="modal-loader" style="display: none; text-align: center;">
										<img src="'.base_url('assets/images/loader.gif').'">
									</div>
									<!-- Dynamic content will be load here -->                          
									<div id="'.$content_id.'"></div>
								</div>
								</form>
							</div>
						</div>';
	}
}
if (! function_exists ( 'get_popup_add' )) {
	function get_popup_add($popup_id="",$content_id="",$action="") {
		
		return  '<div class="modal fade" id="'.$popup_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<form class="form-horizontal striped-labels" id="AddPopupFormValidation" novalidate method="post" action="'.$action.'">
								<div class="modal-body">
									<div class="modal-loader" style="display: none; text-align: center;">
										<img src="'.base_url('assets/images/loader.gif').'">
									</div>
									<!-- Dynamic content will be load here -->                          
									<div id="'.$content_id.'"></div>
								</div>
								</form>
							</div>
						</div>';
	}
}if (! function_exists ( 'get_popup_edit' )) {
	function get_popup_edit($popup_id="",$content_id="",$action="") {
		
		return  '<div class="modal fade" id="'.$popup_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<form class="form-horizontal striped-labels" id="EditPopupFormValidation" novalidate method="post" action="'.$action.'">
								<div class="modal-body">
									<div class="modal-loader" style="display: none; text-align: center;">
										<img src="'.base_url('assets/images/loader.gif').'">
									</div>
									<!-- Dynamic content will be load here -->                          
									<div id="'.$content_id.'"></div>
								</div>
								</form>
							</div>
						</div>';
	}
}
/*  function used to get  tag */
if (! function_exists ( 'get_form_tag' )) {
	function get_form_tag($action="") {
		
		return  '<form class="form form-horizontal" id="FormValidation" method="post" action="'.$action.'" enctype="multipart/form-data">';
	}
}
/*  function used to get Form Close tag */

