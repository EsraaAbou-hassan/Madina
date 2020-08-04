

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
                <h3 class="card-title">قائمة إضافة المسئولين</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/admin/users">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">الإسم</label>
                    <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" 
                     name="name" placeholder="ادخل الإسم رباعي بالعربية ">
                    
                    @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"  name="email" placeholder="ادخل البريد افلكتروني">
                    @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="password">الرقم السري</label>
                    <input type="password" class="form-control @error('Password') is-invalid @enderror" id="password" name="password" placeholder="ادخل الرقم السري">
                    @error('password')
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