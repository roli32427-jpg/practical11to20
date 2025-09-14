<DOCTYPE html>
    <html>
        <head>
            <title>Favorite Programming Language</title>
        </head>
        <body>
            <form method="POST">
                <p>which is your favorite Programming Language ?</p>
          <input type="radio" name="language" value="PHP">PHP<br>
          <input type="radio" name="language" value="JavaScript">JavaScript<br>
          <input type="radio" name="language" value="Python">Python<br><br>
          <input type="Submit" value="Submit">
</form>
             <?php
             if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(empty($_POST['Language'])){
                        $choice = $_POST['language'];
                        echo"<h3>Your favorite language is:$choice</h3>";
                    }
                    else{
                        echo "<h3>please select a language</h3>";
                    }
                }
?>
        </body>
    </html>