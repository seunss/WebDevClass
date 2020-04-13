<?php
    $pdo;

function  setConnectionInfo( $arr){
    Global $pdo;
    $pdo = new PDO($arr[0],$arr[1],$arr[2]);
    return $pdo;

}
function runQuery ($sql){
    Global $pdo;
    $result	=	$pdo->query($sql);
    return $result;

}
function readAllEmployees(){
 $sql	=	"select	*	from	empolyees order by LastName";
 return runQuery($sql);
    
}
function readSelectEmployeesByName($name){
    $sql	=	"select	*	from empolyees where LastName =".$name."order by LastName";
    return runQuery($sql);
       
   }

function  readSelectEmployeeByID($id){
    $sql	=	"select	*	from empolyees where  =EmployeeID".$id;
    return runQuery($sql);

  }
  function  readTODOs ($em){ //Needs to be finished
    $sql	=	"select * from employeetodo	 where EmployeeID =".$em;
    return runQuery($sql);

  }





?>
