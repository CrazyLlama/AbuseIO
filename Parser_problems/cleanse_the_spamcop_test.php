<?php

/*
 *  And here we see the rare, untamed regex attempting to remove a line which the spamcop parser for abuse io just does not like...
 *
 *  ...I think
 */
 
$path_to_file = '/opt/abuseio/email.eml';
$file_contents = file_get_contents($path_to_file);

//Lets get this to work

if(preg_match($pattern, $file_contents))
  {
	    $file_contents = $file_contents;
		$matching_string = preg_match("#Received: from \[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\] by spamcop\.net	with HTTP; \w{3}, \d{2} \w{3} \d{4}
 \d{2}:\d{2}:\d{2} \w{3}#", $file_contents);
        $file_contents = str_replace($to_replace,"",$file_contents);
		file_put_contents($path_to_file,$file_contents);
  }