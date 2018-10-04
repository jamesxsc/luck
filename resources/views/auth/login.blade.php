<!DOCTYPE html>
<html lang="en">
<head>
    <title>Luck | Login</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    {!! Html::style('css/parsley.css') !!}

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
            padding-left: 0;
        }

        ul li {
            transition: background-color 300ms;
            display: inline-block;
            padding: 20px;
        }

        ul li:hover {
            background-color: #b444de;
        }

        @media (max-width: 419px) {
            #current {
                margin-left: 10%;
            }
        }

        @media (max-width: 615px) and (min-width: 420px) {
            #current {
                margin-left: 30%;
            }
        }

        @media (max-width: 1530px) and (min-width: 616px) {
            #current {
                margin-left: 50%;
            }
        }

        @media (min-width: 1531px) {
            #current {
                margin-left: 70%;
            }
        }

        #current {
            font-size: 18pt;
            font-weight: bold;
            color: #fff;
            font-family: Roboto;
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

        .form {
            margin-left: 4%;
            margin-top: 3%;
        }

        form {
            margin-top: 1%;
        }

        .form h3 {
            font-weight: normal;
            font-family: Roboto;
            color: #3d3d3d;
        }

        form .form-group label {
            font-family: Roboto;
            margin-bottom: .5%;
            color: #636363;
        }
    </style>

</head>
<body>
<nav>
    <ul>
        <li><a href="..">&#x25c0;</a></li>
        <li id="current"><a href="">Login</a></li>
    </ul>
</nav>
<div class="header">

</div>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="form">
                    <h3>Login</h3>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <strong>Errors:</strong>
                            <ul>
                                @foreach($errors as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(array('route' => 'auth.login', 'data-parsley-validate' => '')) !!}
                    {{ Form::label('email', 'Email:') }}
                    <br>
                    {{ Form::email('email', null, array('class' => 'form-group required', 'required' => '',
                            'placeholder' => 'user@luck.com', 'maxlength' => '255', 'minlength' => '5')) }}
                    <br>
                    {{ Form::label('password', 'Password:') }}
                    <br>
                    {{ Form::password('password', null, array('class' => 'form-group required', 'required' => '',
                            'placeholder' => 'notsosecure...', 'maxlength' => '255', 'minlength' => '6')) }}
                    <br>
                    {{ Form::submit('Login', array('class' => 'btn btn-secondary')) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.min.js"></script>

</body>
