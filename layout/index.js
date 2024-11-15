// Open menu
function openMenu() {
    document.getElementById('menu-window').style.display = 'block';
}

document.addEventListener("DOMContentLoaded", () => {
  document.querySelector("#class-modal").addEventListener('click', () =>{
    document.querySelector(".change-class").style.display = "unset"
  })

})


// Close menu
function closeMenu() {
    document.getElementById('menu-window').style.display = 'none';
    document.querySelector(".change-class").style.display = "none"
 
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

   
   