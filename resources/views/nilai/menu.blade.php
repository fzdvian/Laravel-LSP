@extends('layout.main')
@section('content')
    <div class="contact-menu">
        @forelse ($kelas as $k)
            <div class="menu-kelas">
                <div class="kelas-list">
                    <a href="/nilai/kelas/{{ $k->id }}">{{ $k->kelas }} {{ $k->jurusan }} {{ $k->rombel }}</a>
                </div>
            </div>
        @empty
            <div class="menu-kelas">
                <div class="kelas-list">
                    Anda Belum Mendapatkan Kelas dan Mapel
                </div>
            </div>
        @endforelse
    </div>
@endsection
