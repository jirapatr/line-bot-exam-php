<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <script>
        function Auth() {
            var URL = 'https://notify-bot.line.me/oauth/authorize?';
            URL += 'response_type=code';
            URL += '&client_id=Be6gfRmqgAE9xt2NUbNgf9';
            URL += '&redirect_uri=http://dukeace.herokuapp.com/line.php';//ถ้า login แล้ว เลือกกลุ่มหรือตัวเอง ให้กลับมาหน้านี้
            URL += '&scope=notify';
            URL += '&state=oxy258@gmail.com';//กำหนด  user หรือ อะไรก็ได้ที่สามารถบอกถึงว่าเป็น user ในระบบ
            window.location.href = URL;
        }
    </script>
</head>
<body>
    <button onclick="Auth();">LineNotify</button>
</body>
</html>
