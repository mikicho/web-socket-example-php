<html>
    <head></head>
    <body>
        <script>
            var conn = new WebSocket('ws://localhost:8080/echo');
            conn.onmessage = function(e) { console.log(e.data); };
            conn.onopen = function(e) { conn.send('Hello Me!'); };
        </script>
    </body>
</html>