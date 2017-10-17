<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/emailrequest.log';
  $taskname = $_SERVER['HTTP_X_AWS_SQSD_TASKNAME'];
  $schedule_time = $_SERVER['HTTP_X_AWS_SQSD_SCHEDULED_AT'];
	//$fh = fopen($file,"r");
	//while ($line = 
  //$to = "suehring@braingia.org";
	//$subject = "Test";
	//$message = "This is a test message";
	//mail($to,$subject,$message);
}
?>

