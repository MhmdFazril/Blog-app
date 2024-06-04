@extends('layout/main')

@section('container')

    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search here" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow: hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                        class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title"><a class="text-decoration-none text-dark"
                        href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-body-secondary">
                        by: <a class="text-decoration-none"
                            href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a
                            class="text-decoration-none"
                            href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more...</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="/posts?category={{ $post->category->slug }}">
                                <div class="position-absolute px-3 py-2 text-white"
                                    style="background-color: rgba(0, 0, 0, 0.5)">{{ $post->category->name }}</div>
                            </a>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="img-fluid" style="max-height: 330px; overflow: hidden;">
                            @else
                                <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                    <small class="text-body-secondary">
                                        by: <a class="text-decoration-none"
                                            href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found</p>
    @endif


    <div class="d-flex justify-content-center mt-5">
        {{ $posts->links() }}
    </div>
@endsection

{{-- App\Models\Post::create([
    'title' => 'judul ketiga',
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quos repellat aperiam?',
    'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic sunt, at quae neque doloribus delectus. Aliquid totam necessitatibus odit non! Non quibusdam voluptate recusandae atque doloremque adipisci aspernatur, sed nulla, explicabo cumque sequi, nihil eligendi! Corporis, temporibus doloribus? Fugiat, eaque nihil aperiam reprehenderit, distinctio saepe repudiandae vero maiores facere assumenda, veniam pariatur eos neque!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum consequatur deserunt eveniet, beatae dolor voluptas autem ipsa, tenetur debitis eaque id? Rem quidem temporibus laudantium cupiditate aspernatur labore sunt recusandae voluptate odit!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus ducimus laudantium qui! Nihil officiis aspernatur ipsa modi, fugit, aliquid mollitia perspiciatis vero, quibusdam sapiente quaerat. In corrupti, at minus cum quisquam deleniti reprehenderit quas dolore a unde dolorum officia fugit debitis incidunt?</p>'
]) --}}
