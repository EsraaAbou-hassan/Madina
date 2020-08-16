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
                      <th>اسم المبنى</th>
                      <th>اسم الدور</th>
                      <th>رقم الغرفة</th>
                      
                      
                      
                     
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($reserves as $reserve)
                      <tr >
                            <td>{{$reserve->id}}</td>
                            <td>{{$reserve->building_name}}</td>
                            <td>{{$reserve->floor_number}}</td>
                             <td>{{$reserve->room}}</td>
                             
                             
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