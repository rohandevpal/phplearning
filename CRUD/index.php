<?php

//add user's data and perform crud operation on the same


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>User's data </title>
    <style>
        .main-box{
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <div class="container main-box">
        <div class="row mt-5">
            <div class="col-6">
                <caption>
                    <h3 class="text-center">
                        User's Data
                    </h3>
                </caption>
                <form action="" method="POST">
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" placeholder="type your name" name="name" id="name">
                    </div>
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" placeholder="tyep your email" name="email" id="email">
                    </div>
                    <div class="form-group mt-3 ">
                        <input type="phone" name="phone" id="phone" class="form-control" placeholder="enter your phone">
                    </div>
                    <div class="form-group mt-2 pb-5">
                        <button class="btn btn-primary w-100" name="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <caption>
                    <h3 class="text-center">
                        User's Data table
                    </h3>
                </caption>
                <table class="table table-dark table-responsive">
                    <thead class="text-uppercase">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>