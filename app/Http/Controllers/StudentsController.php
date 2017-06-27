<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Students;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $search = NULL;
         $students = Students::show_students($search);
         return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $stud = new Students();
        $this->validate($request, [

            'student_id' => 'required',
            'student_lastname' => 'required',
            'student_firstname' => 'required',
            'student_age' => 'required',
            'gender' => 'required',
            'student_birthdate' => 'required',
            'course' => 'required',
            'graduated' => 'required',
            'company' => 'required'

        ]);

        /* get data via post method */
            $data1 = $request->input('student_id');
            $data2 = $request->input('student_lastname');
            $data3 = $request->input('student_firstname');
            $data4 = $request->input('student_age');
            $data5 = $request->input('gender');
            $data6 = $request->input('student_birthdate');
            $data7 = $request->input('course');
            $data8 = $request->input('graduated');
            $data9 = $request->input('company');
         /* get data via post method */
         


         /* Store data on in array */
          $data = array(

                    'student_id' => $data1,
                    'student_lastname' =>$data2,
                    'student_firstname' =>$data3,
                    'student_age' =>$data4,
                    'student_gender' =>$data5,
                    'student_birthdate' =>$data6,
                    'course_id' =>$data7,
                    'year_graduated' =>$data8,
                    'company' =>$data9
            
          );

        $stud->insert_student($data);

        return redirect('/students')->with('success','Student added successfully');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Students::show_profile($id);
        return view('profile.index', ['profile' => $profile]);
    }

    public function show_edit($id){

        $values = Students::show_profile($id);
        return view('students.edit_student', ['values' => $values]);

    }

    public function search(){

        $search = Input::get('search');
        $students = Students::show_students($search);
        return view('students.index', ['students' => $students]);
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
        $values = Students::show_profile($id);
        return view('students.edit_student', ['values' => $values]);
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
        $stud = new Students();
        $this->validate($request, [

            'student_lastname' => 'required',
            'student_firstname' => 'required',
            'student_age' => 'required',
            'gender' => 'required',
            'student_birthdate' => 'required',
            'graduated' => 'required',
            'company' => 'required'

        ]);

        /* get data via post method */
            $data1 = $request->input('student_id');
            $data2 = $request->input('student_lastname');
            $data3 = $request->input('student_firstname');
            $data4 = $request->input('student_age');
            $data5 = $request->input('gender');
            $data6 = $request->input('student_birthdate');
            $data8 = $request->input('graduated');
            $data9 = $request->input('company');
         /* get data via post method */
         


         /* Store data on in array */
          $data = array(

                    'student_lastname' =>$data2,
                    'student_firstname' =>$data3,
                    'student_age' =>$data4,
                    'student_gender' =>$data5,
                    'student_birthdate' =>$data6,
                    'year_graduated' =>$data8,
                    'company' =>$data9
            
          );

        $stud->update_student($id,$data);

        return redirect('/students.show_all')->with('success','Student updated successfully');
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



  

}
