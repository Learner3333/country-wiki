<?php include "partials/header.php" ?>



<?php
   // $name = $_GET['name'];  //Output: myquery
$query_param = $_SERVER['QUERY_STRING'];
parse_str($query_param, $params);
$code = $params['code']; // "value1"


   $data_json = file_get_contents("https://restcountries.com/v3.1/alpha/$code");

   $country_data = json_decode($data_json);


$name = $country_data[0] -> name -> common;
$capital = $country_data[0] -> capital[0] ;
$population = $country_data[0] -> population ;
$area = $country_data[0] ->  area;
$borders = $country_data[0] -> borders;
$languages = $country_data[0] -> languages;
$flags = $country_data[0] -> flags -> png;
$alt = $country_data[0] -> flags -> alt;

// Convert the object to an array
$langArray = (array) $languages;


?>


 <div>

   <div class="container">
     <div class="row justify-content-center ">

         <div class="card m-3" style="width: 26rem;">
          <img src="<?php echo $flags; ?>" class="card-img-top" alt="<?php echo $alt; ?>">

<ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Name:&nbsp; </strong><?php echo strtoupper($name); ?></li>
    <li class="list-group-item"><strong>Capital: &nbsp;</strong><?php echo $capital; ?></li>
    <li class="list-group-item"><strong>Population: &nbsp;</strong><?php echo $population; ?></li>
    <li class="list-group-item"><strong>Area: &nbsp;</strong><?php echo $area; ?></li>
    <li class="list-group-item">
      <?php if($borders){ ?>
        <p><strong>Borders: &nbsp;</strong><?php echo implode(", ", $borders); ?></p>
    <?php } ?>
</li>
<li class="list-group-item">
  <strong>Languages: &nbsp;</strong>

  <?php foreach ($langArray as $key => $value) { ?>

      <?php echo $value; ?>, 

  <?php } ?>
</li>

</ul>

</div>
</div>
</div>
</div>


<br><br><br>



<?php include "partials/footer.php" ?>


