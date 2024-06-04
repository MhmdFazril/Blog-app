@extends('layout/main')
@section('container')

    <h1 class="mb-5">Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card text-bg-dark">
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0, 0, 0, .7)">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection

{{-- App\Models\Post::create([
    'title' => 'judul ketiga',
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quos repellat aperiam?',
    'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic sunt, at quae neque doloribus delectus. Aliquid totam necessitatibus odit non! Non quibusdam voluptate recusandae atque doloremque adipisci aspernatur, sed nulla, explicabo cumque sequi, nihil eligendi! Corporis, temporibus doloribus? Fugiat, eaque nihil aperiam reprehenderit, distinctio saepe repudiandae vero maiores facere assumenda, veniam pariatur eos neque!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum consequatur deserunt eveniet, beatae dolor voluptas autem ipsa, tenetur debitis eaque id? Rem quidem temporibus laudantium cupiditate aspernatur labore sunt recusandae voluptate odit!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus ducimus laudantium qui! Nihil officiis aspernatur ipsa modi, fugit, aliquid mollitia perspiciatis vero, quibusdam sapiente quaerat. In corrupti, at minus cum quisquam deleniti reprehenderit quas dolore a unde dolorum officia fugit debitis incidunt?</p>'
]) --}}