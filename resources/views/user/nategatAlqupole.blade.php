@extends('layouts.user')
@section('title','نتيجة القبول')
@section('content')

<form  action="/nategatAlqupole" method="post"  enctype="multipart/form-data">  
   @csrf
  <div class="natigatElkopol">
              <div class="card border-secondary mb-3">
                      <div class="card-header">للاستعلام  عن نتيجه القبول بالمدينه</div>
                      <div class="card-body text-secondary" >
                      
                        
                        <p class="card-title">أدخل:</p>
                        <br> 
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control" name="student_ssn" value="{{old('student_ssn')}}" 
                             placeholder="الرقم القومي">
                      </div>
                      <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-info-circle"style="max-size:2x">
                    </i>إستعلام</button>
                    
                    
                      </div>
          </div>
          
      </div>  
  </form>  
@endsection