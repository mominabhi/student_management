<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student Management</title>
        <link rel="stylesheet" href="<?php echo e(asset('public/bootstrap/css/bootstrap.min.css')); ?>">
        <script src="<?php echo e(asset('public/bootstrap/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/jQuery/jquery-3.3.1.min.js')); ?>"></script>
        <link rel="stylesheet" href="<?php echo e(asset('public/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /*for search bar*/

            form.example input[type=text] {
                padding: 10px;
                font-size: 13px;
                border: 1px solid grey;
                float: left;
                width: 80%;
                background: #f1f1f1;
            }

            form.example button {
                float: left;
                width: 20%;
                padding: 10px;
                background: grey;
                color: white;
                font-size: 17px;
                border: 1px solid grey;
                border-left: none;
                cursor: pointer;
                height: 40px;
            }

            form.example button:hover {
                background: gray();
            }

            form.example::after {
                content: "";
                clear: both;
                display: table;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                   Student Information
                </div>

                <div>
                    <div class="links col-sm-7">
                        <a href="<?php echo e(URL::to('/add_student')); ?>">Add Student</a>
                        <a href="<?php echo e(URL::to('/manage_student')); ?>">Student List</a>
                    </div>
                    <div class="col-sm-5">
                        <?php echo Form::open(['url' => '/search_student','method'=>'post','class'=>'example']); ?>

                            <input type="text" placeholder="Enter Student ID .." name="search_id">
                            <button type="submit" style="opacity: .8"><i class="fa fa-search"></i></button>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
