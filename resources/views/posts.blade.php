@extends('layouts.main')

@section('container')
@foreach ($posts as $post)

<article class="mb-3">
  <h2>
    <a href="/posts/{{ $post['slug'] }}">
    {{ $post['tittle'] }}
  </a>
</article>
    
@endforeach
@endsection