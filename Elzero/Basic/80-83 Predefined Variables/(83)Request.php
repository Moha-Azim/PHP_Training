<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"> //$_SERVER['PHP_SELF']

    <input type="text" placeholder="UserName" name="username"></input>
    <input type="submit" value="logIn"></input>

</form>


<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo 'hello '.$_REQUEST['username']. " nice to see you again :)";
    }else{
        echo "<h4> you can't enter this site directly  input the username !!!</h4>";
    }