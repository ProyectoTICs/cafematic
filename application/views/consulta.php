<?php
require('navigation.php');
echo form_open('consulta/presentes');

?>
<h1>Elija los usuarios presentes:</h1>
<h2><?php if(isset($mensaje)) echo $mensaje;?></h2>
<?php 
	foreach ($query as $key => $value) {
		echo form_checkbox('pres[]',$value['id']);
		echo "$value[nombre] $value[apellido]<br>";
	} 
echo "<br>"; ?>
<label for="precio">Precio del café: </label>
<input id="precio" type="text" name="precio" value=
"<?php echo set_value('precio'); ?>"  />
<br>
<?php
echo form_submit( 'submit', 'Submit');
echo form_close(); 
?>
</div>
</body>