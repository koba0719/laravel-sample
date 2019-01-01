@extends('../layouts/my')
@section('title', $title)
@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $body }}</p>
@endsection