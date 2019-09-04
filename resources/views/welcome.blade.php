<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap" rel="stylesheet">
        <title>Laravel</title>
    </head>
    <body class="font-sans">
        <div id="app">
            <div class="container mx-auto">
                <header class="py-6 mb-8">
                    <img src="img/YellowRose.jpg" alt="laracast" style="width:300px; height:80px;">
                </header>
                <main class="flex">
                    <aside class="w-1/5">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3">The Brand</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/" exact>Logo</router-link></li class="text-sm leading-loose">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/symbol">Logo Symbol</router-link></li class="text-sm leading-loose">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/colors">Colors</router-link></li class="text-sm leading-loose">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/typography">Typography</router-link></li class="text-sm leading-loose">
                                {{-- <router-link :to="{ name: 'about' }">About</router-link> --}}
                            </ul>
                        </section>
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3">Doodles</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/masscoat">Masscoat</router-link></li class="text-sm leading-loose">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/illustration">Illustration</router-link></li class="text-sm leading-loose">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/animations">Animations</router-link></li class="text-sm leading-loose">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/wallpapers">Wallpapers</router-link></li class="text-sm leading-loose">
                            </ul>
                        </section>   
                    </aside>
                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>
    <script src="js/app.js"></script>
    </body>
</html>
