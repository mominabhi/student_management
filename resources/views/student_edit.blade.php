
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
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" style="margin-top: 10px">
            <div class="panel panel-heading">
                <a href="{{URL::to('/')}}"><i class="fa fa-home" style="font-size: 25px"></i></a>
                <h2 style="text-align: center">Edit Student Information</h2>
            </div>
            <div class="panel panel-body">
                {!! Form::open(['url' => '/update_student','method'=>'post','class'=>'form-horizontal']) !!}
                <div class="form-group">
                    <lebel for="student_name">Student Name:</lebel>
                    <input type="hidden"  name="id" value="{{$edited_value->id}}"/>
                    <input type="text" class="form-control" name="student_name" value="{{$edited_value->student_name}}">
                </div>
                <div class="form-group">
                    <lebel for="student_name">Student ID:</lebel>
                    <input type="text" class="form-control" name="student_id" value="{{$edited_value->student_id}}">
                </div>
                <div class="form-group">
                    <lebel for="student_name">Father Name:</lebel>
                    <input type="text" class="form-control" name="father_name" value="{{$edited_value->father_name}}">
                </div>
                <div class="form-group">
                    <lebel for="student_name">Mother Name:</lebel>
                    <input type="text" class="form-control" name="mother_name" value="{{$edited_value->mother_name}}">
                </div>
                <div class="form-group">
                    <lebel for="student_name">Program Name:</lebel>
                    <input type="text" class="form-control" name="program" value="{{$edited_value->program}}">
                </div>
                <div class="form-group">
                    <lebel for="student_name">Semester Name:</lebel>
                    <input type="text" class="form-control" name="semester" value="{{$edited_value->semester}}">
                </div>
                <div class="form-group">
                    <lebel for="student_name">SGPA:</lebel>
                    <input type="text" class="form-control" name="SGPA"  value="{{$edited_value->SGPA}}">
                </div>
                <div class="form-group">
                    <lebel for="student_name">CGPA:</lebel>
                    <input type="text" class="form-control" name="CGPA" value="{{$edited_value->CGPA}}">
                </div>
                <button type="submit" class="btn btn-success btn-block" name="btn_submit">Edit Student Info</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</body>
</html>
