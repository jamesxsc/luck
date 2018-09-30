<!DOCTYPE html>
<html lang="en">
<head>
    <title>Luck | Home</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
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

        .content p {
            margin-bottom: 5%;
        }

        .time-container h4,
        .time-container h5 {
            text-align: right;
            font-weight: normal;
            margin: 1%;
        }

        .post .col-md-10 h4 {
            margin-top: 0;
            margin-bottom: 0;
            font-weight: normal;
            word-wrap: break-word;
        }

        .post .col-md-10 h2 {
            margin-bottom: 1%;
            margin-top: 0;
            word-wrap: break-word;
        }

        .post .col-md-10 {
            padding-right: 8%;
        }

        .post {
            border: 5px dashed #d98bff;
            padding-left: 1.5%;
            padding-bottom: 0;
            padding-top: 1%;
            margin-bottom: 4%;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a id="current" href="..">Home</a></li>
        <li><a href="./posts">Posts</a></li>
        <li><a href="./about">About</a></li>
        <li><a href="./contact">Contact</a></li>
    </ul>
</nav>
<div class="header">
    <h2>Luck</h2>
</div>
<div class="content">
    <p>
        Welcome to Luck. Below are a few of our most recent posts.
    </p>

    <hr>

    @foreach($posts as $post)
        <div class="post row">
            <div class="col-md-10">
                <h2>{{ $post->title }}</h2>
                <h4 style="word-wrap: break-word">{{ (substr($post->body, 0, 200) . (strlen($post->body) > 200 ? '...' : '')) }} <a href="{{ route('posts.single', $post->slug) }}" class="btn btn-secondary">Read More</a></h4>
            </div>
            <div class="col-md-2 time-container">
                <h4>
                    <span class="glyphicon glyphicon-time"></span> {{ date('j M', strtotime($post->created_at)) }}
                </h4>
                @if($post->created_at != $post->updated_at)
                    <h5 style="font-style: italic">(Last updated on {{ date('j M', strtotime($post->updated_at)) }}
                        )</h5>
                @endif
            </div>
        </div>
    @endforeach
</div>
</body>
</html>