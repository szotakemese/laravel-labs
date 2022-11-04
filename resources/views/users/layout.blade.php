<!DOCTYPE html>
<html>
<head>
    <title>Users CRUD</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
            body{
                margin:0;
                display:flex;
                min-height:100vh;
                background-color:#1a202c;
                padding:4rem;
                color:#FDF7DD;
                font-family: 'Nunito', sans-serif
            }*,:after,:before{
                box-sizing:border-box;
                border:0 solid #e2e8f0
            }a{
                background-color:transparent;
                color:inherit;
                text-decoration:inherit
            }.main-btn{
                display: inline-flex;
                margin-top:0.75rem;
                font-size:1.125rem;
                font-weight:600
            }.rounded-container{
                box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06);
                border-radius:.5rem;
                justify-content:center
            }.bg-light{
               background-color:#2D3748
            }.bg-green{
                background-color:#3C6257
            }.bg-red{
                background-color:#6A2020
            }.btn-txt{
                color:#FDF7DD;
                font-family: 'Nunito', sans-serif;
                padding:0;
                margin:0
            }.m-bottom{
                margin-bottom:2rem
            }.sm-btn{
                display: inline-flex;
                font-size:1rem;
                font-weight:600
            }.flex{
                display:flex
            }.inline-flex{
                display: inline-flex
            }.justify-center{
                justify-content:center
            }.font-semibold{
                font-weight:600
            }.font-black{
                font-weight:900
            }.text-lg{
                font-size:1.125rem
            }.text-xlg{
                font-size:2rem
            }.mt-8{
                margin-top:2rem
            }.m-vert{
                margin-top:0.75rem;
                margin-bottom:2rem
            }.m-hor{
                margin-right:0.5rem;
                margin-left:0.5rem
            }.m-bt{
                margin-bottom:2rem
            }.p-6{
                padding:1.5rem
            }.p-3{
                padding:0.75rem
            }.shadow{
                box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)
            }.px-8{
                padding-left:2rem;padding-right:2rem
            }.big-btn-p{
                padding-left:2rem;padding-right:2rem; padding-top: 0.05rem; padding-bottom: 0.05rem
            }.paginator{
                align-items:center;
                justify-content:center;
                display:flex
            }
            input{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0
            }
            td {
                border-bottom: 1px solid #ddd;
                padding: 15px
            }
            th{
                background-color:#2d3748;
                border-bottom: 1px solid #ddd;
                padding: 15px
            }
            tr:hover {
                background-color: #0A0F18
            }
        </style>

</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>