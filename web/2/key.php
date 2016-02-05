<?php
$password = 'SSB3YW50IGEgY2hhbGxlbmdl';
if(array_key_exists('HTTP_REFERER', $_SERVER)&&preg_match('/(\/3.php)(\?)?+/', $_SERVER['HTTP_REFERER'])){
    echo(''.$password);
}else{
    echo("It's not that easy, but I like the way you think. <br/><b> Go back and try again</b>");
}
?>
