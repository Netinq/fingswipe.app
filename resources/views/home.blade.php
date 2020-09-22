@extends('layouts.app', ['styles' => ['home']])

@section('content')
<section class="row" id="home">
    <div class="col-7 present">
        <div>
            <h1>FingSwipe</h1>
            <p>Fingswipe est un jeu instructif qui permet jour à jour de développer les reflexe de votre cerveau ainsi que votre concentration.</p>
            <a href="#">
                <div class="btn-download">
                    <img src="{{asset('images/svg/android.svg')}}" id="android" alt="Android logo">Télécharger
                </div>
            </a>
        </div>
    </div>
    <div class="col-5 images">
        <img id="landing-img-home" src="{{asset('images/landing-img-home.png')}}" alt="App preview">
    </div>
</section>
<section class="row" id="leaderboard">
    <div class="col-7 present">
        <div>
            <h2>Leaderboard</h2>
            <p>Join the competition with players from all over the world</p>
        </div>
    </div>
    <div class="col-5 leaderboard">
        <div>
        @foreach ( $scores as $score )
            <div class="score row">
                <div class="col-4">
                    #{{ $loop->index }}
                </div>
                <div class="col-4">
                    {{ $score->username }}
                </div>
                <div class="col-4">
                    {{ $score->score }} Swipes
                </div>
            </div>
        @endforeach
    </div>
    </div>
</section>
@endsection
