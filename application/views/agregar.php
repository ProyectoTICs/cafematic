<?php

require('navigation.php');
echo form_open('agregar/agrega');
?>
<p>
        <label for="nombre">Nombre <span class="required">*</span></label>
        <?php echo form_error('nombre'); ?>
        <br /><input id="nombre" type="text" name="nombre" maxlength="255" value=
        "<?php echo set_value('nombre'); ?>"  />
</p>

<p>
        <label for="apellido">Apellido <span class="required">*</span></label>
        <?php echo form_error('apellido'); ?>
        <br /><input id="apellido" type="text" name="apellido" maxlength="255" value=
        "<?php echo set_value('apellido'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
</div>
</body>