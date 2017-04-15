<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add an element</title>
</head>
<body>
<form action="{{url('/add')}}" method="POST">
    {{csrf_field()}}
    <h1>add an element</h1>
    请输入要插入的元素:
    <input type="text"name="data">
    <br>
    请输入要插入的位置:
    <input type="text"name="id">
    <br>
    <button type="submit">
        submit
    </button>
</form>
</body>
</html>