<?php
$dir = '/tmp/email.eml';
$text = preg_replace('/^.*?Received: from \[.*\n?/m', '', file_get_contents($dir));
file_put_contents($dir, $text);