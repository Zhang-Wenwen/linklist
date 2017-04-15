<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add a post</title>
</head>
<body>
<form action="{{url('/delete')}}" method="POST">
    {{csrf_field()}}
    <h1>delete an element</h1>
    请输入要删除的元素位置:
    <input type="text"name="id">
    <br>
    <button type="submit">
        submit
    </button>
</form>
</body>
</html>