<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content= "width=device-width , initial-scale=1 , shrink-to-fit=no">
 
     <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/main.css')}}"> 
    
     
  </head>
    <body>
    
            <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>المتسلسل</th>
                                    <th>اسم الطالب</th>
                                    <th>البريد الإلكتروني</th>
                                    <th>الجنسيه</th>
                                    <th>نوع الطالب</th>
                                    <th>الرقم القومي</th>
                                    <th>كود الطالب</th>
                                    <th>تاريخ الميلاد</th>
                                    <th>محل الإقامه</th>
                                    <th>العنوان بالتفصيل</th>
                                    <th>رقم الموبايل</th>
                                    <th>السنه الدراسيه</th>
                                    <th>الكليه</th> 
                                    <th>صورة بطاقة الطالب</th>
                                    <th>الصوره الشخصيه للطالب</th>
                                    <th>كلمة المرور</th> 
                                    <th>تأكيد كلمة المرور</th>
                                    <th>اسم ولي الأمر</th>
                                    <th>صلة ولي الأمر</th>
                                    <th>الرقم القومي لولي الأمر</th> 
                                    <th>وظيفة ولي الأمر</th>
                                    <th>رقم الموبايل لولي الأمر</th>
                                    <th>صورة بطاقة ولي الأمر</th>
                                    <th>حالة الطالب</th>
                                    <th>الفرقه</th> 
                                    <th>تقدير العام الماضي</th>
                                    <th>نسبة التقدير</th>
                                    <th>اسم الضامن</th> 
                                    <th>رقم بطاقة الضامن</th>
                                    <th> رقم موبايل الضامن </th> 
                                    <th>وظيفة الضامن</th>
                                    <th>صورة بطاقة الضامن</th>
                                    <th>الدخل</th>
                                    <th>عدد أفراد الأسرة</th>
                                    <th>اسم المبنى</th>
                                    <th>رقم الغرفه</th>
                                    <th>المخالفات القانونيه</th>
                                    <th>اقرار الطالب</th>
                                    <th>Created At</th>
                                    
                                
                                </tr>
                            </thead>
                            <tbody>
                        @foreach($students as $student)
                            <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->student_name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student-> nationality}}</td>
                                    <td>{{$student-> Kind_of_student}}</td>
                                    <td>{{$student-> student_id}}</td>
                                    <td>{{$student->  student_ssn}}</td> 
                                    <td>{{$student-> code}}</td>
                                    <td>{{$student-> birthday}}</td> 
                                    <td>{{$student-> residance}}</td>
                                    <td>{{$student-> address}}</td>
                                    <td>{{$student-> student_mobile}}</td>
                                    <td>{{$student-> student_year}}</td>
                                    <td>{{$student-> collage}}</td>
                                    <td>{{$student-> peciture}}</td>
                                    <td>{{$student-> password}}</td>
                                    <td>{{$student-> sure_password}}</td>
                                    <td>{{$student-> father_name}}</td>
                                    <td>{{$student-> relation}}</td>
                                    <td>{{$student-> father_ssn}}</td>
                                    <td>{{$student-> nationality}}</td>
                                    <td>{{$student-> father_job}}</td>
                                    <td>{{$student-> father_mobile}}</td>
                                    <td>{{$student-> father_id}}</td>
                                    <td>{{$student-> type_of_stay}}</td>
                                    <td>{{$student-> grade}}</td>
                                    <td>{{$student-> taqdir}}</td>
                                    <td>{{$student-> rate}}</td>
                                    <!-- <td>{{$student->department }}</td>
                                    <td>{{$student-> sum}}</td> -->
                                    <td>{{$student-> damin_name}}</td>
                                    <td>{{$student-> damin_ssn}}</td>
                                    <td>{{$student-> damin_mobile}}</td> 
                                    <td>{{$student-> damin_job}}</td>
                                    <td>{{$student-> damin_id}}</td>
                                    <td>{{$student-> income}}</td>
                                    <td>{{$student-> build}}</td>
                                    <td>{{$student-> room_id}}</td>
                                    <td>{{$student->message }}</td>
                                    <td>{{$student-> ekrar}}</td>
                                    <td>{{$student->created_at}}</td>
                                <td> 
                                    <a  href="" class="btn btn-info btn-sm"> 
                                    <i class="fa fa-edit "></i></a>
                                </td>
                                
                                </tr>
                            
                                @endforeach
                            </tbody>
                            </table>
                        
            
    </body>
</html>