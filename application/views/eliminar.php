<?php
require('navigation.php');
echo form_open('eliminar/elimina');

?>
<h1>Elija los usuarios a eliminar:</h1>
<h2><?php if(isset($mensaje)) echo $mensaje;?></h2>
<?php 
	foreach ($query as $key => $value) {
		echo form_checkbox('del[]',$value['id']);
		echo "$value[nombre] $value[apellido]<br>";
	} 
echo "<br>";
echo form_submit( 'submit', 'Submit');
echo form_close(); 
?>
</div>
</body>