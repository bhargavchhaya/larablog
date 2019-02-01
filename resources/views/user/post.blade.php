@extends('user.app')

@section('bg-img', Storage::disk('local')->url($post->image) )

@section('title', $post->title)

@section('sub-heading',  $post->subtitle)

@section('main-content')

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <small>Created at {{ $post->created_at->diffForHumans() }}</small>
                
                @foreach ($post->categories as $category)
                <small class="pull-right" style="margin-right: 20px;">
                    <p><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></p>
                </small>        
                @endforeach
                
                {!! htmlspecialchars_decode($post->body) !!}

                {{-- tag cloud --}}
                <h3>Tags Cloud</h3>
                   
                @foreach ($post->tags as $tag)
                <small class="pull-left" style="margin-right: 20px; border: 2px solid red; padding: 10px;">
                    <p><a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a></p>
                </small>        
                @endforeach
                
                
            </div>
        </div>
    </div>
</article>

<hr>


@endsection