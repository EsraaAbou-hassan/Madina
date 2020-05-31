@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Student Details</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="/admin/students">Students</a></li>
                  <li class="breadcrumb-item active">Student Details</li>
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
                                                <label> الاسم <bdi>:</bdi> </label>
                                                {{ $student->student_name }}
                                            </li>
                                            <li class="list-group-item">
                                                <label> الجنسية<bdi>:</bdi> </label>
                                                {{ $student->nationality }}
                                            </li>
                                          </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label> الفرقه <bdi>:</bdi> </label>
                                                {{ $student->grade }}
                                            </li>
                                            <li class="list-group-item">
                                                <label> تقدير العام الماضي <bdi>:</bdi> </label>
                                                {{ $student->taqdir }}
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-6">
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
                                  </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                     <div class="col-6">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                    <h3 class="card-title">الضامن</h3>
                            </div>
                            <div class="card-text">
                                This is some text within a card body.
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                    <h3 class="card-title">الحالة الاجتماعية</h3>
                            </div>
                            <div class="card-text">
                                This is some text within a card body.
                            </div>
                          </div>
                        </div>
                    </div>
                     <div class="col-6">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                    <h3 class="card-title">الإقامة السابقة للطالب</h3>
                            </div>
                            <div class="card-text">
                                This is some text within a card body.
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection