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
    <div class="blue-burble"></div>
    <header>
        <div class="logo-container">
            <li><a href="{{ route('index') }}">
                    <p style="color: white">FESHOW VIBES</p>
                </a></li>
        </div>
        <div class="menu-list" id="menu-items">
            <div class="menu-list-login">
                <img src="{{asset('data/images/close.png')}}" alt=""  id="close-sidebar" class="close-btn" style="background-color: white">
            </div>
            <ul class="list-items">
                <li class="li"><a href="{{ route('index') }}">home </a></li>
                <li class="li"><a href="{{ route('tracks') }}">tracks</a></li>
                {{-- <li class="li"><a href="{{ route(contact) }}">contact</a></li> --}}
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
                {{-- <li><a href="{{ route(contact) }}" class="styled-anchor">contact</a></li> --}}
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
            <img src="{{ asset('data/images/worship (2).jpg') }}" alt="" class="profile-pics contact-img">
        </div>
        <div class="about-text-container ">




            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                <div class="alert alert-success alert-block"></div>
                <button type="button" class="close" data-dismiss="alert">× We have received your message and
                    would like to thank you for writing to us.</button>
                <strong>{{ session('success') }}</strong>
            @endif

            <form action="{{ route('contact.store') }}" method="post" class="contact-form">
                @csrf


                <input type="text" placeholder="input your name" {{ old('name') }} name="name" class="contact-input"
                    id="">

                <input type="text" placeholder="enter Subject" {{ old('subject') }} name="subject"
                    class="contact-input">


                <input type="email" name="email" id="" placeholder="enter your email" {{ old('email') }}
                    class="contact-input" id="email-input" required>


                <textarea name="message" id="text-area" cols="30" {{ old('message') }} rows="10" class="text-area"
                    placeholder="your text goes here">
                </textarea>

                @if ($errors->has('message'))
                    <div class="error">
                        {{ $errors->first('message') }}
                    </div>
                @endif
                <button class="send-btn" type="submit">
                    <div class="svg-wrapper-1">
                        <div class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path fill="currentColor"
                                    d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <span>Send</span>
                </button>
            </form>
        </div>
    </section>
    <h5 class="header-2">contact me</h2>
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
