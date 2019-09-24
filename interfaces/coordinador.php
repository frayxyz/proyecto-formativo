
    <?php require "../bootstraphead/boohead.php";
    //validando ingreso de usuario
    session_start();
    if (isset($_SESSION['perfil'])) {
        if ($_SESSION['perfil'] != "Coordinador") {
            header('location:'. $_SESSION['perfil']. '.php');
        }
    }else{
        header('location:../');

    }
    ?>
    <link rel="stylesheet" href="../styles/inter.css">
    <script src="https://kit.fontawesome.com/4de60b0d23.js"></script>
    <title>Instructor</title>
</head>
<body>
    
    
    <header>
        <div class=" d-flex align-items-center text-white  style-flex">
            <img src="../imagenes/Logo-B-white.png" class="style-img" alt="Logo SENA">
            <h3 class="st-text">SAC - Seguimientos Aprendices Citados </h3>
            <div>
                
                <h1 class="st-text d-inline"><i class="fas fa-user"></i>  Coordinador:</h1>
                <p  class="d-inline"><?=$_SESSION['nombreU']?></p>
            </div>
        </div>
    </header>
 

    <nav>
        <div class="style-contenido">
            <div class="style-navegacion">
                <div class="style-botones boton">
                    <button type="button" id="btn-1" class="btn botoncito">Citacion Comite </button> <i class="far fa-bell"></i>
                </div>
                <div class="style-botones boton">
                    <button type="button" id="btn-2" class="btn botoncito">Citar Aprendices </button><i class="fas fa-users"></i>
                </div>
                <div class="style-botones boton">
                    <button type="button" id="btn-3" class="btn botoncito">Configuracion  </button><i class="fas fa-cog"></i>
                </div>

                <div class="style-botones boton">
                    <button type="button" id="btn-4" class="btn botoncito">Configuracion-23  </button><i class="fas fa-cog"></i>
                </div>
                <a href="libs/salir.php" id="btn-4" class="btn botoncito btn4">
                    <div class="style-botones ">
                        Salir <i class="fas fa-power-off"></i>
                    </div>
                </a>
                <hr>
            </div>
        </div>
    </nav>

    <section>
       <div class="style-change" id="change">
        </div>
    </section>
    
<?php require "../bootstrapfoo/boofoo.php"?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
<script src="../js/interfazglobal.js"></script>
</body>
</html>