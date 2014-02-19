<?php 
function echoIfIsSet($var) {
	if ( isset($var) ) {
	echo $var;
	} else {
	echo "&nbsp;";
	}
}
