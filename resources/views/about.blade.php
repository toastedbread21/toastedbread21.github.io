<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
</head>
<div class="navigation">
    @include( 'includes.nav' )
    </div>
<body>
    
    <div class="about">
        <section class="aboutme">
            <div class="me">
                <img src="{{asset('images/me.png')}}" alt="me">
            </div>
            <div class="descriptionme">
                <h2>Hello !</h2>
                <p>Hello, I'm <strong>Carl Llaguno</strong>, a versatile professional with expertise in 3D modeling, web development, and networking. I excel in creating detailed 3D models and building dynamic websites using PHP, Laravel, JavaScript, CSS, and HTML. I also have a strong background in networking, including configuring switches and firewalls. My technical and creative skills enable me to approach challenges innovatively. Eager for new projects pushing boundaries of technology and creativity.</p>
            </div>
        </section>
    </div>
        <section class="education">
            <div class="flex-container">
            <div class="title">
            <h1>Education</h1>
            <h1>Work Experience</h1>
            </div>
            </div>
            <div class="fleex-container">
            <div class="flex">
                <div class="uc">
                    <img src="{{asset('images/uc.png')}}" alt="me" style="height:100px;">
                </div>
                <div class="desc">
                    <h2>University of Cebu </h2>
                    <p>Bachelor of Science and Information Technology</p>
                    <p>2019 - 2024</p>
                </div>
            </div>
            <div class="flex">
                <div class="ace">
                    <img src="{{asset('images/ace1.png')}}" alt="me" style="height:50px;">
                </div>
                <div class="desc">
                    <h2>ACE - 1 IT Solutions</h2>
                    <p>IT Technical Support Engineer</p>
                    <p>2023 - 2024</p>
                </div>
            </div>
            </div>
        </section>
        <div class="about">
        <section class="links">
            <div class="container-links">
                <h2>Links</h2>
                <p><a href="https://carlcarl.artstation.com/">Artstation</a></p>
                <p><a href="https://github.com/toastedbread21">Github</a></p>
                <p><a href="https://www.facebook.com/buttmaaaan29/">Facebook</a></p>
                <p><div class="badge-base LI-profile-badge" data-locale="en_US" data-size="medium" data-theme="light" data-type="VERTICAL" data-vanity="llagunocarl" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://ph.linkedin.com/in/llagunocarl?trk=profile-badge">LinkedIn</a></div></p>
            </div>
            <div class="contactme">
                <h1>Contact Us</h1>
                <p>Llagunocarl@gmail.com</p>
                <p>+63 9912095931</p>
            </div>
            <div class="create">
                <h1>Let's Create Something Amazing Together!</h1>
                <a href="/contactus" class="btn">Get Started</a>
            </div>
        </section>
        
        
    </div>
</body>
© 2024 All Rights Reserved
</html>
