@extends('layout.main')
@section('content')
    <div class="container-form">
        <h2 align="center">Tambah Data Guru</h2>

        @if ($errors->any())
            @foreach ($errors->all as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
        @endif
        @if (session('error'))
                <div class="alert alert-danger"><span class="closebtn" id="closeBtn">&times;</span>{{ session('error') }}
                </div>
        @endif

        <form action="/guru/store" method="post">
            @csrf
            <label for="nip">NIP</label>
            <input type="text" name="nip" id="nip">

            <label for="nama_guru">Nama Guru</label>
            <input type="text" name="nama_guru" id="nama_guru">

            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jk" value="L" id="">Laki-Laki
            <input type="radio" name="jk" value="P" id="">Perempuan

            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <button type="submit" class="button-submit" name="button">Simpan</button>
        </form>
    </div>
@endsection
