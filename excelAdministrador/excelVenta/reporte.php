<?php
include('conexion.php');//CONEXION A LA BD

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];

if(isset($_POST['generar_reporte']))
{
	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-Type:text/xls; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_Fechas_Venta.xls"');

	// SALIDA DEL ARCHIVO
	$salida=fopen('php://output', 'w');
	// ENCABEZADOS
	fputcsv($salida, array('Numero de Documento', 'Ruc', 'Total Importe', 'Iva', 'Fecha de Facturacion'));
	// QUERY PARA CREAR EL REPORTE
	$reporteCsv=$conexion->query("SELECT *  FROM ventasbk where fecfac BETWEEN '$fecha1' AND '$fecha2' ORDER BY idreg");
	while($filaR= $reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['pf1'].'-'.$filaR['pf2'].'-'.$filaR['nrodoc'], 
								$filaR['ruc'],
								$filaR['totdoc'],
								$filaR['iva10'],
								$filaR['fecfac']));

}

?>