<?php
$id=base64_decode($_GET['id']);
/*$qry_limit = "SELECT
					".$tblprefix."property_manager.first_name,
					".$tblprefix."property_manager.last_name,
					".$tblprefix."property_category.property_category_name,
					".$tblprefix."property_category.pm_id,
					".$tblprefix."property_category.id
					FROM
					".$tblprefix."property_manager
					Inner Join ".$tblprefix."property_category ON ".$tblprefix."property_category.pm_id = ".$tblprefix. "property_manager.id WHERE ".$tblprefix."property_category.id=".$id;*/
$qry_limit = "SELECT * FROM  ".$tblprefix."jobs_review_criteria WHERE id =".$id;
$rs_limit = $db->Execute($qry_limit);
//echo "<pre>";print_r($rs_limit); exit;
//Dropdown for parent 
/*$category_qry = "select * from ".$tblprefix."property_manager ";
$rs_category = $db->Execute($category_qry);*/

// LOAD ALL THE LANGUAGES ADDED BY ADMIN EXCEPT ENGLISH AS IT WILL BE ALL READY HERE 
$language_qry = "SELECT id,Lan_name,Lan_code,flag_name,flag_full_path,Lan_default FROM ".$tblprefix."language WHERE Lan_code<>'ENG'";
$rs_language = $db->Execute($language_qry);
$totallanguages =  $rs_language->RecordCount();
?>

<table width="100%" border="0" cellspacing="0" cellpadding="2" class="txt">
 	<tr>
  		<td id="heading">Update Review Criteria</td>
 	</tr>
	<tr>
		<td>
	<form name="managecontentfrm" action="admin.php?act=manage_jobs_review_criteria" method="post" onsubmit="return validate_content()" enctype="multipart/form-data">
<table cellpadding="1" cellspacing="1" border="0" >				
				<tr>
				<td class="txt2">Review Criteria:</td>
				<td>&nbsp;  </td>
				</tr>
				<tr>
				<td class="txt1">(English)</td>
				<td>
				<?php 
			if(!empty($rs_limit->fields)){ ?> 
				
                                <input class="fields" name="review_criteria_name" id="review_criteria_name" value="<?php echo $rs_limit->fields['criteria']?>" type="text" size="55"  maxlength="30" />*
			<?php	} //else{ ?>
<!--				<input class="fields" name="property_category_name" id="property_category_name" value="<?php echo $_SESSION['property_category_name']; ?>" type="text" size="55"  maxlength="30" />*-->
				
				<?php //} ?>
				</td>
				</tr>
				
				<?php 
				if($totallanguages>0){ 
				$rs_language->MoveFirst();
				while(!$rs_language->EOF){
                // Get the currently selected translated text if exist in language content table 
                $language_id=$rs_language->fields['id'];
				
				
					$language_qry = "SELECT id,
					language_id,
					page_id,
					field_name,
					translation_text,
					translated_text,
					fld_type 
					FROM 
					".$tblprefix."language_contents 
					WHERE   
					language_id=".$language_id." 
					AND page_id='".$id."'  
					AND field_name='cate_title' 
					AND fld_type='cate_type'"
					;

					$rs_lang_text = $db->Execute($language_qry);
					$totallang_flds =  $rs_lang_text->RecordCount();
					if($totallang_flds > 0){
						$value = $rs_lang_text->fields['translated_text'];
					}else{
						$value='';
					}
				
				
			
			$rs_language->MoveNext();
					} // while(!$rs_language->EOF)
                } // END if($totallanguages>0 
?>
</table>				
<table class="txt" cellpadding="1" cellspacing="1" border="0" >
				
				
</table>


<div class="border_div_categories"  align="center">				
		<table cellpadding="1" cellspacing="1" border="0" >
		<tr>
		<td><input style="margin:5px; width:236px; float:none; text-align:center;" name="addsubscribeSbt" id="addsubscribeSbt" type="submit" value="Update Category" class="button" />
		</td>
		</tr>
		</table>
</div>
<tr>
					<td>&nbsp;</td>
					<td>
		<input type="hidden" name="mode" value="update">
		<input type="hidden" name="act" value="update_jobs_review_criteria">
		<input type="hidden" name="act2" value="manage_jobs_review_criteria">
		<input type="hidden" name="request_page" value="jobs_review_criteria_management" />
		<input type="hidden" name="id" value="<?php echo base64_encode($id);?>" />
					</td>
				</tr>
	<?php			
 $_SESSION['criteria']='';
 ?> 				
</form>
		
		</td>
	</tr>
</table>

