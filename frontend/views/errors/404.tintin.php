#extends('layouts.master')

#block('title', '404 - Not Found')

#block('content')

<div class="container">
    <div class="row u-height-50 align-items-center">
        <div class="col-12 col-md-6 mx-auto py-4 px-5">
            <header class="text-center mb-4">
                <h1 class="display-1">404</h1>
                <p class="lead">We can't seem to find the thing you were looking for. If you typed the address,
                    double-check the spelling.</p>
            </header>
            <a href="/" class="btn btn-link my-4 w-100">Back home</a>
        </div>
    </div>
</div>

#endblock
