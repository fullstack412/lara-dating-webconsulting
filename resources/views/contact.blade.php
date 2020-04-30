@extends('layouts.app')

@section('content')
<section class="page-title">
    <div class="ui grid container">
        <div class="sixteen wide column">
            <h2>Contact<span>.</span></h2>
        </div>
    </div>
</section>

<div class="ui grid container stackable">
    <div class="seven wide column">
        <div class="company-info">
            <div class="company-name">
                <h3>S.C TWO DATING S.R.L</h3>
                <img src="{{URL::asset('images/contact-logo.png')}}" alt="Logo" />
            </div>
            <div class="company-details">
                <ul>
                    <li><i class="fas fa-passport"></i>Identification number: <span>41132017</span></li>
                    <li><i class="fas fa-signature"></i>Registration: <span>J22/1854/2019 </span></li>
                    <li><i class="fas fa-map-marker-alt"></i>Location: <span>ISAIIA, Iasi</span></li>
                    <li><i class="fas fa-envelope"></i>Email: <span>contact@moreflirts.com</span></li>
                </ul>
                <div class="description">
                    <i class="fas fa-info-circle"></i>
                    <p>Personal data that will be collected through the contact form will be used to make a direct email connection with you. <br>Refusing to use this data makes it impossible to establish a relationship with you</p>
                </div>
            </div>
        </div>
    </div>
    <div class="nine wide column">
        <div class="contact-form m200-b">
            <div class="form-title">
                <h2>Lets talk</h2>
                <h4>Ask us anything or just say hi</h4>
            </div>
            <form class="ui form" method="POST" action="/contact">
                {{ csrf_field() }}
                <div class="field">
                    <div class="ui left icon input ">
                        <input type="text" placeholder="Full Name" name="name">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input ">
                        <input type="text" placeholder="Email Adress" name="email">
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
                <div class="field text-area">
                    <div class="ui left icon input ">
                        <textarea placeholder="Message" name="message"></textarea>
                        <i class="fas fa-pen-nib"></i>
                    </div>
                </div>
                <div class="ui checkbox">
                    <input type="checkbox" name="gdpr">
                    <label>I accept that the above data be used to be contacted by the administrators of this website.</label>
                </div>
                <div class="send-button">
                    <button class="btn big-btn">Send message</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection