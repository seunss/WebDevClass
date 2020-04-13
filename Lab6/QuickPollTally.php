<?php include 'registration.php';?>

<?php 

     if ($_POST['vote'] == 1){
        $_SESSION['yes'] += 1; 
     }

     else if ( $_POST['vote'] == 0){
         $_SESSION['no'] += 1;
     }

?>
<!DOCTYPE html>
<html>
    <body>
            <h1>QuickPoll Tally</h1>
        <p>
            Your answers has been registred The current totals are:
        </p><br>
        <p> Yes: </p> <p> <?php echo $_SESSION['yes'] ?> </p> <br>
        <p> No: </p> <p> <?php echo $_SESSION['no'] ?> </p> <br>
        <br>
        <a href='quickpollvote.php'> Vote Again</a> <br>
        <a href='register.html'> Register a New question</a>

    </body>
</html>