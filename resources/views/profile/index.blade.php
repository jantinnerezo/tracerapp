@extends('layouts.app')


@section('content')


       @foreach($profile as $info)
       <div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
     
          <div class="panel panel-info">
            <div class="heading">
              <h3 class="panel-title">{{$info->student_firstname}}, {{$info->student_lastname}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{asset('img/default-user-image.png')}}" class="img-circle img-responsive"> </div>
                
             
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Student ID #</td>
                        <td>{{$info->student_id}}</td>
                      </tr>
                      <tr>
                        <td>Lastname</td>
                        <td>{{$info->student_lastname}}</td>
                      </tr>
                      <tr>
                        <td>Firstname</td>
                        <td>{{$info->student_firstname}}</td>
                      </tr>
                        <tr>
                        <td>Age</td>
                        <td>{{$info->student_age}}</td>
                      </tr>
                        <tr>
                        <td>Gender</td>
                        <td>{{$info->student_gender}}</td>
                      </tr>
                        <tr>
                        <td>Date of birth</td>
                        <td>{{date("F n, Y", strtotime($info->student_birthdate))}}</td>
                      </tr>
                      <tr>
                        <td>Year Graduated</td>
                        <td>{{$info->year_graduated}}</td>
                    
                    </tbody>
                  </table>           
                  
                </div>
              </div>
            </div>
                
            
          </div>
        </div>
      </div>
    </div>
    @endforeach

@endsection