@extends('layouts.user')
@section('title','اخترمكانك')
@section('content')
<div class="ekhtarMakanak">
    <div class="card border-secondary mb-3" >
                <div class="card-header text-center">
                    <i class="far fa-hotel"style="max-size:2x"></i>
                    <span>اختر مكانك</span>
                </div>

                <div class="card-body text-secondary">
                <form>
                    <div class="form-group mx-sm-3 mb-2" >
                            
                    <label>اسم المبني: </label>
                
                    <select name="اسم المبني">
                        <option value="">---</option>
                    <option value="مبني ه">مبني ه</option>
                    <option value="مبني ز">مبني ز</option>
                    <option value="مبني ج">مبني ج</option>
                    <option value="مبني ب">مبني ب</option>
                    <option value="مبني ح">مبني ح</option>
                    <option value="مبني د">مبني د</option>
                    <option value="مبني أ">مبني أ</option>
                    <option value="مبني و">مبني و</option>
                    </select>
                    

                    </br>
                    <label> إسم الدور:</label>

                    <select name="  اسم الدور ">
                        <option value="">--- </option>
                    <option value="">الدور  الاول </option>
                    <option value="">الدور  الثاني </option>
                    <option value="">الدور الثالث</option>
                    <option value="">الدور الرابع </option>
                    <option value="">الدور الخامس</option>
                    
                    </select>
                    
                    </br>
                    <label> رقم الغرفه: </label>
                    <input type="text" class="form-control" id="inputPassword2">
                    </br>
                </div>
                </form>
               </div>
                </br>
                <div class="card-header text-center ">
                    <i class="fas fa-user-friends" style="max-size:2x"> </i> 
                    <span>أشخاص مقترحون(اختياري)</span>
                </div>

                <div class="card-body text-secondary" dir="rtl">
                <form>
                    <label> الإسم: </label>
                    <input type="text" class="form-control" id="inputPassword2">
                     </br>
                        <label> الكليه:</label>
                    <input type="text" class="form-control" id="inputPassword2">
                     </br>
                        <label> الفرقه:</label>

                    <select name="الفرقه ">
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
                    <input type="text" class="form-control" id="inputPassword2">
                    <br>
                        </form>
                        
                            
                            <button type="submit" class="btn btn-primary mb-2 "> إرسال </button>
                        
            
           </div>
    </div>
</div>
        
        
@endsection