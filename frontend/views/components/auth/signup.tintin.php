#extends('layouts.master')

#block('title', 'Signup Page')

#block('style')
    
#endblock


#block('content')

    <div class="ui-container ui-small">
      <div class="mb-50">
        <h3>Feel the greatness </h3>
      </div>

      <form id="signup" method="POST" action="signup">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="signup-form-email">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Aziz">
        </div>

        <div class="form-group">
          <label for="signup-form-email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
        </div>


        <div class="form-group">
          <label for="signup-form-password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
        </div>
        <div class="form-group">
          <button class="btn btn-primary w-100 form-button" type="submit">Get Started</button>
        </div>
      </form>

      <div class="text-center">
        <span>Already have an account?
          <a href="/sign-in">Login</a>
        </span>
      </div>

    </div>

#endblock

#block('script')

#endblock
