@extends('layout.sidebar')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Картинки
                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Главное</a></li>
                            <li class="breadcrumb-item active">Картинки</li>
                        </ol>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-2 mb-3">
                        <a href="{{route('picture.create')}}" class="btn btn-block btn-primary mt-2">Добавить</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Фото</th>
                                        <th>Концерт</th>
                                        <th colspan="3" class="text-center">Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pictures as $picture)
                                        <tr class="text-center">
                                            <td>{{$picture->id}}</td>
                                            <td><img class="w-25" src="{{asset('storage/'.$picture->photos)}}" alt="{{$picture->id}}"></td>
                                            <td>{{$picture->concert_id}}</td>
                                            <td><a href="{{route('picture.edit',$picture->id)}}" class="text-success"><i
                                                        class="fas fa-solid fa-pen"></i></a></td>
                                            <td>
                                                <form action="{{route('picture.destroy',$picture->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="fas fa-trash text-danger" role="button"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    {{$pictures->links()}}

                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
