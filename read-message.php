<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Messages</title>
    <style>
        body { font-family: Arial, sans-serif; }
        #chat { border: 1px solid #ccc; padding: 10px; height: 300px; overflow-y: scroll; }
        #message { width: 80%; padding: 5px; }
        #send { padding: 5px; }
    </style>
</head>
<body>
    <h1>Chat Messages</h1>
    <div id="chat"></div>

    <script>
        // Replace with actual WebSocket URL
        const wsUrl = 'ws://localhost:8080';
        var conn = new WebSocket(wsUrl);

        var chat = document.getElementById('chat');

        conn.onmessage = function(e) {
            var msg = document.createElement('div');
            msg.textContent = e.data;
            chat.appendChild(msg);
            chat.scrollTop = chat.scrollHeight;
        };
    </script>
</body>
</html>
