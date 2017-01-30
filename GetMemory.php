<?php

$start = memory_get_usage();

//DO SAME

$total = memory_get_usage() - $start;

$unit = array('b', 'kb', 'mb', 'gb', 'tb', 'pb');

var_dump(@round($total / pow(1024, ($i = floor(log($total, 1024)))), 2) . ' ' . $unit[$i]);
