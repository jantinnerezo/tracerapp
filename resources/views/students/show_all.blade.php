@extends('layouts.app')



@section('content')

             <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                 
                  <th>ID</th>
                  <th>Lastname</th>
                  <th>Firstname</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Birthdate</th>
                  <th>Course</th>
                  <th>Year Graduated</th>
                  <th>Company</th>
                  <th> Actions </th>
                </tr>
              </thead>
              <tbody>

              @foreach($students as $student)
                <tr>
                  <td>{{$student->student_id}}</td>
                  <td>{{$student->student_lastname}}</td>
                  <td>{{$student->student_firstname}}</td>
                  <td>{{$student->student_age}}</td>
                  <td>{{$student->student_gender}}</td>  
                  <td>{{$student->student_birthdate}}</td>
                  <td>{{$student->course}}</td>
                  <td>{{$student->year_graduated}}</td>
                  <td>{{$student->company}}</td>
                  <td>
                       
                        <a href="/students/{{$student->student_id}}" class="btn btn-success" role="button"> <span class="fa fa-eye" aria-hidden="true"></span> </a>
                       

                      <a href="/students/{{$student->student_id}}/edit" class="btn btn-info" role="button"> <span class="fa fa-edit" aria-hidden="true"></span> </a>

                       <a href="/students/{{$student->student_id}}" class="btn btn-danger" role="button"> <span class="fa fa-trash" aria-hidden="true"></span> </a>
                        </td>
                </tr>
             @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


@endsection