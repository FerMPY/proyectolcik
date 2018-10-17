<?php
include('conexion.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA
$res = "SELECT * FROM ventasbk WHERE nomcli LIKE '%$dato%' OR nrodoc LIKE '%$dato%' ORDER BY fecfac DESC";
$registro = $conexion->query($res);

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
                <th width="100">Nro Documento</th>
                <th width="50">Codigo</th>
                <th width="220">Nombre</th>
                <th width="100">Ruc</th>
                <th width="70">Total Importe</th>
                <th width="70">Iva</th>
                <th width="150">Fecha Registro</th>
            </tr>';
if(mysqli_num_rows($registro)>0){
	while($registro2 = mysqli_fetch_array($registro)){
		//CEROS PARA EL PREFIJO 1
        if(strlen($registro2["pf1"])==1){
          $wpf1='00';
        }else{
          $wpf1='0';
        }
        //CEROS PARA EL PREFIJO 2
        if(strlen($registro2["pf2"])==1){
          $wpf2='00';
        }else{
          $wpf2='0';
        }
        $nroFormat=number_format($registro2['totdoc']);
        $nroIva=number_format($registro2['iva10']);
		echo '<tr>
				<td>'.$wpf1.$registro2['pf1'].'-'.$wpf2.$registro2['pf2'].'-'.$registro2['nrodoc'].'</td>
				<td>'.$registro2['codclien'].'</td>
				<td>'.$registro2['nomcli'].'</td>
				<td>'.$registro2['ruc'].'</td>
				<td>'.$nroFormat.'.Gs</td>
				<td>'.$nroIva.'.Gs</td>
				<td>'.fechaNormal($registro2['fecfac']).'</td>
				</tr>';
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>