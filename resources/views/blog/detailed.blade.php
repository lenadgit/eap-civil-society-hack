@extends('layouts.app')

@section('content')

<h1>{{ $article->title }}</h1> <br>
@forelse($article->categories as $category)
    <a href="{{ route('category', $category->slug) }}"> <h3> {{ $category->name }} </h3></a>
@empty
    <h3>yoxdu</h3>
@endforelse


@endsection