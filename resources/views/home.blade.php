@extends('layouts.app', ['styles' => ['home']])

@section('content')
<section class="row" id="home">
    <div class="col-12 col-md-7 present">
        <div>
            <h1>FingSwipe</h1>
            <p>Fingswipe is an instructive game wich develop your brain reflection just as your concentration every day you play.</p>
            <a href="{{asset('download/fingswipe.apk')}}" download>
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
<section class="row" id="rules">
    <div class="hide row">
        <div class="d-none d-md-flex col-md-5 images">
            <img id="landing-img-rules" src="{{asset('images/landing-img-rules.png')}}" alt="App preview">
        </div>
        <div class="col-12 col-md-7 present">
            <div>
                <h2>The rules</h2>
                <p>Fingswipe is an instructive game wich develop your brain reflection just as your concentration every day you play . The goal is to swipe your finger according to the indications posted and in the same time be carreful about counter-argument. Fingswipe is enable to pass the time but also to challenge yourself and other players with a score rating system. You can therefor in your free-time relax and in the same time increase your brain capacities.</p>
            </div>
        </div>
    </div>
</section>
<section class="row" id="leaderboard">
    <div class="hide row col-12">
        <div class="col-12 col-lg-5 col-xl-7 present">
            <div>
                <h2>Leaderboard</h2>
                <p>Join the competition with players from all over the world</p>
                <a href="{{asset('download/fingswipe.apk')}}" download>
                    <div class="btn-download">
                        <img src="{{asset('images/svg/android.svg')}}" id="android" alt="Android logo">Télécharger
                    </div>
                </a>
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
