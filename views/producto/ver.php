<?php if (isset($product)): ?>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		<link rel="stylesheet" href="../assets/css/styles2.css">
	</head>
	<body>
		
	<h1><?= $product->nombre ?></h1>
	<?php $url_action = base_url.'comentario/save&id='.$product->id; ?>
	<div id="detail-product">
		<div class="image">
			<?php if ($product->imagen != null): ?>
				<img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
			<?php else: ?>
				<img src="<?= base_url ?>assets/img/camiseta.png" />
			<?php endif; ?>
		</div>
		<div class="data">
			<p class="description"><?= $product->descripcion ?></p>
			<p class="price"><?= $product->precio ?>$</p>
			<a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button">Comprar</a>

			<form action="<?=base_url?>comentario/save" method="POST">
				
				
				<input type="hidden" name="id" value=<?= $product->id?> />				
				<input type="hidden" name="nombre_usuario" value=<?=$_SESSION['identity']->nombre ?> />
				<h3>Regalanos un comentario y una calificacion</h3>
				<div class="valoracion">
			
					<!-- Estrella 1 -->
					<button type="sumbit" value = "5"  name="calificacion">
						<i class="fas fa-star" value = "1"></i>
					</button>
			
					<!-- Estrella 2 -->
					<button type="sumbit" value = "4"  name="calificacion">
						<i class="fas fa-star" value = "2"></i>
					</button>
			
					<!-- Estrella 3 -->
					<button type="sumbit" value = "3"  name="calificacion">
						<i class="fas fa-star" value = "3"></i>
					</button>
			
					<!-- Estrella 4 -->
					<button type="sumbit" value = "2"  name="calificacion">
						<i class="fas fa-star" value = "4"></i>
					</button>
			
					<!-- Estrella 5 -->
					<button type="sumbit" value = "1"  name="calificacion">
						<i class="fas fa-star" value = "5"></i>
					</button>					
				</div>

				<label for="comentario">Escribe tu comentario:</label>
				<textarea name="comentario" cols="40" rows="5"></textarea>
			</form>				
		</div>
	</div>
	</body>
<?php else: ?>
	<h1>El producto no existe</h1>
<?php endif; ?>
