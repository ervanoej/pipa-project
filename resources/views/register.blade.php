@extends('layout.navbar')

@section('content')
<div class="col s12">
  <h4 class="center-align"> Register </h4>
</div>
<div class="container">
  <div class="row">
   <div class="col s12">
     <div class="card-panel teal center-align">
       <div class="row">
        <form class="col s12" role="form" method="POST" action="{{ url('/api/register') }}"> 
          <div class="row">
            <div class="input-field col s12">
              <input id="name" name="name" type="text" class="validate">
              <label for="name" class="white-text" value="{{ old('name') }}">Nama</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" name="password" type="password" class="validate">
              <label for="password" class="white-text">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" name="email" class="validate">
              <label for="email" class="white-text" value="{{ old('email') }}">Email</label>
            </div>
          </div>
          <button class="waves-effect waves-light btn" type="submit">Register</button>
        </form>
      </div>
     </div>
   </div>
 </div>
</div>

@endsection
