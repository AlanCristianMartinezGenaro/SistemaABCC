	<div class="container">
	<div class="container">
	<div class="row">
		<?php
			foreach($productos as  $pan){
	  	?>
		<div class="col-sm">
			<div class="card my-2" style="width: 18rem ">
  				<img src="<?=$pan['imagen']?>" class="card-img-top" width = "200" height="150">
  				<div class="card-body">
    				<h5 class="card-title"><?=$pan['nombre']?></h5>
    				<p class="card-text" ><?=$pan['precio']?></p>
					<p class="card-text" ><?=$pan['color']?></p>
    				<a href="/Lavadora.php?nombre=<?=$pan['id']?>" class="btn btn-primary">Comprar</a>
					<a type="button" class="btn btn-danger" href="../eliminarproducto.php?nombre=<?=$pan['id']?>">Eliminar</a>
                    <a type="button" class="btn btn-warning" href="http://example.com/editar_producto.php?nombre=<?=$pan['id']?>" >Modificar</a>
  				</div>
			</div>
		</div>
		<?php
		}
		?>
	</div>
	</div>
	</div>
</body>
</html>
