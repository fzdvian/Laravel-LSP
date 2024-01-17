@extends('layout.main')
@section('content')
    <div class="container-form">
        <h2 align="center">Edit Data Siswa</h2>

        @if ($errors->any())
            @foreach ($errors->all as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
        @endif
        @if (session('error'))
                <div class="alert alert-danger"><span class="closebtn" id="closeBtn">&times;</span>{{ session('error') }}
                </div>
        @endif

        <form action="/siswa/update/{{ $siswa->id }}" method="post">
            @csrf
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" value="{{ $siswa->nis }}">

            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" name="nama_siswa" id="nama_siswa" value="{{ $siswa->nama_siswa }}">

            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jk" value="L" id=""
                {{ $siswa->jk == 'L' ? 'checked' : '' }}>Laki-Laki
            <input type="radio" name="jk" value="P" id=""
                {{ $siswa->jk == 'P' ? 'checked' : '' }}>Perempuan

            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10">{{ $siswa->alamat }}</textarea>

            <label for="kelas_id">Kelas</label>
            <select name="kelas_id" id="kelas_id">
                <option></option>
                @foreach ($kelas as $k)
                    @if ($siswa->kelas_id == $k->id)
                        <option value="{{ $k->id }}" selected>{{ $k->kelas }} {{ $k->jurusan }} {{ $k->rombel }}</option>
                    @else
                        <option value="{{ $k->id }}">{{ $k->kelas }} {{ $k->jurusan }} {{ $k->rombel }}</option>
                    @endif
                @endforeach
            </select>

            <label for="pasword">Password</label>
            <input type="password" name="pasword" id="pasword" value="{{ $siswa->pasword }}">

            <button type="submit" class="button-submit" name="button">Edit</button>
        </form>
    </div>
@endsection
