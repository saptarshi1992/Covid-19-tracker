<?php
include "test_data.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Covid-19 tracker</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/d904a38046.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="covid_style.css">
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
       google.charts.setOnLoadCallback(drawRegionsMap);
      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Confirmed Covid_19'],
      <?php foreach($data as $key=>$val){
        $days_count = count($val)-1;
        $data_val = $val[$days_count]['confirmed'];
        if($key=="Cote d'Ivoire"){$key="Cote d Ivoire";}
      
           
              echo "['".$key."', ".$data_val."],";
     }?>
      
        ]);
        var options = {};
        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
        chart.draw(data, options);
      }
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>
     <script>
      $(document).ready( function () {
      $('#tab').DataTable();
      } );
   </script>

</head>
<body>
 		<div class="container-fluid bg-light p5 text-center my-3">
 			<h1>Covid-19 Tracker</h1>
 			<h5 class="text-muted">Keep track on covid-19 data all over the world</h5>
 		</div>
 		<div class="container">
 			<div class="row">
 				    <div class="col-4 text-warning">
 					<h5>Confirmed</h5>
 					<?php echo $total_conf;?>
 				    </div>
 					<div class="col-4 text-sucess">
 					<h5>Recovered</h5>
 					<?php echo $total_recv;?>
 				    </div>
 					
 					<div class="col-4 text-danger">
 					<h5>Deceased</h5>
 					<?php echo $total_death;?>
 					</div>
 		</div>
 		<div class="container bg-light p-3 my-3 text-center">
 			<h5 class="text-info">"preventaion is cure"</h5>
 			<p class="text-muted"> Stay Home Stay Safe</p>
 		</div>
 		<div class="container-fluid">
 			<div class="table-responsive">
 			<table class="table" id="tab">
 				<thead class="thead-dark">
 					<tr>
 						<th scope="col">Countries</th>
 						<th scope="col">Confirmed</th>
 						<th scope="col">Recovered</th>
 						<th scope="col">Deceased</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php
 					      foreach ($data as $key => $value) {
 					      	# code...
 					      	$incr = $value[$days_count]['confirmed']-$value[$days_count_prev]['confirmed'];
 					    ?>
 					    <tr>
 					    	<th><?php echo $key?></th>
 					    	<td>
 					    		<?php echo $value[$days_count]['confirmed']?>
 					    		<?php if($incr!=0){?>
 					    		<small class="text-denger pl-3"><i class="fas fa-long-arrow-alt-up"></i><?php echo $incr?></small>
 					    		<?php }?>	
 					    		</td>
 					    		<td>
 					    			<?php echo $value[$days_count]['recovered']?>
 					    		</td>
 					    		<td>
 					    			<?php echo $value[$days_count]['deaths']?>
 					    		</td>

 					<?php }?>
 				</tbody>
 			</table></tr></tbody></table></div><div id="regions_div" style="width: 900px; height: 500px;"></div></div>
 <footer class="footer mt-auto py-3 bg-light">
  <div class="container text-center">
    <span class="text-muted">Copyright @Saptarshi@</span>
  </div>
</footer>
</div>
</body>



</html>