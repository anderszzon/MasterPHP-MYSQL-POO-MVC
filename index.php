<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div id="container">

        <!-- COMENTARIO  -->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta.logo" />
                <a href="index.php">
                    Shirt Shop
                </a>
            </div>
        </header>

        <!-- MENU  -->

        <nav id="menu">
            <ul>
                <li>
                    <a href="">
                        INICIO
                    </a>
                </li>
                <li>
                    <a href="">
                        CATEGORIA
                    </a>
                </li>
                <li>
                    <a href="">
                        FIN
                    </a>
                </li>
            </ul>
        </nav>

        <div id="content">
            <!-- BARRA LATERAL  -->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <form action="#" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password">
                        <input type="submit" value="enviar">
                    </form>
                    <a href="#">Mis Pedidos</a>
                    <a href="#">Gestionar Pedidos</a>
                    <a href="#">Gestionar Categorias</a>
                </div>
            </aside>

            <div id="central">
                <h1>Productos Destacados</h1>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Camiseta Azul</h2>
                    <p>30 Euros</p>
                    <a href="" class="button">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Camiseta Azul</h2>
                    <p>30 Euros</p>
                    <a href="" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Camiseta Azul</h2>
                    <p>30 Euros</p>
                    <a href="" class="button">Comprar</a>
                </div>

            </div>

        </div>

        <!-- PIE DE PAGINA  -->
        <footer id="footer">
            <p>
                Desarrollado por Anderson Gordillo &copy; <?= date('Y') ?>
            </p>
        </footer>

    </div>
</body>

</html>