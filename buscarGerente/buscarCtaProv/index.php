<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Filtrar datos de la ventas por fechas</title>
  <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-3.3.7/css/csscustom.css">  
  <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">

  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
  

 </head>
 <body>
   <?php include "navbar.php"; ?>
  <div class="container box">

 

   <h1 align="center">Filtrar datos de la ventas por fechas</h1>
   <br />






   <div class="table-responsive"  style="overflow-x: hidden;">
    <br />
    <div class="row">
     <div class="input-daterange">
      <div class="col-md-4">
       <input type="text" name="start_date" id="start_date" class="form-control" />
      </div>
      <div class="col-md-4">
       <input type="text" name="end_date" id="end_date" class="form-control" />
      </div>      
     </div>
     <div class="col-md-4">
      <input type="button" name="search" id="search" value="Buscar" class="btn btn-info active" />
     </div>
    </div>
    <br />
    <table id="order_data" class="table  table-striped  table-hover">
     <thead>
      <tr>
       <th>Nro Cta Cte</th>
       <th>Codigo Proveed</th>
       <th>Importe Total</th>
       <th>Saldo</th>
       <th>Numero Documento</th>
       <th>Tipo Documento</th>
       <th>Fecha de Documentacion</th>
       <th>Fecha</th>
      </tr>
     </thead>
    </table>
    
   </div>
  </div>
  <script src="bootstrap-3.3.7/js/jQuery-2.1.4.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

 </body>
</html>



<script type="text/javascript" language="javascript" >



$(document).ready(function(){
 



 $('.input-daterange').datepicker({
    "locale": {
                "separator": " - ",
        "applyLabel": "Aplicar",
        "cancelLabel": "Cancelar",
        "fromLabel": "Desde",
        "toLabel": "Hasta",
        "customRangeLabel": "Custom",
        "daysOfWeek": [
            "Do",
            "Lu",
            "Ma",
            "Mi",
            "Ju",
            "Vi",
            "Sa"
        ],
        "monthNames": [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
        ],
        "firstDay": 1
    },
  
  format: "yyyy-mm-dd",
  autoclose: true

 });

 fetch_data('no');

 function fetch_data(is_date_search, start_date='', end_date='')
 {
  var dataTable = $('#order_data').DataTable({

    "language":{
       "lengthMenu":"Mostrar _MENU_ registros por página.",
       "zeroRecords": "Lo sentimos. No se encontraron registros.",
             "info": "Mostrando página _PAGE_ de _PAGES_",
             "infoEmpty": "No hay registros aún.",
             "infoFiltered": "(filtrados de un total de _MAX_ registros)",
             "search" : "Búsqueda",
             "LoadingRecords": "Cargando ...",
             "Processing": "Procesando...",
             "SearchPlaceholder": "Comience a teclear...",
             "paginate": {
     "previous": "Anterior",
     "next": "Siguiente", 
     }
      },

   "processing" : true,
   "serverSide" : true,
   "sort": false,
   "order" : [],
   "ajax" : {
    url:"ajax.php",
    type:"POST",
    data:{
     is_date_search:is_date_search, start_date:start_date, end_date:end_date
    }
   }
  });
 }

 $('#search').click(function(){
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
  if(start_date != '' && end_date !='')
  {
   $('#order_data').DataTable().destroy();
   fetch_data('yes', start_date, end_date);
  }
  else
  {
   alert("Por favor seleccione la fecha");
  }
 }); 
 
});
</script>



