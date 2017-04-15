<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add a post</title>
</head>
<body>
<form action="{{url('/push')}}" method="POST">
    {{csrf_field()}}
    <h1>push an element at the end</h1>
    请输入增加的元素值:
    <input type="text"name="data">
    <br>
    <button type="submit">
        submit
    </button>
</form>
</body>
</html>