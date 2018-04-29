<script src="public/js/speechtotext.js"></script>
@extends('layouts.app')

@section('content')
<body onload="start();" >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="profile">
                <div class="nav nav-default">
                    <img style="border-radius: 100%" src="https://i1.wp.com/abs.twimg.com/sticky/default_profile_images/default_profile_200x200.png" alt="">
                </div>
            </div>
            <div><br>
                <div class="card">
                    <div class="card-header">Çalma Listesi</div>

                    <div style="height: 375px" class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Çaldır</div>
                    <div>Deneme Alanım</div>

                <div style="height: 600px" class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
</body>

@endsection
