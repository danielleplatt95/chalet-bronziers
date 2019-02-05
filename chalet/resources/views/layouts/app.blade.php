<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Chalet Bronziers, Peisey Nancroix">


        <!-- JavaScript CDNs -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        

        <!-- Scripts -->
        <script src="{{ asset('js/gallery.js') }}"></script>
        <script src="{{ asset('js/googlemapapi.js') }}"></script>
        <script src="{{ asset('js/loadmap.js') }}"></script>
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!-- Styling -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slideshow.css') }}" rel="stylesheet">

        <title>CHALET BRONZIERS :: PEISEY NANCROIX</title>

    </head>
    <body>
    
        <div class='central'>
            <br>
            <div class='nav'>

                <a href='#'>HOME</a>
                <a href='#'>ABOUT</a>
                <a href='#'>WINTER</a>
                <a href='#'>SUMMER</a>
                <a href='#'>PEISEY NANCROIX</a>
                <a href='#'>BOOKING</a>
                <a href='#'>CONTACT</a>
            </div>
        </div>

 
            @yield('content')
      
    </body>
</html>