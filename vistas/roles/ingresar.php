<?php require_once '../../modelos/header.php' ?>

<div class="container">
    <hr class="featurette-divider"><!-- Genera una división 1 -->

    <div class="row">
        <div class="col-lg-3">
        <img src = '../image/persona1.jpg'   height = '150px' class = 'd-block w-100' alt = '...'>
            <br/>
            <h4>Comentario:</h4>
            <br/>
            <p > Yo soy Maestra, opino que lo que está pasando es controlable pero lo malo es el individualismo 
                y el miedo que vemos en las personas desinformadas, además de las múltiples noticias 
                falsas que hay en las redes sociales y los medios de comunicación con mensajes alterantes 
                que solo provocan más crisis.
        </p> 
        </div><!-- /.col-lg-3 -->

        <div class="col-lg-3">
        <img src = '../image/persona2.jpg'   height = '150px' class = 'd-block w-100' alt = '...'>
            <br/>
            <h4>Comentario:</h4>
            <br/>
            <p > El coronavirus sigue reglas cercanas a las estudiadas por Darwin: 
                la selección natural, afectando a los más débiles, a los más ancianos y 
                a los crónicamente enfermos. Lo cual es muy triste y sigue siendo grave. 
                Hay virus más crueles, el virus del Ébola o el de la rabia no discriminan, 
                matan a la mayoría de lo expuestos, sin importarles mucho su edad, sanidad o estado de salud.
        </p> 
        </div><!-- /.col-lg-3 -->

        <div class="col-lg-3">
        <img src = '../image/persona3.jpg'   height = '150px' class = 'd-block w-100' alt = '...'>
            <br/>
            <h4>Comentario:</h4>
            <br/>
            <p > Creo que en nuestro hogar podemos jugar o dialogar con nuestra familia, ver televisión y 
                tomar el tiempo para innovar creando productos, tejer o bordar. Pero creo que no sirve 
                de nada permanecer en casa si no vamos a tomar medidas de prevención, ahora que estamos en 
                el hogar tenemos que ayudar a nuestra familia a limpiar, mantener un aseo adecuado y desinfectar 
                el lugar donde comemos, el baño, etc. Siempre sin abusar de los recursos como el alcohol y el cloro.
        </p> 
        </div><!-- /.col-lg-3 -->

        <div class="col-lg-3">
        <img src = '../image/persona4.jpg'   height = '150px' class = 'd-block w-100' alt = '...'>
            <br/>
            <h4>Comentario:</h4>
            <br/>
            <p > Para las personas que son de clase “acomodadas” pues no hay una dificultad en ir al supermercado
                 y comprar más de lo necesario para este periodo de prevención sin pensar en como afectará eso al 
                 resto de la población. En mi caso, yo vivo sola con mi mamá, y tenemos insumos para 2 días extras máximo. 
                 En estos días tuvo que salir para reabastecer nuestros recursos, al llegar al supermercado notó que la demanda 
                 de algunos productos ha elevado el costo y eso nos está afectando a todos.
        </p> 
        </div><!-- /.col-lg-3 -->

    </div><!-- /.row -->


    <div class="container">
        <h1>Ingresa nuevo comentario</h1>
    </div>

    <div class="container">
        <form action="../../controladores/Roles.php" method="post" id="formularioComentarios">
            <div class="form-group">
                <input id="email" name="nombre" type="email" placeholder="Correo electronico" class="form-control">
            </div>

            <div class="form-group">
                <textarea class="form-control" id="message" name="mensaje" 
                placeholder="Deja el comentario de tu nueva realidad" rows="4"></textarea>
            </div>

            <button input name="a" type="submit" value="Ingresar" type="button" class="btn btn-success" 
            onclick="return confirm('Gracias por escribir tus comentarios!!!.')">
                 Añadir
            </button>
            <a class="btn btn-md btn-primary" href='comentarios.php' role="button">Volver</a>
        </form>
    </div>
</div>

<?php require_once '../../modelos/footer.php' ?>


