<!DOCTYPE html>
<html>
    <head>
        <title>Part 3</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </head>
    <body>
        <p id="p"></p>
    <?php 
    if(array_key_exists('password', $_GET) && $_GET['password'] == 'SSB3YW50IGEgY2hhbGxlbmdl'){
        if(preg_match('/([Kk])(en)+/', $_SERVER['HTTP_USER_AGENT'])){
                echo('Oh, good your on a Ken browser. KEY: 7d350076db5a7f8e0f1f6cffe3d29e68');
        }else{
            echo('<p>Again, ignore the query string </p>This page only works in a Ken browser, but you seem to be using a:<br/> '. $_SERVER['HTTP_USER_AGENT'] );
        }
    }else{
        echo("<script type='text/javascript'>
                var password;
                var foo = document.getElementById('p');
                $.ajax({
                    type: 'GET',
                    url: '2/key.php',
                    async:false,
                    success: function (file_html) {
                        // success
                       password=(file_html);
                    }
                });
                var x = prompt('Enter in the password','').trim();
                if (x == password) {
                    window.location.replace('3.php?password='+password);
                }else{
                    password='';
                    foo.innerHTML = \"go <a href='2.php'>back</a> and get the password(s)\";
                }
            </script>");
}
?>

    </body>
</html>