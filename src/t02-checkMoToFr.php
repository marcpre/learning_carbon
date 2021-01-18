<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

function checkMsgFired() {
    $now = Carbon::now();
    // $now = Carbon::createFromFormat('d/m/Y H:i:s', "19/1/2021 14:43:00");

    $lastSendPost = Carbon::createFromFormat('d/m/Y H:i:s', "18/1/2021 14:43:00"); // the posting has already happended today

    $post = array();
    $post['Frequency'] = "MoToFr"; // send only from monday to friday at a specific date once
	$post['sendPost'] = Carbon::createFromFormat('H:i:s', "14:40:00"); // when the post should be send


	if($post['Frequency'] === "MoToFr") {
        // if it is a WEEKDAY
        if($now->dayOfWeek !== Carbon::SATURDAY or $now->dayOfWeek !== Carbon::SUNDAY) {
            // $lastPosting didn't happen today
            if(!$lastSendPost->isToday() && $now->gt($post['sendPost'])){
                return true;
            }
            else{
                return false;
            }
        } else {
            return false;
        }
    }
}


var_dump(checkMsgFired());