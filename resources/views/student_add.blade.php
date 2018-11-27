
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('public/bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/jQuery/jquery-3.3.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('public/font-awesome-4.7.0/css/font-awesome.min.css')}}">

</head>
<body>
<div class="container-fluid">
    <h3 align="center" style="color: green">
        <?php

        $msg = Session::get('message');
        if ($msg) {
            echo $msg;
            Session::put('message', '');
        }
        ?>
    </h3>
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" style="margin-top: 10px">
            <div class="panel panel-heading">
                <a href="{{URL::to('/')}}"><i class="fa fa-home" style="font-size: 25px"></i></a>
                <h2 style="text-align: center">Add Student Information</h2>
            </div>
            <div class="panel panel-body">
                {!! Form::open(['url' => '/insert_student','method'=>'post','class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        <lebel for="student_name">Student Name:</lebel>
                        <input type="text" class="form-control" name="student_name" placeholder="Enter the Student name">
                    </div>
                    <div class="form-group">
                        <lebel for="student_name">Student ID:</lebel>
                        <input type="text" class="form-control" name="student_id" placeholder="Enter the Student ID">
                    </div>
                    <div class="form-group">
                        <lebel for="student_name">Father Name:</lebel>
                        <input type="text" class="form-control" name="father_name" placeholder="Enter the Father Name">
                    </div>
                    <div class="form-group">
                        <lebel for="student_name">Mother Name:</lebel>
                        <input type="text" class="form-control" name="mother_name" placeholder="Enter the Mother Name">
                    </div>
                    <div class="form-group">
                        <lebel for="student_name">Program Name:</lebel>
                        <input type="text" class="form-control" name="program" placeholder="Enter the Program">
                    </div>
                    <div class="form-group">
                        <lebel for="student_name">Semester Name:</lebel>
                        <input type="text" class="form-control" name="semester" placeholder="Enter the Semester">
                    </div>
                    <div class="form-group">
                        <lebel for="student_name">SGPA:</lebel>
                        <input type="text" class="form-control" name="SGPA" placeholder="Enter the SGPA">
                    </div>
                    <div class="form-group">
                        <lebel for="student_name">CGPA:</lebel>
                        <input type="text" class="form-control" name="CGPA" placeholder="Enter the CGPA">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="btn_submit">SUBMIT</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</body>
</html>
