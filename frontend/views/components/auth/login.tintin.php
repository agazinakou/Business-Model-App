#extends('layouts.master')

#block('title', 'Login Page')

#block('style')
    
#endblock


#block('content')

<section>
    <div class="ui-container ui-small">
      <div class="mb-50">
        <h3>Welcome back</h3>
      </div>
      <form id="login" method="POST" action="login">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="login-form-email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
        </div>

        <div class="form-group">
          <label for="login-form-password">Password</label>
          <input type="password" class="form-control" id="pwd" name="pwd" placeholder="password" required>
        </div>
        <div class="form-group">
          <button class="btn btn-primary w-100 form-button" type="submit">Login</button>
        </div>
      </form>

      <div class="text-center">
        <span>Don't have account?
          <a href="sign-up">Signup for free</a>
        </span>
      </div>

    </div>
</section>

#endblock

#block('script')

#endblock
