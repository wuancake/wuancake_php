<?php
	$height=$_REQUEST['height'];
	$weight=$_REQUEST['weight'];
	echo '你的身高是'.$height."cm\n";
	echo '你的体重是'.$weight."kg\n";
	if($height-$weight==105){
		echo '你是标准体重';
	}
	else if($height-$weight<105){
		echo '你的体重偏重';
	}
	else if($height-$weight>105){
		echo '你的体重偏轻';
	}
?>