<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $to = "you@example.org";
	$subject = "Test";
	$message = "This is a test message";
	mail($to,$subject,$message);

}

?>
