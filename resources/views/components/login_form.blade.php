<div id="login-form-container">

      <form id='login-form' method="POST" action="{{ route('post-login') }}">
          @csrf

          <div id="email-input">
              <label for="email">E-Mail Address</label>
              <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          </div>


          <div id="password-input">
              <label for="password">Password</label>
              <input id="password" type="password" name="password" required autocomplete="current-password">
          </div>

          <div id="submit-button">
              <button type="submit">Login</button>
          </div>

      </form>
</div>
