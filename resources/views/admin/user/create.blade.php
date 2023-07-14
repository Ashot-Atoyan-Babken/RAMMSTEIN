@extends('layout.sidebar')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Добавление ползователя
                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Главное</a></li>
                            <li class="breadcrumb-item "><a href="{{route('user')}}">Ползовател</a></li>
                            <li class="breadcrumb-item ">Добавление ползователя</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('user.store')}}" method="post" class="col-4"
                        >
                            @csrf
                            <div class="form-group">
                                <label for="name">Имя ползователя</label>
                                <input type="text" id="name" class="form-control" name="name"
                                       placeholder="имя ползователя">
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Е-mail ползователя</label>

                                <input type="email" id="email" class="form-control" name="email"
                                       placeholder="e-mail ползователя">
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Пороль ползователя</label>

                                <input type="password" id="password" class="form-control" name="password"
                                       placeholder="пороль ползователя">
                                @error('password')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Роль</label>
                                <select class="form-control" name="role">
                                    @foreach($roles as $id=> $role)
                                        <option value="{{$id}}">{{$role}}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <input type="submit" value="Добавить" class="btn btn-primary mt-2">
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
