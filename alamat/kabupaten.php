<option value="">Pilih Kabupaten</option>
<?php 
	foreach ($hasil as $row) {
?>
	<option value="<?php echo $row->city_id ; ?>"><?php echo $row->city_name ; ?></option>
<?php } ?>