<?php get_header(); ?>
    <header class="navbar">
      <div class="nav-container">
        <!-- Logo -->
        <div class="logo">
          <a href="<?php echo site_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/WAAO-logo-long.png" alt="Waao-logo">
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
          <a href="#">Get Started</a>
        </div>

        <!-- Mobile Menu Icon -->
        <div class="menu-toggle" id="menu-toggle">☰</div>
      </div>
    </header>
    <!-- Services Hero -->
    <!-- Services Grid   -->
    <section class="services-grid-1">
      <div class="services-header">
        <h2>Our Professional Services</h2>

        <p>
          We provide practical solutions and expert support that help
          entrepreneurs start, manage, and grow successful businesses.
        </p>
      </div>

      <div class="services-container">
        <div class="service-card">
          <div class="service-icon">🚀</div>
          <h3>Startup Support</h3>
          <p>
            Helping entrepreneurs transform their ideas into real businesses.
          </p>
        </div>

        <div class="service-card">
          <div class="service-icon">📊</div>
          <h3>Business Consulting</h3>
          <p>
            Professional advice and strategies for building a successful
            company.
          </p>
        </div>

        <div class="service-card">
          <div class="service-icon">📈</div>
          <h3>Growth Strategy</h3>
          <p>Develop strategies that help your business scale and expand.</p>
        </div>

        <div class="service-card">
          <div class="service-icon">🤝</div>
          <h3>Mentorship</h3>
          <p>Learn from experienced entrepreneurs and industry experts.</p>
        </div>

        <div class="service-card">
          <div class="service-icon">💡</div>
          <h3>Entrepreneur Education</h3>
          <p>Gain valuable knowledge to make smarter business decisions.</p>
        </div>

        <div class="service-card">
          <div class="service-icon">⚙️</div>
          <h3>Business Development</h3>
          <p>Improve operations, marketing, and growth planning.</p>
        </div>
      </div>
    </section>
    <!-- Why Choose Our Services -->
    <section class="why-choose-services">
      <div class="why-header">
        <h2>Why Choose Our Services</h2>
        <p>We focus on practical solutions that help entrepreneurs succeed.</p>
      </div>

      <div class="why-container">
        <div class="why-box">
          <h3>Expert Guidance</h3>
          <p>Receive professional advice from experienced business experts.</p>
        </div>

        <div class="why-box">
          <h3>Practical Solutions</h3>
          <p>Our strategies are designed to solve real business challenges.</p>
        </div>

        <div class="why-box">
          <h3>Entrepreneur Community</h3>
          <p>Connect with a network of entrepreneurs and mentors.</p>
        </div>

        <div class="why-box">
          <h3>Long-Term Support</h3>
          <p>We support businesses through every stage of their growth.</p>
        </div>
      </div>
    </section>
    <!-- Call-to-Action Section -->
    <section class="services-cta">
      <div class="cta-container">
        <h2>Ready To Grow Your Business?</h2>

        <p>
          Join WAAO India and start building a successful future with the right
          guidance and resources.
        </p>

        <a href="#" class="cta-btn">Get Started Today</a>
      </div>
    </section>
    <!-- footer -->
  <footer class="footer">
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
