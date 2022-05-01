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
    <header>
        <div class="logo-container">
            <li><a href="{{route('index')}}"><p style="color: white">FESHOW VIBES</p></a></li>
        </div>
        <div class="menu-list" id="menu-items">
            <div class="menu-list-login">
                 <img src="{{asset('data/images/close.png')}}" alt=""  id="close-sidebar" class="close-btn">
            </div>
            <ul class="list-items">
                <li class="li"><a href="{{route('index')}}">home </a ></li>
                 <li class="li"><a href="{{route('tracks')}}">tracks</a></li>
                  <li class="li"><a href="{{route('contact')}}">contact</a></li>
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
                <li><a href="{{route('contact')}}" class="styled-anchor">contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="landpage tracks-landpage blues-landpage">
        <div class="landpage-text">
            <h2>blues</h2>
        </div>

    </section>
    <h5 class="header-badge">categories</h2>
    <section class="category-section">
        <a href="{{route('regge')}}">
            <div class="category-card first track-card">
                <p>Regge</p>
            </div>
        </a>
        <a href="{{route('hiphop')}}">
            <div class="category-card second track-card">
                <p>Hip-hop</p>
            </div>
        </a>
        <a href="{{route('blues')}}">
            <div class="category-card third track-card">
                <p>Blues</p>
            </div>
        </a>
        <a href="{{route('gospel')}}">
            <div class="category-card fourth track-card">
                <p>Worship</p>
            </div>
        </a>
        <a href="{{route('jazz')}}">
            <div class="category-card fifth track-card">
                <p>Jazz</p>
            </div>
        </a>
    </section>
    <section class="music-container">
        <div class="music-card">
            <img src="{{asset('data/images/celeb (1).jpg')}}" alt="" class="music-art-work">
            <p>Gbeku :</p>
            <audio src="{{asset('data/images/ka-anyi-na-ayo.mp3')}}" controls >ka anyi na ayo ; by phyno</audio>
        </div>
        <div class="music-card">
            <img src="{{asset('data/images/celeb (2).jpg')}}" alt="" class="music-art-work">
            <p>Kilometer :</p>
            <audio src="{{asset('data/images/ka-anyi-na-ayo.mp3')}}" controls >ka anyi na ayo ; by phyno</audio>
        </div>
        <div class="music-card">
            <img src="{{asset('data/images/celeb (3).jpg')}}" alt="" class="music-art-work">
            <p>Forever :</p>
            <audio src="{{asset('data/images/ka-anyi-na-ayo.mp3')}}" controls >ka anyi na ayo ; by phyno</audio>
        </div>
        <div class="music-card">
            <img src="{{asset('data/images/gradient (1).jpg')}}" alt="" class="music-art-work">
            <p>Ayo'm :</p>
            <audio src="{{asset('data/images/ka-anyi-na-ayo.mp3')}}" controls >ka anyi na ayo ; by phyno</audio>
        </div>
        <div class="music-card">
            <img src="{{asset('data/images/gradient (2).jpg')}}" alt="" class="music-art-work">
            <p>Finesse :</p>
            <audio src="{{asset('data/images/ka-anyi-na-ayo.mp3')}}" controls >ka anyi na ayo ; by phyno</audio>
        </div>
    </section>
    <div class="blue-burble"></div>
        <footer>
            <div class="social-media-icon-conainer"></div>
            <p style="color: white">&copy;copyright 2022 <br>All rights reserved</p>
        </footer>
        <script src="{{asset('data/js/main.js')}}"></script>
</body>
</html>
