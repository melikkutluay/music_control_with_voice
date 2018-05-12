@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sound Music</title>

    <!-- Fonts -->
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth

            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Sound Music
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                    <a class="navbar-brand" href="#">Say Music</a>

                    <form id="js-userSubmit" class="navbar-form navbar-right">
                        <label for="query"></label>
                        <div class="form-group">
                            <input id="js-userInput" class="speech-input form-control" type="text" name="" x-webkit-speech placeholder="Artist Name">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                        <button id="mic" type="button" class="btn btn-default micBtn">
                            <span class="micFA fa fa-microphone" aria-hidden="true"></span>
                        </button>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Sound Music</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        Please use
                    </div>
                    <div class="modal-body comands">
                        <div>Voice comands include:</div>
                        <ul>
                            <li>Play (artist name)</li>
                            <li>Pause</li>
                            <li>Stop</li>
                            <li>Resume</li>
                            <li>Play</li>
                            <li>Next Song</li>
                            <li>Skip</li>
                            <li>Previous Song</li>
                            <li>Last Song</li>
                        </ul>
                    </div>
                    <div class="modal-body modalMic">
                        To start or stop speaking to ai Music just click the mic button.
                        <br>
                        <div>
                            <button id="modalMic" type="button" class="btn btn-default micBtn modalMicBtn">
                                <span class="fa fa-2x fa-microphone" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="alert-warning info noSongs hide">No Songs Found</div>
            <iframe id="sc-widget" src="https://w.soundcloud.com/player/?url=https://api.soundcloud.com/users/926246" width="100%" height="500" scrolling="no" frameborder="no"></iframe>
        </div>

    </div>
</div>
</body>
</html>
<script src="js/annyang.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/soundcloud_clientid.js"></script>
<script src="https://connect.soundcloud.com/sdk/sdk-3.1.2.js"></script>
<script src="https://w.soundcloud.com/player/api.js" type="text/javascript"></script>
<script type="text/javascript" src="js/app.js"></script>

@endsection
