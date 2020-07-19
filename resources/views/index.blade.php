@extends('layout.navbar')

@section('content')

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">PIPA</h1>
        <div class="row center">
          <h5 class="header col s12">Pemahaman Injil melalui Pendalaman Alkitab</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="{{ URL::asset('img/cross.jpg') }}" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://adlucem.co/wp-content/uploads/2018/09/ewa_jpg1.jpg">
              <span class="card-title">Bab 1</span>
            </div>
            <div class="card-content">
              <p>Allah, Manusia, dan Dosa</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://adlucem.co/wp-content/uploads/2018/09/ewa_jpg1.jpg">
              <span class="card-title">Bab 2</span>
            </div>
            <div class="card-content">
              <p>Bagaimana kita diselamatkan?</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://adlucem.co/wp-content/uploads/2018/09/ewa_jpg1.jpg">
              <span class="card-title">Bab 3</span>
            </div>
            <div class="card-content">
              <p>Menghidupi keselamatan</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Verse of The Day</h4>
          <h5 class="center-align light">{{ $data->text }}</h5>
        </div>
      </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{ URL::asset('img/background3.jpg') }}" alt="Unsplashed background img 3"></div>
  </div>

@endsection
