<div id="login-form-container">
  <link rel="stylesheet" href="/css/login_form.css">
      <div id='login-form-title'>Sign in</div>

      <form id='login-form' method="POST" action="/postLogin">
          @csrf

          <label class="login-form-label" for="email">E-Mail Address</label>
          <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


          <label class="login-form-label" for="password">Password</label>
          <input id="password" type="password" name="password" required autocomplete="current-password">

          <button id="submit-button" type="submit">Login</button>


      </form>
</div>
