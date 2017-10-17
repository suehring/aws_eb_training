<?php

$fh = fopen("/tmp/creds","r");

while ($line = fgets($fh)) {
	print $line;
}

?>
