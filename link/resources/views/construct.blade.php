<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>construct a list</title>
</head>
<body>
<form action="{{url('/construct')}}" method="POST">
    {{csrf_field()}}
    <textarea type=text name="list" row="100" cols="60"></textarea>
    <button type="submit">
        submit
    </button>
</form>
</body>
</html>