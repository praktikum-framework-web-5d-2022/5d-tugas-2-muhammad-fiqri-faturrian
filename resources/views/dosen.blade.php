@extends('layouts.main')

@section('container')
<h1><font color="white"> Dosen</font></h1>

<div class="container">
    <ol class="list-group list-group-flush">
        @foreach ($dosen as $dsn)
            <li class="list-group-item">{{ $dsn }}</li>
        @endforeach
    </ol>
</div>
@endsection
