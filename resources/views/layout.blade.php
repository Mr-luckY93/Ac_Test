<!DOCTYPE html>
<html>
    <head>
        <title>My Survey App</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AcSurvey</title>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </head>

    <body>
      <div class="container">
          <!-- TOP MENU -->
          <div class="row" style="padding-top:10px;">
              <div class="center-align">
                <a class="btn blue waves-effect waves-light lighten-1 white-text" href="/"> Home </a>
                  @if(Auth::check())
                    <a class="btn-flat waves-effect waves-light darken-1 white black-text" href="/logout" > Logout </a>
                    <a class="btn-flat disabled" href="#" style="text-transform:none;">{{ Auth::user()->email }}</a>
                  @else
                    <a class="btn-flat waves-effect waves-light darken-1 white black-text" href="/login"> Login </a>
                    <a class="btn-flat waves-effect waves-light darken-1 white black-text" href="/register"> Register </a>
                  @endif
              </div>
          </div>
         <!-- End TOP MENU -->
         
         <!-- BODY OF PAGE -->
          <div class="row">
              <div class="" style="margin-top:10px;">
                @yield('content')
              </div>
          </div>
         <!-- End BODY OF PAGE -->
      </div>

      <script src="{{ URL::to('jquery.min.js') }}"></script>
    </body>
   

</html>