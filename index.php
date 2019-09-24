    <?php require "bootstraphead/boohead.php";
    session_start();

    if (isset($_SESSION['documento'])) {
        header('location:interfaces/libs/validar-entrada.php');
    }
    ?>
    <link rel="stylesheet" href="styles/login.css">
    <title>Login</title>
</head>
<body class="d-flex justify-content-center align-items-center">

    <div class ="error">
        <?php
        //muestra un mensaje de error
        if (isset($_SESSION['mensaje'])) {
            $div = "<div class='alert alert-danger'>" . $_SESSION['mensaje'] . "</div>";
            echo $div;
            session_destroy();
            session_abort();
        }
        ?>
    </div>
    <div class="  border  rounded contenido-login">
        <form method="post" action="interfaces/libs/validar-entrada.php">
            <div class="logosena">
                <img src="imagenes/logo.png" alt="Logo SENA">
            </div>
            <div class="form-group   ">
                <label for="exampleInputEmail1 ">Número de documento:</label>
                <input type="text" name="docu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña:</label>
                <input type="password" name="pas" class="form-control" id="exampleInputPassword1" >
            </div>

            <button type="submit" class="btn btn-block btn-login">Ingresar</button>
            <div class="text-center mt-2">
                <a href="#" >¿Has olvidado tu contraseña?</a>
            </div>
        </form>
    </div>
    <?php require "bootstrapfoo/boofoo.php"?>
    </body>
</html>