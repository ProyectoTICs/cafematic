<?php

require('navigation.php');
$this->load->helper('date');
?>
<h2><?php if(isset($mensaje)) echo $mensaje;?></h2>
<table>
	<tr>
		<th>
			Trabajador
		</th>
		<th>
			Dinero gastado
		</th>
		<th>
			Dinero adeudado
		</th>
		<th>
			Cafes comprados
		</th>
		<th>
			Cafes tomados
		</th>
		<th>
			Ultima compra
		</th>
	</tr>
	<?php 
		foreach ($query as $key => $value) {
			if($value['fecha'] == NULL) $aux = "-";
			else $aux = unix_to_human(mysql_to_unix($value['fecha']));
			echo "<tr>
					<th>
						$value[nombre] $value[apellido]
					</th>
					<th>
						$value[comprados]
					</th>
					<th>
						$value[tomados]
					</th>
					<th>
						$value[cant_comprados]
					</th>
					<th>
						$value[cant_tomados]
					</th>
					<th>
						$aux
					</th>
				</tr>";
		} 
	?>
</table>
</div>
</body>