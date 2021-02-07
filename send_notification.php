<?php
function sendNotification(){
    $url ="https://fcm.googleapis.com/fcm/send";

    $fields=array(
        // "to"=>$_REQUEST['token'],
        "to"=>"flWughnurFpeUp93NLok40:APA91bGPIYV7cHjk5yJWl7RJaPBF95fZINXN0u3_YFYbvvUcM4iT_oLj0NjfAzpXbrdNuhI_z4krgOb4vI-qsaKjwyH85HXuQEGPNn3cTkHVKPXrhtfOYFj0CdLk7ZgCiwvCwOqRl2wd",
        "notification"=>array(
            "body"=>"New inquiry transfer to you",
            "title"=>"New inquiry added",
            "icon"=> "https://homepages.cae.wisc.edu/~ece533/images/airplane.png",
            "click_action"=>"https://google.com"
        )
    );

    $headers=array(
        'Authorization: key=AAAAOboYfZg:APA91bG8L23ewlNOsBNSEtTT0pNm_fuXnK-XOK4Qr6crSY7nImWlTuuUIJiNcqijhoqeHTrXuS8iDdC91A1qecgPjII7f790aWKvobYBkJVID2nsQoIbQpcnE2NbL1LTO9WoML-N0giD',
        'Content-Type:application/json'
    );

    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
    $result=curl_exec($ch);
    print_r($result);
    curl_close($ch);
}
sendNotification();