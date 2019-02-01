@extends('user.app')

@section('bg-img', asset('user/img/home-bg.jpg'))

@section('title', 'Blog Demo')

@section('sub-heading', 'Blog sub heading demo')

@section('main-content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach ($posts as $post)
            <div class="post-preview">                
                <a href="{{ route('post', $post->slug) }}"><!-- Calling route via name -->
                    <h2 class="post-title">
                        {{ $post->title }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $post->title }}
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on {{ $post->created_at->diffForHumans() }}</p>
            </div>
            <hr>
            @endforeach            
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    {{ $posts->links() }}
                </li>
            </ul>
        </div>
    </div>
</div>

<hr>
@endsection