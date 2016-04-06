<?php
	function input($id)
	{
		$value = isset($_POST[$id]) ? $_POST[$id] : '';
		return "<input type='text' class='form-control' name='$id' id='$id' value='$value'/>";
	}
	
	function textarea($id)
	{
		$value = isset($_POST[$id]) ? $_POST[$id] : '';
		return "<textarea class='ckeditor form-control' name='$id' id='$id' >$value</textarea>";
	}
	
	function select($id, $options = array())
	{
		$return = "<select class='form-control' name='$id' id='$id'>";
		foreach($options as $key => $value)
		{
			$selected = "";
			if(isset($_POST['id']) && $id == $_POST['id']) $selected = "selected='selected'";
			$return .= "<option value='$key' $selected>$value</option>";
		}
		$return .= "</select>";
		return $return;
	}