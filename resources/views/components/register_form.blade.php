<div id="register-form-container">
  <link rel="stylesheet" href="/css/register_form.css">
      <div id='register-form-title'>Register</div>

      <form id='register-form' method="POST" action="/postRegister">
          @csrf

          <label class="register-form-label" for="name">Name</label>
          <input id="name" type="text" name="name" required autocomplete="name" autofocus>

          <label class="register-form-label" for="email">E-Mail Address</label>
          <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">


          <label class="register-form-label" for="password">Password</label>
          <input id="password" type="password" name="password" required autocomplete="current-password">

          <button id="submit-button" type="submit">Register</button>


      </form>
</div>
