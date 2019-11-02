@extends('layouts.admin.master')
@section('title') View Carrrier @stop
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        Manage User
                        <small>User Detail</small>
                </h1>
             
            <ol class="breadcrumb">
                <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('admin.usersmanager.index')}}">User</a></li>
                <li><a href="javascript:void(0)" class="active">User Detail</a></li>
                
            </ol>
        </section>
        <section class="content" data-table="Carrriers">
            <div class="box">

                <div class="box-header">
                    <h3 class="box-title">
                              User Detail
                    </h3>
                    <a href="{{  route('admin.usersmanager.index')}}" class="btn btn-default pull-right" title="Cancel"><i
                        class="fa fa-fw fa-chevron-circle-left"></i> Back</a>
                </div>

                <div class="box-body">

                    <table class="table table-hover table-striped">
                        <tr>
                            <th scope="row">First Name</th>
                            <td>{{  !empty($user->first_name)?$user->first_name:'N/A'	}}</td>
                        </tr>
						 <tr>
                            <th scope="row">Middle Name</th>
                            <td>{{  !empty($user->middle_name)?$user->middle_name:'N/A'	}}</td>
                        </tr>
						 <tr>
                            <th scope="row">Last Name</th>
                            <td>{{  !empty($user->last_name)?$user->last_name:'N/A'	}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>{{  !empty($user->email)?$user->email:'N/A'	}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Phone</th>
                            <td>{{  !empty($user->phone)?$user->phone:'N/A'	}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Mobile</th>
                            <td>{{  !empty($user->mobile)?$user->mobile:'N/A'	}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tax Paid</th>
                            <td>{{  !empty($user->tax_paid)?$user->tax_paid== '1'?'Yes':'No':'N/A'	}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Date Of Birth</th>
                            <td>{{  !empty($user->dob)?$user->dob:'N/A'	}}</td>
                        </tr>
						<tr>
                            <th scope="row">Employment Post</th>
                            <td>{{  !empty($user->position)?$user->position:'N/A'	}}</td>
                        </tr>
                       
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
@stop
