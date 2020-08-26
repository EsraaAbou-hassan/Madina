@extends('layouts.user')
@section('title','اخترمكانك')
@section('content')

    <div class="ekhtarMakanak">
        <div class="card border-secondary mb-3">
                <form action="/ekhterMakanek" method="post"  enctype="multipart/form-data">
                @csrf
                    <div class="card-header text-center">
                            <i class="far fa-hotel"style="max-size:2x"></i>
                            <span>اختر مكانك</span>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                
                <div class="card-body text-secondary">

                    <div class="form-group mx-sm-3 mb-2" >

                        <label>الرقم القومي</label>
                        <input type="text" name="student_id" class="form-control mb-3">

                        <label>اسم المبني: </label>
                    
                        <select name="building_name" id="building_name" class="form-control">
                            <option value=""></option>
                            <option value="أ">أ</option>
                            <option value="ب">ب</option>
                            <option value="ج">ج</option>
                            <option value="ح">ح</option>
                            <option value="د">د</option>
                            <option value="ز">ز</option>
                            <option value="ه">ه</option>
                            <option value="و">و</option>

                        </select>

                        <label> رقم الدور:</label>
                        <select name="floor_number" id="floor_number"  class="form-control">
                            <option value=""></option>
                            <option  value="0">الدور  الارضي </option>
                            <option   value="1">الدور  الاول </option>
                            <option   value="2">الدور  الثاني </option>
                            <option   value="3">الدور الثالث</option>
                            <option  value="4">الدور الرابع </option>
                            <option   value="5">الدور الخامس</option>
                            
                        </select>

                            <label > رقم الغرفه: </label>           
                            <select  name="room" id="room" class=" form-control">
                                <option value=""></option>
                            </select>
                           
                         {{csrf_field()}}
                           
                        </div>
                
                    <button type="submit" class="btn btn-primary mb-2 "> إرسال </button>
                    </div>
                    
                </form>
              
        </div>
    </div>
        
        
@endsection
