<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,900|Roboto:300,400,500,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('semantic/semantic.css')}}">
    <link rel="stylesheet" href="{{URL::asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('bxslider/jquery.bxslider.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('fancybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::asset('css/styles.css')}}">
    <title> UniqueFlirt </title>
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

    @if (Request::is('/'))
    <header>
    @else
    <header class="inner-header">
    @endif
        <div class="ui middle aligned grid container">
            <div class="four wide column">
                @if (Request::is('/'))
                <a href="/"><img src="{{URL::asset('images/uniqueflirt-logo.png')}}" height="46" width="auto" alt="UniqueFlirt" /></a>
                @else
                <a href="/"><img src="{{URL::asset('images/uniqueflirt-logo-1.png')}}" height="46" width="auto" alt="UniqueFlirt" /></a>
                @endif
            </div>
            <div class="eight wide column">
                @if (Request::is('/'))
                <div class="menu menu-hp">
                @else
                <div class="menu">
                @endif
                    <ul>
                        <li><a href="/members">Members</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <!-- <li>
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
                        </li> -->
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
                    <a class="resp-icon"><i class="fas fa-bars"></i></a>
                </div>
                @if(!Auth::check())
                <div class="user-menu">
                    <a href="/login" class="btn" style="margin-right:15px;">Login</a>
                    <a href="/register" class="btn">Register</a>
                </div>
                @else
                <div class="menu">
                    <ul>
                        <li>
                            <div class="ui selection dropdown">
                                &nbsp;&nbsp;&nbsp;<i class="fas fa-bars"></i>&nbsp;&nbsp;&nbsp;Menu&nbsp;&nbsp;&nbsp;
                                <i class="fas fa-caret-down"></i>
                                <div class="menu" style="min-width: 200px; max-height: 600px;">
                                    <div class="item"><a href="/chats"><i class="fas fa-comments"></i>  Chats</a></div>
                                    <hr style="border-style: ridge;"/>
                                    <div class="item"><a href="/messages"><i class="fas fa-comments"></i>  Messages</a></div>
                                    <hr style="border-style: ridge;"/>
                                    <div class="item">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/messages">Messages</a></div>
                                    <div class="item">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/spam">Spam</a></div>
                                    <div class="item">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/universal">Universal Messages</a></div>
                                    <hr style="border-style: ridge;"/>
                                    <div class="item"><a href="/profiles"><i class="fas fa-users"></i>  Profiles</a></div>
                                    <hr style="border-style: ridge;"/>
                                    <div class="item">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/comments">Comments</a></div>
                                    <div class="item">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/likes">Likes</a></div>
                                    <div class="item">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/notifications">Notifications</a></div>
                                    <hr style="border-style: ridge;"/>
                                    <div class="item"><a href="/friends"><i class="fas fa-user-friends"></i>  Friends</a></div>
                                    <hr style="border-style: ridge;"/>
                                    <div class="item">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/view">View</a></div>
                                    <div class="item">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/friend_request">Friend Requests</a></div>
                                    <hr style="border-style: ridge;"/>
                                    <div class="item"><a href="/myprofile"><i class="fas fa-user"></i>  {{Auth::user()->name}}</a></div>
                                    <hr style="border-style: ridge;"/>
                                    <div class="item">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/myprofile">My Profile</a></div>
                                    <div class="item">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/myphotos">My Photos</a></div>
                                    <div class="item">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/myaccount">My Account</a></div>
                                    <div class="item">&nbsp;&nbsp;&nbsp;&nbsp;<a href="/upgrade">Upgrade</a></div>
                                    <hr style="border-style: ridge;"/>
                                    <div class="item"><a href="/logout"><i class="fas fa-lock"></i>  Logout</a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                @endif
            </div>
        </div>

        @if (Request::is('/'))
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
                        @if(!Auth::check())
                        <a href="/register" class="btn big-btn m10-r">Register</a>
                        <a href="/login" class="btn big-btn">Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif
    </header>

    @yield('content')

    <footer>
        <div class="ui grid center aligned container stackable">
            <div class="sixteen wide column">
                <a class="logo-footer" href="/"><img src="{{URL::asset('images/uniqueflirt-logo-1.png')}}" height="46" width="auto" alt="UniqueFlirt" /></a>
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
                <div class="copyright">Copyright <i class="far fa-copyright"></i> 2020 uniqueflirt.com</div>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{URL::asset('fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{URL::asset('js/public.bundle.js?v=1588216238')}}"></script>
    <script src="{{URL::asset('js/user.bundle.js?v=1588216238')}}"></script>

    <script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
</body>

</html>