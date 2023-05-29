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
  
    fetch('webhook.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: 'contents=' + encodeURIComponent(contents)
    })
    .then(response => {
      if (response.ok) {
        console.log('Message Sent');
      } else {
        console.log('Error:', response.statusText);
      }
    })
    .catch(error => {
      console.log('Error:', error);
    });
  }
  