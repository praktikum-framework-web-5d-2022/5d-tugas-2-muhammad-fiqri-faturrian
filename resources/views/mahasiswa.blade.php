@extends('layouts.main')

@section('container')
  <h1><font color="white">Mahasiswa</font></h1>

  <div class="container">
    <ol class="list-group list-group-flush">
        @foreach ($mahasiswa as $mhs)
            <li class="list-group-item">{{ $mhs }}</li>
        @endforeach
    </ol>
</div>
@endsection
