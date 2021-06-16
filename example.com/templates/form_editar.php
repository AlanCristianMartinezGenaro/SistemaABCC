 <div class="container">    
            <form method="post" action="http://example.com/modificar.php?id=<?=$y['id']?>">
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input class="form-control" type="text" value="<?=$y['nombre']?>" name="nombre" placeholder="Modifica el nombre de tu producto" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input class="form-control" type="text" value="<?=$y['precio']?>" name="precio" placeholder="Modifica el precio de tu producto" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Imagen</label>
                    <input class="form-control" type="text" value="<?=$y['imagen']?>" name="imagen" placeholder="Modifica el link de la imagen" aria-label="default input example">
                </div>
                <div class="mb-3">
                    <label class="form-label">Color</label>
                    <input class="form-control" type="text" value="<?=$y['color']?>" name="color" placeholder="Modifica el color" aria-label="default input example">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>    
        </div> 
</html>