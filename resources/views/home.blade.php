<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

</head>
<div class="navigation">
@include( 'includes.nav' )
</div>
<body>
    <div class="content">

        <div class="threeD">
            <div class="contenta">
                <h2>Bringing Imagination to Life with 3D Modeling</h2>
                <p>From conceptualization to creation,</p><p> I transform ideas into stunning 3D models that captivate audiences.</p>
            </div>
            <div class="contenta">
                <img src="{{ asset('images/3d.jpg') }}" alt="3d" style="height:700px;">
            </div>
        </div>

        <div class="digital">
            <div class="contenta">
                <img src="{{ asset('images/digital.jpg') }}" alt="3d" style="height:700px;">
            </div>
            <div class="contenta">
                <h2>Crafting Digital Art That Captivates</h2>
                <p>My digital art pieces evoke emotion and inspire, blending creativity with technical precision.</p>
            </div>
        </div>
        <div class="art">
           <p>Passion for Creating Art That Inspires.</p>
        </div>
        
    </div>

    <div class="last">
           
            <div class="service">
                <h2>Transforming Moments through Video Editing</h2>
                <p>With expertise in video editing, I turn raw footage into compelling stories that resonate with viewers.</p>
            
            
                <h2>Enhancing Images with Precision Photo Editing</h2>
                <p>Using advanced photo editing techniques, I enhance images to perfection, creating memorable visuals.</p>
        
                <h2>Building Digital Destinations with Website Creation</h2>
                <p>I design and develop interactive websites that engage users and showcase your brand effectively.</p>
            </div>
            <div class="video">
                <video autoplay muted loop class="fullscreen-video">
                    <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
                </video>
            </div>
            
    </div>

    <div class="cta">
        <h1>Ready to get started?</h1>
        <p>Explore our services and let's create something amazing together.</p><br>
        <a href="#" class="btn">Explore Services</a>
    </div>
    <footer>

        <div class="footer">
            <div class="logo">
                <img src="{{ asset('images/logowhite.png') }}"  alt="Logo"  style="height:200px;">
            </div>
                <div class="social">
                    <h3>Socials</h3>
                    <p>Facebook</p>
                    <p>Github</p>
                    <p>LinkedIn</p>
                </div>
                <div class="contact">
                    <h3>Contact Us</h3>
                    <p>Llagunocarl@gmail.com</p>
                    <p>+63 9912095931</p>
                </div>
        </div>   
        © 2024 All Rights Reserved   
    </footer>
</body>


</html>