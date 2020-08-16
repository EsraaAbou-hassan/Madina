

@extends('layouts.admin')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">إدارة المستخدم</h1>
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
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <div class="card  ">
              <div class="card-header bg-dark">
                <h3 class="card-title">قائمة إضافة الغرف</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/admin/rooms">
              @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="building_name">اسم المبنى</label>
                        <select name="building_name" id="building_name"  class=" form-control @error('capacity') is-invalid @enderror" >
                                        <option value=""></option>
                                        <option value="مبني أ">مبني أ</option>
                                        <option value="مبني ب">مبني ب</option>
                                        <option value="مبني ج">مبني ج</option>
                                        <option value="مبني ح">مبني ح</option>
                                        <option value="مبني د">مبني د</option>
                                        <option value="مبني ه">مبني ه</option>
                                        <option value="مبني ز">مبني ز</option>
                                        <option value="مبني و">مبني و</option>
                      </select>       
                        
                        @error('building_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  <div class="form-group">
                    <label for="floor_number">رقم الدور</label>
                    <select name="floor_number" id="floor_number"  class=" form-control @error('capacity') is-invalid @enderror" data-dependent="room_number">
                               
                                 <option value=""></option>
                                  <option  value="الأرضي">الدور  الارضي </option>
                                  <option   value="الأول">الدور  الاول </option>
                                  <option   value="الثاني">الدور  الثاني </option>
                                  <option   value="الثالث">الدور الثالث</option>
                                  <option  value="الرابع">الدور الرابع </option>
                                  <option   value="الخامس">الدور الخامس</option>
                       </select>                  
                         @error('floor_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="room_number">رقم الغرفة</label>
                    <input type="room_number" class="form-control @error('room_number') is-invalid @enderror" id="room_number" name="room_number" placeholder="ادخل رقم الغرفة">
                    @error('room_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="capacity">عدد الأفراد في كل غرفه</label>
                    <input type="capacity" class="form-control @error('capacity') is-invalid @enderror" id="capacity" name="capacity" placeholder="ادخل عدد الأفرادة">
                    @error('capacity')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">إرسال البيانات</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
  
@endsection