<?php  

function timeAgo($time_ago) {
    $time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
    $time  = time() - $time_ago;

switch($time):
case $time <= 60;
return 'just now';
break;
case $time >= 60 && $time < 3600;
return (round($time/60) == 1) ? 'a minute' : round($time/60).' minutes ago';
break;
case $time >= 3600 && $time < 86400;
return (round($time/3600) == 1) ? 'an hour ago' : round($time/3600).' hours ago';
break;
case $time >= 86400 && $time < 604800;
return (round($time/86400) > 0) ? 'a day ago' : round($time/86400).' days ago';
break;
endswitch;
}


function daysAgo($time_ago) {
    $time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
    $time  = time() - $time_ago;

switch($time):
case $time >= 86400 && $time < 604800;
return (round($time/86400));
break;

endswitch;
}

?>