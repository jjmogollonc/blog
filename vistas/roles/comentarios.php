<?php require_once '../../modelos/Rol.php' ?>
<?php require_once '../../modelos/header.php' ?>

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item">
                <img src = '../image/imagen1.jpg' 
                width = '100%' height = '300px' class = 'd-block w-100' alt = '...'>
            </div>

            <div class="carousel-item active">
                <img src = '../image/imagen2.jpg' 
                 width = '100%' height = '300px' class = 'd-block w-100' alt = '...'>
            </div>

            <div class="carousel-item">
                <img src = '../image/imagen3.jpg' 
                    width = '100%' height = '300px' class = 'd-block w-100' alt = '...'>
            </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>

        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
        </div>
    </div>
</div>
<!-- Fin carrusel -->
<div class="container">
    <br/>   
    <p>
        <a class="btn btn-md btn-primary" href='ingresar.php' role="button">Ingresar nuevo comentario</a>
    </p>
</div>

<div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Correo electrónico</th>
                    <th scope="col">Comentario</th>
                    <!--  <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>-->
                </tr>
            </thead>

            <tbody>
                <?php foreach (Rol::listar() as $fila) { ?>
                <tr>
                    <td><?= $fila[1] ?></td>
                    <td><?= $fila[2] ?></td>
                   <td>
                   
                            <a href="editar.php?id=<?=base64_encode($fila[0])?>" ><i class="far fa-edit fa-sm"></i></a>
                           
                    </td>
                    <td>
                        
                            <a href="../../controladores/Roles.php?a=elim&id=<?=base64_encode($fila[0])?>"
                                onclick="return confirm('¿Desea eliminar?')"><i class="far fa-trash-alt fa-sm"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <p class="float-right"><a class="btn btn-md btn-primary" href='index.php' role="button">Volver</a></p>
        <br/>
        <br/>
    </div>
<?php require_once '../../modelos/footer.php' ?>
