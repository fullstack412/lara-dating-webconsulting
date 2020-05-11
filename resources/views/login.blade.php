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

    <div class="login-page">
        <div class="back-button">
            <div class="ui grid container stackable">
                <div class="sixteen wide column">
                    <a href="/"><i class="fas fa-angle-left"></i> Back to Homepage</a>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="ui middle aligned grid container stackable">
                <div class="five wide column">
                    <img class="logo-web" src="{{URL::asset('images/uniqueflirt-logo-1.png')}}" alt="UniqueFlirt" />
                    <img class="logo-web-white" src="{{URL::asset('images/uniqueflirt-logo-1.png')}}" alt="UniqueFlirt" />
                </div>
                <div class="four wide column"></div>
                <div class="seven wide column">
                    <div class="login-form">
                        <div class="form-title">
                            <h2>Welcome back!</h2>
                            <h4>User Login</h4>
                        </div>

                        @if (count($errors) > 0)
                            <div class="ui red message">
                                Wrong combination or the account is inactive
                            </div>
                            <!-- <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div> -->
                        @endif
                        <form class="ui form" method="POST" action="/login">
                            {{ csrf_field() }}
                            <div class="field">
                                <div class="ui left icon input">
                                    <input type="email" name="email" placeholder="Email">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui left icon input">
                                    <input type="password" name="password" placeholder="Password">
                                    <i class="fas fa-asterisk"></i>
                                </div>
                            </div>
                            <div class="login-settings">
                                <div class="ui checkbox">
                                    <input type="checkbox" name="remember-me">
                                    <label>Remember me</label>
                                </div>
                                <a href="">Forgot password?</a>
                            </div>
                            <div class="send-button">
                                <button class="btn big-btn">Login</button>
                            </div>
                        </form>
                    </div>
                    <a class="register-link" href="/register">Don&#039;t have an account? <span>Sign Up</span></a>
                </div>
            </div>
        </div>

        <div class="links">
            <div class="ui grid container stackable">
                <div class="seven wide column">
                    <p class="copyright">Copyright <i class="far fa-copyright"></i> 2020 uniqueflirt.com</p>
                </div>
                <div class="nine wide column">
                    <ul>
                        <li><a href="/members">Members</a></li>
                        <li><a href="/terms">Terms and Conditions</a></li>
                        <li><a href="/privacy">Privacy</a></li>
                        <li><a href="/users-guide">Users Guide</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="infoToaster" class="top-right-toaster">
            <div class="content">
                <h4 class="m0">date.yourCorespondentLeftTheCall</h4>
                <p>
                    <a href="#" id="closeInfoToaster"><i class="remove icon"></i></a>
                    <a href="#"><i class="icon"></i></a>
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
    </div>


    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="{{URL::asset('fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{URL::asset('js/public.bundle.js?v=1588216238')}}"></script>
    <script src="{{URL::asset('js/user.bundle.js?v=1588216238')}}"></script>
</body>

</html>