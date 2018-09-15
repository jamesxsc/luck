<!DOCTYPE html>
<html lang="en">
<head>
    <title>Luck | Home</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">

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
        Welcome to Luck.
    </p>
</div>
</body>
</html>