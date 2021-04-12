<h1>Desactivar cuenta</h1>

<?php if(isset($_SESSION['eliminar']) && $_SESSION['eliminar'] == 'complete'): ?>
	<strong class="alert_green">Su cuenta de ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['eliminar']) && $_SESSION['eliminar'] == 'failed'): ?>
	<strong class="alert_red">Su cuenta no se ha borrado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('eliminar'); ?>

<?php if(isset($_SESSION['identity'])): ?>
		<table>	
			<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			</tr>

				<tr>
					<td><?=$_SESSION['identity']->id?></td>
					<td><?=$_SESSION['identity']->nombre?></td>
					<td><?=$_SESSION['identity']->email?></td>
					
					<td>
					<a href="<?=base_url?>usuario/eliminar&id=<?=$_SESSION['identity']->id?>" class="button button-gestion button-red">Eliminar</a>
					</td>
			    </tr>	
<?php endif; ?>
		</table>