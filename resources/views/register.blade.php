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
    <div class="login-page register">
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
                            <h2>Getting started!</h2>
                            <h4>Register Now</h4>
                        </div>
                        @if (count($errors) > 0)
                            <div class="ui red message">
                            {{$errors[0]}}
                            </div>
                        @endif
                        <form class="ui form" method="POST" action="/register">
                            {{ csrf_field() }}
                            <div class="field ">
                                <div class="ui left icon input">
                                    <input type="text" name="fullname" placeholder="Fullname" value="" required>
                                    <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="field ">
                                </div>
                                <div class="ui left icon input">
                                    <input type="text" name="nickname" placeholder="Nickname" value="" required>
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="field ">
                                <div class="ui left icon input">
                                    <input type="email" name="email" placeholder="Email" value="" required>
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <div class="field">
                                <!--<div class="ui selection dropdown ">
                                    <input type="hidden" name="age" value="">
                                    <i class="fas fa-birthday-cake"></i>
                                    <i class="dropdown icon"></i>
                                    <div class="default text"> Age</div>
                                    <div class="menu">
                                        <div class="item" data-value="18">18</div>
                                        <div class="item" data-value="19">19</div>
                                        <div class="item" data-value="20">20</div>
                                        <div class="item" data-value="21">21</div>
                                        <div class="item" data-value="22">22</div>
                                        <div class="item" data-value="23">23</div>
                                        <div class="item" data-value="24">24</div>
                                        <div class="item" data-value="25">25</div>
                                        <div class="item" data-value="26">26</div>
                                        <div class="item" data-value="27">27</div>
                                        <div class="item" data-value="28">28</div>
                                        <div class="item" data-value="29">29</div>
                                        <div class="item" data-value="30">30</div>
                                        <div class="item" data-value="31">31</div>
                                        <div class="item" data-value="32">32</div>
                                        <div class="item" data-value="33">33</div>
                                        <div class="item" data-value="34">34</div>
                                        <div class="item" data-value="35">35</div>
                                        <div class="item" data-value="36">36</div>
                                        <div class="item" data-value="37">37</div>
                                        <div class="item" data-value="38">38</div>
                                        <div class="item" data-value="39">39</div>
                                        <div class="item" data-value="40">40</div>
                                        <div class="item" data-value="41">41</div>
                                        <div class="item" data-value="42">42</div>
                                        <div class="item" data-value="43">43</div>
                                        <div class="item" data-value="44">44</div>
                                        <div class="item" data-value="45">45</div>
                                        <div class="item" data-value="46">46</div>
                                        <div class="item" data-value="47">47</div>
                                        <div class="item" data-value="48">48</div>
                                        <div class="item" data-value="49">49</div>
                                        <div class="item" data-value="50">50</div>
                                        <div class="item" data-value="51">51</div>
                                        <div class="item" data-value="52">52</div>
                                        <div class="item" data-value="53">53</div>
                                        <div class="item" data-value="54">54</div>
                                        <div class="item" data-value="55">55</div>
                                        <div class="item" data-value="56">56</div>
                                        <div class="item" data-value="57">57</div>
                                        <div class="item" data-value="58">58</div>
                                        <div class="item" data-value="59">59</div>
                                        <div class="item" data-value="60">60</div>
                                        <div class="item" data-value="61">61</div>
                                        <div class="item" data-value="62">62</div>
                                        <div class="item" data-value="63">63</div>
                                        <div class="item" data-value="64">64</div>
                                        <div class="item" data-value="65">65</div>
                                        <div class="item" data-value="66">66</div>
                                        <div class="item" data-value="67">67</div>
                                        <div class="item" data-value="68">68</div>
                                        <div class="item" data-value="69">69</div>
                                        <div class="item" data-value="70">70</div>
                                        <div class="item" data-value="71">71</div>
                                        <div class="item" data-value="72">72</div>
                                        <div class="item" data-value="73">73</div>
                                        <div class="item" data-value="74">74</div>
                                        <div class="item" data-value="75">75</div>
                                        <div class="item" data-value="76">76</div>
                                        <div class="item" data-value="77">77</div>
                                        <div class="item" data-value="78">78</div>
                                        <div class="item" data-value="79">79</div>
                                        <div class="item" data-value="80">80</div>
                                        <div class="item" data-value="81">81</div>
                                        <div class="item" data-value="82">82</div>
                                        <div class="item" data-value="83">83</div>
                                        <div class="item" data-value="84">84</div>
                                        <div class="item" data-value="85">85</div>
                                        <div class="item" data-value="86">86</div>
                                        <div class="item" data-value="87">87</div>
                                        <div class="item" data-value="88">88</div>
                                        <div class="item" data-value="89">89</div>
                                        <div class="item" data-value="90">90</div>
                                        <div class="item" data-value="91">91</div>
                                        <div class="item" data-value="92">92</div>
                                        <div class="item" data-value="93">93</div>
                                        <div class="item" data-value="94">94</div>
                                        <div class="item" data-value="95">95</div>
                                        <div class="item" data-value="96">96</div>
                                        <div class="item" data-value="97">97</div>
                                        <div class="item" data-value="98">98</div>
                                        <div class="item" data-value="99">99</div>
                                        <div class="item" data-value="100">100</div>
                                    </div>
                                </div>-->
                                <div class="ui selection dropdown ">
                                    <input type="hidden" name="gender" value="" required>
                                    <i class="fas fa-venus-mars"></i>
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Sex</div>
                                    <div class="menu">
                                        <div class="item" data-value="0">Male</div>
                                        <div class="item" data-value="1">Female</div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="ui selection dropdown looking-for ">
                                <input type="hidden" name="looking_for" value="" >
                                <i class="fas fa-search"></i>
                                <i class="dropdown icon"></i>
                                <div class="default text">Looking for</div>
                                <div class="menu">
                                    <div class="item" data-value="0">Male</div>
                                    <div class="item" data-value="1">Female</div>
                                </div>
                            </div>-->
                            <div class="ui selection dropdown looking-for ">
                                <input type="hidden" name="marital_status" value="" required>
                                <i class="fas fa-heart"></i>
                                <i class="dropdown icon"></i>
                                <div class="default text">Marital Status</div>
                                <div class="menu">
                                    <div class="item" data-value="0">Single</div>
                                    <div class="item" data-value="1">Married</div>
                                    <div class="item" data-value="2">Divorced</div>
                                    <div class="item" data-value="3">In a Relationship</div>
                                </div>
                            </div>
                            <div class="ui selection dropdown looking-for ">
                                <input type="hidden" name="country_id" value="" required>
                                <i class="fas fa-globe-americas"></i>
                                <i class="dropdown icon"></i>
                                <div class="default text">Country</div>
                                <div class="menu">
                                    @foreach($data['countries'] as $country)
                                    <div class="item" data-value="{{$country->id}}">{{$country->country_name}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="field ">
                                <div class="ui left icon input">
                                    <input type="password" name="password" placeholder="Password" required>
                                    <i class="fas fa-asterisk"></i>
                                </div>
                            </div>
                            <div class="field ">
                                <div class="ui left icon input">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                                    <i class="fas fa-asterisk"></i>
                                </div>
                            </div>
                            <div class="login-settings">
                                <div class="ui checkbox">
                                    <input type="checkbox" name="terms-and-conditions" required>
                                    <label><a href="/terms" target="_blank">I agree with the terms</a></label>
                                </div>
                            </div>
                            <div class="send-button">
                                <button class="btn big-btn">Create account</button>
                            </div>
                        </form>
                    </div>
                    <a class="register-link" href="/login">Already have an account <span>Login</span></a>
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

        <!--<div class="ui modal mini" id="callModal">
            <input type="hidden" id="fromId" value="" />
            <div class="header text-center">
                <i class="bell icon purple"></i> <b id="whosCalling">date.aUser</b> is calling you!
            </div>
            <div class="actions">
                <a class="ui red button" id="rejectCall" href="#">Reject</a>
                <a class="ui green button" id="pickUpCall" href="#">Answer</a>
            </div>
        </div>-->
    </div>


    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="{{URL::asset('fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{URL::asset('js/public.bundle.js?v=1588216238')}}"></script>
    <script src="{{URL::asset('js/user.bundle.js?v=1588216238')}}"></script>
</body>

</html>