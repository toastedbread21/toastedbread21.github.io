<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <div class="logo">
    <a href="/"><img src="{{ asset('images/logowhite.png') }}"  alt="Logo"  style="height:200px;"></a>
    </div>
    <div class="form-container">
        <div class="form">
        <h1>Contact Us</h1>
        <form action="/api-contactus" method="POST">
            @csrf
            <label for="email"><strong>Email:</strong></label>
            <input type="text" id="email" name="email" placeholder="Email"><br><br>
            <label for="subject"><strong>Subject:</strong></label>
            <select name="subject" id="subject">
                <option value="web">Website Creation</option>
                <option value="cgi">3D </option>
                <option value="video">Video Editing </option>
                <option value="photo">Photo Editing </option>
                <option value="other">Other</option>
            </select><br><br><br>
            <label for ="message"><strong>Body</strong></label><br><br>
            <textarea name="message"placeholder=" Message here..." rows="10" cols="50"></textarea>
           <br><br><button type="submit" class="btn1"><strong>Send</strong></button>    
        </form>
        </div>
    </div>
</body>
</html>
