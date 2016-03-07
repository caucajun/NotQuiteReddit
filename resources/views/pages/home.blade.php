
    @extends('layouts.masters.main')

    <div class="container">

      @include('layouts.partials.login')

      <form class="form-signin">
        <h2 class="form-signin-heading">Welcome to NotQuiteReddit!</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Super Secret Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Never give me up. Never let me down. Never run around and desert me.
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In Now!</button>
      </form>

    </div> 

