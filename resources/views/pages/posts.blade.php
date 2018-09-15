<!DOCTYPE html>
<html lang="en">
<head>
    <title>Luck | Posts</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

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
<div class="content">
    <p>
        Take a look at some of our posts listed below to look at some cool work, or press this button to go to a
        popular post.
    </p>
    <button type="button" class="btn btn-secondary">Popular Post</button>
    <hr style="margin-top: 3%;">
    <div class="row">
        <div class="col-md-8" id="posts-container">
            <div class="post">
                <h3>title</h3>
                <p>this is post dec...</p>
                <a href="#" class="btn btn-primary">Continue</a>
            </div>

            <hr>

            <div class="post">
                <h3>title</h3>
                <p>this is post dec...</p>
                <a href="#" class="btn btn-primary">Continue</a>
            </div>

            <hr>

            <div class="post">
                <h3>title</h3>
                <p>this is post dec...</p>
                <a href="#" class="btn btn-primary">Continue</a>
            </div>

            <hr>

            <div class="post">
                <h3>title</h3>
                <p>this is post dec...</p>
                <a href="#" class="btn btn-primary">Continue</a>
            </div>
        </div>
        <div class="col-md-3 offset-1" id="sidebar">
            <div class="card">
                <h2 class="sidebar-header">Sidebar</h2>
            </div>
        </div>
    </div>
</div>
</body>
</html>