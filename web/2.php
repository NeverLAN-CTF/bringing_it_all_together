<!DOCTYPE html>
<html>
    <head>
        <title>Part 2</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </head>
    <body>
        <!-- getting a little harder now -->
        <p id="p"></p>
        
    </body>
<?php
if(array_key_exists('pass', $_GET) && $_GET['pass'] == 'ffc88b4ca90a355f8ddba6b2c3b2af5c'){
    if(array_key_exists("User_type", $_COOKIE)&&preg_match('/([Aa])(dmin)+/', $_COOKIE["User_type"])){
      echo '<p>Welcome Admin!<br/>Password: SSB3YW50IGEgY2hhbGxlbmdl <br/> <a href="3.php">Continue</a></p>';
    }else{
        echo("You can ignore the query string for this challenge.
        You must be an Admin to continue");
        setcookie("User_type", 'user', time()+300);
    }
}else{
    echo("<script type='text/javascript'>
            var password;
            var foo = document.getElementById('p');
            $.ajax({
                type: 'GET',
                url: '1/key.php',
                async:false,
                success: function (file_html) {
                    // success
                   password=(file_html);
                }
            });
            var x = prompt('Enter in the password','').trim();
            if (x.toLowerCase() == password) {
                window.location.replace('2.php?pass='+password);
            }else{
                password='';
                foo.innerHTML = \"go <a href='1.php'>back</a> and get the password\";
            }
        </script>");
}
?>

    
</html>