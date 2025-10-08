<?php

//enable sessions
session_start();

$browser = get_browser(null, true);

if (eregi('win', $_SERVER['HTTP_USER_AGENT'])) {
    $os = $browser[platform];
    }
	
if (eregi('macintosh', $_SERVER['HTTP_USER_AGENT'])) {
    $os = "Macintosh";
    }

//send notice of audio preview to company
$body = "Notice from Phantom Records.

During a visit, a user previewed audio.
This message confirms visit and provides 
product and operating system information.

Product:

Soak Up the Sun

Operating System:

{$os}

*
*
*

------------------------------------------------------------
Audio Preview note | Phantom Records® website
Phantom Records® and Tapes | Bethesda, Maryland
http://www.phantomrecords.org
------------------------------------------------------------
";
   mail('michael@phantomrecords.org', 'Phantom Records® "Soak Up the Sun" Audio Preview', $body, 'From: Phantom Records® website <website@phantomrecords.org>');

//end sending notice of audio preview

$browser = get_browser(null, true);

if ($browser[platform] == "WinXP") {
    header("Location: sample_winxp.htm");
    exit;
    }

if ($browser[platform] == "Win2000") {
    header("Location: sample_win98.htm");
    exit;
    }

if ($browser[platform] == "Win98") {
    header("Location: sample_win98.htm");
    exit;
    }

if ($browser[platform] == "Win95") {
    header("Location: sample_win95.htm");
    exit;
    }

if (eregi('macintosh', $_SERVER['HTTP_USER_AGENT'])) {
    header("Location: http://www.phantomrecords.org/media/1800010010.aif");
    exit;
    }
	
else {
	header("Location: sample_winxp.htm");
	exit;
	}


?>

<html>
<head>
<title></title>
</head>
<body>
</body>
</html>