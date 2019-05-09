<!DOCTYPE html>

<html>

	<head>
	
		<?php

			include("template.php");

		?>

	</head>

	<body>

		<div>
        
            <h1 class="mb-3">Agregar nuevo producto</h1>
        
            <form name="upload" action="subir.php" method="post" onsubmit="return(validate());">
        
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" style="width: 250px;">
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" name="precio" placeholder="Precio" style="width: 250px;">
                </div>
        
                <div class="form-group">
                    <textarea class="form-control" name="descripcion" placeholder="Descripcion" cols="5" rows="5" style="width: 250px;"></textarea>
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" name="stock" placeholder="Stock" style="width: 250px;">
                </div>

                <div class="form-group">
                	<label id="imagen">Escribir aqui la URL de la imagen que desee exponer de su producto (asegurese de que la URL e imagen sea la correcta)</label>
                	<input type="text" class="form-control" name="imagen" placeholder="URL de imagen" style="width: 400px;">
                </div>
        
                <button class="btn btn-primary" type="submit" name="submit">Subir producto</button>

            </form>
        
        </div>

	</body>

	<script type="text/javascript">
        
        function validate()
        {
        
            if(document.upload.nombre.value == "")
            {
        
                alert("Por favor escriba el nombre del producto");
                document.upload.nombre.focus();
                return false;
        
            }
        
            if(document.upload.precio.value == "")
            {
        
                alert("Por favor escriba el precio del producto");
                document.upload.precio.focus();
                return false;
        
            }
        
            if(document.upload.descripcion.value == "")
            {
        
                alert("Por favor escriba una descripcion del producto");
                document.upload.descripcion.focus();
                return false;
        
            }

            if(document.upload.stock.value == "")
            {
        
                alert("Por favor defina un stock para el producto");
                document.upload.stock.focus();
                return false;
        
            }

            if(document.upload.imagen.value == "")
            {
        
                alert("Por favor agrege una URL para la imagen de su producto");
                document.upload.stock.focus();
                return false;
        
            }
        
            //alert("Registro exitoso!");
            return true;
        
        }
        
    </script>

</html>