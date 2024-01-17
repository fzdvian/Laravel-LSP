@extends('layout.main')
@section('content')
    <div class="container-form">
        <h2 align="center">Edit Data Kelas</h2>

        @if ($errors->any())
            @foreach ($errors->all as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
        @endif
        @if (session('error'))
                <div class="alert alert-danger"><span class="closebtn" id="closeBtn">&times;</span>{{ session('error') }}
                </div>
        @endif

        <form action="/kelas/update/{{ $kelas->id }}" method="post">
            @csrf
            <label for="kelas">Kelas</label>
            <select name="kelas" id="kelas">
                @foreach ($tingkat_kelas as $k)
                    @if ($kelas->kelas == $k)
                        <option value="{{ $k }}" selected>{{ $k }}</option>
                    @else
                        <option value="{{ $k }}">{{ $k }}</option>
                    @endif
                @endforeach
            </select>

            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan">
                @foreach ($jurusan as $j)
                    @if ($kelas->jurusan == $j)
                        <option value="{{ $j }}" selected>{{ $j }}</option>
                    @else
                        <option value="{{ $j }}">{{ $j }}</option>
                    @endif
                @endforeach
            </select>

            <label for="rombel">Rombel</label>
            <input type="number" name="rombel" id="rombel" min="1" max="4" value="{{ $kelas->rombel }}">

            <button type="submit" class="button-submit" name="button">Edit</button>
        </form>
    </div>
@endsection
