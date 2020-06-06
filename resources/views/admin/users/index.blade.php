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
              <li class="breadcrumb-item"><a href="/admin">الرئيسية</a></li>
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
                <h3 class="card-title">قائمة المستخدم</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead >
                    <tr>
                     <th>المتسلسل</th>
                      <th>الإسم</th>
                      
                      <th>البريد الإلكتروني</th>
                      <th>تاريخ الإنشاء</th>
                      <th>(احذف /عدل)بياناتك</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                  <tr >
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->created_at}}</td>
                      <td> 
                      <a  href="/admin/users/{{$user->id}}/edit" class="btn btn-info btn-sm"> 
                      <i class="fa fa-edit "></i>عدل</a>
                      <a  href="" class="btn btn-danger btn-sm" onclick="event.preventDefault();
                             return confirm('Are you sure want to delete this user')? $(this).find('.delete-form').submit():'';"> 
                      <i class="fa fa-trash "></i>حذف
                      <form class="delete-form" action="/admin/users/{{$user->id}}" method="POST" 
                         style="display: none;">
                         @method('Delete')
                         @csrf
                        </form>
                        </a>
                      </td>
                     
                    </tr>
                   
                    @endforeach
                  </tbody>
                </table>
                <div class="card-tools">
                    <a href="/admin/users/create" class="btn btn-primary float-rigth">اضف مستخدم جديد</a>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
  
@endsection