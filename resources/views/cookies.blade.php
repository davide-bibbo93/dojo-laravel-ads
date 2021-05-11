<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel-ads</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.min.css"
            integrity="sha512-byErQdWdTqREz6DLAA9pCnLbdoGGhXfU6gm1c8bkf7F51JVmUBlayGe2A31VpXWQP+eiJ3ilTAZHCR3vmMyybA=="
            crossorigin="anonymous" />
    </head>

    <body>

        <div id="app">
            <section class="hero is-link is-fullheight">

                <div class="hero-head">
                    <header class="navbar">
                        <div class="container">
                            <div class="navbar-brand">
                                <a class="navbar-item">
                                    <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_White.png"
                                        alt="Logo">
                                </a>
                                <span class="navbar-burger" data-target="navbarMenuHeroC">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </div>
                            <div id="navbarMenuHeroC" class="navbar-menu">
                                <div class="navbar-end">
                                    <span class="navbar-item">
                                        <a href="{{ route('cookies') }}" style="color: #fff;">
                                            <span>Cookies</span>
                                        </a>
                                    </span>
                                    <span class="navbar-item" style="color: #fff;">|</span>
                                    <span class="navbar-item">
                                        <a href="{{ route('sessions') }}" style="color: #fff;">
                                            <span>Session</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>

                <div class="hero-body">
                    <div class="container">
                        <h1 class="title" style="font-size: 6em; font-weight: 800;">Passa a Premium gratis per 1 mese</h1>
                        <h3 style="font-size: 2em;">Al termine dell'offerta, solo € 9,99 al mese. Annulla in qualsiasi momento.</h3>
                        <button type="button" name="button" class="button is-dark" style="border-radius: 20px; margin: 30px 0;">VEDI I PIANI</button>
                        <p style="font-size: 1em; padding-bottom: 40px;">* Si applicano termini e condizioni. L'offerta di 1 mese gratis è disponibile per gli utenti che hanno già provato Spotify Premium</p>
                        <Solution solution="Cookies" />
                    </div>
                </div>

            </section>

            <Modal />
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>

</html>
