#extends('layouts.master')

#block('title', 'Signup Page')

#block('style')
    
#endblock


#block('content')

    <div class="ui-container ui-small">
      <div class="mb-50">
        <h3>{{ t('app.auth.signup.title') }}</h3>
      </div>

      <form id="signup" method="POST" action="signup">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="signup-form-email">{{ t('app.auth.signup.form-name') }}</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Aziz">
        </div>

        <div class="form-group">
          <label for="signup-form-email">{{ t('app.auth.signup.form-email') }}</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
        </div>


        <div class="form-group">
          <label for="signup-form-password">{{ t('app.auth.signup.form-password') }}</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
        </div>
        <div class="form-group">
          <button class="btn btn-primary w-100 form-button" type="submit">{{ t('app.auth.signup.signup') }}</button>
        </div>
      </form>

      <div class="text-center">
        <span>{{ t('app.auth.signup.olduser') }}
          <a href="/sign-in">{{ t('app.auth.signup.signin') }}</a>
        </span>
      </div>

    </div>

#endblock

#block('script')

#endblock
