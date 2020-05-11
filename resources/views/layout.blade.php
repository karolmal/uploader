<!DOCTYPE html>
<html>
<head>
    <title>Laravel File Upload With Progress bar Tutorial Example</title>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="/dropzone/dist/dropzone.js"></script>

  <script src="js/app.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/dropzone/dist/dropzone.css">
    <link rel="stylesheet" href="/dropzone/dist/basic.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
 
@yield('content')

@yield('form')

@yield('scripts')

</body>
</html>