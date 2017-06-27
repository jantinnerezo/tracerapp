@extends('layouts.app')


@section('content')

       

         <div class="panel panel-default">
            <div class="panel-body">
                
                <div class="container">
                
                    <div class="row">
                        <div class="col-md-6"> 
                          <h5> <span class="fa fa-plus" aria-hidden="true"></span> Add Student </h5>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
       {!! Form::open(['action' => 'StudentsController@store', 'method' => 'POST']) !!}

      	<div class="col-lg-12">
	    <div class="row">
			
				<div class="col-sm-12">

                    <div class="row">
                        <div class="col-sm-6 form-group">
							<label>Student ID</label>
							  {{Form::text('student_id','',['class' => 'form-control', 'placeholder' => 'Enter Student ID Here..'])}}
                              </div>
                        <div class="col-sm-6 form-group">
                              <label>Lastname</label>
                              {{Form::text('student_firstname','',['class' => 'form-control', 'placeholder' => 'Enter First Name Here..'])}}
                            </div>
							
                    </div>
                     <div class="row">
						
							<div class="col-sm-6 form-group">
								<label>Firstname</label>
                                {{Form::text('student_lastname','',['class' => 'form-control', 'placeholder' => 'Enter Last Name Here..'])}}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Age</label>
                               {{Form::number('student_age','',['class' => 'form-control', 'placeholder' => 'Enter Age Here..'])}}      
                            </div>
                     </div>


                    <div class="row">
						
							<div class="col-sm-6 form-group">
								<label>Gender</label>
                                {{Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], null, ['class' => 'form-control'])}}
                            </div>
                         <div class="col-sm-6 form-group">
								<label>Date of Birth</label>
                                 {{Form::text('student_birthdate','',['class' => 'form-control', 'placeholder' => 'M/D/YYYY'])}}
                            </div>
                     </div>
					  <div class="row">
						
							<div class="col-sm-6 form-group">
								<label>Course</label>
                                <select id="course" name="course" class="form-control">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->course_id}}">{{ $course->course}}</option>
                                    @endforeach             
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Year Graduated</label>
                                 {{Form::number('graduated','',['class' => 'form-control', 'placeholder' => 'Day'])}}   
                            </div>
                     </div>


                       <div class="row">
						
					   

                            <div class="col-sm-6 form-group">
                                <label>Company</label>
                                {{Form::text('company','',['class' => 'form-control', 'placeholder' => 'Enter Company Here..'])}}   
                            </div>
                          

                            
                     </div>
                    <div class="row">

                       <div class="col-sm-10 form-group">         
                                  {{Form::submit('Submit values',['class' => 'btn btn-primary'])}}     
            
                    </div>
					</div>
				
				</div>
	</div>
                
       {!! Form::close() !!}

@endsection