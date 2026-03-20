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

    <!-- hero section 1  -->
    <section class="hero-1">
      <div class="hero-container">
        <div class="hero-text">
          <h1>
            Helping Small <br />
            Businesses & <br />
            Entrepreneurs Grow <br />
            And Succeed
          </h1>

          <p>
            WAAO India is a business support and entrepreneurship growth
            platform dedicated to helping small businesses, startups, and
            aspiring entrepreneurs build, manage, and scale their ventures. We
            provide guidance, resources, insights, and practical support to turn
            ideas into successful businesses.
          </p>

         <a href="<?php echo site_url('/contact'); ?>">Get a Free Consulting</a>
        </div>

        <div class="hero-image">
 <img src="<?php echo get_template_directory_uri(); ?>/img/bussnies.png"></div>
      </div>
    </section>
    <!-- hero section 2 -->
    <section class="hero-2">
      <div class="hero2-header">
        <h2>Supporting Small Businesses And Entrepreneurs Across India</h2>

        <p>
          WAAO India is dedicated to supporting small business owners and
          entrepreneurs by providing practical guidance, useful resources, and
          real-world insights. Our goal is to help entrepreneurs overcome
          challenges, make informed decisions, and build sustainable businesses
          with confidence.
        </p>
      </div>

      <div class="hero2-content">
        <div class="hero2-image">
 <img src="<?php echo get_template_directory_uri(); ?>/img/bussines-work.png">        </div>

        <div class="hero2-text">
          <h3>Helping Entrepreneurs Turn Ideas Into Businesses</h3>

          <p>
            WAAO India was created to bridge the gap between aspiring
            entrepreneurs and the support they need to grow. We focus on
            practical solutions, community learning, and continuous guidance to
            help small businesses move forward at every stage of their journey.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic
            inventore, eos ipsum facilis officia tenetur sequi dolorem possimus
            est animi enim corrupti ullam suscipit voluptate, commodi quibusdam
            similique incidunt beatae.
          </p>

          <a href="<?php echo site_url('/about'); ?>">Learn More About Us</a>

        </div>
      </div>
    </section>
    <!-- hero-3 -->
    <section class="hero-3">
      <div class="hero3-header">
        <h2>Our Services</h2>

        <p>
          We provide practical solutions and expert support to help
          entrepreneurs and small businesses grow, manage their operations, and
          achieve success.
        </p>
      </div>

      <div class="services-grid">
        <div class="service-card">
          <div class="service-icon">💻</div>
          <h3>Business Consulting</h3>
          <p>
            Expert guidance to help you plan, launch, and grow your business
            successfully.
          </p>
        </div>

        <div class="service-card">
          <div class="service-icon">📊</div>
          <h3>Startup Support</h3>
          <p>
            Helping entrepreneurs transform ideas into real businesses with
            practical solutions.
          </p>
        </div>

        <div class="service-card">
          <div class="service-icon">🚀</div>
          <h3>Growth Strategy</h3>
          <p>
            Strategies designed to help businesses scale and compete in today's
            market.
          </p>
        </div>

        <div class="service-card">
          <div class="service-icon">🤝</div>
          <h3>Community & Mentorship</h3>
          <p>Connect with experts, mentors, and like-minded entrepreneurs.</p>
        </div>

        <div class="service-card">
          <div class="service-icon">📈</div>
          <h3>Business Development</h3>
          <p>
            Improve operations, marketing, and growth planning for long-term
            success.
          </p>
        </div>

        <div class="service-card">
          <div class="service-icon">🧠</div>
          <h3>Entrepreneur Education</h3>
          <p>
            Learn the essential skills needed to build and run a successful
            business.
          </p>
        </div>
      </div>
    </section>
    <!-- hero-4 -->
    <section class="hero-4">
      <div class="hero4-header">
        <h2>Why Choose WAAO India</h2>

        <p>
          We are committed to helping entrepreneurs and small businesses grow
          with practical guidance, reliable support, and real-world business
          insights.
        </p>
      </div>

      <div class="hero4-container">
        <div class="hero4-box">
          <div class="hero4-icon">⭐</div>
          <h3>Trusted Guidance</h3>
          <p>
            Our team provides practical business advice based on real industry
            experience.
          </p>
        </div>

        <div class="hero4-box">
          <div class="hero4-icon">📈</div>
          <h3>Growth Focused</h3>
          <p>
            We focus on strategies that help startups and small businesses scale
            sustainably.
          </p>
        </div>

        <div class="hero4-box">
          <div class="hero4-icon">🤝</div>
          <h3>Community Support</h3>
          <p>
            Join a network of entrepreneurs and mentors who help each other
            succeed.
          </p>
        </div>

        <div class="hero4-box">
          <div class="hero4-icon">🧠</div>
          <h3>Expert Knowledge</h3>
          <p>
            Access valuable insights and knowledge to make smarter business
            decisions.
          </p>
        </div>
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
          <p>📞 +91 9876543210</p>
          <p>📧 info@waaoindia.com</p>
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