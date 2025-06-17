  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
   <style>
      /* footer */
    .footer {
      width: 100%;
      border-radius: 20px 20px 0px 0px;
      background: rgb(26, 26, 26);
      padding: 40px 20px;
      font-family: sans-serif;
      color: white;
      border-top: 1px solid #eee;
      margin-top: 20px;
    }

    .footer-top {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 40px;
      margin: auto;
    }

    .footer-brand {
      width: fit-content;
    }

    .footer-brand h2.logo {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .footer-brand p {
      margin-bottom: 20px;
      font-size: 15px;
      color: white;
    }

    .subscribe-form {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .subscribe-form input {
      padding: 10px 15px;
      border: 1px solid #ccc;
      border-radius: 25px;
      flex: 1 1 200px;
    }

    .subscribe-form button {
      padding: 10px 20px;
      background-color: #111;
      color: white;
      border: none;
      border-radius: 25px;
      cursor: pointer;
    }

    .footer-links {
      display: flex;
      gap: 60px;
      width: fit-content;
      flex-wrap: wrap;
    }

    .footer-links h4 {
      margin-bottom: 10px;
      font-size: 16px;
    }

    .footer-links ul {
      list-style: none;
      padding: 0;
    }

    .footer-links li {
      margin-bottom: 8px;
    }

    .footer-links a {
      text-decoration: none;
      color: white;
      font-size: 14px;
    }

    .footer-links a:hover {
      color: #000;
    }

    .footer-bottom {
      border-top: 1px solid #eee;
      padding-top: 20px;
      margin-top: 40px;
      text-align: center;
      font-size: 14px;
      color: white;
    }

    .social-icons {
      margin-top: 10px;
    }

    .social-icons a {
      margin: 0 5px;
      display: inline-block;
    }

    .social-icons img {
      width: 24px;
      height: 24px;
    }

    @media(max-width: 768px){
         /* footer */
      .footer-top {
        flex-direction: column;
        gap: 30px;
      }
      .footer-brand{
        width: 100%;
      }

      .footer-links {
        flex-direction: column;
        gap: 20px;
      }

      .subscribe-form {
        flex-direction: column;
        align-items: flex-start;
      }

      .subscribe-form input,
      .subscribe-form button {
        width: 100%;
      }

      .footer-bottom {
        font-size: 13px;
      }

    }
  </style>
  <body>

    <!-- footer -->
  <footer class="footer">
    <div class="footer-top">
      <div class="footer-brand">
        <h2 class="logo">SMK NURUL IMAN</h2>
        <p>Sekolah yang berada di jakarta timur</p>
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.749624399586!2d106.827153!3d-6.175110!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3eec04c3a15%3A0x3bb292e6c3c40d98!2sMonas!5e0!3m2!1sen!2sid!4v1625498754578!5m2!1sen!2sid"
        width="100%"
        height="200"
        style="border:0;"
        allowfullscreen=""
       loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
      </iframe>

      </div>

      <div class="footer-links">
        <div>
          <h4>Alamat</h4>
          <ul>
            <li>No. 4-a, Jalan Pisangan Baru Timur 13110 Jakarta Timur Dki Jakarta </li>
          </ul>
        </div>
        <div>
          <h4>About servic</h4>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">How it Works</a></li>
            <li><a href="#">Testimony</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Services</a></li>
          </ul>
        </div>
        <div>
          <h4>Contact</h4>
          <ul>
            <li><a href="https://wa.link/2gtwh1">Contact Us</a></li>
            <li><a href="#">Office Location</a></li>
            <li><a href="#">Privacy & Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; dejez30 Copyright 2025. All Rights Reserved.</p>
      <div class="social-icons">
        <a href="#"><img src="https://cdn-icons-png.flaticon.com/24/733/733547.png" alt="Facebook" /></a>
        <a href="#"><img src="https://cdn-icons-png.flaticon.com/24/733/733579.png" alt="Twitter" /></a>
        <a href="#"><img src="https://cdn-icons-png.flaticon.com/24/2111/2111463.png" alt="Instagram" /></a>
      </div>
    </div>
  </footer>
    
  </body>
  </html>
 
  