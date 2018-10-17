<nav class="navbar navbar-default" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
   <a class="navbar-brand" href="http://localhost/tesis/usuario/menuAdministrativo.php"><b>SGE</b></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a href="http://localhost/tesis/usuario/crudAdministrativo.php">Admin. Datos</a></li>
      <li><a href="http://localhost/tesis/usuario/consultaAdministrativo.php">Consulta de Datos</a></li>
      <li><a href="http://localhost/tesis/usuario/reporteAdministrativo.php">Reportes de Datos</a></li>
      <li><a href="http://localhost/tesis/usuario/php/logout.php">Logout</a></li>
    </ul>
<form class="navbar-form navbar-left" role="search" action="./buscar.php">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
    </form>
  </div><!-- /.navbar-collapse -->
</div>
</nav>