<?php
    $pdo;


function  setConnectionInfo( $arr){
    Global $pdo;
    $pdo = new PDO($arr[0],$arr[1],$arr[2]);
   // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;

}
function runQuery ($sql){
    Global $pdo;
    $result	= $pdo->query($sql);
    return $result;

}
function readAllContinents(){
 $sql	=	"select	*	from	continents order by ContinentName";
 return runQuery($sql);
    
}

function getAllImages(){
    $sql	=	"select	*	from	imagedetails order by ImageID";
    return runQuery($sql);
       
   }
function getAllCountries(){
    $sql	=	"select	*	from countries inner join imagedetails on countries.ISO =imagedetails.CountryCodeISO group by countries.ISO";
    return runQuery($sql);
       
   }

function readFormInput($continent,$countryCode,$title){
    
    if(strlen($countryCode) !=2 && strlen($continent) !=2)
    { // Checks for the Empty Form
        $countryCode = 0;
        $continent = 0;
       // echo $countryCode;
        return getAllImages();
    } 
    
     if(strlen($countryCode) !=2)
    { // Checks if counrty is Empty
        $countryCode =0;
        $sql	=	"select	*	from imagedetails where  CountryCodeISO = ".$countryCode." and  ContinentCode= '".$continent."' and  title = ".$title;

    }
    
     else if(strlen($continent) !=2){ // Checks if conitent is Empty
        $continent =0;
        $sql	=	"select	*	from imagedetails where  CountryCodeISO = '".$countryCode."' and  ContinentCode= ".$continent." and  title = ".$title;

    }
    else{ // Catch All Case
    $sql	=	"select	*	from imagedetails where  CountryCodeISO = '".$countryCode."' and  ContinentCode= '".$continent."' and  title = ".$title;
    
    }
  //  echo $sql;
    return runQuery($sql);
       
   }






?>
