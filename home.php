
<?php include "partials/header.php"; ?>


<?php 

$data_json = file_get_contents("https://restcountries.com/v3.1/all");

$all_country_data = json_decode($data_json);



?>

	

<h2>All Countries</h2>
<hr>

<div class="container">
	<div class="row ">
		<div class="col-6 offset-md-3">
			

	<table class="table table-striped">
  <thead>
    <tr>
			<th> Country Name</th>
			<th>Country Code</th>
		</tr>
  </thead>
  <tbody>

  		<?php foreach ($all_country_data as $country): ?>
                
		<tr>

			
				
			<td> 
<a target="_blank" href="/country-wiki/showByCode.php?code=<?php echo $country->cca2; ?>"> <?php echo $country->name->common; ?>
			</a>
			</td>

			<td> <a target="_blank" href="/country-wiki/showByCode.php?code=<?php echo $country->cca2; ?>"> <?php echo $country->cca2; ?>
			</a></td>
		</tr>
             
        <?php endforeach; ?>
   
  </tbody>
</table>

		</div>
	</div>

</div>



</div>





<br><br><br><hr>

	
<?php include "partials/footer.php"; ?>
