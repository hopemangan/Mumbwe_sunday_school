<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mumbwe Sunday School Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="index.css">
 
</head>
<body>

     <!-- Dynamic Background Landing Section -->
<section class="landing">
  <div class="overlay"><br><br><br><br><br><br>
      <h1>Welcome to Mumbwe Sunday School</h1>
      <p id="background-text">Teaching children Biblical values and nurturing their spiritual growth.</p><br><br><br>
     <a href="userManagement/logins.php">
      <button class="login-button" >LOGIN</button></a>

      <!-- Images positioned on top of the background -->
      <div class="top-images">
          <div class="top-image"><img src="images/top1.png" alt="Image 1"></div>
          <div class="top-image"><img src="images/top2.png" alt="Image 2"></div>
          <div class="top-image"><img src="images/top3.png" alt="Image 3"></div>
          <div class="top-image"><img src="images/top4.png" alt="Image 3"></div>
          <div class="top-image"><img src="images/top5.png" alt="Image 3"></div>
          <div class="top-image"><img src="images/top6.png" alt="Image 3"></div>
      </div>
  </div>
</section> 

    <script>
        // Open menu
function openMenu() {
    document.getElementById('menu-window').style.display = 'block';
}

// Close menu
function closeMenu() {
    document.getElementById('menu-window').style.display = 'none';
}

// Background images and texts
const imageDirectory = 'images/'; // Change to new directory if needed

const backgrounds = [
    { url:  imageDirectory + 'background1.jpg', text: 'Teaching children Biblical values and nurturing their spiritual growth.' },
    { url:  imageDirectory + 'background2.jpg', text: 'Creating a community of young believers growing in faith.' },
    { url:  imageDirectory + 'background3.jpeg', text: 'Instilling moral and ethical values in the next generation.' },
  ];
  
  let currentBackgroundIndex = 0;
  const landingSection = document.querySelector('.landing');
  const backgroundText = document.getElementById('background-text');
  
  // Function to change the background image and text
  function changeBackground() {
    currentBackgroundIndex = (currentBackgroundIndex + 1) % backgrounds.length;
    landingSection.style.backgroundImage = `url('${backgrounds[currentBackgroundIndex].url}')`;
    backgroundText.textContent = backgrounds[currentBackgroundIndex].text;
  }
  
  // Change background every 3 seconds
  setInterval(changeBackground, 3000);

   
   
    </script>
</body>
</html>
