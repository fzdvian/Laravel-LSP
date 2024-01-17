@extends('layout.main')
@section('content')
    <div class="container-form">
        <h2 align="center">Tambah Data Kelas</h2>

        @if ($errors->any())
            @foreach ($errors->all as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
        @endif
        @if (session('error'))
                <div class="alert alert-danger"><span class="closebtn" id="closeBtn">&times;</span>{{ session('error') }}
                </div>
        @endi

        <form action="/kelas/store" method="post">
            @csrf
            <label for="kelas">Kelas</label>
            <select name="kelas" id="kelas">
                <option></option>
                @foreach ($tingkat_kelas as $k)
                    <option value="{{ $k }}">{{ $k }}</option>
                @endforeach
            </select>

            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan">
                <option></option>
                @foreach ($jurusan as $j)
                    <option value="{{ $j }}">{{ $j }}</option>
                @endforeach
            </select>

            <label for="rombel">Rombel</label>
            <input type="number" name="rombel" id="rombel" min="1" max="4">

            <button type="submit" class="button-submit" name="button">Simpan</button>
        </form>
    </div>
@endsection
