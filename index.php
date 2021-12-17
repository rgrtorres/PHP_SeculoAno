<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

function Century($year) {
    $century = Carbon::createFromFormat('Y', $year)->century;
    return "Ano {$year} = século {$century}";
}

echo Century(2000);