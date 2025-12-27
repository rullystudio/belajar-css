<option value="">Pilih Kecamatan</option>
<?php 
	foreach ($hasil as $row) {
?>
	<option value="<?php echo $row->subdistrict_id ; ?>"><?php echo $row->subdistrict_name ; ?></option>
<?php } ?>