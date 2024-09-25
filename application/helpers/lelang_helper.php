<?php
function textlimit($string_text, $number_limit){
	$tmp    = ((strlen($string_text) > $number_limit)) ? (substr($string_text,0,$number_limit-4)." ...") : $string_text;
	return $tmp;
}
function cleanHTML($htmltext){
	$patt = array('@<script[^>]*?>.*?</script>@si','@<[\\/\\!]*?[^<>]*?>@si','@<style[^>]*?>.*?</style>@siU','@<![\\s\\S]*?--[ \\t\\n\\r]*>@');
	$text = preg_replace($patt, '', $htmltext);
	return $text;
}
function climiter($str, $n = 500, $end_char = '&#8230;'){
    if (strlen($str) < $n){ 
        return $str;
    }
	$str = preg_replace("/\s+/", ' ', preg_replace("/(\r\n|\r|\n)/", " ", $str));
    if (strlen($str) <= $n)	{ 
        return $str;
    }						
    $out = "";
    foreach (explode(' ', trim($str)) as $val){
	    $out .= $val.' ';			
	    if (strlen($out) >= $n){
		    return trim($out).$end_char;
	    }		
    }
}
function decode_htmlspecialchars($str)
{
    // $str = htmlspecialchars_decode($str);
    $str = html_entity_decode($str);
    $str = stripslashes($str);

    return $str;
}
function antiInjection($str) {
    $r = stripslashes(strip_tags(htmlspecialchars($str, ENT_QUOTES)));
    return $r;
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
?>