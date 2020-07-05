@extends('layouts.master')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Artikel</h1>
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
    @forelse($data as $key => $d)
        <div class="row mb-3">
            {{--        <div class="col-1"></div>--}}
            <div class="col-7 ml-2 ">
                <div class="card shadow">
                    <div class="card-header">
                        {{$d->article_judul}}
                    </div>
                    <div class="card-body">
                        {{$d->article_isi}}
                    </div>
                    <div class="card-footer">
                        {{$d->user_id}}
                    </div>
                </div>
            </div>
        </div>
    @empty
        Data Kosong
    @endforelse

@endsection
