<?php include 'includes/database.inc.php';?>

<?php
require_once('includes/travel-config.inc.php');
require_once('includes/database.inc.php');

$pdo = setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));

if ($_SERVER['REQUEST_METHOD'] == 'GET' && (isset($_GET['continent']) || isset($_GET['country']) || !empty($_GET['title'])) ) {

  if(isset($_GET['continent']) || isset($_GET['country']) || !empty($_GET['title'])){
    if(empty($_GET['title']) || ! isset($_GET['title'])){
  $images = readFormInput($_GET['continent'],$_GET['country'],0); 
    }
    else{
    $images = readFormInput($_GET['continent'],$_GET['country'],$_GET['title']); 
    }
  

  $countries  = getAllCountries();
  $allContinents = readAllContinents();
  }
}

else {
  // otherwise show all Images
 $allContinents = readAllContinents();
 $images = getAllImages();
 $countries  = getAllCountries();
} 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Assignment 3</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    

    <link rel="stylesheet" href="css/captions.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />    

</head>

<body>
    <?php include 'includes/header.inc.php'; ?>
    


    <!-- Page Content -->
    <main class="container">
        <div class="panel panel-default">
          <div class="panel-heading">Filters</div>
          <div class="panel-body">
            <form action="assignment3.php" method="get" class="form-horizontal">
              <div class="form-inline">
              <select name="continent" class="form-control">
                <option value="0">Select Continent</option>
                <?php /* display list of continents */ 
                  foreach($allContinents as $cont){
                    echo '<option value='.$cont['ContinentCode'].'>'.$cont['ContinentName'].' </option>';
                  }
                
                ?>
              </select>     
              
              <select name="country" class="form-control">
                <option value="0">Select Country</option>
                <?php /* display list of countries */ 
                foreach($countries as $country){
                  echo '<option value='.$country['ISO'].'>'.$country['CountryName'].' </option>';
                }
                ?>
              </select>    
              <input type="text"  placeholder="Search title" class="form-control" name=title>
              <button type="submit" class="btn btn-primary">Filter</button>
              </div>
            </form>

          </div>
        </div>     
                                    

		<ul class="caption-style-2">
            <?php 
            //echo $images;
            //if(is_array($images || is_object($images))){
            foreach($images as $img){
              echo '<li>';
              echo '<a href="detail.php?id='.$img['ImageID'].'"'.'class="img-responsive">';
              echo '<img src="images/square-medium/'.$img['Path'].'" alt="'.$img['Description'].'">';
              echo '  <div class="caption">
              <div class="blur"></div>
              <div class="caption-text">';
              echo '<p>'.$img['Title'].'</p>';
              echo '  </div>
              </div>
      </a>
</li>';


            }//}
            
            
            
            
            /* display list of images ... sample below ... replace ???? with field data
           
           
			   <li>
                  <a href="detail.php?id=????" class="img-responsive">
                          <img src="images/square-medium/????" alt="????">
                          <div class="caption">
                              <div class="blur"></div>
                              <div class="caption-text">
                                  <p>????</p>
                              </div>
                          </div>
                  </a>
			  </li>        
          */ ?>
       </ul>       

      
    </main>
    
    <footer>
        <div class="container-fluid">
                    <div class="row final">
                <p>Copyright &copy; 2017 Creative Commons ShareAlike</p>
                <p><a href="#">Home</a> / <a href="#">About</a> / <a href="#">Contact</a> / <a href="#">Browse</a></p>
            </div>            
        </div>
        

    </footer>


        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>