<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['contents'])) {
        $contents = $_POST['contents'];
        $webhookUrl = "https://discord.com/api/webhooks/1112566006808858684/pJMZyD0c9prVoj62Rk0qIm0Cg_sblmSOih5CvR5hyXyimC_qbrgULvDfLvYO3uI9Y6p5";

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

        echo "Message Sent";
    }
}

?>