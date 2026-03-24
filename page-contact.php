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
    <!-- Contact Form    -->
    <section class="contact-section">
      <div class="contact-wrapper">
        <div class="contact-image">
          <img src="images/contact.jpg" alt="Contact WAAO India" />
        </div>

        <div class="contact-form-area">
          <h2>Contact Us</h2>

          <div class="form-group">
     <input type="text" name="name" placeholder="Your name" required>
     <small class="error"></small>
    </div>

    <div class="form-group">
     <input type="tel" name="phone" placeholder="Your phone" required>
     <small class="error"></small>
    </div>

    <div class="form-group">
    <input type="email" name="email" placeholder="Your mail" required>
    <small class="error"></small>
    </div>

    <div class="form-group">
    <textarea name="message" placeholder="Your message"></textarea>
    <small class="error"></small>
    </div>

   <input type="hidden" name="type" value="contact">

    <button type="submit">Submit Request</button>

</form>
 <p id="responseMsg"></p>
<div id="form-response"></div>
        </div>
      </div>
    </section>
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
    <!-- form validation -->
    <!-- <script>
      const form = document.getElementById("contactForm");

      form.addEventListener("submit", function (e) {
        e.preventDefault();

        let name = document.getElementById("name").value.trim();
        let email = document.getElementById("email").value.trim();
        let message = document.getElementById("message").value.trim();

        if (name === "") {
          alert("Please enter your full name.");
          return;
        }

        if (email === "") {
          alert("Please enter your email.");
          return;
        }

        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

        if (!email.match(pattern)) {
          alert("Please enter a valid email.");
          return;
        }

        if (message === "") {
          alert("Please write your message.");
          return;
        }

        alert("Thank you! Your message has been sent.");

        form.reset();
      });
    </script> -->
  <?php get_footer(); ?>