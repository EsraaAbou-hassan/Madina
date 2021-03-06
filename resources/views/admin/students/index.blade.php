@extends('layouts.admin')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">إدارة البيانات الخاصة بالطلاب</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">الرئيسية</a></li>
              <li class="breadcrumb-item active">الطلاب</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-header bg-dark">
                <h3 class="card-title">قائمة الطلاب</h3>
        </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                  <thead >
                    <tr>
                      <th>Iالمتسلسل</th>
                      <th>الإسم</th>
                      <th>الإيميل</th>
                      <th>الصورة الشخصية</th>
                      <th>اسم المبني </th>
                      <th> رقم الدور</th>
                      <th>رقم الغرفة </th>
                      <th>تاريخ الإنشاء</th>
                      <th>حالة الطلب</th>
                      <th>العمليات</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($students as $student)
                      <tr >
                            <td>{{$student->id}}</td>
                            <td>{{$student->student_name}}</td>
                            <td>{{$student->email}}</td>
                            <td><img src="{{asset('storage/'. $student->peciture)}}" ></td>
                            <td>
                                @if(isset($student->room))
                                      {{$student->room['building_name']}}
                                @endif
                            </td>
                            <td>
                                @if(isset($student->room))
                                    {{$student->room['floor_number']}}
                                @endif
                            </td>
                            <td>
                                @if(isset($student->room))
                                    {{$student->room['room_number']}}
                                @endif
                            </td>
                            <td>{{$student->created_at}}</td>
                            <td >
                              @if ($student->is_accepted == 1)
                                <span class="accept">مقبول</span>
                              @elseif ($student->is_accepted == 2)
                                <span class="reject">مرفوض</span>
                              @else
                                <span class="new">جديد</span>
                              @endif
                            </td>
                            <td> 
                              <a  href="/admin/students/{{ $student->id }}"  id="show" class="btn btn-info btn-sm"> 
                            عرض</a>
                                            
                            </td>
                        
                      </tr>
                   
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
  
@endsection