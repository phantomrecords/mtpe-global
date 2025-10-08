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

Lady Marmalade

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
   mail('michael@phantomrecords.org', 'Phantom Records® "Lady Marmalade" Audio Preview', $body, 'From: Phantom Records® website <website@phantomrecords.org>');

//end sending notice of audio preview

$browser = get_browser(null, true);

if ($browser[platform] == "WinXP") {
	$browser[platform] = "Windows XP";
    header("Location: sample_winxp.htm");
    exit;
    }

if ($browser[platform] == "Win2000") {
    $browser[platform] = "Windows 2000";
    header("Location: sample_win98.htm");
    exit;
    }

if ($browser[platform] == "Win98") {
    $browser[platform] = "Windows 98";
    header("Location: sample_win98.htm");
    exit;
    }

if ($browser[platform] == "Win95") {
    $browser[platform] = "Windows 95";
    header("Location: sample_win95.htm");
    exit;
    }

if (eregi('macintosh', $_SERVER['HTTP_USER_AGENT'])) {
    $browser[platform] = "Macintosh";
    header("Location: http://www.phantomrecords.org/media/1800010007.aif");
    exit;
    }
	
else {
	$browser[platform] = "Unknown";
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