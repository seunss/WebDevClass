<html lang="en">
<body>
<?php include 'registration.php';?>
<h1>QuickPoll Vote </h1>

<form action='QuickPollTally.php' method='post' role='form'>
    <div class  ='form-group'>
        <p>
            <?php echo $_SESSION['question'] ?>
        </p> <br>
        <input type="radio" name="vote" value="1"/> Yes<br>
        <input type="radio" name="vote" value="0"/> No<br> 
    </div>
   
    <input type='submit' value='Register My Vote' class='form-control' />
    
</form>


</body>
</html>