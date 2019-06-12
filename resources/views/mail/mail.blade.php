<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:600" rel="stylesheet">
    <style>
        h2 span{
            font-family: 'Montserrat Alternates', sans-serif;
        }
    </style>
</head>
<body>
<h2><span style="color: #ff4a5a;">Təmirçi</span> -dən yeni mesaj</h2>

<div>
    <b>Ad</b>: {{$name}} <br>
    <b>Mövzu</b>: {{$subject}} <br>
    <b>Elektron ünvanı</b>: {{ $email }} <br>
    <b>Mesaj</b>: {{ $bdmessage }}
</div>

</body>
</html>