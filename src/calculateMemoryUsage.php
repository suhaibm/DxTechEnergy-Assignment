<?php

require "helpers/methods.php";


$arr = range(1,1000000);
echo \Src\Helpers\calculateMemoryUsage($arr);
