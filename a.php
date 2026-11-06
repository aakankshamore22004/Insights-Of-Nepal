<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Explore Nepal Tours</title>
  <style>
    /* Reset & basics */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
      background: #f0f8ff;
      color: #333;
      line-height: 1.6;
    }
    a {
      color: #0275d8;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    
    /* Header */
    header {
      background: #004080;
      color: white;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    header h1 {
      font-size: 1.8rem;
    }
    nav a {
      margin-left: 20px;
      font-weight: 600;
    }
    
    /* Hero Section */
    .hero {
      background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
      height: 450px;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
      padding: 0 20px;
      text-align: center;
    }
    .hero h2 {
      font-size: 3rem;
      margin-bottom: 10px;
    }
    .hero p {
      font-size: 1.3rem;
      max-width: 600px;
    }
    
    /* Section Styles */
    section {
      padding: 40px 20px;
      max-width: 1200px;
      margin: 0 auto;
    }
    h2.section-title {
      text-align: center;
      color: #004080;
      margin-bottom: 30px;
    }
    
    /* Destinations Grid */
    .destinations {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }
    .destination-card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.15);
      transition: transform 0.3s ease;
    }
    .destination-card:hover {
      transform: scale(1.05);
    }
    .destination-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }
    .destination-card .info {
      padding: 15px;
    }
    .destination-card .info h3 {
      margin-bottom: 10px;
      color: #004080;
    }
    .destination-card .info p {
      font-size: 0.9rem;
      color: #555;
    }
    
    /* Services */
    .services-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 30px;
      text-align: center;
    }
    .service-item {
      background: white;
      padding: 30px 20px;
      border-radius: 8px;
      box-shadow: 0 1px 6px rgba(0,0,0,0.1);
      width: 220px;
      transition: box-shadow 0.3s ease;
    }
    .service-item:hover {
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    .service-item h4 {
      margin-bottom: 15px;
      color: #004080;
    }
    
    /* Contact Form */
    form {
      max-width: 500px;
      margin: 0 auto;
      background: white;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 3px 12px rgba(0,0,0,0.2);
    }
    form label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }
    form input, form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 1rem;
      font-family: inherit;
      resize: vertical;
    }
    form button {
      background: #004080;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 1rem;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    form button:hover {
      background: #0066cc;
    }
    .error {
      color: red;
      font-size: 0.85rem;
      margin-top: -10px;
      margin-bottom: 10px;
    }
    
    /* Footer */
    footer {
      background: #004080;
      color: white;
      text-align: center;
      padding: 20px 10px;
      margin-top: 40px;
    }
    
    /* Responsive tweaks */
    @media(max-width: 600px) {
      header {
        flex-direction: column;
        text-align: center;
      }
      nav {
        margin-top: 10px;
      }
      .services-list {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>Insights of Nepal </h1>
    <nav>
      <a href="#destinations">Destinations</a>
      <a href="#services">Services</a>
      <a href="#contact">Contact</a>
      <a href="http://localhost/demo/login.php">Login</a>
    </nav>
  </header>

  <section class="hero">
    <h2>Discover The Beauty of Nepal</h2>
    <p>Experience breathtaking landscapes, culture, and adventure. Plan your next journey with us.</p>
  </section>

  <section id="destinations">
    <h2 class="section-title">Popular Destinations</h2>
    <div class="destinations">
      <div class="destination-card">
        <a href="Himalayas.php">
          <img src="https://i.pinimg.com/736x/02/1b/ff/021bff44798638c0e0ce78b5aea86c0f.jpg" alt="Himalayas"/>
        </a>
        <div class="info">
          <h3>Himalayas Trek</h3>
          <p>Explore the majestic peaks of the Himalayas with guided trekking tours for all levels.</p>
        </div>
      </div>
      <div class="destination-card">
        <a href="ktm.php">
          <img src="https://i.pinimg.com/736x/e0/e5/fb/e0e5fb3e39b932aac96ae291caeda34e.jpg" alt="Kathmandu"/>
        </a>
        <div class="info">
          <h3>Kathmandu Valley</h3>
          <p>Discover rich culture, heritage sites, and bustling markets in the heart of Nepal.</p>
        </div>
      </div>
      <div class="destination-card">
        <a href="pokhara.php">
          <img src="https://i.pinimg.com/736x/9c/be/5e/9cbe5eac3c067fe6ce4087d8ad98939f.jpg" alt="Pokhara"/>
        </a>
        <div class="info">
          <h3>Pokhara Lakeside</h3>
          <p>Relax by serene lakes and enjoy adventure sports like paragliding and boating.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="services">
    <h2 class="section-title">Our Services</h2>
    <div class="services-list">
      <div class="service-item">
        <a href="tour plan.php">
        <h4>Customized Tour Plans</h4>
        <p>We design tours tailored to your preferences and interests.</p>
        </a>
      </div>
      
      <div class="service-item">
        <a href="Hotel Booking.php">
        <h4>Hotel Booking</h4>
        <p>Seamless booking services to simplify your trip planning.</p>
        </a>
      </div>
      <div class="service-item">
        <a href="contact.php">
        <h4>24/7 Support</h4>
        <p>We are available anytime to assist you during your travel.</p>
        </a>
      </div>
    </div>
  </section>

  <section id="contact">
    <h2 class="section-title">Plan Your Trip</h2>
  
    <form method="POST" action="process.php">


      <?php if ($contactSuccess): ?>
        <p class="success"><?php echo $contactSuccess; ?></p>
      <?php elseif ($contactError): ?>
        <p class="error"><?php echo $contactError; ?></p>
      <?php endif; ?>
  
      <label for="name">Full Name *</label>
      <input type="text" id="name" name="name" required />
  
      <label for="email">Email *</label>
      <input type="email" id="email" name="email" required />
  
      <label for="phone">Phone Number *</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9+ ]{7,}" required />
  
      <label for="destination">Select Destination *</label>
      <select id="destination" name="destination" required>
        <option value="">-- Choose --</option>
        <option value="Himalayas">Himalayas</option>
        <option value="Pokhara">Pokhara</option>
        <option value="Kathmandu">Kathmandu</option>
        <option value="Lumbini">Lumbini</option>
      </select>
  
      <label for="travelDate">Travel Date *</label>
      <input type="date" id="travelDate" name="travelDate" required />
  
      <label for="people">Number of Travelers *</label>
      <input type="number" id="people" name="people" min="1" max="20" required />
  
      <label for="message">Special Requests</label>
      <textarea id="message" name="message" rows="4" placeholder="Diet, preferences, conditions..." required></textarea>
  
      <button type="submit" name="contactSubmit">Submit Booking</button>
      

    </form>
  </section>
  
              <script>
                const form = document.getElementById('bookingForm');
              
                form.addEventListener('submit', function(event) {
                  event.preventDefault();
              
                  // Clear previous errors (optional: you can style errors in real app)
                  const errors = form.querySelectorAll('.error-message');
                  errors.forEach(e => e.remove());
              
                  let valid = true;
              
                  // Helper to show error message
                  function showError(input, message) {
                    const error = document.createElement('div');
                    error.className = 'error-message';
                    error.style.color = 'red';
                    error.style.fontSize = '0.85rem';
                    error.textContent = message;
                    input.insertAdjacentElement('afterend', error);
                    valid = false;
                  }
              
                  // Validate Full Name
                  const fullName = form.fullName.value.trim();
                  if (fullName.length < 3) {
                    showError(form.fullName, 'Please enter your full name (at least 3 characters).');
                  }
              
                  // Validate Email
                  const email = form.email.value.trim();
                  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                  if (!emailPattern.test(email)) {
                    showError(form.email, 'Please enter a valid email address.');
                  }
              
                  // Validate Phone
                  const phone = form.phone.value.trim();
                  const phonePattern = /^[0-9+ ]{7,}$/;
                  if (!phonePattern.test(phone)) {
                    showError(form.phone, 'Please enter a valid phone number (7+ digits).');
                  }
              
                  // Validate Destination
                  if (!form.destination.value) {
                    showError(form.destination, 'Please select a destination.');
                  }
              
                  // Validate Travel Date
                  if (!form.travelDate.value) {
                    showError(form.travelDate, 'Please select a travel date.');
                  } else {
                    // Optional: check if date is in the future
                    const today = new Date();
                    const travelDate = new Date(form.travelDate.value);
                    if (travelDate < today.setHours(0,0,0,0)) {
                      showError(form.travelDate, 'Travel date must be today or later.');
                    }
                  }
              
                  // Validate Number of Travelers
                  const people = parseInt(form.people.value);
                  if (!people || people < 1 || people > 20) {
                    showError(form.people, 'Please enter number of travelers between 1 and 20.');
                  }
              
                  if (valid) {
                    alert('Thank you! Your booking request has been submitted.');
                    form.reset();
                  }
                });
              </script>
              
          </section>
          
  </script>
</body>
</html>

