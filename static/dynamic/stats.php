<?php 
  $uptime = trim(substr(shell_exec('uptime -p'), 3)); 

  $last1_min = 0.0;
  $last5_min = 0.0;
  $last15_min = 0.0;

  $uptime_output = trim(shell_exec('uptime'));
  $load_average_pos = strpos($uptime_output, 'load average: ');
  if ($load_average_pos !== false) {
    $averages = explode(", ", substr($uptime_output, $load_average_pos + 14));

    if (count($averages) == 3) {
      $last1_min = floatval($averages[0]);
      $last5_min = floatval($averages[1]);
      $last15_min = floatval($averages[2]);
    }
  }

  $memory_free  = 0;
  $memory_total = 256 * 1024;

  $meminfo = fopen('/proc/meminfo', 'r');
  if ($meminfo) {
    while (($line = fgets($meminfo)) !== false) {
      if (strpos($line, 'MemFree:') === 0) {
        $memory_free = intval(substr($line, 8, strlen($line) - 4 - 8));
      }
      if (strpos($line, 'MemTotal:') === 0) {
        $memory_total = intval(substr($line, 9, strlen($line) - 4 - 9));
      }
    }

    fclose($meminfo);
  }

  $temp = 25.0;

  $themal_zone0 = file_get_contents('/sys/class/thermal/thermal_zone0/temp');
  if ($themal_zone0 !== false) {
    $temp = floatval($themal_zone0) / 1000.0;
  }

  header('Content-Type: application/json; charset=utf-8');

  echo json_encode(array(
    'uptime' => $uptime,
    'last1_min' => $last1_min,
    'last5_min' => $last5_min,
    'last15_min' => $last15_min,
    'memory_free' => $memory_free,
    'memory_total' => $memory_total,
    'temp' => $temp
  ));

  exit();
