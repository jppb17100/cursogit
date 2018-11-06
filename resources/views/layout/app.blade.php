<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content=" {{ csrf_token()}}">

    <title>Curso Laravel</title>
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
        body{
            padding: 20px;
        }
        .navbar{
            margin-bottom: 20px
        }
    </style>

</head>
<body>
    <div class="container">
        @include('layout.navbar')
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>
 