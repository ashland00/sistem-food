@extends('layouts.backend')
@section('title')Admin Pages @endsection
@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New User</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/users') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/users', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']) !!}
                        <form enctype="multipart/form-data" action="/admin/users">
                        @csrf
                        <!-- <label>image</label>
                            <input type="file" class="form-control" name="image"/>
                        </form> -->

                        @include ('admin.users.form', ['formMode' => 'create'])
                       
                        {!! Form::close() !!}
                            <!-- <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data" class="form-group bg-white shadow-sm p-3">
                            @csrf
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
                                        <label for="name" class="control-label">Name</label>
                                            <input class="form-control" placeholder="Full Name" type="text" name="name" id="name"/>
                                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                                        <label for="email" class="control-label">Email</label>
                                            <input class="form-control" placeholder="example@email.com" type="text" name="email" id="email"/>
                                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                </div>
                                <div class="form-group{{ $errors->has('image') ? ' has-error' : ''}}">
                                        <label for="image">Image</label>
                                            <input type="file" id="image" name="image" class="form-control">
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
                                    <label for="password" class="control-panel">Password</label>
                                        <input type="text" class="form-control">
                                        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                                </div>
                                <input  class="btn btn-primary" type="submit"   value="Save"/> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
