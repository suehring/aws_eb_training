<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  /*$file = '/tmp/emailrequest.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);*/
  $to = "suehring@braingia.org";
	$subject = "Test";
	$message = "This is a test message";
	mail($to,$subject,$message);

}

?>
