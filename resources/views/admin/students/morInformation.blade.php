@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">التفاصيل الخاصة بالطالب</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/admin">الرئيسية</a></li>
                  <li class="breadcrumb-item"><a href="/admin/students">الطلاب</a></li>
                  <li class="breadcrumb-item active">بيانات الطالب</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="content details-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                <h3 class="card-title">البيانات الشخصية</h3>
                            </div>
                            <div class="card-text">
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                           
                                          <li class="list-group-item">
                                                <label>  الجنسية<bdi>:</bdi> </label>
                                                {{ $student->nationality }}
                                            </li>
                                            <li class="list-group-item">
                                                <label> نوع الطالب<bdi>:</bdi> </label>
                                                {{ $student->Kind_of_student }}
                                            </li>
                                            <li class="list-group-item">
                                            <label > اسم الطالب <bdi>:</bdi> </label>
                                                {{ $student->student_name }}
                                            </li>
                                            <li class="list-group-item">
                                            <label> الرقم القومى<bdi>:</bdi> </label>
                                                {{ $student->student_ssn }}
                                            </li>
                                            <li class="list-group-item">
                                            <label> كود الطالب <bdi>:</bdi> </label>
                                                {{ $student->code }}
                                            </li>
                                            <li class="list-group-item">
                                            <label> تاريخ الميلاد<bdi>:</bdi> </label>
                                                {{ $student-> birthday}}
                                            </li>
                                            <li class="list-group-item">
                                            <label> محل الاقامه<bdi>:</bdi> </label>
                                                {{ $student->residance }}
                                            </li>
                                            <li class="list-group-item">
                                            <label> العنوان بالتفصيل <bdi>:</bdi> </label>
                                                {{ $student-> address}}
                                            </li>
                                            <li class="list-group-item">
                                            <label> البريد الالكتروني<bdi>:</bdi>  </label>
                                                {{ $student-> email}}
                                            </li>
                                            <li class="list-group-item">
                                            <label> رقم الموبيل<bdi>:</bdi> </label>
                                                {{ $student->student_mobile  }}
                                            </li>
                                            <li class="list-group-item">
                                            <label> السنه الدراسيه<bdi>:</bdi> </label>
                                                {{ $student-> student_year}}
                                            </li>
                                            <li class="list-group-item">
                                            <label> الكليه <bdi>:</bdi> </label>
                                                {{ $student->collage }}
                                            </li>
                                            <li class="list-group-item">
                                            <label> صورة بطاقة الطالب<bdi>:</bdi> </label>
                                            <img src="{{asset('storage/'.$student->student_id)}}" >
                                                
                                            </li>
                                            
                                          </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                        <label> الصورة الشخصيه للطالب<bdi>:</bdi> </label>
                                        <img src="{{asset('storage/'. $student->peciture)}}" >
                                                
                                            </li>
                                            <li class="list-group-item">
                                            <label> كلمة المرور<bdi>:</bdi> </label>
                                                {{ $student->password }}
                                            </li>
                                            <li class="list-group-item">
                                            <label> تأكيد كلمة المرور<bdi>:</bdi> </label>
                                                {{ $student-> sure_password}}
                                            </li>
                                            <li class="list-group-item">
                                            <label>  اسم ولي الأمر<bdi>:</bdi> </label>
                                                {{ $student->father_name }}
                                            </li>
                                            <li class="list-group-item">
                                            <label>صلة ولي الأمر<bdi>:</bdi> </label>
                                                {{ $student->relation }}
                                            </li>
                                            <li class="list-group-item">
                                            <label> الرقم القومي<bdi>:</bdi> </label>
                                                {{ $student->father_ssn }}
                                            </li>
                                            <li class="list-group-item">
                                            <label> وظيفة ولي الأمر<bdi>:</bdi> </label>
                                                {{ $student->father_job }}
                                            </li>
                                            <li class="list-group-item">
                                            <label>  رقم الموبايل<bdi>:</bdi> </label>
                                                {{ $student->father_mobile }}
                                            </li>
                                            <li class="list-group-item">
                                            <label> بطاقة ولي الأمر<bdi>:</bdi> </label>
                                            <img src="{{asset('storage/'. $student-> father_id)}}" >
                                              
                                            </li>
                                            <li class="list-group-item">
                                                <label>نوع الإقامه <bdi>:</bdi> </label>
                                                {{ $student-> type_of_stay}}
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="row o" id="o">
                    <div class="col-12">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                    <h3 class="card-title">بيانات الطلاب القدامى</h3>
                            </div>
                            <div class="card-text">
                                 <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <label> الفرقه <bdi>:</bdi> </label>
                                        {{ $student->grade }}
                                    </li>
                                    <li class="list-group-item">
                                        <label> تقدير العام الماضي <bdi>:</bdi> </label>
                                        {{ $student->taqdir }}
                                    </li>
                                    <li class="list-group-item">
                                        <label> نسبة التقدير <bdi>:</bdi> </label>
                                        {{ $student->rate }}
                                    </li>
                                  </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                    <h3 class="card-title">الضامن</h3>
                            </div>
                            <div class="card-text">
                            <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                    <label > اسم الضامن <bdi>:</bdi> </label>
                                        {{ $student->damin_name }}
                                    </li>
                                    <li class="list-group-item">
                                    <label> رقم البطاقه<bdi>:</bdi> </label>
                                        {{ $student->damin_ssn }}
                                    </li>
                                    <li class="list-group-item">
                                    <label> رقم الموبيل <bdi>:</bdi> </label>
                                        {{ $student->damin_mobile }}
                                    </li>
                                    <li class="list-group-item">
                                    <label> الوظيفه<bdi>:</bdi> </label>
                                        {{ $student->damin_job }}
                                    </li>
                                    <li class="list-group-item">
                                    <label>صورة بطاقة الضامن<bdi>:</bdi> </label>
                                    <img src="{{asset('storage/'. $student-> damin_id)}}" >
                                    </li>
                                  </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                    <h3 class="card-title">الحالة الاجتماعية</h3>
                            </div>
                            <div class="card-text">
                            <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                    <label> دخل الأسره<bdi>:</bdi> </label>
                                        {{ $student->income }}
                                    </li>
                                    <li class="list-group-item">
                                    <label>عدد أفراد الأسره<bdi>:</bdi> </label>
                                        {{ $student->number }}
                                    </li>
                                   
                                  </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>    
                <div class="row o" id="ol">
                   <div class="col-12">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                    <h3 class="card-title">الإقامة السابقة للطالب</h3>
                            </div>
                            <div class="card-text">
                              <ul class="list-group list-group-flush">
                                 <li class="list-group-item">
                                     <label > اسم المبنى <bdi>:</bdi> </label>
                                        {{ $student->build }}
                                    </li>
                                    <li class="list-group-item">
                                    <label>رقم الغرفه<bdi>:</bdi> </label>
                                        {{ $student->room_id }}
                                    </li>
                                    <li class="list-group-item">
                                    <div class="row">
                                    <div class="form-group col-3">
                                      <label> المخالفات القانونية<bdi>:</bdi> </label>
                                      </div>
                                      <div class="form-group col-3">
                                      <input type="radio" name="MOKHALFAT" value="يوجد" checked>يوجد<br>
                                      </div>
                                      <div class="form-group col-3">
                                        <input type="radio" name="MOKHALFAT" value="لايوجد" >لايوجد <br>
                                      </div>
                                     </div>
                                    </li>
                                    <li class="list-group-item">
                                    <label> اقرار الطالب<bdi>:</bdi> </label>
                                        {{ $student->ekrar }}
                                    </li>
                              </ul>    
                            </div>
                          </div>
                        </div>
                    </div>
                     
                </div>
               <div class="row n" id="n">
                   <div class="col-12">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                    <h3 class="card-title">البيانات الخاصة بالمستجدين</h3>
                             </div>
                             <div class="card-text">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                    <label>شعبه الثانويه الازهريه<bdi>:</bdi> </label>
                                        {{ $student->department }}
                                    </li>
                                    <li class="list-group-item">
                                    <label> مجموع الثانويه الازهريه<bdi>:</bdi> </label>
                                        {{ $student->sum }}
                                    </li>
                                    <li class="list-group-item">
                                    <label> الفرقه <bdi>:</bdi> </label>
                                        {{ $student->grade}}
                                    </li>
                                </ul>      
                             </div>
                          </div>
                        </div>
                      </div>
                     </div>
                     
                
               </div>
               <div class="row">
                   <div class="col-12">
                        <div class="card my-card">
                          <div class="card-body">
                             
                            <div class="card-text">
                              <ul class="list-group list-group-flush">
                                 
                                <li class="list-group-item">
                                    <label> اقرار الطالب<bdi>:</bdi> </label>
                                        {{ $student->ekrar }}
                                </li>
                                <li class="list-group-item">
                                  <div class="row">

                                     <div class="col-6">
                                        <input type="checkbox"   id="accepted"  value="accepted">
                                        <label class="check">
                                           الطلب مقبول
                                        </label>
                                     </div>
                                     <div class="col-6">
                                        <input type="checkbox"  id="rejected" value="rejected">
                                        <label class="check">
                                           الطلب مرفوض
                                        </label>
                                     </div>
                                  </div>
                                </li>
                              </ul>    
                            </div>
                          </div>
                        </div>
                    </div>
                     
                </div>
        </div>
    </div>
@endsection