@extends('layouts.main')

@section('container')
  <h1><font color="white">Mata Kuliah</font></h1>

  <div class="container">
    <ol class="list-group list-group-flush">
        @foreach ($matkul as $mk)
            <li class="list-group-item">{{ $mk }}</li>
        @endforeach
    </ol>
</div>
@endsection
