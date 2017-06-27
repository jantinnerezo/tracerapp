<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Students extends Model
{

    public static function show_students($search = NULL){

          if($search != NULL){
            
             $students = DB::table('students')
                    ->join('course', 'students.course_id', '=', 'course.course_id')
                    ->where('students.student_firstname', 'like', $search)
                    ->orWhere('students.student_lastname', 'like', $search)
                    ->orWhere('students.student_id' ,'like', $search)
                    ->get();
          }

          $students = DB::table('students')
                    ->join('course', 'students.course_id', '=', 'course.course_id')
                    ->paginate(6);

            return $students;

    }
    public static function show_profile($id){

             $students = DB::table('students')
                    ->join('course', 'students.course_id', '=', 'course.course_id')
                    ->where('students.student_id',  $id)
                    ->get();

          //  $mysqldate = $students->student_birthdate;
          //  $bdate = date("mm-dd-YYYY", strtotime($mysqldate));


           /* $info = array(

                'student_lastname' => $students->student_lastname,
                'student_firstname' => $students->student_firstname,
                'course' => $students->course,
                'student_age' => $students->student_age,
                'student_gender' => $students->student_gender,
                'student_birthdate' => $students->student_birthdate,
                'year_graduated' => $students->student_firstname
            );*/

            return $students;
    }

    public static function courses(){

         $courses = DB::table('course')
                    ->get();
        
          return $courses;

        
    }

    public function insert_student($data){

        DB::table('students')->insert($data);
    }

    public function update_student($id,$data){

        DB::table('students')
            ->where('student_id', $id)
            ->update($data);
    }
}
