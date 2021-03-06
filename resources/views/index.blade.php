<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('data/css/style.css') }}">
    <title>music site</title>
</head>

<body>

    <section class="landpage">
        <header>
            <div class="logo-container">
                <li><a href="{{ route('index') }}">
                        <p style="color: white">FESHOW VIBES</p>
                    </a></li>
            </div>
            <!-- this is the navigation sidebar for the mobile view -->
            <div class="menu-list" id="menu-items">
                <div class="menu-list-login">
                    <img src="{{ asset('data/images/close.png') }}" alt="" id="close-sidebar" class="close-btn"
                        style="background-color: white">
                </div>
                <ul class="list-items">
                    <li class="li"><a href="{{ route('index') }}">home </a></li>
                    <li class="li"><a href="{{ route('tracks') }}">tracks</a></li>
                    <li class="li"><a href="{{ route('contact') }}">contact</a></li>
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
                    <li><a href="#">home</a></li>
                    <li><a href="{{ route('tracks') }}">tracks</a></li>
                    <li><a href="{{ route('contact') }}" class="styled-anchor">contact</a></li>
                </ul>
            </nav>
        </header>
        <div class="landpage-text">
            <h2>FESHOW VIBES <span class="pink-text">music</span> and entertainment .</h2>
             <p style="color: wheat">Feshow Vibe music is an Entertainment home help in handling your music and audio events, studio works, promoting up music brands and up coming artist. </p>
            <div class="btn-container">
                <a href="{{ route('tracks') }}" class="btn-explore">explore</a>
            </div>
        </div>

    </section>
    <h5 class="header-badge" style="color: white">categories</h2>
        <!-- music category section -->
        <section class="category-section">
            <img src="{{ asset('data/images/player (1).jpg') }}" alt="" class="category-card">
            <img src="{{ asset('data/images/play-disk.jpg') }}" alt="" class="category-card">
            <img src="{{ asset('data/images/celeb (3).jpg') }}" alt="" class="category-card">
            <img src="{{ asset('data/images/player (3).jpg') }}" alt="" class="category-card">
            <img src="{{ asset('data/images/gradient (1).jpg') }}" alt="" class="category-card">
        </section>

        <!-- about section  -->
        <section class="about-section">
            <div class="about-image-container">
                <img src="{{ asset('data/images/_MG_5460.jpg') }}" alt="" class="profile-pics">
            </div>
            <div class="about-text-container">
                <h5 style="color: white">about me</h5>
                <p>My name is oluwafemi, I am a native of ilaji oke oyo state Nigeria.
                    I school at oyo state college of agriculture igboora with a discipline of public administration</p>
                <a href="{{ route('contact') }}" class="about-btn">lets talk</a>
            </div>
        </section>

        <!-- music album section  -->

        <section class="about-section display-album-section">
            <div class="about-image-container album-container">
                <img src="{{ asset('data/images/_MG_5393.jpg') }}" alt="" class=" album small">
                <img src="{{ asset('data/images/_MG_5459.jpg') }}" alt="" class=" album medium">
                <img src="{{ asset('data/images/_MG_5460.jpg') }}" alt="" class=" album large">
                <img src="{{ asset('data/images/profile1.jpg') }}" alt="" class=" album x-large">
            </div>

            <!-- album section text section  -->

            <div class="about-text-container">
                <h5 style="color: white">about me</h5>
                <p>I am a musician and song writer also am an arranger, I learn boxing for two years and also a ex cadet
                    in marine time navy school</p>
                <a href="{{ route('tracks') }}" class="about-btn">check out track</a>
            </div>
        </section>

        <!-- review section  -->

        <section class="service-section">
            <h5 class="review-header" style="color: white">review</h5>

            <!-- review card 1  -->

            <div class="service-card">
                <p>As a producer working with Feshoew as always been easy because he understands and flows with the
                    beat.. Feshow is a very talented artist hoping to set the world </p>
                <img src="{{ asset('data/images/profile1.jpg') }}" alt="" class="review-pics"><br>
                <p style="color: white">EMMANUEL NWAMINI</p>
                <h3 style="color: blue">Song Writer</h3>
            </div>
            <div class="service-card">
                <p>As a producer working with Feshow as always been easy because he understands and flows with the
                    beat.. Feshow is a very talented artist hoping to show the world he's best.. </p>
                <img src="{{ asset('data/images/_MG_5393.jpg') }}" alt="" class="review-pics"><br>
                <p style="color: white">FALETI ADEBAYO</p>
                <h3 style="color: blue">Producer</h3>
            </div>
            <div class="service-card">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita explicabo beatae consequuntur!</p>
                <img src="{{ asset('data/images/celeb (1).jpg') }}" alt="" class="review-pics"><br>
                <p style="color: white">EMMANUEL NWAMINI</p>
                <h3 style="color: blue">Musician</h3>
            </div>
        </section>
        <h5 class="header-2" style="color: white">contact me</h2>
            <p class="header-3" style="color: white">Lorem ipsum dolor sit amet.</p>

            <!-- this is the email and contact information section -->

            <section class="plans-section">

                <!-- email detail car  -->

                <div class="plan-card">
                    <img src="{{ asset('data/images/mail.png') }}" alt="" class="icon"
                        style="background-color: blue">
                    <a href="mailto:Oluwafemifeshow.1234@gmail.com">
                        <p style="color: white"> Oluwafemifeshow.1234@gmail.com</p>
                    </a>
                    {{-- <a href="mailto:joshuaaleke0@gmail.com">joshuaaleke0@gmail.com</a> --}}
                </div>

                <!-- mobile number detail card  -->

                <div class="plan-card">
                    <img src="{{ asset('data/images/phone.png') }}" alt="" class="icon"
                        style="background-color: blue">
                    <p style="color: white">+234 7045783982 <br> +234 8046284682</p>
                </div>

                <!-- location detail card  -->

                <div class="plan-card">
                    <img src="{{ asset('data/images/down arrow.png') }}" alt="" class="icon"
                        style="background-color: blue">
                    <p style="color: white">no:4 lagos island, LAGOS , NIGERIA</p>
                </div>
            </section>

            <!-- footer section  -->

            <footer>
                <div class="social-media-icon-container">
                    <a href="https://www.facebook.com/oluwa.femi.1023611"><img
                            src="{{ asset('data/images/fb.png') }}" alt="" class="social-media-icon"></a>
                    <a href=""><img src="{{ asset('data/images/twitter.png') }}" alt=""
                            class="social-media-icon"></a>
                    <a href="http://instagram.com/oluwafemi_feshow"><img src="{{ asset('data/images/insta.png') }}"
                            alt="" class="social-media-icon"></a>
                    <a href="https://wa.me/2349057102774"><img src="{{ asset('data/images/whatsapp.png') }}" alt=""
                            class="social-media-icon"></a>
                </div>
                <p style="">&copy;copyright 2022 <br>All rights reserved @FeshowVibes</p>
                <a
                    href="https://www.linkedin.com/in/emmanuel-godwin-a21081215?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BNxacVc4PTFuG5iak6zwyxQ%3D%3D">

                    <P>Developed by Emmy-Tech</P>
                </a>
            </footer>
            <script src="{{ asset('data/js/main.js') }}"></script>
</body>

</html>
