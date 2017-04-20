@extends('layouts.layout')
@section('content')
<section class="hero eli-main">
    <div class="row">
        <div class="container">
            <header>
                <div class="eli-main col-md-4">
                    
                    <h1>Welcome</h1>
                    <p>My name is Elijah, and i am a Fullstack Developer</p>
                    
                    <div class="head-span"> 
                        <span>
                            <a href="/register">Sign Up</a>
                        </span>
                        <span>
                            <a href="/login">Login</a>
                        </span>
                    </div>
                </div>
            </header>
            
        </div>
        
    </div>
</section>
<section class="about eli-main">
    <div class="row">
        <div class="container">
            <h1>My Name is Elijah</h1>
            
            <div class="col-md-4 eli-sec">
                <i class="glyphicon glyphicon-camera"></i>
                <h3>Web Design</h3>
                <p>
                    I take a trendy and modern design approach to coding html and css, a very pratical usage.
                
            </div>
            <div class="col-md-4 eli-sec">
                <i class="glyphicon glyphicon-fire"></i>
                <h3>Web Development</h3>
                <p>
                    As a compliment to Web Design, i program in PHP, Python, or MEAN stack sometimes. I'm always familirizing myself with the latest technologies as well as the best HTML & CSS best practices 
                </p>
                
            </div>
            <div class="col-md-4 eli-sec">
                <i class="glyphicon glyphicon-leaf"></i>
                <h3>My Tools</h3>
                <p>
                    I Mainly use sublime text for everything, i use mamp to run 
                    the php server, i use firezilla to upload to the internet with ease, i have a github, that outlines my code in greater detail
                    
                </p>
                
            </div>
            
        </div>
    </div>
</section>

<section class="about2 eli-main">
<div class="row">
    <div class="container">
        <h1>About Us</h1>
        <div class="line"></div>
        
        <section class="grid">
          <div class="column">
             <h3>What is this site ?</h3>
            <p>
            This is one of my examples highlighting my uses for jquery, ajax, and PHP. 

            </p>
          </div>

          <div class="column">
            <h3>Use for the site ?</h3>
            <p>
              Easy, sign up and login, and make, edit, and delete a post. This is known as CRUD capabilities. 
            </p>
          </div>
          <div class="column">
            <h3>Anything Else ?</h3>
            <p>
                That is it, i could put more time into this, but this is just to demonstrate my web design and development usage.
            </p>
          </div>
        </section>
        <section>


        
    </div>
</div>
    


</section>


@endsection