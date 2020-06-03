@extends('layouts.app')

@section('content')
<section class="steps-section m50-b m150-t">
  <div class="ui grid centered middle aligned container stackable">
    <div class="sixteen wide comlumn">
      <div class="title">
        <h4>How it Works</h4>
        <h2>Steps to Find Your Match</h2>
        <p>Find your ideal soulmate among a lot of members.! </br> Our VIP members who are willing to travel to the end
          of the world for the loved one.. </p>
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
        <p>More than 100,000 people join every day, so there are plenty of new guys and girls to meet around the world.
        </p>
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
        <p>At More Flirts we believe there is someone for everyone. We have become a large social network because we
          have created the best tools to connect people.</p>
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
        <p>Our many years of experience have given us great insights and experience which has helped us solve major
          challenges in the social discovery space.</p>
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
        <p>Our platform offers privacy and security so our users can only focus on their loved ones without any worries.
        </p>
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
              <p>Great website for casual dating and fun. I have only been here for two weeks but I already had some
                dates.</p>
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
              <p>Ich bin aus Spaß hierher gekommen und habe viele andere Mitglieder gefunden, die die gleichen Gründe
                haben wie ich.</p>
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
              <p>No esperaba encontrar a mi futuro novio aquí. Me sorprendió gratamente la calidad de las personas en
                este sitio web. </p>
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
              <p> A diferencia de otros sitios web, aquí puedes encontrar personas agradables. ¡Fui a un par de citas y
                espero obtener más!</p>
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
@endsection