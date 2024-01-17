@extends('layout.main')
@section('content')
    <div class="container-form">
        <h2 align="center">Tambah Data Mapel</h2>

        @if ($errors->any())
            @foreach ($errors->all as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
        @endif
        @if (session('error'))
                <div class="alert alert-danger"><span class="closebtn" id="closeBtn">&times;</span>{{ session('error') }}
                </div>
        @endif

        <form action="/mapel/store" method="post">
            @csrf
            <label for="nama_mapel">Nama Mapel</label>
            <input type="text" name="nama_mapel" id="nama_mapel">

            <button type="submit" class="button-submit" name="button">Simpan</button>
        </form>
    </div>
@endsection
