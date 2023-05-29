feather.replace();

const input = document.querySelector('input');

input.addEventListener('input', () => {
    const rxSpace = /\s+/g;
    const rxDashes = /-+/g;
    const rxDashStart = /^-/;

    input.value = input.value
        .replace(rxSpace, ' ')
        .replace(rxDashes, '-')
        .replace(rxDashStart, '');
});

function sendMessage() {
    const contents = document.getElementById('contents').value;
    const request = new XMLHttpRequest();
    request.open("POST", "webhook.php");
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    const params = "contents=" + encodeURIComponent(contents);
    request.send(params);
    console.log("Message Sent");
}
  