<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mumbwe Sunday School Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href=".css">
    <style>
body{
    display: flex;
    flex-direction: column;
}
.feature-item {
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 5px;
  
}
/* Center Contact Form */
.contact .contact-form {
    display: flex;
    flex-direction: column;
    max-width: 500px;
    margin: 0 auto;
    gap: 10px;
}

.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.submit-button {
    background-color: #4f3a6f;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

/* Learn More Link Styling */
.learn-more-link {
    display: inline-block;
    margin-top: 8px;
    padding: 5px 10px;
    background-color: #4f3a6f;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px;
    transition: background-color 0.3s;
}

.learn-more-link:hover {
    background-color: #3b2b53;
}
/* Contact Section Styling */
.contact-section {
    background-color: #f4f4f9;
    padding: 50px 20px;
    color: #333;
    text-align: center;
}

.contact-section h2 {
    font-size: 32px;
    color: #007BFF;
    margin-bottom: 10px;
}

.contact-section p {
    font-size: 18px;
    margin-bottom: 30px;
    color: #666;
}

.contact-container {
    display: flex;
    justify-content: center;
    gap: 50px;
    flex-wrap: wrap;
}

.contact-info, .contact-form {
    max-width: 400px;
    flex: 1;
}

/* Contact Info Styling */
.contact-info h3 {
    font-size: 20px;
    margin-bottom: 15px;
    color: #007BFF;
}

.contact-info p {
    font-size: 16px;
    color: #555;
}
 /* Gallery Styles */
 .gallery {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 15px;
    padding: 20px;
    background-color: #f7f7f7;
    max-width: 1000px;
    margin: 0 auto;
}

.gallery-item {
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.gallery-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-item:hover img {
    transform: scale(1.05);
}

/* Navigation Buttons */
.gallery-controls {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto;
}

.gallery-controls button {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    background-color: #007BFF;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
}

.gallery-controls button:disabled {
    background-color: #cccccc;
    cursor: not-allowed;
}
/* Team Section Styling */
.team-section {
    background-color: #f9f9f9;
    padding: 50px 20px;
    text-align: center;
    color: #333;
}

.team-section h2 {
    font-size: 32px;
    margin-bottom: 10px;
    color: #007BFF;
}

.team-section p {
    font-size: 18px;
    margin: 10px auto 30px;
    max-width: 800px;
    color: #555;
}

.team-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.team-card {
    background-color: #ffffff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 20px;
    width: 250px;
    text-align: center;
}

.team-image {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
}

.team-name {
    font-size: 20px;
    font-weight: bold;
    color: #333;
}

.team-role {
    font-size: 16px;
    color: #007BFF;
    margin-bottom: 10px;
}

.team-bio {
    font-size: 14px;
    color: #666;
}
/* Contact Form Styling */
.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.contact-form button {
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.contact-form button:hover {
    background-color: #0056b3;
}

.modal-content {
    margin: 15% auto; 
    padding: 20px;
    border-radius: 5px;
    width: 80%; 
    max-width: 500px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}


.features h2{
    color: blue;
}
    
    .feature-item {
        border: 1px solid #ddd; 
        border-radius: 5px;
        background-color: #fff; 
        text-align: center;
        cursor: pointer;
    }
    .main-containers{
        width: 80%;
        margin-left:  19%;
        box-shadow: 3px 5px 15px rgba(0,0,0,0.7);
        padding: 20px;
    }
    .learn-more-link {
        display: inline-block;
        margin-top: 10px;
        color: #007BFF; 
        text-decoration: none;
    }

    .learn-more-link:hover {
        text-decoration: underline; 
    }

   
    .feature-item:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
        transition: all 0.3s ease-in-out;
    }

 
    @media (max-width: 1024px) {
        .feature-list {
            flex-wrap: wrap;
        }
    }

    @media (max-width: 768px) {
        .feature-item {
            width: 90%;
            margin-bottom: 20px;
        }
    }

</style>
    </style>
</head>
<body>
<?php include_once("navbar-users.php"); ?>

   <!-- Features Quick Recap Section -->
    <br><br><br>
<div class="main-containers">
  
  <section id="features" class="features">
      <h3 style="text-align: center; margin-bottom: 30px; color: #007BFF; font-size: 32px;">Our Features</h3>
      <div class="feature-list" style="display: flex; gap: 10px;">
          <!-- Card 1 -->
        
          <div class="feature-item" style="background: #f9f9f9; border-radius: 8px; padding: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width:270px; text-align: center;">
              <h4>Quick & Easy Registration</h4>
              <p>Enroll children in Sunday School quickly with our easy-to-use registration process.</p>
              <a href="registration.html" class="learn-more-link" style="color: #007BFF; text-decoration: none; font-weight: bold;">Learn More</a>
          </div> 

          <!-- Card 2 -->
          <div class="feature-item" style="background: #f9f9f9; border-radius: 8px; padding: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width:270px; text-align: center;">
              <h4>Dynamic Curriculum</h4>
              <p>Engage children with a structured and flexible curriculum tailored for every age group.</p>
              <a href="#curriculum" class="learn-more-link" style="color: #007BFF; text-decoration: none; font-weight: bold;">Learn More</a>
          </div>

          <!-- Card 2 -->
          <div class="feature-item" style="background: #f9f9f9; border-radius: 8px; padding: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width:270px; text-align: center;">
              <h4>Attendance Tracking</h4>
              <p>Keep track of student attendance seamlessly, allowing you to monitor engagement and progress.</p>
              <a href="#attendance" class="learn-more-link" style="color: #007BFF; text-decoration: none; font-weight: bold;">Learn More</a>
          </div>

          <!-- Card 4 -->
          <div class="feature-item" style="background: #f9f9f9; border-radius: 8px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width:270px; text-align: center;">
              <h4>Report Generation</h4>
              <p>Generate detailed reports on student progress, attendance, and class performance.</p>
              <a href="#reports" class="learn-more-link" style="color: #007BFF; text-decoration: none; font-weight: bold;">Learn More</a>
          </div>
      </div>
</section>
<!-- Team Section -->
<section class="team-section" id="team">
  <h2>Meet Our Team</h2>
  <p>Our dedicated team is committed to nurturing faith, integrity, and compassion in every child.</p>

  <div class="team-grid">
      <!-- Team Member 1 -->
      <div class="team-card">
          <img src="images/team1.jpeg" alt="Team Member 1" class="team-image">
          <h3 class="team-name">Hope Mangan</h3>
          <p class="team-role">Director</p>
          <p class="team-bio">Hope has over 15 years of experience in children’s ministry, with a passion for helping kids grow spiritually.</p>
      </div>

      <!-- Team Member 2 -->
      <div class="team-card">
          <img src="images/team2.jpeg" alt="Team Member 2" class="team-image">
          <h3 class="team-name">Gondwe boogey</h3>
          <p class="team-role">Curriculum Developer</p>
          <p class="team-bio">Gondwe creates engaging, faith-based curricula tailored to each age group to inspire young hearts and minds.</p>
      </div>

      <!-- Team Member 3 -->
      <div class="team-card">
          <img src="images/team3.jpg" alt="Team Member 3" class="team-image">
          <h3 class="team-name">Jusabro Plug</h3>
          <p class="team-role">Volunteer Coordinator</p>
          <p class="team-bio">Jusabro brings together a community of volunteers, fostering a supportive and inclusive environment for all.</p>
      </div>

      <!-- Team Member 4 -->
      <div class="team-card">
          <img src="images/team4.jpg" alt="Team Member 4" class="team-image">
          <h3 class="team-name">Taddie chia</h3>
          <p class="team-role">Youth Mentor</p>
          <p class="team-bio">Taaddie connects with children on a personal level, guiding them on their journey of faith with compassion.</p>
      </div>
  </div>
</section>
  <!-- Contact Section -->
<section class="contact-section" id="contact">
  <h2>Contact Us</h2>
  <p>We’d love to hear from you! Reach out with any questions or comments.</p>

  <div class="contact-container">
      <!-- Contact Information -->
      <div class="contact-info">
          <h3>Our Address</h3>
          <p>near university, Khondowe<br>Rumphi, Malawi</p>

          <h3>Email Us</h3>
          <p>info@mumbwesundayschool.com</p>

          <h3>Call Us</h3>
          <p>997</p>
      </div>

      <!-- Contact Form -->
      <div class="contact-form">
          <form action="" method="POST">
              <input type="text" name="name" placeholder="Your Name" required>
              <input type="email" name="email" placeholder="Your Email" required>
              <input type="text" name="subject" placeholder="Subject">
              <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
              <button type="submit">Send Message</button>
          </form>
      </div>
  </div>
</section>
<!-- Gallery Section -->
<section id="gallery">
  <h2 style="text-align: center;">Gallery</h2>
  <div class="gallery" id="gallery-items">
      <!-- Images will be inserted here by JavaScript -->
  </div>
  <div class="gallery-controls">
      <button onclick="previousPage()" id="prev-btn" disabled>Previous</button>
      <button onclick="nextPage()" id="next-btn">Next</button>
  </div>
</section><br><br>

</div>
  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <p>&copy; 2024 Mumbwe Sunday School. All rights reserved.</p>
  </div>
  
  <script>
    const images = [
        'images/image1.jpeg', 'images/image2.jpg', 'images/image3.jpeg', 'images/image4.jpeg',
        'images/image5.jpg', 'images/background1.jpg', 'images/background2.jpg', 'images/background3.jpeg',
        'images/image3.jpeg', 'images/team1.jpeg', 'images/team2.jpeg', 'images/team3.jpg'
    ];
  
    const itemsPerPage = 8; // Display 8 images at a time
    let currentPage = 0;
  
    // Function to display images on the current page
    function displayGallery() {
        const galleryItems = document.getElementById('gallery-items');
        galleryItems.innerHTML = ''; // Clear existing images
        const start = currentPage * itemsPerPage;
        const end = start + itemsPerPage;
        const currentImages = images.slice(start, end);
  
        currentImages.forEach(src => {
            const imgDiv = document.createElement('div');
            imgDiv.classList.add('gallery-item');
            imgDiv.innerHTML = `<img src="${src}" alt="Gallery Image">`;
            galleryItems.appendChild(imgDiv);
        });
  
        // Enable or disable buttons based on current page
        document.getElementById('prev-btn').disabled = currentPage === 0;
        document.getElementById('next-btn').disabled = end >= images.length;
    }
  
    // Navigation functions
    function nextPage() {
        if ((currentPage + 1) * itemsPerPage < images.length) {
            currentPage++;
            displayGallery();
        }
    }
  
    function previousPage() {
        if (currentPage > 0) {
            currentPage--;
            displayGallery();
        }
    }
  
    // Initial gallery display
    displayGallery();

        // Open menu
function openMenu() {
    document.getElementById('menu-window').style.display = 'block';
}

// Close menu
function closeMenu() {
    document.getElementById('menu-window').style.display = 'none';
}

// Function to open the profile modal
function openProfileModal() {
    document.getElementById('profileModal').style.display = 'block';

    // Load existing user data (mock data in this case)
    document.getElementById('username').value = "";
    document.getElementById('email').value = "";
    document.getElementById('phone').value = "";
    document.getElementById('address').value = "";
}

// Function to close the profile modal
function closeProfileModal() {
    document.getElementById('profileModal').style.display = 'none';
}

// Function to save the profile data
function saveProfile() {
    // Get values from the form
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const address = document.getElementById('address').value;

    // Placeholder for saving logic
    console.log("Saving profile data:", { username, email, phone, address });

    // Close the modal after saving
    closeProfileModal();

    // Show a success message
    alert("Profile updated successfully!");
}

// Close the modal if clicked outside of the modal content
window.onclick = function(event) {
    const modal = document.getElementById('profileModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}

    </script>