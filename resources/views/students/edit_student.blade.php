@extends('layouts.app')


@section('content')

         <div class="panel panel-default">
            <div class="panel-body">
                
                <div class="container">
                
                    <div class="row">
                        <div class="col-md-6"> 
                          <h5> <span class="fa fa-edit" aria-hidden="true"></span> Edit Student </h5>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>

         @foreach($values as $student)
       {!! Form::open(['action' => ['StudentsController@update', $student->student_id ], 'method' => 'POST']) !!}

      	<div class="col-lg-12">

       
	    <div class="row">
			
				<div class="col-sm-12">

                    <div class="row">
                        <div class="col-sm-6 form-group">
							<label>Student ID</label>
							  {{Form::text('student_id',$student->student_id,['readonly', 'class' => 'form-control', 'placeholder' => 'Enter Student ID Here..'])}}
                              </div>
                        <div class="col-sm-6 form-group">
                              <label>Lastname</label>
                              {{Form::text('student_firstname',$student->student_lastname,['class' => 'form-control', 'placeholder' => 'Enter First Name Here..'])}}
                            </div>
							
                    </div>
                     <div class="row">
						
							<div class="col-sm-6 form-group">
								<label>Firstname</label>
                                {{Form::text('student_lastname',$student->student_firstname,['class' => 'form-control', 'placeholder' => 'Enter Last Name Here..'])}}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Age</label>
                               {{Form::number('student_age',$student->student_age,['class' => 'form-control', 'placeholder' => 'Enter Age Here..'])}}      
                            </div>
                     </div>


                    <div class="row">
						
							<div class="col-sm-6 form-group">
								<label>Gender</label>
                                {{Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], $student->student_gender, ['class' => 'form-control'])}}
                            </div>
                            <div class="col-sm-6 form-group">
								<label>Date of Birth</label>
                                {{Form::text('student_birthdate',$student->student_birthdate,['class' => 'form-control', 'placeholder' => 'M/D/YYYY'])}}
                            </div>
                     </div>
					  <div class="row">
						
						    <div class="col-sm-6 form-group">
								<label>Course</label>
                                <input type="text" class="form-control"  readonly value="{{$student->course}}">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Year Graduated</label>
                                 {{Form::number('graduated',$student->year_graduated,['class' => 'form-control', 'placeholder' => 'Year'])}}   
                            </div>
                     </div>


                       <div class="row">
						
					   

                            <div class="col-sm-6 form-group">
                                <label>Company</label>
                                {{Form::text('company',$student->company,['class' => 'form-control', 'placeholder' => 'Enter Company Here..'])}}   
                            </div>
                          

                            
                     </div>
                    <div class="row">

                       <div class="col-sm-10 form-group">         
                                  {{Form::submit('Save',['class' => 'btn btn-primary'])}}     
            
                    </div>
					</div>
				
				</div>
          
	</div>
        {{Form::hidden('_method','PUT')}}        
       {!! Form::close() !!}
  @endforeach
@endsection