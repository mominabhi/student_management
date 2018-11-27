<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function insert(Request $request)
    {

        $data=array();
        $data['student_name']=$request->student_name;
        $data['student_id']=$request->student_id;
        $data['father_name']=$request->father_name;
        $data['mother_name']=$request->mother_name;
        $data['program']=$request->program;
        $data['semester']=$request->semester;
        $data['SGPA']=$request->SGPA;
        $data['CGPA']=$request->CGPA;
        DB::table('student_infos')
            ->insert($data);
        Session::put('message','Student Information Added Successfully!');
        return Redirect::to('/add_student');

    }
    public function stdList()
    {
        $result=DB::table('student_infos')
            ->get();
        return view('student_list')
            ->with('student_data',$result);
    }
    public function delete_student($id)
    {
        DB::table('student_infos')
            ->where('id',$id)
            ->delete();
        return Redirect::to('manage_student');
    }
    public function edit_student($id)
    {
        $result=DB::table('student_infos')
            ->where('id',$id)
            ->first();

        return view('student_edit')
            ->with('edited_value',$result);
    }
    public function update_student(Request $request)
    {
        $data=array();
        $data['student_name']=$request->student_name;
        $data['student_id']=$request->student_id;
        $data['father_name']=$request->father_name;
        $data['mother_name']=$request->mother_name;
        $data['program']=$request->program;
        $data['semester']=$request->semester;
        $data['SGPA']=$request->SGPA;
        $data['CGPA']=$request->CGPA;

        DB::table('student_infos')
            ->where('id',$request->id)
            ->update($data);
        return Redirect::to('manage_student');
    }
    public function search_student(Request $request)
    {
            $result=DB::table('student_infos')
                ->where('student_id',$request->search_id)
                ->first();

            if($result)
            {
                return view('search_student')
                    ->with('student',$result);
            }
            else
            {
                echo "<h1 style='color: darkred;text-align: center'>ID not Found</h1>";
            }

    }

}
