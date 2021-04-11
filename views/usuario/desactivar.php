<h1>Desactivar cuenta</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
	<strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
	<strong class="alert_red">Registro fallido, introduce bien los datos</strong>
<?php endif; ?>


<form action="<?=base_url?>usuario/eliminar" method="POST">
	
	<label for="email">Email</label>
	<input type="email" name="email" required/>
	
	<label for="password">Contraseña</label>
	<input type="password" name="password" required/>
	
	<input type="submit" value="Desactivar cuenta" />
</form>