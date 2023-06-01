<?php include "partials/header.php" ?>




<?php
   // $name = $_GET['name'];  //Output: myquery
$query_param = $_SERVER['QUERY_STRING'];
parse_str($query_param, $params);
$name = $params['name']; // "value1"

   // echo $name;

   $data_json = file_get_contents("https://restcountries.com/v3.1/name/$name");

   $country_data = json_decode($data_json);




$name = $country_data[0] -> name -> common;
$capital = $country_data[0] -> capital[0] ;
$population = $country_data[0] -> population ;
$area = $country_data[0] ->  area;
$borders = $country_data[0] -> borders;
$languages = $country_data[0] -> languages;

// Convert the object to an array
$langArray = (array) $languages;


   ?>

  





<br>

<div class="container mt-5">
	<div class="row ">
		<div class="col-6 offset-md-3 mb-5">
			

	<table class="table table-striped mt-4">
  <thead>
    <tr>
			<th> Country Name</th>
			<th>Country Code</th>
		</tr>
  </thead>
  <tbody>

  		<?php foreach ($country_data as $d): ?>
                
		<tr>

			
				
			<td> 
<a target="_blank" href="/country-wiki/showByCode.php?code=<?php echo $d->cca2; ?>"> <?php echo $d->name->common; ?>
			</a>
			</td>

			<td> <a target="_blank" href="/country-wiki/showByCode.php?code=<?php echo $d->cca2; ?>"> <?php echo $d->cca2; ?>
			</a></td>
		</tr>
             
        <?php endforeach; ?>
   
  </tbody>
</table>

		</div>
	</div>

</div>




<br><br><br> <br> <br> <br> <br> <br> <br> <br>




 <?php include "partials/footer.php" ?>