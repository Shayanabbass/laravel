<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">

        <div class="col-6">
        <a class="btn btn-success mb-2"href="{{route('add')}}">Add new</a> 

    <table class="table table-bordered table-striped ">

        <tr>

            <th>ID</th>

            <th>id</th>
            <th>stu_id</th>
            <th>book</th>
            <th>date_issue</th>
            <th>status</th>
            <th>View</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>

    @foreach ($data as $user )
    <tr>
        <td>{{$user->id}}</td>

        <td>{{$user->id}}</td>
        <td>{{$user->stu_id}}</td>
        <td>{{$user->book}}</td>
        <td>{{$user->date_issue}}</td>
        <td>{{$user->status}}</td>
       <td><a class="btn btn-primary"href="{{route('view',$user->id)}}">view</a> </td>
       <td><a class="btn btn-danger"href="{{route('delete',$user->id)}}">delete</a> </td>
       <td><a class="btn btn-warning"href="{{route('update.page',$user->id)}}">Update</a> </td>





        <tr>

    @endforeach
</div>
</div>
</div>
</table>
</body>
</html>