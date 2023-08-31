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
                <h2>ADD NEW USER</h2>
                <form action="{{route('adduser')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="stu_id" class="form-label">Student Id</label>
                        <input type="text" class="form-control" name="stu_id">
                    </div>
                    <div class="mb-3">
                        <label for="book" class="form-label">Book name</label>
                        <input type="text" class="form-control" name="book">
                    </div>
                    <div class="mb-3">
                        <label for="date_issue" class="form-label">date issue</label>
                        <input type="date" class="form-control" name="date_issue">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" class="form-control" name="status">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" class="form-control">
                    </div>


                </form>

            </div>
        </div>
    </div>
</body>
</html>