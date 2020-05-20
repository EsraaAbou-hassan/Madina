@extends('layouts.user')
@section('title','نتيجة القبول')
@section('content')
<div class="natigatElkopol">
            <div class="card border-secondary mb-3">
                    <div class="card-header">للاستعلام  عن نتيجه القبول بالمدينه</div>
                    <div class="card-body text-secondary" >
                     
                      <form>
                      <p class="card-title">أدخل:</p>
                      <br> 
                      <div class="form-group mx-sm-3 mb-2">
                          <input type="password" class="form-control"  placeholder="الرقم القومي">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2"><i class="fad fa-info-circle"style="max-size:2x"></i>إستعلام</button>
                  </form>
                  
                    </div>
         </div>
        
    </div>  
@endsection