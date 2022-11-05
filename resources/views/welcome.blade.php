<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body{
                margin:0;
                position:relative;
                display:flex;
                justify-content:center;
                min-height:100vh;
                background-color:#1a202c;
                align-items:center;
                color:#FDF7DD;
            }a{
                background-color:transparent;
                color:inherit;
                text-decoration:inherit
            }.p-6{
                padding:1.5rem
            }.ph-8{
                padding-left:2rem;
                padding-right:2rem
            }.laravel-title{
                display:flex;
                justify-content:center;
                font-size:2rem;
                font-weight:900
            }.lab-btn{
                margin-top:2rem;
                background-color:#2d3748;
                box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06);
                border-radius:.5rem;
                display:flex;
                justify-content:center;
                font-size:1.125rem;
                font-weight:600
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="ph-8">
            <div class="laravel-title">
                Laravel Lab#2 <br/> Sotak
            </div>       
                
            <a class="lab-btn" href="{{ route('users.index') }}">        
                <div class="p-6">    
                    Users CRUD
                </div>
            </a>
        </div>
    </body>
</html>
