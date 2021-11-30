<?php
exec("git pull", $output, $return);
foreach ($output as $key => $value) {
    echo $value;
    echo "<br/>";
}
