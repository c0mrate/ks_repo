<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Firesaiyagin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="firstDoor.php" method="POST" id="my_form">
        <label>
            <i data-feather="hash"></i>
            <input name="contents" id="contents" autocomplete="off" type="text" placeholder="Eed Asadawut/dev" spellcheck="false">
        </label><br>
        <button id="post_Button" type="submit" onclick="sendWebhook();"></button>
    </form>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="main.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("contents").focus();
    });

    document.getElementById("my_form").addEventListener("submit", function() {

        setTimeout(function() {
            location.reload();
        }, 250);
    });
</script>
<!-- <script>
    function sendWebhook() {
      var url = 'https://discord.com/api/webhooks/1112566006808858684/pJMZyD0c9prVoj62Rk0qIm0Cg_sblmSOih5CvR5hyXyimC_qbrgULvDfLvYO3uI9Y6p5';
      var message = 'Test message';

      var xhr = new XMLHttpRequest();
      xhr.open('POST', url);
      xhr.setRequestHeader('Content-Type', 'application/json');
      xhr.send(JSON.stringify({ content: message }));
    }
  </script> -->

</body>

</html>
