<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write Message</title>
    <style>
        body { font-family: Arial, sans-serif; }
        #chat { border: 1px solid #ccc; padding: 10px; height: 300px; overflow-y: scroll; }
        #message { width: 80%; padding: 5px; }
        #send { padding: 5px; }
    </style>
</head>
<body>
    <h1>Write a Message</h1>
    <input type="text" id="message" placeholder="Type your message...">
    <button id="send">Send</button>

    <script>
        // Replace with actual WebSocket URL
        const wsUrl = 'ws://localhost:8080';
        var conn = new WebSocket(wsUrl);

        var messageInput = document.getElementById('message');
        var sendButton = document.getElementById('send');

        sendButton.onclick = function() {
            var msg = messageInput.value;
            conn.send(msg);
            messageInput.value = '';
        };
    </script>
</body>
</html>
