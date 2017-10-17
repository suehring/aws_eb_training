<?php

require 'vendor/autoload.php';
require 'creds.inc';
require 'url.inc';

use Aws\Sqs\SqsClient;

$client = SqsClient::factory(array(
	'credentials' => array(
		'secret' => AWSSECRET,
		'key' => AWSKEY
	),
	'version' => 'latest',
	'region' => 'us-west-2'
));

$emailaddr = json_encode(array('email' => $_POST['email']));

$q = QUEUE_URL;

$client->sendMessage(array(
	'QueueUrl' => $q,
	'MessageBody' => $emailaddr
));


?>
