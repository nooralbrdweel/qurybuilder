<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
     @foreach ($tasks as $task)
     <li><a href="tasks/show/{{$task->id}}"></a>{{$task->title}}</li>

     @endforeach
     </ul>

</body>
</html>
