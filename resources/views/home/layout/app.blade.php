<!DOCTYPE html>
<html lang="en">

<head>
    <!--<< Required meta tags >>-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('home/css/modernmag-assets.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="icon" type="image/png" href="{{ asset('home/images/icon.png') }}" />
    <style>
        .theiaStickySidebar:after {
            content: "";
            display: table;
            clear: both;
        }

        .facebook-share-button {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin: 5px;
            background-size: 100% 100%;
            /* ou 'contain' */
            background-image: url("[URL-DO-ICONE]");
            background-repeat: no-repeat;
            background-position: center;
        }

        .pagination-list li {
            padding-top: 5px;
        }
    </style>

    <style>
        .LGLeeN-keyboard-shortcuts-view {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex
        }

        .LGLeeN-keyboard-shortcuts-view table,
        .LGLeeN-keyboard-shortcuts-view tbody,
        .LGLeeN-keyboard-shortcuts-view td,
        .LGLeeN-keyboard-shortcuts-view tr {
            background: inherit;
            border: none;
            margin: 0;
            padding: 0
        }

        .LGLeeN-keyboard-shortcuts-view table {
            display: table
        }

        .LGLeeN-keyboard-shortcuts-view tr {
            display: table-row
        }

        .LGLeeN-keyboard-shortcuts-view td {
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: table-cell;
            color: #000;
            padding: 6px;
            vertical-align: middle;
            white-space: nowrap
        }

        .LGLeeN-keyboard-shortcuts-view td:first-child {
            text-align: end
        }

        .LGLeeN-keyboard-shortcuts-view td kbd {
            background-color: #e8eaed;
            border-radius: 2px;
            border: none;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            color: inherit;
            display: inline-block;
            font-family: Google Sans Text, Roboto, Arial, sans-serif;
            line-height: 16px;
            margin: 0 2px;
            min-height: 20px;
            min-width: 20px;
            padding: 2px 4px;
            position: relative;
            text-align: center
        }
    </style>

    <link type="text/css" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700|Google+Sans+Text:400,500,700&amp;lang=pt">
    <link type="text/css" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Google+Sans+Text:400&amp;text=%E2%86%90%E2%86%92%E2%86%91%E2%86%93&amp;lang=pt">
    <link rel="stylesheet" href="{{ asset('home/fontawesome/css/font-awesome.min.css') }}">
    <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/57/8b/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/57/8b/util.js"></script>
    <title>Destaque notícias - @yield('title')</title>
    <style>
        .whatsapp-share-button {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin: 5px;
            background-size: 100% 100%;
            /* ou 'contain' */
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSI2MHB4IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2MCA2MCIgd2lkdGg9IjYwcHgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48dGl0bGUvPjxkZXNjLz48ZGVmcy8+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBpZD0ic29pY2FsIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSI+PGcgaWQ9InNvY2lhbCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTk3My4wMDAwMDAsIC01MzguMDAwMDAwKSI+PGcgaWQ9InNsaWNlcyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTczLjAwMDAwMCwgMTM4LjAwMDAwMCkiLz48ZyBmaWxsPSIjNTdCQTYzIiBpZD0ic3F1YXJlLWZsYXQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3My4wMDAwMDAsIDEzOC4wMDAwMDApIj48cGF0aCBkPSJNODAyLjk5NTkzNyw0MDAgTDg1Ny4wMDQwNjMsNDAwIEM4NTguNjU4NjczLDQwMCA4NjAsNDAxLjMzNzMxIDg2MCw0MDIuOTk1OTM3IEw4NjAsNDU3LjAwNDA2MyBDODYwLDQ1OC42NTg2NzMgODU4LjY2MjY5LDQ2MCA4NTcuMDA0MDYzLDQ2MCBMODAyLjk5NTkzNyw0NjAgQzgwMS4zNDEzMjcsNDYwIDgwMCw0NTguNjYyNjkgODAwLDQ1Ny4wMDQwNjMgTDgwMCw0MDIuOTk1OTM3IEM4MDAsNDAxLjM0MTMyNyA4MDEuMzM3MzEsNDAwIDgwMi45OTU5MzcsNDAwIFoiIGlkPSJzcXVhcmUtNDkiLz48L2c+PGcgZmlsbD0iI0ZGRkZGRiIgaWQ9Imljb24iIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE4Mi4wMDAwMDAsIDE1MC4wMDAwMDApIj48cGF0aCBkPSJNODIxLjA3MTI2Miw0MzQuMjIxMDQ2IEM4MTguMjEwODMxLDQzNC4yMjEwNDYgODE1LjUyMzU2OSw0MzMuNDg5OTY5IDgxMy4xODU2LDQzMi4yMDY4OTIgTDgwNC4xNTM4NDYsNDM1LjA3NjkyMyBMODA3LjA5ODA5Miw0MjYuMzkxODc3IEM4MDUuNjEzMDQ2LDQyMy45NTIzNjkgODA0Ljc1NzUzOCw0MjEuMDkxNTY5IDgwNC43NTc1MzgsNDE4LjAzMzYgQzgwNC43NTc1MzgsNDA5LjA5MzQxNSA4MTIuMDYxMjkyLDQwMS44NDYxNTQgODIxLjA3MTYzMSw0MDEuODQ2MTU0IEM4MzAuMDgwODYyLDQwMS44NDYxNTQgODM3LjM4NDYxNSw0MDkuMDkzNDE1IDgzNy4zODQ2MTUsNDE4LjAzMzYgQzgzNy4zODQ2MTUsNDI2Ljk3Mzc4NSA4MzAuMDgxMjMxLDQzNC4yMjEwNDYgODIxLjA3MTI2Miw0MzQuMjIxMDQ2IFogTTgyMS4wNzEyNjIsNDA0LjQyNDEyMyBDODEzLjUwNzkzOCw0MDQuNDI0MTIzIDgwNy4zNTU4MTUsNDEwLjUyOTM1NCA4MDcuMzU1ODE1LDQxOC4wMzM2IEM4MDcuMzU1ODE1LDQyMS4wMTE0NDYgODA4LjMyNjUyMyw0MjMuNzY5MjMxIDgwOS45NjgxMjMsNDI2LjAxMzA0NiBMODA4LjI1NDg5Miw0MzEuMDY3MDc3IEw4MTMuNTI1MjkyLDQyOS4zOTE4NzcgQzgxNS42OTEyLDQzMC44MTM3ODUgODE4LjI4NTQxNSw0MzEuNjQzMDc3IDgyMS4wNzEyNjIsNDMxLjY0MzA3NyBDODI4LjYzMzQ3Nyw0MzEuNjQzMDc3IDgzNC43ODY3MDgsNDI1LjUzODIxNSA4MzQuNzg2NzA4LDQxOC4wMzM5NjkgQzgzNC43ODY3MDgsNDEwLjUyOTcyMyA4MjguNjMzNDc3LDQwNC40MjQxMjMgODIxLjA3MTI2Miw0MDQuNDI0MTIzIEw4MjEuMDcxMjYyLDQwNC40MjQxMjMgWiBNODI5LjMwODgsNDIxLjc2MTcyMyBDODI5LjIwODM2OSw0MjEuNTk2Njc3IDgyOC45NDE3ODUsNDIxLjQ5Njk4NSA4MjguNTQyNjQ2LDQyMS4yOTg3MDggQzgyOC4xNDI0LDQyMS4xMDA0MzEgODI2LjE3NTg3Nyw0MjAuMTQwMDYyIDgyNS44MDk5NjksNDIwLjAwODI0NiBDODI1LjQ0Mjk1NCw0MTkuODc2MDYyIDgyNS4xNzYsNDE5LjgwOTIzMSA4MjQuOTA5Nzg1LDQyMC4yMDY1MjMgQzgyNC42NDM1NjksNDIwLjYwMzgxNSA4MjMuODc3MDQ2LDQyMS40OTY5ODUgODIzLjY0MzMyMyw0MjEuNzYxNzIzIEM4MjMuNDA5OTY5LDQyMi4wMjY4MzEgODIzLjE3Njk4NSw0MjIuMDYwMDYyIDgyMi43NzcxMDgsNDIxLjg2MTQxNSBDODIyLjM3NzYsNDIxLjY2MzEzOCA4MjEuMDg4OTg1LDQyMS4yNDQwNjIgODE5LjU2MTEwOCw0MTkuODkyMzA4IEM4MTguMzcyNTU0LDQxOC44NDA3MzggODE3LjU2OTg0Niw0MTcuNTQyNTIzIDgxNy4zMzY4NjIsNDE3LjE0NDg2MiBDODE3LjEwMzUwOCw0MTYuNzQ3OTM4IDgxNy4zMTIxMjMsNDE2LjUzMzQxNSA4MTcuNTEyMjQ2LDQxNi4zMzU4NzcgQzgxNy42OTIwNjIsNDE2LjE1NzkwOCA4MTcuOTEyMTIzLDQxNS44NzI0OTIgODE4LjExMjI0Niw0MTUuNjQwOTg1IEM4MTguMzEyMzY5LDQxNS40MDkxMDggODE4LjM3ODgzMSw0MTUuMjQ0MDYyIDgxOC41MTE3NTQsNDE0Ljk3ODk1NCBDODE4LjY0NTQxNSw0MTQuNzE0MjE1IDgxOC41Nzg1ODUsNDE0LjQ4MjcwOCA4MTguNDc4NTIzLDQxNC4yODM2OTIgQzgxOC4zNzg0NjIsNDE0LjA4NTQxNSA4MTcuNTc4MzM4LDQxMi4xMzI5MjMgODE3LjI0NTI5Miw0MTEuMzM4MzM4IEM4MTYuOTEyMjQ2LDQxMC41NDQ0OTIgODE2LjU3OTU2OSw0MTAuNjc2Njc3IDgxNi4zNDU4NDYsNDEwLjY3NjY3NyBDODE2LjExMjQ5Miw0MTAuNjc2Njc3IDgxNS44NDU5MDgsNDEwLjY0MzQ0NiA4MTUuNTc5MzIzLDQxMC42NDM0NDYgQzgxNS4zMTI3MzgsNDEwLjY0MzQ0NiA4MTQuODc5MjYyLDQxMC43NDI3NjkgODE0LjUxMjYxNSw0MTEuMTM5NjkyIEM4MTQuMTQ2MzM4LDQxMS41MzY5ODUgODEzLjExMzYsNDEyLjQ5Njk4NSA4MTMuMTEzNiw0MTQuNDQ5MTA4IEM4MTMuMTEzNiw0MTYuNDAxNiA4MTQuNTQ1ODQ2LDQxOC4yODggODE0Ljc0NjMzOCw0MTguNTUyMzY5IEM4MTQuOTQ2MDkyLDQxOC44MTY3MzggODE3LjUxMTg3Nyw0MjIuOTUzNiA4MjEuNTc2NzM4LDQyNC41NDI0IEM4MjUuNjQzMDc3LDQyNi4xMzA4MzEgODI1LjY0MzA3Nyw0MjUuNjAwOTg1IDgyNi4zNzYzNjksNDI1LjUzNDg5MiBDODI3LjEwODU1NCw0MjUuNDY4OCA4MjguNzQxMjkyLDQyNC41NzUyNjIgODI5LjA3NTQ0Niw0MjMuNjQ4ODYyIEM4MjkuNDA4MTIzLDQyMi43MjE3MjMgODI5LjQwODEyMyw0MjEuOTI3MTM4IDgyOS4zMDg4LDQyMS43NjE3MjMgTDgyOS4zMDg4LDQyMS43NjE3MjMgWiIgaWQ9IndoYXRzYXBwIi8+PC9nPjwvZz48L2c+PC9zdmc+");
            /*Base 64 Icon by Xinh Studio*/
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <script>
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            //altera a URL do botão
            document.getElementById("facebook-share-btt").href = "https://www.facebook.com/sharer/sharer.php?u=" +
                encodeURIComponent(window.location.href);
        }, false);
    </script>


</head>

<body>
    <!-- Container -->
    <div id="container">
        <!-- Preloader -->

        @include('home.layout.nav')
        @yield('content')
        @include('home.layout.footer')
    </div>

    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <script src="{{ asset('home/js/modernmag-plugins.min.js') }}"></script>
    <script src="{{ asset('home/js/popper.js') }}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <script
        src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en">
    </script>
    <script src="{{ asset('home/js/gmap3.min.js') }}"></script>
    <script src="{{ asset('home/js/script.js') }}"></script>
    <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            //conteúdo que será compartilhado: Título da página + URL
            var conteudo = encodeURIComponent(document.title + " " + window.location.href);
            //altera a URL do botão
            document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
        }, false);
    </script>
</body>

</html>
