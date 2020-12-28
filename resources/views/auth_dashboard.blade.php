@extends('layout.master')
@section('content')

  <link rel="stylesheet" href="/css/auth_dashboard.css">

  <div id="app-wrapper">
    <div class="container-fluid">

      <div id="header" class="row">

          <span class="col-sm-4" id="text-logo">Get Stuff Done</span>
          <div class="col-sm-4" id="username-header">
          {{ $user->name }}
          </div>
          <div class="col-sm-4" id="logout">
                      <a href="/logout" method="POST">Logout</a>
          </div>

      </div>


      <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6" id="tasks">
          {{ $user->tasks }}
        </div>
        <div class="col-sm-3">

        </div>
      </div>

    </div>
  </div>

@endsection
