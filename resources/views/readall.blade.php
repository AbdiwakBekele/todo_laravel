<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <h1>
            My Tasks
        </h1>

        <table>
            <tr>
                <th>Task Name</th>
                <th>Task Description</th>
                <th> Action </th>
            </tr>

            @foreach($tasks as $task)

            <tr>
                <td> {{ $task->task_name }} </td>
                <td> {{ $task->task_desc }} </td>
                <td> <a href="/edit_task/{{$task->id}}"> Edit </a> </td>
                <td> <a href="/delete_task/{{$task->id}}"> Delete </a> </td>
            </tr>


            @endforeach


        </table>

    </body>

</html>