<div>
    <nav class="nav">
       <img src="{{ asset('images/logowhite.png') }}"  alt="Logo"  style="height:100px;">
     <ul>
        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"><strong>HOME</strong></a></li>
        <li class="{{ request()->is('aboutus') ? 'active' : '' }}"><a href="/aboutus"><strong>ABOUT US</strong></a></li>
        <li class="{{ request()->is('works') ? 'active' : '' }}"><a href="/works"><strong>WORKS</strong></a></li>
        <li class="{{ request()->is('services') ? 'active' : '' }}"><a href="/works"><strong>SERVICES</strong></a></li>
    </ul>
    </nav>
</div>

<style>
    .nav{
        display: flex;
        padding:20px;
    }
    ul{
        display:flex;
    }
    li{
        padding-top:30px;
        padding-left:50px;
        list-style-type: none;
        margin-left:20px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
    }
    body{
        margin:0;
    }
    .active {
        color: rgb(150, 150, 150);
        
    }
    a{
        text-decoration: none;
        color:rgb(255, 255, 255);
    }
    a:hover{
        color:rgb(150, 150, 150);
    }
    
</style>