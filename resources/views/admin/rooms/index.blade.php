@extends('layouts.admin')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ادارة المستخدم</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">الرئيسية</a></li>
              <li class="breadcrumb-item active">المستخدم</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
     <!-- start roomNumber -->
     <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-header bg-dark">
                <h3 class="card-title">قائمة بعدد الغرف بكل مبنى</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead >
                    <tr>
                     <th>المتسلسل</th>
                      <!-- <th>اسم المبنى</th> -->
                      <th>رقم الدور</th>
                      <th>عدد الطلاب بالغرفة</th>
                      <th>تاريخ الإنشاء</th>
                      
                     
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($numbers as $number)
                  <tr >
                      <td>{{$number->id}}</td>
                      <!-- <td>{{$number->building_name}}</td> -->
                      <td>{{$number->floor_number}}</td>
                      <td>{{$number->capacity}}</td>
                      <td>{{$number->created_at}}</td>
                     
                     
                  </tr>
                   
                    @endforeach
                  </tbody>
                </table>
                <div class="card-tools">
                    <a href="/admin/rooms/create" class="btn btn-primary float-rigth">أضف غرفة جديدة</a>
                </div>
              </div>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /end roomNumber -->
  </div>
  <!-- /.content-wrapper -->

 
  
@endsection