@extends('layout.master')
@section('content')
  <link rel="stylesheet" href="/css/guest_dashboard.css">
    <div id="app-wrapper" class="container-fluid">

      <div id="main-row" class="row">

        <div id='text-col' class="col-lg-3">

          <div id="market-text">

            <h1 id='main-text'>Get it Done</h1>
            <div class="sub-text">
              <h4 id='sub-1'>Organise the mess</h4>
              <h4 id='sub-2'>Plan ahead</h4>
              <h4 id='sub-3'>Enjoy life</h4>
            </div>

          </div>

        </div>
        <div class="col-lg-6">

        </div>
        <div id="login-col" class="col-lg-3">
          @component('components.login_form')
          @endcomponent
        </div>

      </div>

    </div>


@endsection
