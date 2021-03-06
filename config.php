<?php
// The configuration file for janhoslide

// Include the right language pack. REQUIRED. Currently available = {'lan/fi.php', 'lan/eng.php' }
require 'lan/eng.php';

// Folder for media
$IMG = 'images';
$VID = 'videos';

// Folder for archive
$ARC = 'archive';

//Default resolution
$WIDTH = '1920';
$HEIGHT = '1080';

// Default showtime and switchtime values
$SHOWTIME = 15000;
$SWITCHTIME = 1500;

// Default slide switching style. Currently available = { 'noeffect', 'fade', 'slidefromleft', 'slidefromright' }
$CHANGETYPE = 'fade';

// After how many loops the show will be refreshed
$REFRESHTIMES = 20;

// Option to play the video audio. 1 = on, 0 = off
$VIDEOSOUND = 1;
