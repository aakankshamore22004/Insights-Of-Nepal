<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - Travel Nepal</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f3f3;
      margin: 0;
      padding: 0;
    }

    .contact-section {
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    h2, h3 {
      text-align: center;
      color: #2c3e50;
    }

    .owner-details p {
      margin: 8px 0;
      font-size: 16px;
    }

    form {
      display: flex;
      flex-direction: column;
      margin-top: 20px;
    }

    label {
      margin-top: 10px;
      font-weight: bold;
    }

    input, textarea {
      padding: 10px;
      font-size: 16px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      margin-top: 20px;
      padding: 10px;
      font-size: 18px;
      background-color: #2980b9;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #1c5980;
    }

    .map-container, .social-icons, .whatsapp-button {
      text-align: center;
      margin-top: 30px;
    }

    .social-icons img {
      margin: 0 10px;
      transition: transform 0.2s;
    }

    .social-icons img:hover {
      transform: scale(1.2);
    }

    .whatsapp-button a {
      display: inline-block;
      background-color: #25D366;
      color: white;
      padding: 12px 20px;
      border-radius: 25px;
      text-decoration: none;
      font-size: 18px;
    }

    .whatsapp-button a:hover {
      background-color: #1ebe57;
    }
  </style>
</head>
<body>
  <div class="contact-section">
    <h2>Contact the Tour Operator</h2>
    
    <div class="owner-details">
      <p><strong>Owner Name:</strong> Aakanksha More</p>
      <p><strong>Phone:</strong> +977 986-7537352</p>
      <p><strong>Email:</strong> tourtravelnepal@gmail.com</p>
      <p><strong>Office Location:</strong> Lakeside, Pokhara, Nepal</p>
    </div>

    <form action="mailto:info@travelnepal.com" method="post" enctype="text/plain">
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name" required />

      <label for="email">Your Email:</label>
      <input type="email" id="email" name="email" required />

      <label for="message">Your Message:</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit">Send Message</button>
    </form>

    <div class="whatsapp-button">
      <a href="https://wa.me/+977 986-7537352" target="_blank">💬 Chat with us on WhatsApp</a>
    </div>
  </div>

  <!-- Start of Tawk.to Script -->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/YOUR_PROPERTY_ID/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!-- End of Tawk.to Script -->
</body>
</html>
