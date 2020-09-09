<?php
	require_once '../../modelos/Rol.php';
	$rol = Rol::obtenerPorId(base64_decode($_GET['id']));
?>

<?php require_once '../../modelos/header.php' ?>
<div class="container">
    <form action="../../controladores/Roles.php" method="post" >
        <div class= "row">
        <div class="col-lg-1">
            </div>
            <div class="col-lg-4">
                <br/>   
                <p>Correo:</p>
                <div class="form-group" >
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
                    <input id="email" name="nombre" type="text" placeholder="Correo electronico" class="form-control"
                    value="<?= $rol[1] ?>" >
                </div>
            </div>        
        
             <div class="col-lg-5"> 
                 <br/>   
                <p>Editar comentario:</p>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
                        <input class="form-control" id="message" name="mensaje" value="<?= $rol[2]?>" />
                    </div>
            </div>
            <div class="col-lg-2">
            </div> 
            <div class="boton">
                <button input name="a" type="submit" value="Editar" type="button" class="btn btn-md btn-danger" 
                    onclick="return confirm('Presiona aceptar para confirmar.')">Editar
                </button>
                <a class="btn btn-md btn-primary" href='comentarios.php' role="button">Volver</a> 
            </div>
        </div>
    </form>
</div> 
   
<?php require_once '../../modelos/footer.php' ?>


