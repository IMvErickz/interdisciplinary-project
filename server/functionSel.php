<?php

function select($list, $fildValue, $display, $select){
    foreach ($list as $l) {
        echo "<option value='", $l[$fildValue], "' ";
        echo $l[$fildValue] == $select
           ? " select " : "";
        echo "'>";
        echo $l[$display];
        echo "</option>";
    }
}