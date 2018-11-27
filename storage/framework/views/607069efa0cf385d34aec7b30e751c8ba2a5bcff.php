<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo e(asset('public/bootstrap/css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('public/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/jQuery/jquery-3.3.1.min.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('public/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
</head>
<body>
<div class="container-fluid">
    <div class="col-sm-12" style="margin-top: 10px">
        <div class="panel panel-info">
            <div class="panel panel-heading">
                <a href="<?php echo e(URL::to('/')); ?>"><i class="fa fa-home" style="font-size: 25px"></i></a>
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
                            <td><?php echo e($student->student_id); ?></td>
                            <td><?php echo e($student->student_name); ?></td>
                            <td><?php echo e($student->father_name); ?></td>
                            <td><?php echo e($student->mother_name); ?></td>
                            <td><?php echo e($student->program); ?></td>
                            <td><?php echo e($student->semester); ?></td>
                            <td><?php echo e($student->SGPA); ?></td>
                            <td><?php echo e($student->CGPA); ?></td>
                            <td>
                                <a href="<?php echo e(URL::to('/delete_student/'.$student->id)); ?>" onclick="return check_delete()">
                                    <i class="fa fa-trash" style="font-size:30px;color:darkred;margin-left: 10px"></i>
                                </a>
                                <a href="<?php echo e(URL::to('/edit_student/'.$student->id)); ?>">
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

