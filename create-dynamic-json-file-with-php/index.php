<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
        <div class="container">
            <div class="row bg-warning">
                <div class="col-md-6 m-auto p-5">
                    <form action="save-form.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label>Class</label>
                            <input class="form-control" type="number" name="class">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input class="form-control" type="number" name="age">
                        </div>
                        <input type="submit" value="Save" name="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>