<!DOCTYPE html>
<html lang="en">
<head>
    <title>Luck | Contact</title>

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
            margin-top: 1%;
            margin-left: 4%;
            margin-bottom: 3%;
        }

        .contentHeader {
            font-size: 14pt;
            color: #636363;
        }

        .contactType {
            font-size: 16pt;
            color: #636363;
            margin-bottom: 0;
            padding: 0;
            font-weight: normal;
        }

        .contactData {
            font-size: 14pt;
            padding: 0;
            margin-top: .5%;
            color: #7a7a7a;
            font-weight: normal;
        }

        .form {
            margin-left: 4%;
            margin-top: 3%;
        }

        .form-group {
            width: 100%;
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
        <li><a href="..">Home</a></li>
        <li><a href="./posts">Posts</a></li>
        <li><a href="./about">About</a></li>
        <li><a id="current" href="./contact">Contact</a></li>
    </ul>
</nav>
<div class="header">
    <h2>Contact</h2>
</div>
<div class="content">
    <p class="contentHeader">There are numerous ways you can contact us here at luck. They are all listed below.</p>
    <h3 class="contactType">Email:</h3>
    <h5 class="contactData">j@wonacy.com</h5>
    <h3 class="contactType">Phone:</h3>
    <h5 class="contactData">999</h5>
    <h3 class="contactType">Live Chat:</h3>
    <h5 class="contactData" style="font-style: italic;">Coming Soon</h5>

</div>

<hr>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="form">
                <h3>Send a Message</h3>
                <form>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <br>
                        <input id="email" name="email" class="form-group" placeholder="lucky@luck.com">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <br>
                        <input id="subject" name="subject" class="form-group" placeholder="I have a question">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <br>
                        <textarea id="message" name="message" class="form-group"
                                  placeholder="Is your site mobile friendly?"></textarea>
                    </div>

                    <input type="submit" value="Send Message" class="btn btn-secondary">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>