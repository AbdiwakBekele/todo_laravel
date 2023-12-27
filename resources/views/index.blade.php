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
            ToDo List - Create
        </h3>

        <a href="/tasks"> Read My Tasks</a>


        <form method="post" action="/save_tasks">
            @csrf
            Task Name: <input type="text" name="task_name"><br>
            Task Desc: <input type="text" name="task_desc"> <br>
            <input type="submit">
        </form>

    </body>

</html>