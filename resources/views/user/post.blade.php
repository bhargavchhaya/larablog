@extends('user.app')

@section('bg-img', Storage::disk('local')->url($post->image) )

@section('title', $post->title)

@section('sub-heading',  $post->subtitle)

@section('main-content')

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <small>Created at {{ $post->created_at->diffForHumans() }}</small>            
                
                {!! htmlspecialchars_decode($post->body) !!}       
                
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-md-12">.
                        {{-- tag cloud --}}
                        <h3>Categories Cloud</h3>
                        @foreach ($post->categories as $category)
                        <small class="pull-left" style="margin-right: 20px;">
                            <p><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></p>
                        </small>        
                        @endforeach
                    </div>
                    <div class="col-md-12">
                        <br>
                        {{-- tag cloud --}}
                        <h3>Tags Cloud</h3>
                        
                        @foreach ($post->tags as $tag)
                        <small class="pull-left" style="margin: 10px; border: 1px solid blue; padding: 0 10px;">
                            <p><a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a></p>
                        </small>        
                        @endforeach
                    </div>
                    <div class="col-md-12">
                        {{-- Sections cloud --}}
                        <h3>Sections</h3>
                        
                        @foreach ($sections as $section)
                        <h2 class="section-heading">{{ $section->title }}</h2>    
                        <a href="#">
                            <img class="img-responsive" src="{{ Storage::disk('local')->url($section->image) }}" alt="">
                        </a>
                        <p>{!! htmlspecialchars_decode($section->body) !!}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<hr>


@endsection