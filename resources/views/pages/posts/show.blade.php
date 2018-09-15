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

        #post-container {

        }

        #sidebar {

        }

        .new-alert {
            margin-left: 3%;
            margin-right: 3%;
            margin-top: 4%;
            margin-bottom: 1%;
        }
        .card {
            padding: 7%;
            text-align: center;
        }
        .card p{
            font-size: 80%;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a href="..">Home</a></li>
        <li><a id="current" href="../posts">Posts</a></li>
        <li><a href="../about">About</a></li>
        <li><a href="../contact">Contact</a></li>
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
    <hr style="margin-top: 3%;">
    <div class="row">
        <div class="col-md-8" id="post-container">
            <h4><span class="glyphicon glyphicon-time"></span> Created on {{ date('j M, Y \a\t g:i A', strtotime($post->created_at)) }}
                @if($post->created_at != $post->updated_at)
                    (Last updated on {{ date('j M, Y \a\t g:i A', strtotime($post->updated_at)) }})
                @endif
            </h4>
            <h1>{{ $post->title }}</h1>
            <p style="word-wrap: break-word">{{ $post->body }}</p>
        </div>
        <div class="col-md-3 offset-1" id="sidebar">
            <div class="card">
                <a href="#" class="btn btn-primary btn-block">Edit</a>
                <a href="#" class="btn btn-danger btn-block">Delete</a>
                <hr>
                <p>This post was created by <strong>user</strong></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>