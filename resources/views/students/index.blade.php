@extends('layouts.app')

@section('content')


        <div class="panel panel-default">
            <div class="panel-body">
                
                <div class="container">
                
                    <div class="row">
                        <div class="col-md-6"> 
                           <h5>   <span class="fa fa-graduation-cap"> </span> Under graduated students  </h5>
                        </div>
                        <div class="col-md-6">
                            <div id="custom-search-input">
                                <div class="input-group col-md-12">
                                    <input type="text" name="search" class="form-control input-lg" placeholder="Search" id="search_field" onkeyup="search()"  />
                                    <span class="input-group-btn">
                                       <a href="/students.search"> <button class="btn btn-info btn-lg" type="button">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
                @foreach($students as $student)

                
                <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="student-thumbnail">
                    <img src="{{asset('img/default-user-image.png')}}" alt="" class="img-thumbnail">
                    <div class="caption">
                                <h4>{{$student->student_lastname}}, {{$student->student_firstname}}  </h4>
                                <p>Course: {{$student->course}}</p>
                                <p>Year graduated: {{$student->year_graduated}}</p>
                                <p><a href="/students/{{$student->student_id}}" class="btn btn-info btn-view" role="button">View Profile</a> </p>
                        </div>
                </div>
                </div>
                @endforeach

               

          </div>
           {{$students->links()}}

      

@endsection