 <?php
date_default_timezone_set("America/New_York");
header("Content-Type: text/event-stream\n\n");

$counter = rand(1, 3);
while (1) {
  // Every second, sent a "ping" event.
  
  echo "event: ping\n";
  $curDate = date(DATE_ISO8601);
  echo 'data: {"time": "' . $curDate . '"}';
  echo "\n\n";
  
  // Send a simple message at random intervals.
  
  $counter--;
  
  if ($counter != 2) {
    echo 'data: This is a message at time ' . $curDate . "\n\n";
    $counter = rand(1, 3);
  }
  
  flush();
  sleep(2);
}
?>
