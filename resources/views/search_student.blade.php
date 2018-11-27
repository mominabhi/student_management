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
    <div class="col-sm-12" style="margin-top: 10px">
        <div class="panel panel-info">
            <div class="panel panel-heading">
                <a href="{{URL::to('/')}}"><i class="fa fa-home" style="font-size: 25px"></i></a>
                <h3 style="text-align:center">Student Information</h3>
            </div>
            <div class="panel panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student name</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Program</th>
                        <th>Semester</th>
                        <th>SGPA</th>
                        <th>CGPA</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$student->student_id}}</td>
                            <td>{{$student->student_name}}</td>
                            <td>{{$student->father_name}}</td>
                            <td>{{$student->mother_name}}</td>
                            <td>{{$student->program}}</td>
                            <td>{{$student->semester}}</td>
                            <td>{{$student->SGPA}}</td>
                            <td>{{$student->CGPA}}</td>
                            <td>
                                <a href="{{URL::to('/delete_student/'.$student->id)}}" onclick="return check_delete()">
                                    <i class="fa fa-trash" style="font-size:30px;color:darkred;margin-left: 10px"></i>
                                </a>
                                <a href="{{URL::to('/edit_student/'.$student->id)}}">
                                    <i class="fa fa-edit" style="font-size:30px;color:darkgreen;padding-left:3px"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>

