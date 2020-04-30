<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,900|Roboto:300,400,500,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('semantic/semantic.css')}}">
    <link rel="stylesheet" href="{{URL::asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('bxslider/jquery.bxslider.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('fancybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/styles.css')}}">
    <title> Home | WebScorpions </title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('images/icon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('images/icon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('images/icon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('images/icon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('images/icon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('images/icon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('images/icon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('images/icon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('images/icon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{URL::asset('images/icon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('images/icon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('images/icon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('images/icon/favicon-16x16.png')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{URL::asset('images/icon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
</head>

<body>

    <header>
        <div class="ui middle aligned grid container">
            <div class="four wide column">
                <a href="/"><img src="{{URL::asset('images/logo-white.png')}}" alt="Web Scorpions" /></a>
            </div>
            <div class="eight wide column">
                <div class="menu menu-hp">
                    <ul>
                        <li><a href="/members">Members</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li>
                            <div class="ui selection dropdown">
                                <i class="gb uk flag"></i> English
                                <i class="dropdown icon"></i>
                                <div class="menu">
                                    <div class="item" data-value="en"><a href="/language/en"><i class="gb uk flag"></i>English</a></div>
                                    <div class="item" data-value="it"><a href="/language/it"><i class="it flag"></i>Italian</a></div>
                                    <div class="item" data-value="es"><a href="/language/es"><i class="es flag"></i>Spanish</a></div>
                                    <div class="item" data-value="de"><a href="/language/de"><i class="de flag"></i>German</a></div>
                                    <div class="item" data-value="fr"><a href="/language/fr"><i class="france flag"></i>French</a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="four wide column">
                <div class="menu-resp">
                    <div class="search-input">
                        <form method="GET" action="/members">
                            <div class="ui icon input">
                                <input type="text" name="nickname" placeholder="Search..." autocomplete="off">
                                <i class="search icon"></i>
                            </div>
                            <button type="submit"></button>
                        </form>
                    </div>
                    <a class="resp-icon"><i class="far fa-bars"></i></a>
                </div>
                <div class="user-menu">
                    <a href="/login" class="btn" style="margin-right:15px;">Login</a>
                    <a href="/register" class="btn">Register</a>
                </div>
            </div>
        </div>

        <div class="register-info">
            <img class="u1 parallax" data-offset="20" src="{{URL::asset('images/left-profile-1.png')}}" alt="Profile Image" />
            <img class="u2 parallax" data-offset="76" src="{{URL::asset('images/left-profile-2.png')}}" alt="Profile Image" />
            <img class="u3 parallax" data-offset="37" src="{{URL::asset('images/left-profile-3.png')}}" alt="Profile Image" />
            <img class="u4 parallax" data-offset="18" src="{{URL::asset('images/left-profile-4.png')}}" alt="Profile Image" />
            <img class="u5 parallax" data-offset="79" src="{{URL::asset('images/left-profile-5.png')}}" alt="Profile Image" />
            <img class="i1 parallax" data-offset="110" src="{{URL::asset('images/left-icon-1.png')}}" alt="Profile Icon" />
            <img class="i2 parallax" data-offset="25" src="{{URL::asset('images/left-icon-2.png')}}" alt="Profile Icon" />
            <img class="i3 parallax" data-offset="88" src="{{URL::asset('images/left-icon-3.png')}}" alt="Profile Icon" />
            <img class="u6 parallax" data-offset="23" src="{{URL::asset('images/right-profile-1.png')}}" alt="Profile Image" />
            <img class="u7 parallax" data-offset="65" src="{{URL::asset('images/right-profile-2.png')}}" alt="Profile Image" />
            <img class="u8 parallax" data-offset="99" src="{{URL::asset('images/right-profile-3.png')}}" alt="Profile Image" />
            <img class="u9 parallax" data-offset="118" src="{{URL::asset('images/right-profile-4.png')}}" alt="Profile Image" />
            <img class="u10 parallax" data-offset="47" src="{{URL::asset('images/right-profile-5.png')}}" alt="Profile Image" />
            <img class="i4 parallax" data-offset="28" src="{{URL::asset('images/right-icon-1.png')}}" alt="Profile Icon" />
            <img class="i5 parallax" data-offset="87" src="{{URL::asset('images/right-icon-2.png')}}" alt="Profile Icon" />
            <img class="i6 parallax" data-offset="19" src="{{URL::asset('images/right-icon-3.png')}}" alt="Profile Icon" />
            <img class="i7 parallax" data-offset="74" src="{{URL::asset('images/right-icon-4.png')}}" alt="Profile Icon" />
            <div class="ui grid centered middle aligned container stackable">
                <div class="ten wide column">
                    <div class="info-text">
                        <h2>More Flirts meets singles</h2>
                        <p>Our mission is to provide the best technology for people to meet, because happiness is better shared.</p>
                    </div>
                    <div class="cta-buttons">
                        <a href="/register" class="btn big-btn m10-r">Register</a>
                        <a href="/login" class="btn big-btn">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="steps-section m50-b m150-t">
        <div class="ui grid centered middle aligned container stackable">
            <div class="sixteen wide comlumn">
                <div class="title">
                    <h4>How it Works</h4>
                    <h2>Steps to Find Your Match</h2>
                    <p>Find your ideal soulmate among a lot of members.! </br> Our VIP members who are willing to travel to the end of the world for the loved one.. </p>
                </div>
            </div>
        </div>
        <div class="ui grid container stackable">
            <div class="four wide column">
                <div class="step-box">
                    <i class="fas fa-comment icon-1"></i>
                    <div class="step-info">
                        <img src="{{URL::asset('images/step-1.png')}}" alt="Create Profile">
                        <h3>Create Profile</h3>
                        <p>Love private Message Matchmaking &amp; more in your pocket.</p>
                    </div>
                </div>
            </div>
            <div class="four wide column">
                <div class="step-box">
                    <i class="fas fa-comment icon-2"></i>
                    <div class="step-info">
                        <img src="{{URL::asset('images/step-2.png')}}" alt="Choose The One">
                        <h3>Choose The One</h3>
                        <p>Searching your soul mate is difficult With a bit of fun everything becomes simpler!</p>
                    </div>
                </div>
            </div>
            <div class="four wide column">
                <div class="step-box">
                    <i class="fas fa-comment icon-3"></i>
                    <div class="step-info">
                        <img src="{{URL::asset('images/step-3.png')}}" alt="Find Matches">
                        <h3>Find Matches</h3>
                        <p>These allow you to meet people with the same tastes and desires!</p>
                    </div>
                </div>
            </div>
            <div class="four wide column">
                <div class="step-box">
                    <i class="fas fa-comment icon-4"></i>
                    <div class="step-info">
                        <img src="{{URL::asset('images/step-4.png')}}" alt="Start Datinge">
                        <h3>Start Dating</h3>
                        <p>Lets make dating more human &amp; more simple with More Flirts!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="members-section">
        <div class="ui middle aligned grid container stackable">
            <div class="eight wide column">
                <div class="ui four column grid">
                    <div class="column m60-t">
                        <div class="user-avatar">
                            <span class="user-name">Christinne, 38</span>
                            <img src="{{URL::asset('images/5d6cc370422641567409008.jpg')}}" alt="Avatar" />
                        </div>
                        <div class="user-avatar">
                            <span class="user-name">Niels, 58</span>
                            <img src="{{URL::asset('images/placeholder.jpg')}}" alt="Avatar" />
                        </div>
                    </div>
                    <div class="column">
                        <div class="user-avatar">
                            <span class="user-name">David2019, 36</span>
                            <img src="{{URL::asset('images/placeholder.jpg')}}" alt="Avatar" />
                        </div>
                        <div class="user-avatar">
                            <span class="user-name">Angela20, 39</span>
                            <img src="{{URL::asset('images/5d68db7fcaa721567153023.jpg')}}" alt="Avatar" />
                        </div>
                        <div class="user-avatar">
                            <span class="user-name">Tella915, 26</span>
                            <img src="{{URL::asset('images/5e6f7757b01051584363351.jpeg')}}" alt="Avatar" />
                        </div>
                    </div>
                    <div class="column m100-t">
                        <div class="user-avatar">
                            <span class="user-name">dannaL, 34</span>
                            <img src="{{URL::asset('images/5d67f9b8a2cef1567095224.jpg')}}" alt="Avatar" />
                        </div>
                        <div class="user-avatar">
                            <span class="user-name">Paulla, 32</span>
                            <img src="{{URL::asset('images/5d6cbdfc0d1451567407612.jpg')}}" alt="Avatar" />
                        </div>
                        <div class="user-avatar">
                            <span class="user-name">Nessa, 33</span>
                            <img src="{{URL::asset('images/5d6cc289593011567408777.jpg')}}" alt="Avatar" />
                        </div>
                    </div>
                    <div class="column m180-t">
                        <div class="user-avatar">
                            <span class="user-name">Schulle, 48</span>
                            <img src="{{URL::asset('images/placeholder.jpg')}}" alt="Avatar" />
                        </div>
                        <div class="user-avatar">
                            <span class="user-name">Maryy, 33</span>
                            <img src="{{URL::asset('images/5d6cbf2c467ae1567407916.jpg')}}" alt="Avatar" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="one wide column"></div>
            <div class="seven wide column">
                <div class="hp-title-section">
                    <h4>Read Some Of Our SuccessStories</h4>
                    <h2>Your perfect match is just a click away</h2>
                    <p>More than 100,000 people join every day, so there are plenty of new guys and girls to meet around the world.</p>
                    <a href="/members" class="btn big-btn">Discover all members</a>
                </div>
            </div>
        </div>
    </section>

    <section class="members-msg m200-b">
        <div class="ui middle aligned grid container stackable">
            <div class="seven wide column">
                <div class="hp-title-section">
                    <h4>More Flirts meets singles</h4>
                    <h2>Chat with your mate wherever you are</h2>
                    <p>At More Flirts we believe there is someone for everyone. We have become a large social network because we have created the best tools to connect people.</p>
                    <a href="/login" class="btn big-btn">Join Today</a>
                </div>
            </div>
            <div class="one wide column"></div>
            <div class="eight wide column">
                <img class="members-img" src="{{URL::asset('images/bg-members-msg.png')}}" alt="Messages" />
            </div>
        </div>
    </section>

    <section class="members-video m200-b">
        <div class="ui middle aligned grid container stackable">
            <div class="eight wide column">
                <img src="{{URL::asset('images/members-video.png')}}" alt="Video Call" />
            </div>
            <div class="one wide column"></div>
            <div class="seven wide column">
                <div class="hp-title-section">
                    <h4>Meet our Active Members</h4>
                    <h2>It all starts with a Date</h2>
                    <p>Our many years of experience have given us great insights and experience which has helped us solve major challenges in the social discovery space.</p>
                    <a href="/register" class="btn big-btn">Register Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="members-testimonial m200-b">
        <div class="ui middle aligned grid container stackable">
            <div class="seven wide column">
                <div class="hp-title-section">
                    <h4>Read Some Of Our SuccessStories</h4>
                    <h2>Your perfect match is just a click away</h2>
                    <p>Our platform offers privacy and security so our users can only focus on their loved ones without any worries.</p>
                    <a href="/login" class="btn big-btn">See more stories</a>
                </div>
            </div>
            <div class="nine wide column">
                <div class="testimonials">
                    <div>
                        <div class="testimonial-box">
                            <div class="t-icons">
                                <i class="fas fa-quote-left"></i>
                                <i class="fas fa-comment"></i>
                            </div>



                            <div class="t-text">
                                <p>Great website for casual dating and fun. I have only been here for two weeks but I already had some dates.</p>
                                <span> Laura, 27</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-box">
                            <div class="t-icons">
                                <i class="fas fa-quote-left"></i>
                                <i class="fas fa-comment"></i>
                            </div>



                            <div class="t-text">
                                <p>Ich bin aus Spaß hierher gekommen und habe viele andere Mitglieder gefunden, die die gleichen Gründe haben wie ich.</p>
                                <span>Dirk, Hamburg - 55</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-box">
                            <div class="t-icons">
                                <i class="fas fa-quote-left"></i>
                                <i class="fas fa-comment"></i>
                            </div>



                            <div class="t-text">
                                <p>Encontre muchas amigas por este sitio. Lo recomiendo de todo corazon!</p>
                                <span>Julio, 58</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-box">
                            <div class="t-icons">
                                <i class="fas fa-quote-left"></i>
                                <i class="fas fa-comment"></i>
                            </div>



                            <div class="t-text">
                                <p>Freundliche Seite mit vielen reifen und jungen Mädchen, die ein intimes Date suchen</p>
                                <span>Hans, Berlin - 49</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-box">
                            <div class="t-icons">
                                <i class="fas fa-quote-left"></i>
                                <i class="fas fa-comment"></i>
                            </div>



                            <div class="t-text">
                                <p>No esperaba encontrar a mi futuro novio aquí. Me sorprendió gratamente la calidad de las personas en este sitio web. </p>
                                <span>Daniela, 30</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-box">
                            <div class="t-icons">
                                <i class="fas fa-quote-left"></i>
                                <i class="fas fa-comment"></i>
                            </div>



                            <div class="t-text">
                                <p> A diferencia de otros sitios web, aquí puedes encontrar personas agradables. ¡Fui a un par de citas y espero obtener más!</p>
                                <span>Lorenzo, 46</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-box">
                            <div class="t-icons">
                                <i class="fas fa-quote-left"></i>
                                <i class="fas fa-comment"></i>
                            </div>



                            <div class="t-text">
                                <p> I highly recommend this website if you want to go on real dates. keep up the good work! </p>
                                <span>Jessie, 29</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="members-online">
        <div class="ui middle aligned grid container stackable">
            <div class="eight wide column">
                <img src="{{URL::asset('images/members-online.png')}}" alt="Online Users" />
            </div>
            <div class="one wide column"></div>
            <div class="seven wide column">
                <div class="hp-title-section">
                    <h4>Most Online Members</h4>
                    <h2>Go On a Dating Adventure Today</h2>
                    <p>Discrete, fast and always accessible video, audio, or text chat. Simple and fast access from any device.</p>
                    <a href="/members" class="btn big-btn">See more people</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="ui grid center aligned container stackable">
            <div class="sixteen wide column">
                <a class="logo-footer" href="/"><img src="{{URL::asset('images/logo-web.png')}}" alt="Web Scorpions" /></a>
                <ul class="footer-links">
                    <li><a href="/members">Members</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/terms">Terms and Conditions</a></li>
                    <li><a href="/users-guide">Users Guide</a></li>
                    <li><a href="/privacy">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="ui grid center aligned container stackable">
            <div class="sixteen wide column">
                <div class="logo-links">
                    <a href="https://customer.centralpay.net/home/736523b3-437f-45cf-897b-f1fdfa183a07" target="_blank"><img src="{{URL::asset('images/central-pay-logo.png')}}" title="Central Pay" alt="Central Pay"></a>
                </div>
                <div class="copyright">Copyright <i class="far fa-copyright"></i> 2020 webscorpions.com</div>
            </div>
        </div>
    </footer>

    <div class="ui modal tiny" id="confirm18Modal">
        <div class="header">
            Please confirm
        </div>
        <div class="content p20">
            Are you 18 or over?
        </div>
        <div class="actions">
            <a class="ui basic deny button" href="http://www.google.com">
                No
            </a>
            <button class="btn" id="confirmed18">
                Yes
            </button>
        </div>
    </div>

    <div id="infoToaster" class="top-right-toaster">
        <div class="content">
            <h4 class="m0">date.yourCorespondentLeftTheCall</h4>
            <p>
                <a href="#" id="closeInfoToaster"><i class="remove icon"></i></a>
                <a><i class="icon"></i></a>
            </p>
        </div>
    </div>

    <div class="ui modal mini" id="callModal">
        <input type="hidden" id="fromId" value="" />
        <div class="header text-center">
            <i class="bell icon purple"></i> <b id="whosCalling">date.aUser</b> is calling you!
        </div>
        <div class="actions">
            <a class="ui red button" id="rejectCall" href="#">Reject</a>
            <a class="ui green button" id="pickUpCall" href="#">Answer</a>
        </div>
    </div>

    <div class="ui modal resp-menu">
        <i class="close icon"></i>
        <div class="content">
            <ul>
                <li><a href="/members">Members</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="{{URL::asset('fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{URL::asset('js/public.bundle.js?v=1588216238')}}"></script>
    <script src="{{URL::asset('js/user.bundle.js?v=1588216238')}}"></script>
</body>

</html>