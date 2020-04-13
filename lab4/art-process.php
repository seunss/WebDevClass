<?php 
function getvalue($varname){
  $ec = $_POST[$varname]; #Get the Variable from the form
  echo $ec;
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Lab 04</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/misc.js"></script>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<?php include 'header.inc.php'; ?>
    
<main>
    <section class="results">
    
    <table>
      <caption class="results__caption">Art Work Saved</caption>
      <tr>
        <td class="results__label">Title</td> 

        <td class="results__value">
        <?php 
                getvalue("title");
                ?> 
        </td> 
      </tr>
      <tr>
        <td class="results__label">Description</td>    
        <td class="results__value">
        <?php 
                getvalue("description");
                ?></td> 
      </tr>
      <tr>
        <td class="results__label">Genre</td>    
        <td class="results__value">
        <?php 
                getvalue("genre");
                ?>
        </td> 
      </tr>
      <tr>
        <td class="results__label">Subject</td>    
        <td class="results__value">
        <?php 
                getvalue("subject");
                ?>
        </td> 
      </tr>
      <tr>
        <td class="results__label">Medium</td>    
        <td class="results__value">
        <?php 
                getvalue("medium");
                ?>
                </td> 
      </tr>   
      <tr>
        <td class="results__label">Year</td>    
        <td class="results__value">
        <?php 
                getvalue("year");
                ?>
        </td> 
      </tr>  
      <tr>
        <td class="results__label">Museum</td>    
        <td class="results__value">
        <?php 
                getvalue("museum");
                ?>
        </td> 
      </tr>          
    </table>
    
    </section>
</main>       
</body>
</html>
