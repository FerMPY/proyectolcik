
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>SGE - Gestion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="form.css" type="text/css"> 
    <?php include "navbarAdministrativo.php"; ?>
    <div class="page-header" align="center">
        <h1>Consulta Generales de Datos</h1>
    </div>

    <?php
      session_start();
    if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
       print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
    }

    if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
       print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
    }

    if(!isset($_SESSION['consultaCompra']) || empty($_SESSION['consultaCompra'])){
     
    }else{
       print "<p align='center'><a href='http://localhost/tesis/buscarAdministrador/buscarCompra/index.php' class='btn btn-primary'>Consulta Facturas de Compras</a></p>"; 
    }

    if(!isset($_SESSION['consultaVenta']) || empty($_SESSION['consultaVenta'])){
     
    }else{
       print "<p align='center'><a href='http://localhost/tesis/buscarAdministrador/buscarVenta/index.php' class='btn btn-primary'>Consulta Facturas de Ventas</a></p>"; 
    }

    if(!isset($_SESSION['consultaMovim']) || empty($_SESSION['consultaMovim'])){
     
    }else{
       print "<p align='center'><a href='http://localhost/tesis/buscarAdministrador/buscarMovimiento/index.php' class='btn btn-primary'>Consulta de Movimientos</a></p>"; 
    }

    if(!isset($_SESSION['consultaCliente']) || empty($_SESSION['consultaCliente'])){
     
    }else{
       print "<p align='center'><a href='http://localhost/tesis/buscarAdministrador/buscarCtaCliente/index.php' class='btn btn-primary'>Consulta de Cta Cte Cliente</a></p>>"; 
    }

    if(!isset($_SESSION['consultaProveedor']) || empty($_SESSION['consultaProveedor'])){
     
    }else{
       print "<p align='center'><a href='http://localhost/tesis/buscarAdministrador/buscarCtaProv/index.php' class='btn btn-primary'>Consulta de Cta Cte Proveedor</a></p>>"; 
    }
?>


</body>
</body>

</body>
</html>