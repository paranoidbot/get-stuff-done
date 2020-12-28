@extends('layout.master')

@section('content')
  <link rel="stylesheet" href="/css/edit.css">

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

        <div class="col-sm"> </div>

        <div id="edit-task" class="col-sm">
          <h2>Edit Task</h2>

          <form method="POST" action="/edit-task/{{ $task->id }}">

              <div id="task-text">
                  <textarea name="description">{{ $task->description }}</textarea>
              </div>


              <div id="submit-button">
                  <button class="btn btn-primary" type="submit">Edit Task</button>
              </div>
          {{ csrf_field() }}
          </form>
        </div>

        <div class="col-sm"></div>

      </div>
    </div>

  </div>

@endsection
