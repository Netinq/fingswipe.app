@extends('layouts.app', ['styles' => ['home']])

@section('content')
<div class="col-7 present">
    <div>
        <h1>FingSwipe</h1>
        <p>Fingswipe est un jeu instructif qui permet jour à jour de développer les reflexe de votre cerveau ainsi que votre concentration.</p>
        <a href="#">
            <div class="btn-download">
                Télécharger
            </div>
        </a>
    </div>
</div>
<div class="col-5 images">
    <img id="landing-img-home" src="{{asset('images/landing-img-home.png')}}" alt="App preview">
</div>
@endsection
