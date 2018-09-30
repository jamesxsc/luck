<!DOCTYPE html>
<html lang="en">
<head>
    <title>Luck | Posts</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">

    <style>
        @media (max-width: 960px) {
            html, body {
                width: 100%;
                padding: 0;
                margin: auto;
                background-color: #ffe7fa;
            }
        }

        @media (min-width: 961px) {
            html, body {
                margin-left: 10%;
                margin-right: 10%;
                padding: 0;
                background-color: #ffe7fa;
            }
        }

        nav {
            background-color: #d98bff;
            text-align: right;
        }

        ul li a {
            color: #fff;
            font-family: Roboto;
            font-size: 16pt;
            text-decoration: none;
            padding: 20px;
        }

        ul li a:hover {
            text-decoration: none;
            color: #ffffff;
        }

        ul {
            list-style: none;
        }

        ul li {
            transition: background-color 300ms;
            display: inline-block;
            padding: 20px;
        }

        ul li:hover {
            background-color: #b444de;
        }

        #current {
            font-size: 18pt;
            font-weight: bold;
        }

        .header {
            font-family: Roboto;
            font-size: 24pt;
            font-weight: bold;
            color: #3d3d3d;
            text-align: left;
            margin-left: 4%;
            margin-top: 3%;
        }

        .content {
            font-family: Roboto;
            font-size: 14pt;
            color: #636363;
            margin-top: 1%;
            margin-left: 4%;
        }

        #posts-container {

        }

        #sidebar {

        }

        .post p {
            word-wrap: break-word;
        }

        .btn-container {
            margin: 0 auto;
            text-align: center;
        }

        .btn-container a {
            font-size: 75%;
            padding: 3%;
            margin: 6%;
            display: block;
        }

        .time-container {
            text-align: right;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a href="..">Home</a></li>
        <li><a id="current" href="./posts">Posts</a></li>
        <li><a href="./about">About</a></li>
        <li><a href="./contact">Contact</a></li>
    </ul>
</nav>
<div class="header">
    <span style="font-size: 32pt">Posts</span>
</div>

@if(Session::has('success'))
    <div class="alert alert-success new-alert" role="alert">
        <strong>Success:</strong> {{ Session::get('success') }}
    </div>
@endif

<div class="content">
    <p>
        Take a look at some of our posts listed below to look at some cool work, or press this button to go to a
        popular post.
    </p>
    <button type="button" class="btn btn-secondary">Popular Post</button>
    <hr style="margin-top: 3%;">
    <div class="text-center">
        {{ $posts->links() }}
    </div>
    <div class="row">
        <div class="col-md-8" id="posts-container">
            @foreach($posts as $post)
                <hr>
                <div class="post row">
                    <div class="col-md-7">
                        <h2>{{ $post->title }}</h2>
                        <h4 style="word-wrap: break-word">{{ (substr($post->body, 0, 100) . (strlen($post->body) > 100 ? '...' : '')) }}</h4>
                    </div>
                    <div class="col-md-3 time-container">
                        <h4>
                            <span class="glyphicon glyphicon-time"></span> {{ date('j M', strtotime($post->created_at)) }}
                        </h4>
                        @if($post->created_at != $post->updated_at)
                            <h5 style="font-style: italic">(Last updated on {{ date('j M', strtotime($post->updated_at)) }})</h5>
                        @endif
                    </div>
                    <div class="col-md-2 btn-container">
                        <a href="../posts/{{ $post->id }}" class="btn btn-outline-dark">View</a>
                        <a href="../posts/{{ $post->id }}/edit" class="btn btn-outline-danger">Edit</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-3 offset-1" id="sidebar">
            <div class="card">
                <h2 class="sidebar-header">Sidebar</h2>
                <a href="../posts/create" class="btn btn-outline-danger">Create Post</a>
            </div>
        </div>
    </div>
    <div class="text-center">
        {{ $posts->links() }}
    </div>
</div>
</body>
</html>