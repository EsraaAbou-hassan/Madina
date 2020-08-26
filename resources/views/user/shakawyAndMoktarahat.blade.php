@extends('layouts.user')
@section('title','شكاوي ومقترحات')
@section('content')
  <form  class="shakawy" action="/shakawyAndMoktarahat" method="post"  enctype="multipart/form-data">
  @csrf
    <div class="container">
        
       <h1>اكتب شكوى او اقتراح </h1>
        
      <textarea rows="20" cols="100" name="shakwa" value="shakwa"></textarea>
      <button type="submit" class="btn btn-primary mb-2">  ارسال </button>
    </div>  
  </form>
@endsection