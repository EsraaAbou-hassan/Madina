@extends('layouts.user')
@section('title','التماس')
@section('content')

    <div class="eltmas">
          <form  action="/eltmas" method="post"  enctype="multipart/form-data">
          @csrf

             <div class="container">
                  <h1> قدم التماسك </h1>
                    
                    <textarea  name="iltmas" value="iltmas" rows="20" cols="100"></textarea>
                    
                    <button type="submit" class="btn btn-primary mb-2">  ارسال </button>
             </div>
          </form>
    </div>
@endsection