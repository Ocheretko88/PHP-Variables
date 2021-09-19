<?php
$date = '31-12-2020';
$lines = explode("-", $date);
krsort($lines);
print_r(implode(".", $lines));
