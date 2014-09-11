<?php

require('navigation.php');
?>

<div>
	<h1> Total de trabajadores registrados: <? echo count($query);?></h1>
	<?php if(count($query)){
	echo "<h2> Los trabajadores son: </h2>";	
	}
	?>
	<ul>
	<?php 
		foreach ($query as $key => $value) {
			echo "<li>$value[nombre] $value[apellido]</li>";
		} 
	?>
	</ul>
</div>
</div>
</body>