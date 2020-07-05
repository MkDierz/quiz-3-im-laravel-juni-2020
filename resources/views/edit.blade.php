@extends('layouts.master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
{{--                        <li class="breadcrumb-item"><a href="/">Pertanyaan</a></li>--}}
{{--                        <li class="breadcrumb-item active">Tambah pertanyaan</li>--}}
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card ">
        <form role="form" action="/items/{{$data->id}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="PUT">

            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul" placeholder="Enter judul" name="article_judul" autofocus value="{{$data->article_judul}}">
                </div>
                <div class="form-group">
                    <label for="tag">Tag Artikel</label>
                    <input type="text" class="form-control" id="tag" placeholder="Enter judul" name="article_tag" value="{{$data->article_tag}}">
                </div>
                <div class="form-group">
                    <label for="textarea">Isi Artikel</label>
                    <textarea id="textarea" class="form-control" placeholder="" name="article_isi">{{$data->article_isi}}</textarea>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
