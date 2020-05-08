<?php
//include "test_data.php";
include "test_data_2.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Covid-19 tracker-INDIA</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/d904a38046.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="covid_style.css">

</head>
<body>
 		<div class="container-fluid bg-light p5 text-center my-3">
 			<h1>Covid-19 Tracker-INDIA</h1>
 			<h5 class="text-muted">Keep track on covid-19 data in INDIA</h5>
 		</div>
 		<div class="container">
 			
 		</div>
 		<div class="container bg-light p-3 my-3 text-center">
 			<h5 class="text-info">"preventaion is cure"</h5>
 			<p class="text-muted"> Stay Home Stay Safe</p>
 		</div>
 		<div class="container-fluid">
 			<div class="table-responsive">
 			<table class="table">
 				<thead class="thead-dark">
 					<tr>
 						<th scope="col">Countries</th>
 						<th scope="col">Confirmed</th>
 						<th scope="col">Recovered</th>
 						<th scope="col">Deceased</th>
 					</tr>
 				</thead>
 				<tbody>
 					
 					    <tr>
 					    	<td>
                  <?php foreach ($data_set as $key => $value) {
                 echo ($value->state);
                  
                
                ?>
 					    	<th><?php }?></th></td></tr>
 					    		

 					
 				</tbody>
 			</table></tr></tbody></table></div></div>
 <footer class="footer mt-auto py-3 bg-light">
  <div class="container text-center">
    <span class="text-muted">Copyright @Saptarshi@</span>
  </div>
</footer>
</div>
</body>



</html>