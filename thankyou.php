<?php
    if(isset($_GET['name'])){
        $name=htmlspecialchars($_GET['name']);
    }
    else{
        $name="Student";
    }
?>
<html>
    <head>
        <title>thank You </title>
    </head>
    <body>
        <h2>Thank You,<?php echo $name; ?>! you feedback has been submitted</h2s>
    </body>
</html>