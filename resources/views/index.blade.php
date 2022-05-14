@extends('layouts.base')

@section('content')

@if (!empty($articles[0]))

@foreach ($articles as $article)

<div class="article_card">
    <h3><a href="{{route('articleShow', ['id' => $article->id])}}" class="continue_read">

            {{ $article->title }}
        </a>
    </h3>

    <div class="publication_date">{{ $article->published_at }}</div>

    <p>{!! $article->description !!}</p>

    <a href="{{route('articleShow', ['id' => $article->id])}}" class="continue_read">
        Читать далее
    </a>
</div>

@unless ($loop->last)
<br />
<hr />
<br />
@endunless

@endforeach

@else
Ничего не нашлось
@endif

@endsection
