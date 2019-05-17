@extends('layouts.app')

@section('content')

@forelse($articles as $article)
    <a href="{{ route('article', $article->slug) }}"> <h4> {{ $article->title }} </h4> </a> <br>
@empty
    <p>yoxdu</p>
@endforelse



@endsection