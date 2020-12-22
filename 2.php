<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<textarea name="" id="1" cols="20" rows="5" class="btn"></textarea>

<script>

    $( "#1" ).click(function() {
        $( "#1" ).load( "1.txt" );
    });

</script>

</body>
</html>
