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
        <div class="col-sm-3"></div>

        <div class="col-sm-6" id="tasks">

          @foreach ($user->tasks as $task)
            <div class="task-container">

              <div class="task-description">
                {{ $task->description }}
              </div>

              <div class="task-buttons">
                <form action="/edit-task/{{$task->id}}">

                    <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                    <button type="submit" name="delete" formmethod="POST" class="btn btn-danger">Done</button>
                    {{ csrf_field() }}

                </form>
              </div>

            </div>
          @endforeach

          <div id="new-task">
            <form action="/new-task">
              <button id="new-task-button" class="btn btn-success" type="submit" name="button">New Task</button>
              {{ csrf_field() }}
            </form>

          </div>

        </div>

        <div class="col-sm-3"></div>
      </div>

    </div>
  </div>

@endsection
