<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class PagesController extends Controller
{
    public function index(){

        $title = 'active';
        return view('pages.index', compact('title'));
       // return view('pages.index')->with('title', $title);

    }
    public function about(){

        $data = array(

            'title' => 'LC Tracer System - About us',
            'frameworks' => ['CodeIgniter', 'Laravel', 'Cake PHP']

        );
         return view('pages.about')->with($data);

    }

     /* Admin pages */
    public function add_student_page(){

         $courses = Students::courses();
         return view('students.add_student' ,['courses' => $courses]);
        

    }


     
    public function tabled_show(){

         $stud = new Students();
         $students = $stud->show_students();
         return view('students.show_all', ['students' => $students]);
    }
   

   
  
}
