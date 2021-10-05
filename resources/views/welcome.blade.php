<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
     
  
        <p>
       @forelse($obj as $x)
           {{$x}}
           @empty
           <hr>
           <hr>
       @endforelse
        </p>
                
    
    </body>
</html>
