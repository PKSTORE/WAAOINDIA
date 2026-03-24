<?php get_header(); ?>
    <!-- navabr  -->
    <header class="navbar">
      <div class="nav-container">
        <!-- Logo -->
         <div class="logo">
          <a href="<?php echo site_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/WAAO-logo-long.png">
       </a>
        </div>

        <!-- Navigation -->
      <ul class="nav-menu">
      <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
      <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
      <li><a href="<?php echo site_url('/services'); ?>">Services</a></li>
      <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
        </ul>

        <!-- Button -->
        <div class="nav-btn">
          <a href="<?php echo site_url('/contact'); ?>">Get Started</a>
        </div>

        <!-- Mobile Menu Icon -->
        <div class="menu-toggle" id="menu-toggle">☰</div>
      </div>
    </header>
    <!-- overview of waoo-india -->
    <section class="about-overview">
      <div class="about-container">
        <div class="about-text">
          <h2>Overview About WAAO India</h2>

          <p>
            WAAO India is a platform dedicated to supporting entrepreneurs,
            startups, and small businesses across India. Our mission is to
            empower individuals with the knowledge, resources, and guidance they
            need to turn ideas into successful ventures.
          </p>

          <p>
            We believe that every entrepreneur deserves access to practical
            business support and expert insights. Through guidance, education,
            and community support, WAAO India helps entrepreneurs navigate the
            challenges of building and growing a business in today's competitive
            environment.
          </p>
        </div>

        <div class="about-image">
          <img src="images/about1.jpg" alt="About WAAO India" />
        </div>
      </div>
    </section>
    <!-- WAAO India Helps   -->
    <section class="about-help">
      <div class="about-help-header">
        <h2>How WAAO India Helps Entrepreneurs and Businesses</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione a, quaerat eum obcaecati libero, pariatur, eligendi mollitia cumque perspiciatis nemo inventore hic odio fugiat maiores? Nisi tenetur provident dolores excepturi.
      </p>
        <p>
          We provide entrepreneurs with the tools, guidance, and insights needed
          to start, manage, and grow successful businesses.
        </p>
      </div>
      <div class="help-grid">
        <div class="help-box">
          <h3>Business Guidance</h3>
          <p>
            Helping entrepreneurs make informed decisions when starting and
            managing their businesses.
          </p>
        </div>

        <div class="help-box">
          <h3>Startup Support</h3>
          <p>
            Providing practical solutions and resources for new startups to
            build strong foundations.
          </p>
        </div>

        <div class="help-box">
          <h3>Growth Strategies</h3>
          <p>
            Helping businesses develop strategies that support long-term growth
            and sustainability.
          </p>
        </div>

        <div class="help-box">
          <h3>Entrepreneur Education</h3>
          <p>
            Sharing knowledge and insights that empower entrepreneurs to
            succeed.
          </p>
        </div>
      </div>
    </section>
    <!-- Mission & Vision Section -->

    <section class="mission-vision">
      <div class="mission-container">
        <div class="mission-box">
          <h2>Our Mission</h2>
          <p>
            Our mission at <a href="<?php echo site_url('/'); ?>">waaoindia</a> is to empower
            entrepreneurs and small business owners by providing practical
            guidance, reliable resources, and expert insights. We aim to help
            individuals transform their ideas into sustainable businesses and
            create opportunities for long-term growth and success.
          </p>
        </div>

        <div class="vision-box">
          <h2>Our Vision</h2>
          <p>
            Our vision is to build a strong entrepreneurial ecosystem where
            innovative ideas can grow into impactful businesses. WAAO India
            aspires to become a trusted platform that supports entrepreneurs
            across India with knowledge, mentorship, and strategic guidance.
          </p>
        </div>
      </div>
    </section>
    <!-- footer -->
    <footer class="footer">>
      <div class="footer-container">
        <div class="footer-col">
          <h3>WAAO India</h3>
          <p>
            WAAO India is dedicated to helping small businesses and
            entrepreneurs grow through guidance, resources, and practical
            support.
          </p>
        </div>

        <div class="footer-col">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
            <li><a href="<?php echo site_url('/services'); ?>">Services</a></li>
            <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h3>Services</h3>
          <ul>
            <li><a href="<?php echo site_url('/services'); ?>">Business Consulting</a></li>
            <li><a href="<?php echo site_url('/services'); ?>">Startup Support</a></li>
            <li><a href="<?php echo site_url('/services'); ?>">Growth Strategy</a></li>
            <li><a href="<?php echo site_url('/services'); ?>">Entrepreneur Education</a></li>
          </ul>
        </div>

        <div class="footer-col">
         <h3>Contact</h3>
          <p>📍 New Delhi, India</p>
          <p>📞 +91 9899373732</p>
          <a href="mailto:support@waaoindia.com" target="_blank" class="Footer-btn">
            support@waaoindia.com
           </a>
          </div>
      </div>

      <div class="footer-bottom">
        <p>© 2026 WAAO India. All Rights Reserved.</p>
      </div>
    </footer>
    <script>
      const toggle = document.getElementById("menu-toggle");
      const menu = document.querySelector(".nav-menu");

      toggle.addEventListener("click", function () {
        menu.classList.toggle("active");
      });
    </script>
   <?php get_footer(); ?>