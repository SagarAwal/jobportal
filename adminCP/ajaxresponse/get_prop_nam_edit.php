<?php
include('root.php');
include($root.'include/file_include.php');

if(isset($_GET['id'])){
$id=$_GET['id'];
$property_name=$_GET['property_id'];
	    $qry_content = "SELECT * FROM  ".$tblprefix."properties WHERE pm_id=".$id." 
						AND pm_type=1 
						AND ".$tblprefix."properties.property_category=24";
		$rs_content = $db->Execute($qry_content);
		$count_add =  $rs_content->RecordCount();
		?>
		
<select name="property_id" class="fields" id="property_id" onchange="get_room_type1('room_id', this.value, '<?php echo MYSURL."ajaxresponse/get_room_type1.php"?>')">
<?php
if($count_add<=0){?>
<option value="0">Izaberite objekat</option>
<?php
}else{?>
<option value="0">Izaberite objekat</option>	

<?php 
	     $rs_content->MoveFirst();
		 while(!$rs_content->EOF){
?>
<option value="<?php echo $rs_content->fields['id'];?>" <?php echo $is_cat_selected; ?>><?php echo $rs_content->fields['property_name'] ;?></option>
	<?php $rs_content->MoveNext();
	}
	}
    }
?>
</select>