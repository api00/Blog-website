<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container front">
        <div class="navbar">
            <div class="nav-icon">
                <h1>D-<span class="color-nav">Blogs</span> </h1>
            </div>
            <div class="links">
                <ul class="d-flex ">
                    <li><a  href="">Home</a></li>
                    {{-- <li><a href="/index/create">Create Blog</a></li> --}}

                    @if (Auth::check())
                        <li>
                            <a 
                                href="/index/create"
                                class="">
                                Create Blog
                            </a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
        <div class="card-left ">
            @foreach ($all as $post )
            <h3>{{ $post->title }}</h3>
            <h4> {{ $post->user->name }}</h4>
            <p>{{ $post->description }}</p>
            <img src="{{ ('images/'. $post->image_path) }}" alt="" srcset="">
            
            <a href="index/{{ $post->id }}">Read More</a>

            @if (isset(Auth::user()->id)  && Auth::user()->id == $post->user_id )
            
                <a href=" index/{{ $post->id  }}/edit ">Edit</a>
                <form  style="display: inline-block"
                action="/index/{{ $post->id }}"
                method="POST">
                @csrf
                @method('delete')

                <button
                    class="text-red-500 pr-3"
                    type="submit">
                    Delete
                </button>

            </form>
            
        @endif

           
            
            @endforeach
        </div>
    </div>
</body>
</html>