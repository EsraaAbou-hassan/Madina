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

    
     <!-- Main content -->
     <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-header bg-dark">
                <h3 class="card-title">قائمة بالمباني  السكنية</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead >
                    <tr>
                     <th>المتسلسل</th>
                      <th>اسم المبنى</th>
                      <th>عددالأدوار</th>
                      <th>عددالغرف</th>
                      
                     
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($buildings as $building)
                  <tr>
                      <td>{{$building->id}}</td>
                      <td>{{$building->building_name}}</td>
                      <td>{{$building->number_of_floor}}</td>
                      <td>{{$building->number_of_room}}</td>
                      <td>{{$building->created_at}}</td>
                  
                  </tr>
                   
                    @endforeach
                  </tbody>
                </table>
                <div class="card-tools">
                    <a href="/admin/building/create" class="btn btn-primary float-rigth">اضف مبنى جديد</a>
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
    <!-- /end building -->
    
  </div>
  <!-- /.content-wrapper -->

 
  
@endsection