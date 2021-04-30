<?php
$time = date('G');
print($time . "\n");
if ($time < 12) {
  echo '午前です';
} elseif ($time >= 12) {
  echo '午後です';
}
