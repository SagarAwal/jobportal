<?php
if(isset($_GET['pageid'])){
$gdt_flag = $_GET['dgt_flag'];

$page = base64_decode($_GET['pageid']); 


		$qry_content = "SELECT * FROM  ".$tblprefix."price_per_night WHERE id = '".$page."'"; 
		$rs_content = $db->Execute($qry_content);
$mode='update';
}else{
$page='send';
$mode='send';
}

// LOAD ALL THE LANGUAGES ADDED BY ADMIN EXCEPT ENGLISH AS IT WILL BE AL READY HERE 
$language_qry = "SELECT id,Lan_name,Lan_code,flag_name,flag_full_path,Lan_default FROM ".$tblprefix."language WHERE Lan_code<>'ENG'";
$rs_language = $db->Execute($language_qry);
$totallanguages =  $rs_language->RecordCount();


?>
<table width="100%" border="0" cellspacing="0" cellpadding="2" class="txt">
 	<tr>
  		<td id="heading">Price Per Night Management Section</td>
 	</tr>
 
	<tr>
  		<td><h3><?php if(empty($rs_content->fields['price_per_night']))
						echo 'Add New ';
						//echo stripslashes($rs_content->fields['event_name']);?> <!--Page</h3>--></td>
	</tr>
	<tr>
	<td>
	<form name="managecontentfrm" action="admin.php" method="post" onsubmit="return validate_contant()" enctype="multipart/form-data">
			<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" class="txt">
			 	<tr>
				<td colspan="2" align="center" <?php if(!empty($_GET['okmsg'])){ echo 'class="okmsg"'; }else{ echo 'class="errmsg"';} ?> ><?php if(!empty($_GET['errmsg'])){ echo base64_decode($_GET['errmsg']).base64_decode($_GET['okmsg']);}?></td>
				</tr>
				               
                <tr>
                    <td>
                    Price Per Night Rating:			
                    </td>
				    <td>
<input style="width:250px;" name="price_per_night" id="price_per_night" class="fields" type="text" value="<?php echo stripslashes($rs_content->fields['price_per_night']);?>" />					
                  	</td>
				</tr>
                <tr>
                    <td>
                    Sort Order:			
                    </td>
				    <td>
					<input style="width:250px;" name="sort_order" id="sort_order" class="fields" type="text" value="<?php echo stripslashes($rs_content->fields['sort_order']);?>" />					
                  	</td>
				</tr>
                
                <?php 
				if($totallanguages>0){ 
				$rs_language->MoveFirst();
				while(!$rs_language->EOF){
                // Get the currently selected translated text if exist in language content table 
                $language_id=$rs_language->fields['id'];
				
				if($mode == "update"){
					
					$id = $page; 
					
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
					AND field_name='gdt_title' 
					AND fld_type='gdt_type'"
					; 

					$rs_lang_text = $db->Execute($language_qry);
					$totallang_flds =  $rs_lang_text->RecordCount();
					if($totallang_flds > 0){
						$value = $rs_lang_text->fields['translated_text'];
					}else{
						$value='';
					}
				}else{
					$value='';
				}
	
			$rs_language->MoveNext();
					} // while(!$rs_language->EOF)
                } // END if($totallanguages>0 
?>
				
				
			  
				<tr>
					
					<td>&nbsp;</td>
				<td>
						
<?php           if($totallanguages>0){ 
				$rs_language->MoveFirst();
				while(!$rs_language->EOF){
 // Get the currently selected translated text if exist in language content table 
                $language_id=$rs_language->fields['id'];
				$id=$rs_content->fields['id'];    
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
				AND page_id=".$id." 
				AND field_name='gdt_description' 
				AND fld_type='gdtdescription_type'"
				;
			$rs_lang_text = $db->Execute($language_qry);
			$totallang_flds =  $rs_language->RecordCount();
			if($totallang_flds>0){
		    $value=$rs_lang_text->fields['translated_text'];
			}else{
			$value='';
			}
			/*echo '<tr>
			<td class="txt1">('.$rs_language->fields['Lan_name'].') </td>
			<td>
			<textarea id="gdt_description_'.$rs_language->fields['id'].'" name="gdt_description_'.$rs_language->fields['id'].'" rows="25" cols="90">'.stripslashes($value).'</textarea>
			</td>
			</tr>';*/
			$rs_language->MoveNext();
					} // END  while(!$rs_language->EOF)
                } // END if($totallanguages>0 	
				
?>					</td>
				</tr>
                
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" class="button" name="contentSbt" id="contentSbt" value="<?php if($page=='send'){echo 'Insert Price Per Night';}else {echo 'Price Per Night Events'; }?> " />						
						<input type="hidden" name="act" value="price_per_night">
						<input type="hidden" name="act2" value="edit_price">
				        <input type="hidden" name="request_page" value="price_per_night" />	
						<input type="hidden" name="page_id" value="<?php echo $page; ?>">	
						<input type="hidden" name="mode" value="<?php echo $mode; ?>">
                        <input type="hidden" name="gdt_flag" value="<?php echo $gdt_flag; ?>">					
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table>
	</form>
		</td>
	</tr>
</table>


