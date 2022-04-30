<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('data/css/style.css')}}">
    <title>contact me</title>
</head>
<body>
    <div class="blue-burble"></div>
    <header>
        <div class="logo-container">
            <p>FESHOW VIBES</p>
        </div>
        <div class="menu-list" id="menu-items">
            <div class="menu-list-login">
                 <img src="{{asset('data/images/close.png')}}" alt=""  id="close-sidebar" class="close-btn">
            </div>
            <ul class="list-items">
                <li class="li"><a href="{{route('index')}}">home </a ></li>
                 <li class="li"><a href="{{route('tracks')}}">tracks</a></li>
                  <li class="li"><a href="{{route(contact)}}">contact</a></li>
             </ul>
        </div>
        <!-- this is the code for the hamburger menu in the mobile view -->
        <div class="menu-container" id="menubar">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
        <nav>
            <ul>
                <li><a href="{{route('index')}}">home</a></li>
                <li><a href="{{route('tracks')}}">tracks</a></li>
                <li><a href="{{route(contact)}}" class="styled-anchor">contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="landpage tracks-landpage contacts-landpage">
        <div class="landpage-text">
            <h2>contact me</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus iure voluptatem nesciunt omnis?</p>
        </div>

    </section>
    <section class="about-section contact-form-container">
        <div class="about-image-container">
            <img src="{{asset('data/images/worship (2).jpg')}}" alt="" class="profile-pics contact-img">
        </div>
        <div class="about-text-container ">
            <form action="" class="contact-form">
                <input type="text" placeholder="name">
                <input type="email" name="" id="" placeholder="email">
                <textarea name="" id=""></textarea>

                <button class="send-btn" type="submit">
                    <div class="svg-wrapper-1">
                      <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z"></path>
                          <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                        </svg>
                      </div>
                    </div>
                    <span>Send</span>
                  </button>
            </form>
        </div>
    </section>
    <h5 class="header-2">contact me</h2>
        <p class="header-3">Lorem ipsum dolor sit amet.</p>
        <section class="plans-section">
            <div class="plan-card">
                <img src="{{asset('data/images/mail.png')}}" alt="" class="icon">
                <p> johnDoe@gmail.com</p>
            </div>
            <div class="plan-card">
                <img src="{{asset('data/images/phone.png')}}" alt="" class="icon">
                <p>+234 7045783982 <br> +234 8046284682</p>
            </div>
            <div class="plan-card">
                <img src="{{asset('data/images/down arrow.png')}}" alt="" class="icon">
                <p>no:4 lagos island, LAGOS , NIGERIA</p></div>
            </div>
        </section>
        <footer>
            <div class="social-media-icon-container">
                <a href=""><img src="{{asset('data/images/fb.png')}}" alt="" class="social-media-icon"></a>
                <a href=""><img src="{{asset('data/images/twitter.png')}}" alt="" class="social-media-icon"></a>
                <a href=""><img src="{{asset('data/images/insta.png')}}" alt="" class="social-media-icon"></a>
                <a href=""><img src="{{asset('data/images/whatsapp.png')}}" alt="" class="social-media-icon"></a>
            </div>
            <p>&copy;copyright 2022 <br>All rights reserved</p>
        </footer>
        <script src="{{asset('data/js/main.js')}}"></script>
</body>
</html>
