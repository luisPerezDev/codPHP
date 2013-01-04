<?php
    echo 'Variable pasdas mediante GET : <br />';
    
    foreach ($_GET as $key => $value) {
        echo "$key : $value";
    }
?>