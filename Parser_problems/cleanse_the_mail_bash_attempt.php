<?php

// s/Received\:*from*\[[0-9][0-9][0-9].[0-9][0-9][0-9].[0-9][0-9][0-9].[0-9][0-9][0-9]\]*by*spamcop.net*with*HTTP\;*Thu\,*[0-9][0-9]*[A-Z][a-z][a-z]*[0-9][0-9][0-9]\n*[0-9][0-9]:[0-9][0-9]:[0-9][0-9]*GMT//g
// help
// Maybe this works?

$cleanse = shell_exec("sed 's/Received\:\*from\*\[[0-9][0-9][0-9]\.[0-9][0-9][0-9]\.[0-9][0-9][0-9]\.[0-9][0-9][0-9]\]\*by\*spamcop\.net\*with\*HTTP\;\*Thu\,\*[0-9][0-9]\*[A-Z][a-z][a-z]\*[0-9][0-9][0-9]\n\*[0-9][0-9]\:[0-9][0-9]\:[0-9][0-9]\*GMT//g' /opt/abuseio/email.eml")
