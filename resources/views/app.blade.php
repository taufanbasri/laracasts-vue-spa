<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts Assets</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="font-sans">
        <div id="app">
            <div class="container mx-auto">
                <header class="py-6 mb-8">
                    <h1>
                        <img src="/images/logo.svg" alt="Laracasts">
                    </h1>
                </header>

                <main class="flex">
                    <aside class="w-1/5">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3">The Brand</h5>
                            <ul>
                                <li class="text-sm leading-loose"><router-link to="/">Logo</router-link></li>
                                <li class="text-sm leading-loose"><router-link to="/about">Logo Symbol</router-link></li>
                                <li class="text-sm leading-loose"><router-link to="/">Colors</router-link></li>
                                <li class="text-sm leading-loose"><router-link to="/">Typography</router-link></li>
                            </ul>
                        </section>

                        <section>
                            <h5 class="uppercase font-bold mb-3">Doodles</h5>
                            <ul>
                                <li class="text-sm leading-loose"><router-link to="/">Mascot</router-link></li>
                                <li class="text-sm leading-loose"><router-link to="/about">Ilustrations</router-link></li>
                                <li class="text-sm leading-loose"><router-link to="/">Loader and Animations</router-link></li>
                                <li class="text-sm leading-loose"><router-link to="/">Wallpapers</router-link></li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>

        <script src="/js/app.js" charset="utf-8"></script>
    </body>
</html>
