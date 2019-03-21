<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>#inject('title', 'It\'s Worked')</title>
    <meta name="description" content="Business Model Canvas Creator">
    <meta name="author" content="Lamine AZINAKOU">

    <!-- Stylesheet assets -->
    #include('layouts/partials/styles')

</head>
<body class="x-hidden has-sticky-header">

    <!-- Inject additional stylesheet if exist -->
    #inject('style')
    <!-- Nav -->
    #include('layouts/partials/nav')

    <!-- Inject view -->
    #inject('content')

    <!-- Footer -->
    #include('layouts/partials/footer')

    <!-- Javascript assets -->
    #include('layouts/partials/scripts')

    <!-- Inject additional script if exist -->
    #inject('script')
</body>
</html>
