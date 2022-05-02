<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('data/css/style.css') }}">
    <title>contact me</title>
</head>

<body>
    <header>
        <div class="logo-container">
            <li><a href="{{ route('index') }}">
                    <p style="color: white">FESHOW VIBES</p>
                </a></li>
        </div>
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
                <li><a href="{{ route('index') }}">home</a></li>
                <li><a href="{{ route('tracks') }}">tracks</a></li>
                <li><a href="{{ route('contact') }}" class="styled-anchor">contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="landpage tracks-landpage blues-landpage">
        <div class="landpage-text">
            <h2>blues</h2>
        </div>

    </section>
    <h5 class="header-badge" style="color: white">categories</h2>
        <section class="category-section">
            <a href="{{ route('regge') }}">
                <div class="category-card first track-card">
                    <p>Regge</p>
                </div>
            </a>
            <a href="{{ route('hiphop') }}">
                <div class="category-card second track-card">
                    <p>Hip-hop</p>
                </div>
            </a>
            <a href="{{ route('blues') }}">
                <div class="category-card third track-card">
                    <p>Blues</p>
                </div>
            </a>
            <a href="{{ route('gospel') }}">
                <div class="category-card fourth track-card">
                    <p>Worship</p>
                </div>
            </a>
            <a href="{{ route('jazz') }}">
                <div class="category-card fifth track-card">
                    <p>Jazz</p>
                </div>
            </a>
        </section>
        <section class="music-container">
            <div class="music-card">
                <img src="{{ asset('data/images/celeb (1).jpg') }}" alt="" class="music-art-work">
                <p>Gbeku :</p>
                <audio src="{{ asset('data/images/ka-anyi-na-ayo.mp3') }}" controls>ka anyi na ayo ; by phyno</audio>
            </div>
            <div class="music-card">
                <img src="{{ asset('data/images/celeb (2).jpg') }}" alt="" class="music-art-work">
                <p>Kilometer :</p>
                <audio src="{{ asset('data/images/ka-anyi-na-ayo.mp3') }}" controls>ka anyi na ayo ; by phyno</audio>
            </div>
            <div class="music-card">
                <img src="{{ asset('data/images/celeb (3).jpg') }}" alt="" class="music-art-work">
                <p>Forever :</p>
                <audio src="{{ asset('data/images/ka-anyi-na-ayo.mp3') }}" controls>ka anyi na ayo ; by phyno</audio>
            </div>
            <div class="music-card">
                <img src="{{ asset('data/images/gradient (1).jpg') }}" alt="" class="music-art-work">
                <p>Ayo'm :</p>
                <audio src="{{ asset('data/images/ka-anyi-na-ayo.mp3') }}" controls>ka anyi na ayo ; by phyno</audio>
            </div>
            <div class="music-card">
                <img src="{{ asset('data/images/gradient (2).jpg') }}" alt="" class="music-art-work">
                <p>Finesse :</p>
                <audio src="{{ asset('data/images/ka-anyi-na-ayo.mp3') }}" controls>ka anyi na ayo ; by phyno</audio>
            </div>
        </section>
        <div class="blue-burble"></div>
        <h5 class="header-2" style="color: white">contact me</h2>
            <p class="header-3" style="color: white">Lorem ipsum dolor sit amet.</p>
            <section class="plans-section">
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
                    <a href="https://www.facebook.com/oluwa.femi.1023611"><img src="{{ asset('data/images/fb.png') }}"
                            alt="" class="social-media-icon"></a>
                    <a href=""><img src="{{ asset('data/images/twitter.png') }}" alt="" class="social-media-icon"></a>
                    <a href="http://instagram.com/oluwafemi_feshow"><img src="{{ asset('data/images/insta.png') }}"
                            alt="" class="social-media-icon"></a>
                    <a href="https://wa.me/2349057102774"><img src="{{ asset('data/images/whatsapp.png') }}" alt=""
                            class="social-media-icon"></a>
                </div>
                <p style="">&copy;copyright 2022 <br>All rights reserved @FeshowVibes</p>
                <a href="https://github.com/Youngemmy5956">
                    <P>Developed by Emmy-Tech</P>
                </a>
            </footer>
            <script src="{{ asset('data/js/main.js') }}"></script>
</body>

</html>
