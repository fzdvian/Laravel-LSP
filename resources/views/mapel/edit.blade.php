@extends('layout.main')
@section('content')
    <div class="container-form">
        <h2 align="center">Edit Data Mapel</h2>

        @if ($errors->any())
            @foreach ($errors->all as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
        @endif
        @if (session('error'))
                <div class="alert alert-danger"><span class="closebtn" id="closeBtn">&times;</span>{{ session('error') }}
                </div>
        @endif

        <form action="/mapel/update/{{ $mapel->id }}" method="post">
            @csrf
            <label for="nama_mapel">Nama Mapel</label>
            <input type="text" name="nama_mapel" id="nama_mapel" value="{{ $mapel->nama_mapel }}">

            <button type="submit" class="button-submit">Edit</button>
        </form>
    </div>
@endsection
