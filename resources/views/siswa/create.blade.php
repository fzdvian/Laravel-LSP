@extends('layout.main')
@section('content')
    <div class="container-form">
        <h2 align="center">Tambah Data Siswa</h2>

        @if ($errors->any())
            @foreach ($errors->all as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
        @endif
        @if (session('error'))
                <div class="alert alert-danger"><span class="closebtn" id="closeBtn">&times;</span>{{ session('error') }}
                </div>
        @endif

        <form action="/siswa/store" method="post">
            @csrf
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis">

            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" name="nama_siswa" id="nama_siswa">

            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jk" value="L" id="">Laki-Laki
            <input type="radio" name="jk" value="P" id="">Perempuan

            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>

            <label for="kelas_id">Kelas</label>
            <select name="kelas_id" id="kelas_id">
                <option></option>
                @foreach ($kelas as $k)
                    <option value="{{ $k->id }}">{{ $k->kelas }} {{ $k->jurusan }} {{ $k->rombel }}</option>
                @endforeach
            </select>

            <label for="pasword">Password</label>
            <input type="password" name="pasword" id="pasword">

            <button type="submit" class="button-submit">Simpan</button>
        </form>
    </div>
@endsection
