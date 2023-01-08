<?php  

function timeAgo($time_ago) {
    $time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
    $time  = time() - $time_ago;

switch($time):
case $time <= 60;
return 'today';
break;
case $time >= 60 && $time < 3600;
return (round($time/60) == 1) ? 'today' : round($time/60).'today';
break;
case $time >= 3600 && $time < 86400;
return (round($time/3600) == 1) ? 'today' : round($time/3600).' today';
break;
case $time >= 86400 && $time < 604800;
return (round($time/86400) > 0) ? 'a day ago' : round($time/86400).' days ago';
break;
endswitch;
}


?>