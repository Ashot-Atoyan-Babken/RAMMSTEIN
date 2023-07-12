@extends('layout.sidebar')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Редактирование картинки
                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Главное</a></li>
                            <li class="breadcrumb-item "><a href="{{route('picture')}}">Концерт</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('picture.update',$pictures->id)}}" method="post" class="col-4"
                              enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div>
                                <img style="width: 150px; height: 100px"
                                     src="{{asset('storage/'.$pictures->photos)}}" alt="">
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Обновление данних</label>
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
                                <label>Альбом</label>
                                <select class="form-control" name="concert_id">
                                    @foreach($concerts as $concert)
                                        <option value="{{$concert->id}}"
                                            {{$concert->id==old('concert_id')?' selected':''}}
                                        >{{$concert->title}}</option>
                                    @endforeach
                                </select>
                                @error('concert_id')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <input type="submit" value="Обновить" class="btn btn-primary mt-2">

                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
