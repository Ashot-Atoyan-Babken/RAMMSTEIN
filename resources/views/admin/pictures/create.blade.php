@extends('layout.sidebar')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Добавление картинки
                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Главное</a></li>
                            <li class="breadcrumb-item "><a href="{{route('concert')}}">Картинки</a></li>
                            <li class="breadcrumb-item ">Добавление картинки</li>
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
                        <form action="{{route('picture.store')}}" method="post" class="col-4"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавление картинки</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="photos">
                                        <label class="custom-file-label">виберите изображение</label>
                                    </div>
                                </div>
                                @error('photos')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Концерт</label>
                                <select class="form-control" name="concert_id">
                                    @foreach($concerts as $concert)
                                        <option value="{{$concert->id}}">{{$concert->title}}</option>
                                    @endforeach
                                </select>
                                @error('concert_id')
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
