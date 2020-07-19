@extends('layout.navbar')

@section('content')

<div class="container">
  <div class="row">
   <div class="col s12">
     <div class="card-panel teal center-align">
       <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate">
              <label for="first_name" class="white-text">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name" class="white-text">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="password" class="white-text">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email" class="white-text">Email</label>
            </div>
          </div>
        </form>
      </div>
      <a class="waves-effect waves-light btn">Register</a>
     </div>
   </div>
 </div>
</div>

@endsection
