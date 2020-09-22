@extends('layouts.app', ['styles' => ['home']])

@section('content')
<section class="row" id="home">
    <div class="col-12 col-md-7 present">
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
    <div class="d-none d-md-flex col-md-5 images">
        <img id="landing-img-home" src="{{asset('images/landing-img-home.png')}}" alt="App preview">
    </div>
</section>
<section class="row" id="leaderboard">
    <div class="hide row col-12">
        <div class="col-12 col-lg-5 col-xl-7 present">
            <div>
                <h2>Leaderboard</h2>
                <p>Join the competition with players from all over the world</p>
            </div>
        </div>
        <div class="col-12 col-lg-7 col-xl-5 leaderboard">
            <div class="scores-list">
            @foreach ( $scores as $score )
                <div class="scores-elem row">
                    <div class="col-2 position">
                        #{{ $loop->index+1 }}
                    </div>
                    <div class="col-5 username">
                        {{ $score->username }}
                    </div>
                    <div class="col-5 score">
                        {{ $score->score }} Swipes
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<script>

$(document).ready(function () {
    $(document).on("scroll", scrollHide);
});

function scrollHide(event) {

    var scrollPos = $(document).scrollTop();

    $('section').each(function () {
        var refElement = $(this);

        if (refElement.position().top <= scrollPos + ($(this).height() / 3) && refElement.position().top + refElement.height() > scrollPos + ($(this).height() / 3) && refElement.children().hasClass('hide'))
        {
            refElement.children().removeClass('hide');
        }
    });
}

</script>
@endsection
