<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h3>
            ToDo List - Edit
        </h3>

        <form method="" action="/update_task">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            Task Name: <input type="text" name="task_name" value="{{$task->task_name}}"><br>
            Task Desc: <input type="text" name="task_desc" value="{{$task->task_desc}}"> <br>
            <input type="submit">
        </form>

    </body>

</html>