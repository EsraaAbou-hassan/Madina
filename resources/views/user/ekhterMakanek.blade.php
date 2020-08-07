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
                                
                                <label>اسم المبني: </label>
                            
                                <select name="building_name">
                                    
                                        <option value="مبني ه">مبني ه</option>
                                        <option value="مبني ز">مبني ز</option>
                                        <option value="مبني ج">مبني ج</option>
                                        <option value="مبني ب">مبني ب</option>
                                        <option value="مبني ح">مبني ح</option>
                                        <option value="مبني د">مبني د</option>
                                        <option value="مبني أ">مبني أ</option>
                                        <option value="مبني و">مبني و</option>
                                </select>

                                <label> إسم الدور:</label>
                                <select name="flat">
                                    <option  value="ground">الدور  الارضي </option>
                                    <option   value="first">الدور  الاول </option>
                                    <option   value="second">الدور  الثاني </option>
                                    <option   value="third">الدور الثالث</option>
                                    <option  value="fourth">الدور الرابع </option>
                                    <option   value="fifth">الدور الخامس</option>
                                
                                </select>
                                <label class="room"> رقم الغرفه: </label>           
                                <select class="ground floor">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                </select>
                                <select class="first floor">
                                        <option>111</option>
                                        <option>112</option>
                                </select>
                                <select class="second floor">
                                        <option>211</option>
                                        <option>212</option>
                                </select>
                                <select class="third floor">
                                         <option>311</option>
                                         <option>312</option>
                                </select>
                                <select class="fourth floor">
                                        <option>411</option>
                                        <option>412</option>
                                </select>
                                <select class="fifth floor">
                                        <option>511</option>
                                        <option>512</option>
                                </select>
    
                               
                            </div>
                
                    
                    </div>
                    <div class="card-header text-center ">
                                    <i class="fas fa-user-friends" style="max-size:2x"> </i> 
                                    <span>أشخاص مقترحون(اختياري)</span>
                    </div>
                    <div class="card-body text-secondary">

                       <div class="form-group mx-sm-3 mb-2" >
  
                            
                                <label> الإسم: </label>
                                <input type="text"  name="friend_name" value=" الإسم"class="form-control" >
                                </br>
                                    <label> الكليه:</label>
                                <input type="text"  name="friend_collage" value="الكليه"class="form-control" >
                                </br>
                                    <label> الفرقه:</label>

                                <select  name= "friend_grade" value="الفرقه" class="form-control">
                                    <option value="">الفرقه الاعداديه</option>
                                    <option value="">الفرقه الاولي </option>
                                    <option value="">الفرقه الثانيه</option>
                                    <option value="">الفرقه الثالثه</option>
                                    <option value="">الفرقه الرابعه</option>
                                    <option value="">الفرقه الخامسه </option>
                                    <option value="">الفرقه السادسه</option>
                            
                                </select>
                                
                                <br>
                                <label>الهوايات:</label>
                                <input type="text" class="form-control" name="hobbies" value="هوايات">
                                <br>
                                    
                                <button type="submit" class="btn btn-primary mb-2 "> إرسال </button>
                        </div>    
                        
                    </div>
                </form>
              
        </div>
    </div>
        
        
@endsection