<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Calistoga|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <!-- Wrapper -->
        <div id="wrapper" class="has-text-centered-mobile">

            <!-- Hero -->
            <section id="hero" class="hero is-medium">
                <div class="hero-head">
                    <nav class="navbar">
                        <div class="container">
                            <div class="navbar-brand">
                                <a class="navbar-item">
                                    <h3 class="logo has-text-green is-size-4">Fancy App</h3>
                                </a></div>

                            <div class="navbar-menu">

                                <div class="navbar-end">
                                    <a class="a-menu is-size-7 navbar-item">
                                        home
                                    </a>
                                    <a class="a-menu is-size-7 navbar-item">
                                        about
                                    </a>
                                    <a class="a-menu is-size-7 navbar-item">
                                        features
                                    </a>
                                    <a class="a-menu is-size-7 navbar-item">
                                        contact
                                    </a>
                                </div>
                            </div>
                            <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>
                    </nav>
                </div>
                <div class="hero-body">
                    <div class="container">
                        <h1 class="has-text-green is-size-1 is-size-3-mobile">
                            An engaging headline
                        </h1>
                        <p class="has-text-green">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum.
                        </p>
                        <button class="btn has-mustard-bg is-size-7 a-menu">
                            try it now
                        </button>
                    </div>
                </div>
            </section>
            <!-- END Hero -->

            <!-- Twitter Feed -->
            <section id="twitter-feed" class="section has-white-mustard-gradient">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <div class="box">
                                <article class="media">
                                    <div class="media-left">
                                        <figure class="image is-64x64 ">
                                            <img src="/img/twitter-profile-guy.jpg" alt="Image">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <div class="content">
                                            <p>
                                                <strong>Some guy</strong> <small>@someguy</small> <small>5m</small>
                                                <br>
                                                Frist time I used @fancyapp, was like the first time I listened to The
                                                Beatles. Christmas came early, I guess.
                                            </p>
                                        </div>
                                        <nav class="level is-mobile">
                                            <div class="level-left">
                                                <a class="level-item" aria-label="reply">
                                                    <span class="icon is-small">
                                                        <i class="fas fa-reply" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                                <a class="level-item" aria-label="retweet">
                                                    <span class="icon is-small">
                                                        <i class="fas fa-retweet" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                                <a class="level-item" aria-label="like">
                                                    <span class="icon is-small">
                                                        <i class="fas fa-heart" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="column">
                            <div class="box">
                                <article class="media">
                                    <div class="media-left">
                                        <figure class="image is-64x64 ">
                                            <img src="img/twitter-profile-girl.jpg" alt="Image">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <div class="content">
                                            <p>
                                                <strong>Some girl</strong> <small>@somegirl</small> <small>5m</small>
                                                <br>
                                                Fancy App is the answer to all your problems, all praise the
                                                #fancyappgod!
                                            </p>
                                        </div>
                                        <nav class="level is-mobile">
                                            <div class="level-left">
                                                <a class="level-item" aria-label="reply">
                                                    <span class="icon is-small">
                                                        <i class="fas fa-reply" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                                <a class="level-item" aria-label="retweet">
                                                    <span class="icon is-small">
                                                        <i class="fas fa-retweet" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                                <a class="level-item" aria-label="like">
                                                    <span class="icon is-small">
                                                        <i class="fas fa-heart" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <p class="is-size-7 has-text-centered">See more at #fancyapp</p>
                </div>
            </section>
            <!-- END Twitter Feed -->

            <!-- Features -->
            <section id="features" class="section has-mustard-bg">
                <div class="container">
                    <div class="columns reverse-row-order">
                        <div class="column">
                            <h3 class="is-size-3">
                                Open Source, all the way
                            </h3>
                            <p class="has-text-green paragraph">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum.
                            </p>
                        </div>
                        <div class="column">
                            <img class="feature-img" src="img/feature1.png" alt="feature" />
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="columns">

                        <div class="column">
                            <img class="feature-img" src="img/feature2.png" alt="feature" />
                        </div>
                        <div class="column">
                            <h3 class="is-size-3">
                                Second Exciting Feature</h3>
                            <p class="has-text-green paragraph">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="columns reverse-row-order">

                        <div class="column">
                            <h3 class="is-size-3">
                                Third Feature, Wow</h3>
                            <p class="has-text-green paragraph">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum.
                            </p>
                        </div>
                        <div class="column">
                            <img class="feature-img" src="img/feature3.png" alt="feature" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Features -->
            <!-- Newsletter -->
            <section id="newsletter" class="section">
                <div class="container">
                    <h3 class="is-size-3">
                        Newsletter or Call to Action</h3>
                    <p class="has-text-green">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum.
                    </p>
                    <div class="field newsletter-field">
                        <div class="control">
                            <input class="input newsletter-input" type="text" placeholder="mail@example.com">
                        </div>
                    </div>
                    <button class="btn has-mustard-bg is-size-7 a-menu">
                        sign up now
                    </button>
                </div>
            </section>
            <!-- END Newsletter -->
            <!-- Footer -->
            <section id="footer" class="section has-green-bg">
                <div class="container has-text-centered">
                    <a href="https://twitter.com/hellobetkowski" class="is-size-4 social-link">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://github.com/hellobetkowski" class="is-size-4 social-link">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://dev.to/betkowski" class="is-size-4 social-link">
                        <i class="fab fa-dev"></i>
                    </a>
                    <p class="has-text-white is-size-7">
                        Built with <i class="fas fa-heart"></i> and <a href="https://bulma.io">Bulma</a>, by <a
                            href="https://twitter.com/hellobetkowski">@hellobetkowski</a>
                    </p>
                </div>
            </section>
        </div>
        <!-- END Wrapper -->
    </div>
</body>

</html>
