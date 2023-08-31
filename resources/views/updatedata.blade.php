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
          
            <div class="col-4">
                <h2>UPDATE NEW USER</h2>
                <form action="{{route('updateuser',$data->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="stu_id" class="form-label">Student Id</label>
                        <input type="text" value="{{$data->stu_id}}" class="form-control" name="stu_id">
                    </div>
                    <div class="mb-3">
                        <label for="book"  class="form-label">Book name</label>
                        <input type="text" value="{{$data->book}}" class="form-control" name="book">
                    </div>
                    <div class="mb-3">
                        <label for="date_issue" class="form-label">date issue</label>
                        <input type="date" value="{{$data->date_issue}}" class="form-control" name="date_issue">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" value="{{$data->status}}" class="form-control" name="status">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit" class="form-control">Update</button>
                    </div>


                </form>

            </div>
        </div>
    </div>
</body>
</html>