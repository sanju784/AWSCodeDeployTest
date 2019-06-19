<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    $url = $_POST['target_url'];
    $appoint = array(
        'member_id'=> $_POST['member_id'],
        'service_id'=> $_POST['service_id'],
        'appoint_id'=> $_POST['appoint_id'],
        'satisfaction_rating'=> $_POST['satisfaction_rating'],
        'rating_question' => $_POST['rating_question'],
        'rating_comment'=> $_POST['rating_comment']
    );
    $data = http_build_query($appoint, '', '&');
    $header = array(
        'Content-Type: application/x-www-form-urlencoded',
        'Content-Length: '.strlen($data)
    );

    $context = array(
        'http' => array(
                'method'  => 'POST',
                'ignore_errors' => true,
                'header'  => implode("\r\n", $header),
                'content' => $data
        )
    );
    $res = file_get_contents($url, false, stream_context_create($context));
    echo $res;
}
?>
