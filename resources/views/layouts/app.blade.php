<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ExportarPDF</title>
        @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="icon" type="image/x-icon" href="img/inOut.jpg">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
     
    </head>
    <body class="bg-gray-100">
     <main class="container mx-auto mt-5 flex">
          
            <div class="w-4/5">
                
                <h3 class="pl-10">
                @yield('contenido')
                </h3>
               
            </div>
         
            </main>

    </body>
</html>