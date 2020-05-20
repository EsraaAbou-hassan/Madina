@extends('layouts.user')
@section('title','تقديم طلب الالتحاق')
@section('content')
<div class="tolap">
             
                   
            <!-- end card one -->
            <!-- start card two -->
        <div class="card2 border-secondary mb-3">
           
         <div class="card-header">
            <p>البيانات المطلوبه</p>
         </div>
         <div class="card-body text-secondary" >
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif

            <form action="/takdimTalapAlelthak" method="post">
            @csrf
               <div class="container">
                    <div class="row">
                        <div class="form-group col-3">
                          <input   type="radio" name="nationality" value="male" checked> مصري<br>
                        </div>
                        
                        <div class="form-group col-3">
                          <input   type="radio" name="nationality" value="female"> وافد<br>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class=" form-group col-3">
                          <input   type="radio" name="Kind_of_student" value="tolapkodama" checked> طلاب قدامي<br>
                        </div>
                        
                        <div class="form-group col-4">
                          <input  type="radio" name="Kind_of_student" value="tolapmostgdin">طلاب مستجدين<br>
                        </div>
                    </div>
                    <div class="row">
                          <div class="form-group col-3">
                        <label > اسم الطالب <bdi>:</bdi> </label>
                          </div>
                          <div class="form-group col-3">
                        <input class="form-control" type="text"  name="studentName" value="{{old('studentName')}}" required placeholder="الإسم رباعي باللغة العربية">
                  </div>
                  
                    </div>
                  
                 <div class="row">
                      <div class="form-group col-3">
                  <label> الرقم القومى<bdi>:</bdi> </label>
                      </div>
                    <div class="form-group col-3">
                  <input type="text" class="form-control" name="studentSnn" value="{{old('studentSnn')}}" required >
              </div>
                 </div>
                 
                  
                   <div class="row">
                     <div class="form-group col-3">
                  <label> كود الطالب <bdi>:</bdi> </label>
                     </div>
                      <div class=" form-group col-3">
                  <input type="text" name="code" value="{{old('code')}}" required class="form-control"  >
                        </div>
                   </div>
                   
                   <div class="row">
                      <div class="form-group col-3">
                          <label> تاريخ الميلاد<bdi>:</bdi> </label>
                      </div>
                    <div class="form-group col-3">
                  <input type="date" name="birthday" value="{{old('birthday')}}" required class="form-control" >
                   </div>
                   </div>
                  
                  <div class="row">
                      <div class="form-group col-3">
                           <label> محل الاقامه<bdi>:</bdi> </label>
                      </div>
                    <div class="form-group col-3">
                        <select  name="residance"class="form-control">
                        <option  value="" ></option>
                        <option  value=" bahary">وجه بحري</option>
                        <option  value="kibly">وجه قبلي</option>
                        <option  value="saina">سيناء</option>
                        
                      </select>
                    </div>
                  </div>
                  
                  <div class="row">
                      <div class="form-group col-3">
                  <label> العنوان بالتفصيل <bdi>:</bdi> </label>
                      </div>
                    <div class="form-group col-3">
                  <input type="text"  class="form-control" name="address" value="{{old('address')}}" required >
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="form-group col-3">
                  <label> البريد الالكتروني<bdi>:</bdi>  </label>
                      </div>
                    <div class="form-group col-3">
                  <input type="email" class="form-control" name="email" value="{{old('email')}}" required >
                  </div>
                  </div>
                
                  <div class="row">
                    <div class="form-group col-3">
                        <label> رقم الموبيل<bdi>:</bdi> </label>
                         </div>
                    <div class="form-group col-3">
                        <input type="text" name="studentMobile" value="{{old('studentMobile')}}" required class="form-control" >
                    </div>
                  
                  </div>
                  
                  <div class="row">
                      <div class="form-group col-3">
                  <label> السنه الدراسيه<bdi>:</bdi> </label>
                      </div>
                    <div class="form-group col-3">
                  <input type="text" name="student_year" value="{{old('student_year')}}" required class="form-control"  >
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="form-group col-3">
                  <label> الكليه <bdi>:</bdi> </label>
                  </div>
                    <div class="form-group col-3">
                  <input type="text" name="collage" value="{{old('collage')}}" required class="form-control">
                  </div>
                  </div>
                  
                  
                     
       
                    <div class="row">
                          <div class="form-group col-3">
                              <label> صورة بطاقة الطالب<bdi>:</bdi> </label>
                          </div>
                          <div class="form-group col-3">
                            <input  type="file" class="form-control"  name="student_id" value="{{old('student_id')}}" required ></input>
                          </div>
                    </div>
                      <div class="row">
                      <div class="form-group col-3">
                        <label> الصورة الشخصيه للطالب<bdi>:</bdi> </label>
                        </div>
                        <div class="form-group col-3">
                            <input type="file" class="form-control" name="peciture" value="{{old('peciture')}}" required></input>
                          </div>
                
                      </div>
                    <div class="row">
                      <div class="form-group col-3">
                        <label> كلمة المرور<bdi>:</bdi> </label>
                        </div>
                    <div class="form-group col-3">
                        <input type="password" class="form-control"  name="password"  value="{{old('password')}}" required >
                  </div>
                    </div>
                    
                  <div class="row">
                      <div class="form-group col-3">
                        <label> تأكيد كلمة المرور<bdi>:</bdi> </label>
                        </div>
                        <div class="form-group col-3">
                            <input type="password" name="sure_password" value="{{old('sure_password')}}" required class="form-control" >
                        </div>
                  </div>
                  
                  <div class="row">
                      <div class="form-group col-3">
                        <label>  اسم ولي الأمر<bdi>:</bdi> </label>
                        </div>
                    <div class="form-group col-3">
                        <input type="text" name="father_name" value="{{old('father_name')}}" required class="form-control" >
                  </div>
                  </div>
                  
                     <div class="row">
                      <div class="form-group col-3">
                        <label>صلة ولي الأمر<bdi>:</bdi> </label>
                        </div>
                    <div class=" form-group col-3">
                        <input type="text" name="relation" value="{{old('relation')}}" required  class="form-control" >
                  </div>
                     </div>
                     
                  <div class="row">
                      <div class="form-group col-3">
                        <label> الرقم القومي<bdi>:</bdi> </label>
                        </div>
                    <div class="form-group col-3">
                        <input type="text"  name="father_snn" value="{{old('father_snn')}}" required class="form-control" >
                  </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-3">
                        <label> وظيفة ولي الأمر<bdi>:</bdi> </label>
                        </div>
                    <div class="form-group col-3">
                        <input type="text"  name="father_job" value="{{old('father_job')}}" required class="form-control">
                     </div>
                  </div>
                  
                  <div class="row">
                      <div class="form-group col-3">
                        <label> رقم الموبايل<bdi>:</bdi> </label>
                        </div>
                       <div class="form-group col-3">
                        <input type="text"  name="father_mobile" value="{{old('father_mobile')}}" required class="form-control">
                        </div>
                      </div>
                   <div class="row">
                        <div class="form-group col-3">
                              <label> بطاقة ولي الأمر<bdi>:</bdi> </label>
                          </div>
                          <div class="form-group col-3">
                                <input  type="file" class="form-control" name="father_id" value="{{old('father_id')}}" required></input>
                          </div>
                   </div>
              <div class="row">
                  <div class="form-group col-3">
                          <input  type="radio" name="type_of_stay" value="normal" checked> ساكن عادي<br>
            
                        </div>
                             <div class=" form-group col-3">
                          <input type="radio" name="type_of_stay" value="kawareth" > كوارث<br>
                  
                        </div>
                        
                          <div class="form-group col-4">
                          <input  type="radio" name="type_of_stay" value="special" > ذوي الإحتياجات الخاصة<br>
                     </div>
              </div>
               </div>
                 
                  <div class="card-header">
                           <p>خاص بالطلاب قدامى </p>
                  </div>
                 <div class="card-body text-secondary">
                        <div class="row">
                              <div class=" form-group col-3">
                                  <label> الفرقه <bdi>:</bdi> </label>
                              </div>
                              <div class=" form-group col-3">
                                        <select name="grade"class="form-control" >
                                          <option value=""></option>
                                          <option value="grade1">الفرقه الأولى بعد إعدادي</option>
                                          <option value="grade2">الفرقه الثانيه</option>
                                          <option value="grade3">الفرقه الثالثه</option>
                                          <option value="grade4">الفرقه الرابعه</option>
                                          <option value="grade5">الفرقه الخامسه </option>
                                          <option value="grade6">الفرقه السادسه</option>
                                      
                                    </select>
                              </div>
                        </div>
                        <div class="row">
                                <div class="form-group col-3">
                                    <label> تقدير العام الماضى<bdi>:</bdi> </label>
                                </div>
                                <div class="form-group col-3">
                                    <select  name="taqdir" class="form-control" >
                                        <option value=""></option>
                                        <option  value="excellant">امتياز</option>
                                        <option  value="veryGood">جيد جدا</option>
                                        <option  value="good">جيد</option>
                                    
                                    </select>
                                </div>
                        </div>
                        <div class="row">
                            <div class=" form-group col-3">
                              <label> نسبة  التقدير<bdi>:</bdi> </label>
                            </div>
                            <div class=" form-group col-3">
                                <input type="text"  name="rate" value="{{old('rate')}}" required class="form-control">
                            </div>
                            
                        
                        </div>
                  </div>
           
                  <!-- <div class="card-header">
                       <p>خاص بالطلاب المستجدين </p>
                  </div>
                  <div class="card-body text-secondary" >
                          <div class="row">
                              <div class="form-group col-3">
                                <label>شعبه الثانويه الازهريه<bdi>:</bdi> </label>
                              </div>
                              <div class="form-group col-3">
                                      <select name="department" class="test form-control">
                                          <option value=""></option>
                                          <option value="Adaby">ادبي</option>
                                          <option value="elmy">علمي</option>
                                      </select>
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group col-3">
                                <label> مجموع الثانويه الازهريه<bdi>:</bdi> </label>
                              </div>
                              <div class=" form-group col-3">
                                  <input type="text" name="sum" value="{{old('sum')}}" required class="form-control" >
                              </div>
                              
                          </div>
                          <div class="row">
                              <div class=" form-group col-3">
                                  <label> الفرقه <bdi>:</bdi> </label>
                              </div>
                              <div class=" form-group col-3">
                                        <select name="grade"class="form-control" >
                                          <option value=""></option>
                                          <option value="primary">الفرقه الإعداديه</option>
                                          <option value="first">الفرقه الأولي</option>
                                          
                                      
                                    </select>
                              </div>
                        </div>
                      
         
               </div> -->
           <!-- end card one -->
             <!-- start card two -->
                 <div class="card-header">
                    <p>الجزء الخاص بالضامن</p>
                 </div>
                 <div class="card-body text-secondary" >
                  
                      <div class="container">
                          <div class="row">
                                  <div class=" form-group col-3">
                                <label > اسم الضامن <bdi>:</bdi> </label></div>
                                  <div class="form-group col-3">
                                    <input type="text"  name="damin_name" value="{{old('damin_name')}}" required class="form-control"  placeholder="الإسم رباعي باللغة العربية">
                                 </div>
                            </div>
                          
                         <div class="row">
                              <div class="form-group col-3">
                                 <label> رقم البطاقه<bdi>:</bdi> </label>
                               </div>
                               <div class=" form-group col-3">
                                 <input type="text"  class="form-control"  name="damin_ssn" value="{{old('damin_ssn')}}" required >
                               </div>
                         </div>
                         <div class="row">
                              <div class="form-group col-3">
                                 <label> رقم الموبيل <bdi>:</bdi> </label>
                              </div>
                              <div class="form-group col-3">
                                    <input type="text" name="damin_mobile" value="{{old('damin_mobile')}}" required class="form-control" >
                              </div>
                          </div>
                          <div class="row">
                                 <div class="form-group col-3">
                                     <label> الوظيفه<bdi>:</bdi> </label>
                                 </div>
                                 <div class="form-group col-3">
                                    <input type="text" name="damin_job" value="{{old('damin_job')}}" required class="form-control">
                                 </div>
                          </div>
                          <div class="row">
                          <div class="form-group col-3">
                                     <label>صورة بطاقة الضامن<bdi>:</bdi> </label>
                                 </div>
                              <div class="form-group col-3">
                                <input type="file" class="form-control" name="damin_id" value="{{old('damin_id')}}" required placeholder="ارفق صوره بطاقه الضامن"></input>
                              </div>
                          </div>
                    </div>
                </div>
       
           <!-- end card two -->
           <!-- start card three -->
    <div class="card-header">
            <p>الجزء الخاص بالحاله الإجتماعيه</p>
             </div>
         <div class="card-body text-secondary" >
              <div class="container">
                    <div class="row">
                          <div class="form-group col-3">
                             <label > اسم ولي الأمر <bdi>:</bdi> </label>
                          </div>
                          <div class="form-group col-3">
                             <input type="text" class="form-control" name="father_name" value="{{old('father_name')}}" required placeholder="الإسم رباعي باللغة العربية">
                          </div>
                    </div>
                  
                   <div class="row">
                      <div class="form-group col-3">
                          <label> الرقم القومى<bdi>:</bdi> </label>
                      </div>
                      <div class="form-group col-3">
                           <input type="text" name="father_ssn" value="{{old('father_ssn')}}" required class="form-control">
                      </div>
                   </div>
                 
                  
                   <div class="row">
                       <div class="form-group col-3">
                         <label> الوظيفه <bdi>:</bdi> </label>
                       </div>
                       <div class=" form-group col-3">
                          <input type="text"  name="father_job" value="{{old('father_job')}}" required class="form-control" >
                       </div>
                   </div>
                   
                   <div class="row">
                      <div class=" form-group col-3">
                          <label> الدخل<bdi>:</bdi> </label>
                      </div>
                      <div class=" form-group col-3">
                         <input type="text" name="income" value="{{old('income')}}" required  class="form-control">
                      </div>
                   </div>
                   
                    <div class="row">
                      <div class=" form-group col-3">
                         <label>عدد أفراد الأسره<bdi>:</bdi> </label>
                      </div>
                      <div class="form-group col-3">
                          <input type="text" name="number" value="{{old('number')}}" required  class="form-control" >
                      </div>
                  
                    </div>
                 </div>
            
            </div>
                   <!-- end card three -->
                    <!-- start card four -->
             <div class="card-header">
                <p> الإقامه السابقه للطلاب القدامي</p>
             </div>
         <div class="card-body text-secondary" >
              <div class="container">
                    <div class="row">
                          <div class=" form-group col-3">
                               <label > اسم المبنى <bdi>:</bdi> </label>
                          </div>
                          <div class=" form-group col-3">
                               <input type="text" class="form-control"   name="build" value="{{old('build')}}" required >
                          </div>
                    </div>
                  
                    <div class="row">
                          <div class=" form-group col-3">
                            <label>رقم الغرفه<bdi>:</bdi> </label>
                          </div>
                          <div class="col-3">
                            <input type="text" class="form-control" name="room_id" value="{{old('room_id')}}" required >
                          </div>
                    </div>
                    <div class="row">
                       <div class="form-group col-12">
                           <textarea class="form-control" name="message" value="{{old('message')}}" required placeholder="مخالفات قانونيه"></textarea>
                       </div>
                   </div>
                   <div class="card1  mb-3">
                        <p>ملاحظات هامه</p>
                                 <ul>
                                      <li>
                                          مع ملاحظه ان الطلاب المستجدين هم طلاب الفرق الاولي او الاعداديه ،  الطلاب القدامي هم طلاب ما بعد الفرق الاولي
                                      </li>
                                      <li>
                                        التقدم للمدينه الجامعيه من خلال استماره التقديم الالكترونى مجانى بالكامل 
                                      </li>
                                      <li>
                                        يجب الاحتفاظ بكلمة المرور لأهميتها فى تعديل بياناتك كما سيتم استخدمها لاحقا عند اقامتك بالمدينه 
                                      </li>
                                      <li>
                                          ذوى الإحتياجات الخاصه لايدخل ف التنسيق
                                      </li>
                                      <li>
                                        التأكد من البيانات جيدا قبل ارسالها 
                                      </li>
                                
                                </ul>
                        <div class="row">
                            <div class=" form-group col-12">
                                <input type="radio" name="ekrar" value="{{old('ekrar')}}" required> أقر بأن البيانات(محل الإقامه-التقدير-الفرقه/الكليه)صحيحه طبقا للأوراق الرسميه على أن أقدم هذه الأوراق اذا ثبت أى خطأ في البيانات يتم تحويلي للشئون القانونيه وفصلي
                                          نهائيا من المدينه <br>
                            </div>
                        </div>
                  
                   </div>
                     <button type="submit" class="btn btn-primary mb-2"> 
                     <i class="far fa-ballot-check"></i>تسجيل طلب الإلتحاق</button>
                
                 </div>
                 </form>
                 </div>
           <!-- end card four -->
           
               
         </div>
         
        </div>
@endsection