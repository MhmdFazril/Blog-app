@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Posts</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus required value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control d-none" id="slug" name="slug" value="{{ old('slug') }}">
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slugDisplay" name="slugDisplay" disabled readonly required value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-check-label">Category</label>
                <select class="form-select" name="category_id">
                    <option selected disabled>Choose your category</option>
                    @foreach ($categories as $category)                        
                        @if (old('category_id') == $category->id)
                            <option selected value={{ $category->id }}>{{ $category->name }}</option>
                        @else
                            <option value={{ $category->id }}>{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Post image</label>
                <img class="img-preview img-fluid mb-2 col-sm-5" id="img-preview">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-check-label">Body</label>
                @error('body')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
            </div>


            <button type="submit" class="btn btn-primary">Create Posts</button>
        </form>
    </div>

    <script>
        const titleInput = document.querySelector('#title');
        const slugInput = document.querySelector('#slug');
        const slugInputDisplay = document.querySelector('#slugDisplay');
        
        titleInput.addEventListener('change', getSlug)

        /*
        fetch api untuk mengambil data dari kolom title terlebih dahulu lalu mengirimkan data ke url tersebut yang sudah didaftarkan pada route lalu masuk ke DashboardPostsController dan dipanggil service dari library createSlug() lalu hasilnya di return kedalam bentuk response->json supaya hasilnya bisa diolah lagi disini
        */
        async function getSlug(){
            const response = await fetch("/dashboard/posts/checkSlug?title=" + titleInput.value);
            const slug = await response.json();
            slugInput.value = slug
            slugInputDisplay.value = slug
        }


        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault()
        })

        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();

            // =========== MENGGUNAKAN CARA PAK DIKA TAPI GAGAL ============
            // oFReader.readAsDataURL(image.files[0]);

            // oFReader.onLoad = function(oFREvent){
            //     imgPreview.src = oFREvent.target.result;
            // }


            // ========== MENGGUNAKAN CHATGPT TAPI BERHASIL ============
            oFReader.onload = function(e){
                imgPreview.src = e.target.result;
            }

            oFReader.readAsDataURL(image.files[0]);



            // =========== MENGGUNAKAN CARA DOKUMENTASI LANGSUNG TAPI BERHASIL ===========
            // oFReader.addEventListener(
            //     "load",
            //     () => {
            //     // convert image file to base64 string
            //     imgPreview.src = oFReader.result;
            //     },
            //     false,
            // );

            // if (image.files[0]) {
            //     oFReader.readAsDataURL(image.files[0]);
            // }

        }

    </script>

@endsection