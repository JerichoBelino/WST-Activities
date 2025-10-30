<section id="home">
  <div class="container">
    <h1 id="welcomeMsg">Welcome, <?php echo htmlspecialchars($_SESSION['username'] ?? 'Guest'); ?>!</h1>
    <p>Aspiring Web Developer passionate about building functional and creative digital solutions.</p>
    <a href="#projects" class="btn btn-light mt-3">Explore My Work</a>
  </div>
</section>


  <!-- Projects -->
  <section id="projects">
    <div class="container">
      <h2>Featured Projects</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-box h-100">
            <i class="bi bi-cash-stack fs-1"></i>
            <h4 class="mt-3">SDG 1 No Poverty - Microfinance Platform</h4>
            <p>A microfinance platform that supports low-income communities by providing small loans, financial services, 
                and resources to promote economic stability and help achieve SDG 1: No Poverty.</p>
            <a href="https://github.com/JerichoBelino/PHPproject.git" target="_blank" class="btn btn-primary mt-2">View Project</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box h-100">
            <i class="bi bi-calculator fs-1"></i>
            <h4 class="mt-3">Automated Payroll System in C++</h4>
            <p>An Automated Payroll System in C++ that streamlines employee salary computation, 
                deductions, and payslip generation for faster and more accurate payroll management.</p>
            <a href="git@github.com:JerichoBelino/Automated-Payroll-System.git" target="_blank" class="btn btn-primary mt-2">View Project</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box h-100">
            <i class="bi bi-people fs-1"></i>
            <h4 class="mt-3">Computer Laboratory Attendance System</h4>
            <p>Monitors and records student attendance in the computer laboratory while also maintaining detailed 
                user profiles to improve efficiency, security, and overall management of lab activities.</p>
            <a href="SHSproject.pdf" target="_blank" class="btn btn-primary mt-2">View Project</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about">
    <div class="container">
      <h2 class="text-center">About Me</h2>
      <div class="row align-items-center mt-4">
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <img src="me.jpg" alt="Profile Picture" class="profile-pic">
        </div>
        <div class="col-md-8">
          <p class="about-text">
            I’m <span id="displayName"></span>, a BSIT student at Batangas State University, The National Engineering University - Lipa Campus.  
            I am passionate about web development, system integration, and creating solutions that matter.  
            Each project is an opportunity to innovate, grow, and deliver meaningful digital experiences.
          </p>
        </div>
      </div>

      <h3 class="mt-5 text-center">Simple Quotes</h3>
      <div class="row g-4 mt-3">
        <div class="col-md-4">
          <div class="about-quote h-100">
            <img src="me2.jpg" alt="Profile">
            "The only thing you have to fear is fear itself."
          </div>
        </div>
        <div class="col-md-4">
          <div class="about-quote h-100">
            <img src="me3.jpg" alt="Profile">
            "Be yourself; everyone else is already taken."
          </div>
        </div>
        <div class="col-md-4">
          <div class="about-quote h-100">
            <img src="me2.jpg" alt="Profile">
            "Life is about making an impact, not making an income."
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills">
    <div class="container">
      <h2>Skills</h2>
      <div>
        <span class="skill-badge"><i class="devicon-html5-plain colored"></i> HTML</span>
        <span class="skill-badge"><i class="devicon-css3-plain colored"></i> CSS</span>
        <span class="skill-badge"><i class="devicon-javascript-plain colored"></i> JavaScript</span>
        <span class="skill-badge"><i class="devicon-php-plain colored"></i> PHP</span>
        <span class="skill-badge"><i class="devicon-bootstrap-plain colored"></i> Bootstrap</span>
        <span class="skill-badge"><i class="devicon-mysql-plain colored"></i> MySQL</span>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <h2>Contact Me</h2>
      <p>Have a project in mind? Let’s build something impactful together.</p>
      <form>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="mb-3">
          <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
        </div>
        <button type="submit" class="btn">Send Message</button>
      </form>

      <div class="social-links mt-4">
        <a href="https://www.facebook.com/jerichobelino15" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="mailto:jerichobelino15@email.com"><i class="bi bi-envelope-fill"></i></a>
      </div>
    </div>
  </section>