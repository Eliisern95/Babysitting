<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="vidth-device-width, initial-scale=1">
        <title>@yield('title', 'Babysitting')</title>
           <!--jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>    
        <!--css-->
        <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/Superhero/bootstrap.min.css" rel="stylesheet" integrity="sha384-TgQmpeh1IG9vQ1WxIzpdfm5FX08N4+Nr5uzpgqvZAKQwWems+NIMmOVIMFxGq6EZ" crossorigin="anonymous">
        <!--font awasome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--boostrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        
    
    </head>
    <body>
         @include ('babysitting.cangurs.navcangur')
         @yield ('content')
         @include ('babysitting.cangurs.footercangur')
     
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
