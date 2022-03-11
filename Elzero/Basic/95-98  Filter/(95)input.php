<?php

echo '<h1> Filters Type </h1>';
foreach(filter_list() as $filter){

    echo $filter. "<br>";
}

?>

<body>
    <form method='post' action='(95)Filter-intro.php'>
        <input type='text' name='username' palceholder='UserName'>
        <input type='submit' value='login'>
    </form>

</body>