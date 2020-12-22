<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<style>
    textarea{
        width: 100px;
        height: 100px;
        position: absolute;
        background: red;
    }
</style>


<textarea name="" id="1""></textarea>


<script>
    let elemLeft, elemTop, maxElemLeft, maxElemTop, elem;

    elem = document.getElementById('1');

    maxElemLeft = document.documentElement.clientWidth - elem.offsetWidth;
    maxElemTop = document.documentElement.clientHeight - elem.offsetHeight;

    elem.onmousemove = handler;

    function handler() {
        elemLeft = Math.random() * maxElemLeft;
        elem.style.left = elemLeft + 'px';
        elemTop = Math.random() * maxElemTop;
        elem.style.top = elemTop + 'px';
    }
</script>

</body>
</html>
