<!DOCTYPE html>
    <html lang = 'en'>

    <head>
        <meta charset = 'UTF-8' />
        <title>johnjairomogollonblog</title>
        <link rel = 'stylesheet' href = '../css/all.css'>
        <link rel = 'stylesheet' href = '../css/bootstrap.css'>
        <link rel = 'stylesheet' href = '../css/styles.css'>
    </head>
    
<body>
<!--<img alt="full screen background image" src="../image/fondo1.jpg" id="full-screen-background-image" /> -->
<div class="container">    
    <header >
        <nav class = 'navbar navbar-expand-lg navbar-light '>

            <a class = 'navbar-brand' href = 'index.php'>
                <img src = '../image/bajo.png' 
                class = 'd-inline-block align-top' alt = 'Logo'>
                johnjairomogollonblog.rf.gd
            </a>

            <button class = 'navbar-toggler' type = 'button' data-toggle = 'collapse' 
                data-target = '#navbarCollapse' aria-controls = 'navbarCollapse' aria-expanded = 'false' 
                aria-label = 'Toggle navigation'>
                <span class = 'navbar-toggler-icon'></span>
            </button>

            <div class = 'collapse navbar-collapse' id = 'navbarCollapse'>
                <ul class = 'navbar-nav mr-auto'>
                    
                    <li class = 'nav-item active'>                  
                        <a class = 'nav-link' href = 'index.php'>Inicio <span class = 'sr-only'>( current )</span></a>
                    </li>

                    <li class = 'nav-item'>
                        <a class = 'nav-link' href = 'comentarios.php'>comentarios</a>
                    </li>

                    <li class = 'nav-item'>
                        <a class = 'nav-link' href = 'acercaDe.php' tabindex = '-1' aria-disabled = 'true'>Acerca del blog</a>
                    </li>
                </ul>

               
               
                <form class = 'form-inline mt-2 mt-md-0' method=GET action="http://www.google.com/">
                    <input class = 'form-control mr-sm-2' type = 'text' placeholder = 'Buscar comentarios' aria-label = 'Search'>
                    <button class = 'btn btn-outline-primary my-2 my-sm-0' type = 'submit'>Buscar</button>
                </form>
                </form>
            </div>
        </nav>
    </header>
</div>