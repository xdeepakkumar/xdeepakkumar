@include('master/_header')
{{-- header section end --}}
<div class="scroll-up-btn">
    <i class="fas fa-angle-up"></i>
</div>
{{-- navbar section --}}
<nav class="navbar">
    <div class="max-width">
        <div class="logo"><a href="#"><span><_DK_/></span></a></div>
        <ul class="menu">
            <li><a href="#home" class="menu-btn">Home</a></li>
            <li><a href="#about" class="menu-btn">About</a></li>
            <li><a href="#services" class="menu-btn">Services</a></li>
            <li><a href="#skills" class="menu-btn">Skills</a></li>
            <li><a href="#teams" class="menu-btn">Source Code</a></li>
            <li><a href="#contact" class="menu-btn">Contact</a></li>
        </ul>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>

<!-- home section start -->
<section class="home" id="home">
    <div class="max-width">
        <div class="home-content">
            <div class="text-1">Hello, I am </div>
            <div class="text-2">Deepak Kumar</div>
            <div class="text-3">And I'm a <span class="typing"></span></div><br>
            <span><a href="#contact"><i class="fab fa-whatsapp"></i></a></span>
            <span><a href="https://www.instagram.com/xdeepakkumar/"><i class="fab fa-instagram"></i></a></span>
            <span><a href="https://www.facebook.com/people/Deepak-Kumar/100022103200871"><i class="fab fa-facebook"></i></a></span>
            <span><a href="#"><i class="fab fa-github"></i></a></span>
            <span><a href="https://www.linkedin.com/in/deepak-kumar-832516190/"><i class="fab fa-linkedin"></i></a></span>
        </div>
    </div>
</section>
<!-- about section start -->
<section class="about" id="about">
    <div class="max-width">
        <h2 class="title">About me</h2>
        <div class="about-content">
            <div class="column left">
                <img src="images/profile-1.jpeg" alt="">
            </div>
            <div class="column right">
                <div class="text">I'm Deepak and I'm a Full Stack Developer</div>
                <p>I work as a full stack developer and can develop both client and server software. In addition, i have mastery to work with HTML5 and CSS3, and also knows UI  CSS framework (Materialize css, Bootstrap), modern UI javascript library & framework like React & Angular respectively, database (Mysql, MongoDB) and backend framework Laravel, Spring boot, NodeJs. I have also worked with PHP, jQuery AWS, Firebase.</p>
                <a href="#">View CV</a>
            </div>
        </div>
    </div>
</section>
 <!-- services section start -->
 <section class="services" id="services">
    <div class="max-width">
        <h2 class="title">My services</h2>
        <div class="serv-content">
            <div class="card">
                <div class="box">
                    <i class="fas fa-paint-brush"></i>
                    <div class="text">Java Dev.</div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <i class="fas fa-chart-line"></i>
                    <div class="text">Web Development</div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <i class="fas fa-code"></i>
                    <div class="text">Apps Design</div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                </div>
            </div>
           </div>
        </div>
    </div>
</section>
    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>I know both backend and Front-end technology, Development Languages, Database, Basic design ability, Server, Working with API and version control systems and i can build whole Java, javascript, PHP applications including front end, back-end, database, APIs, server and version control and basic knowledge of AMAZON WEB SERVICES & GOOGLE FIREBASE.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>Java</span>
                            <span>80%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Spring Boot</span>
                            <span>85%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Angular</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Node JS</span>
                            <span>70%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Laravel</span>
                            <span>85%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My Recent Projects</h2>

        </div>
    </section>
    {{-- custom section for the project done section  --}}


    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Approach Me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Have any question? feel free to white i had love to hear from you, just fill out the form and i will get back to you shortly.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Deepak Kumar</div>
                                <div class="sub-title">9939377229, 6200960560</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">BG5A, Paschim Vihar, New Delhi-110063</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">mail@xdeepakkumar.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>






{{-- foooter section  --}}
@include('master/_footer')
