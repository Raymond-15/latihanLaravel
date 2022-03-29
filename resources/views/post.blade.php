@extends('layouts.main')

@section('container')
<article class="mb-3">
  <h2>
    {{ $post['tittle'] }}
  </h2>
  <h5>by : {{ $post['author'] }}</h5>
  <p>{{ $post['body'] }}</p>
</article>

    <a href="/blog">Back to posts</a>
@endsection