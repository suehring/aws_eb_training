<?php

require 'vendor/autoload.php';
require 'url.inc';

use Aws\Sqs\SqsClient;

$client = SqsClient::factory(array(
	'credentials' => array(
		'key' => '',
		'secret' => ''
	),
	'version' => 'latest',
	'region' => 'us-west-2'
));

$q = QUEUE_URL;

$client->sendMessage(array(
	'QueueUrl' => $q,
	'MessageBody' => 'Test message'
));

$result = $client->receiveMessage(array(
    'QueueUrl' => $q
));

foreach ($result->getPath('Messages/*/Body') as $messageBody) {
    // Do something with the message
    echo $messageBody;
}

?>
