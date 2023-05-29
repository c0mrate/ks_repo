<?php

function sendMessage() {
    $contents = $_POST['contents'];
    $request = curl_init("webhook.php");
    curl_setopt($request, CURLOPT_POST, true);
    curl_setopt($request, CURLOPT_POSTFIELDS, "contents=" . urlencode($contents));
    curl_setopt($request, CURLOPT_HTTPHEADER, array('Content-type: application/x-www-form-urlencoded'));
    curl_exec($request);
    curl_close($request);
    echo "<script>window.location.reload(true);</script>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['contents'])) {
        $contents = $_POST['contents'];
        $webhookUrl = "https://discord.com/api/webhooks/1112566029852348436/J7UoQ5oETd1ff9uAKzEVwh5dgsM7wmXlrmSlyrxngBIjvrtxrrSkME8l6OLVXfZInoQJ";

        $params = array(
            'username' => "Stranger",
            'content' => $contents
        );

        $curl = curl_init($webhookUrl);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);

        echo "<script>window.location.reload(true);</script>";
    }
}

?>
