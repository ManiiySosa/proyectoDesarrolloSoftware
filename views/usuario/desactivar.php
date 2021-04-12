<h1>Desactivar cuenta</h1>

<?php if(isset($_SESSION['eliminar']) && $_SESSION['eliminar'] == 'complete'): ?>
	<strong class="alert_green">Su cuenta de ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['eliminar']) && $_SESSION['eliminar'] == 'failed'): ?>
	<strong class="alert_red">Su cuenta no se ha borrado correctamente</strong>
<?php endif; ?>


<form action="<?=base_url?>usuario/eliminar" method="POST">
	
	<label for="email">Email</label>
	<input type="email" name="email" required/>
	
	<label for="password">Contraseña</label>
	<input type="password" name="password" required/>
	
	<a href="<?=base_url?>usuario/eliminar" class="button button-gestion button-red">Eliminar cuenta</a> 
</form>