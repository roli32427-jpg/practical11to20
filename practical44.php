<DOCTYPE html>
    <html>
        <head>
           <title>Feedback Form</title>
        </head>
         <body>
            <h2>Feedback Form<h2>
                 <form method="POST" action="thankyou.php">
                 Name: <input type="text" name="name" required><br> 
                 Email:<input type="email" name="email" required><br>
                 Message:<br>
                 <textarea name="message"required></textarea><br><br>
                 <input type="submit" value="Submit Feedback"><br><br><br>
                 </form>
         </body>
    </html>