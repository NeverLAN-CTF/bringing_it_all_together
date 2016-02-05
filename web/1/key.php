<?php
$password = 'ffc88b4ca90a355f8ddba6b2c3b2af5c';
if(array_key_exists('HTTP_REFERER', $_SERVER)&&preg_match('/(\/1.php)+/', $_SERVER['HTTP_REFERER'])){
    echo('Password: '.$password.' <br/>This challenge is not done. <a href="2.php">Continue</a>');
}elseif(array_key_exists('HTTP_REFERER', $_SERVER)&&preg_match('/(\/2.php)(\?)?+/', $_SERVER['HTTP_REFERER'])){
    echo(''.$password);
}else{
    echo("It's not that easy, but I like the way you think. <br/><b> Go back and try again</b>");
}
?>
