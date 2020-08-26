

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
                            <option value="أ">أ</option>
                            <option value="ب">ب</option>
                            <option value="ج">ج</option>
                            <option value="ح">ح</option>
                            <option value="د">د</option>
                            <option value="ز">ز</option>
                            <option value="ه">ه</option>
                            <option value="و">و</option>
                      </select>       
                        
                        @error('building_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  <div class="form-group">
                    <label for="floor_number">رقم الدور</label>
                    <select name="floor_number" id="floor_number"  class=" form-control @error('capacity') is-invalid @enderror"
                     data-dependent="room_number">
                          <option value=""></option>
                          <option  value="0">الدور  الارضي </option>
                          <option   value="1">الدور  الاول </option>
                          <option   value="2">الدور  الثاني </option>
                          <option   value="3">الدور الثالث</option>
                          <option  value="4">الدور الرابع </option>
                          <option   value="5">الدور الخامس</option>
                       </select>                  
                         @error('floor_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="room_number">رقم الغرفة</label>
                    <input type="room_number" class="form-control @error('room_number') is-invalid @enderror" id="room_number" 
                    name="room_number" placeholder="ادخل رقم الغرفة">
                    @error('room_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="capacity">عدد الأفراد في كل غرفه</label>
                    <input type="capacity" class="form-control @error('capacity') is-invalid @enderror" id="capacity" 
                    name="capacity" placeholder="ادخل عدد الأفرادة">
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