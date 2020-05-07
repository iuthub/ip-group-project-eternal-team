<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

@foreach($items as $item)
    {{$item->name}}
@endforeach

</body>
</html>