#extends('layouts.master')

#block('title', 'Login Page')

#block('style')
    
#endblock


#block('content')

<section>
    <div class="ui-container ui-small">
      <div class="mb-50">
        <h3>{{ t('app.auth.login.title') }}</h3>
      </div>
      <form id="login" method="POST" action="login">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="login-form-email">{{ t('app.auth.login.form-email') }}</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
        </div>

        <div class="form-group">
          <label for="login-form-password">{{ t('app.auth.login.form-password') }}</label>
          <input type="password" class="form-control" id="pwd" name="pwd" placeholder="password" required>
        </div>
        <div class="form-group">
          <button class="btn btn-primary w-100 form-button" type="submit">{{ t('app.auth.login.signin') }}</button>
        </div>
      </form>

      <div class="text-center">
        <span>{{ t('app.auth.login.newuser') }}
          <a href="sign-up">{{ t('app.auth.login.signup') }}</a>
        </span>
      </div>

    </div>
</section>

#endblock

#block('script')

#endblock
