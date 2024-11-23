
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mumbwe Sunday School Communication</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;

}
        /*zimanavigation zavutazi*/
         .nav_footer-column h3{
color: blue;
        }
        .nav_social-media a:hover{
color: blue;
        }
        
        .nav_newsletter input[type="email"]{
           
            padding: 8px;
            border: none;
            border-radius: 5px;
            width: 80%;
            max-width: 200px;
            margin-bottom: 8px;
        
        }
        .nav_newsletter button{
            padding: 5px 10px;
            border: none;
            background-color: blue;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .nav_newsletter h3{
            color: white;
        }
      .nav_newsletter button:hover{
        background-color: white;
        color: blue;
      }
      .nav_footer-column{
        margin-top: 50px;
      }
      .nav_footer-column a{
        text-decoration: none;
        color: white;
        display: inline;
        gap: 60px;
        justify-content: space-between;
      }
/* navigation*/
.navbar {
    background-color: blue;
    color: white;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
}

.brand-name {
    font-size: 1.5rem; /* Use rem for scalable font sizes */
    font-weight: bold;
}

.menu-btn {
    background-color: #333;
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px 20px;
    margin-right: 10px;
}

.menu-content ul {
    list-style-type: none;
    padding: 0;
}

.menu-content li {
    margin: 15px 0;
}

.menu-content li a {
    color: #f4f4f9;
    text-decoration: none;
    font-size: 1em;
    padding: 10px 20px;
    transition: background 0.3s;
}

.menu-content li a:hover {
    color: green;
}
.logo {
    height: 50px;
    width: auto; /* Maintain aspect ratio */
}

.login-icon {
    width: 90px;
    height: auto;
    cursor: pointer;
    margin-left: 700px;
}

        .container {
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
            background-color: transparent;

            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
        }
        .message-box {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px 0;
            height: 200px;
            overflow-y: auto;
        }
        .message {
            margin-bottom: 10px;
        }
        input, textarea, select {
            width:70%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
        table{
            width: 100%;
        }
        td{
            padding: 15px;
            text-align: center;
        }
        th{
            padding: 10px;
            background-color: grey;
            color: white;
        }
        
  /* Footer Styling */
  .footer {
    background-color: #333;
    color: white;
    padding: 40px 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    text-align: left;
}

.footer .footer-column {
    flex: 1;
    min-width: 200px;
    margin: 10px;
}

.footer .footer-column h3 {
    font-size: 20px;
    color: #f1c40f;
    margin-bottom: 15px;
}

.footer .footer-column ul {
    list-style-type: none;
    padding: 0;
}

.footer .footer-column ul li {
    margin-bottom: 10px;
}

.footer .footer-column ul li a {
    color: #ddd;
    text-decoration: none;
    font-size: 16px;
}

.footer .footer-column ul li a:hover {
    color: #f1c40f;
}

/* Social Media Links */
.footer .social-media {
    display: flex;
    gap: 15px;
    font-size: 24px;
}

.footer .social-media a {
    color: #ddd;
    text-decoration: none;
}

.footer .social-media a:hover {
    color: #f1c40f;
}

/* Newsletter Form */
.footer .newsletter input[type="email"] {
    padding: 10px;
    border: none;
    border-radius: 5px;
    width: 100%;
    max-width: 250px;
    margin-bottom: 10px;
}

.footer .newsletter button {
    padding: 10px 20px;
    border: none;
    background-color: #f1c40f;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.footer .newsletter button:hover {
    background-color: #d4a50d;
}

/* Footer Bottom */
.footer-bottom {
    text-align: center;
    color: #888;
    font-size: 14px;
    margin-top: 20px;
    border-top: 1px solid #555;
    padding-top: 10px;
}
    </style>
</head>
<body>
<?php include_once("navbar-users.php") ?>
<br><br><br>
    <!--communication  starts-->
    
    <div class="container">
<h3>Communication</h3>
        <table id="show-list">
            <tr>
                <th>Name</th>
                <th>E-mail</th>
            </tr>

            <tr id="details-guard">
                <td>Augustine</td>
                <td>cen-01-01-01@unilia.ac.mw</td>
            </tr>
        </table>
        <h2>Guardians</h2>
        <div id="guardianList"></div>
<form method="post" action="mail.php">
<h2>Send a Message</h2>
        <select name="sender" id="userRole">
            <option value="Teacher">Teacher</option>
            <option value="Admin">Admin</option>
        </select>
        <select name="recipient" id="guardianSelect">
            <option value="">Select Guardian</option>
        </select>
        <textarea id="messageContent" name="msg" placeholder="Type your message here..."></textarea><br>

        <button type="submit" name="send" id="sendMessageButton" > send the message </button>
        
        <div class="message-box" id="messageBox" ></div>
   
</form>
<?php include("mail.php");?>
 </div>

<br><br>
 <!-- Footer Section -->
 <footer class="footer">
    <!-- About Us -->
    <div class="footer-column">
        <h3>About Us</h3>
        <p>We are committed to teaching children Biblical values and nurturing their spiritual growth at Mumbwe Sunday School. Join us in fostering a brighter future.</p>
    </div>
  
    <!-- Quick Links -->
    <div class="footer-column">
        <h3>Quick Links</h3>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#team">Our Team</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
  
    <!-- Social Media -->
    <div class="footer-column">
        <h3>Follow Us</h3>
        <div class="social-media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
  
    <!-- Newsletter Subscription -->
    <div class="footer-column newsletter">
        <h3>Subscribe to Our Newsletter</h3>
        <form action="subscribe.php" method="POST">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit">Subscribe</button>
        </form>
    </div>
  </footer>
  
  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <p>&copy; 2024 Mumbwe Sunday School. All rights reserved.</p>
  </div>


    <script>
        const messageBox = document.getElementById('messageBox');
        const sendMessageButton = document.getElementById('sendMessageButton');
        const addGuardianButton = document.getElementById('addGuardianButton');
        const guardianList = document.getElementById('guardianList');
        const guardianSelect = document.getElementById('guardianSelect');

        let messages = [];
        let guardians = [];

        addGuardianButton.addEventListener('click', () => {
            const guardianName = document.getElementById('guardianName').value;
            const guardianContact = document.getElementById('guardianContact').value;

            if (guardianName && guardianContact) {
                const guardian = { name: guardianName, contact: guardianContact };
                guardians.push(guardian);
                displayGuardians();
                updateGuardianSelect();

                // Clear input fields
                document.getElementById('guardianName').value = '';
                document.getElementById('guardianContact').value = '';
            } else {
                alert('Please fill in both guardian fields.');
            }
        });

        sendMessageButton.addEventListener('click', () => {
            const role = document.getElementById('userRole').value;
            const recipient = guardianSelect.value;
            const messageContent = document.getElementById('messageContent').value;

            if (recipient && messageContent) {
                const timestamp = new Date().toLocaleString();
                const message = {
                    role,
                    recipient,
                    content: messageContent,
                    time: timestamp
                };

                messages.push(message);
                displayMessages();

                // Clear input fields
               // document.getElementById('messageContent').value = '';
            } else {
                alert('Please select a guardian and type a message.');
            }
        });

        function displayGuardians(data) {
            guardianList.innerHTML = '';
            const inputin = document.querySelector('#show-list');
            guardians.forEach((guardian, index) => {
                data = document.createElement('tr');
                data.className = 'details-guard'
                const guardianElement = document.createElement('td');
                const guardianContact = document.createElement('td')
                guardianContact.innerText = `${guardian.contact}`;
                guardianElement.innerText = `${guardian.name}`;
                //guardianList.appendChild(guardianElement);
                data.appendChild(guardianElement)
                data.appendChild(guardianContact)
               
            });
            inputin.appendChild(data)
        }

        function updateGuardianSelect() {
            guardianSelect.innerHTML = '<option value="">Select Guardian</option>';
            guardians.forEach((guardian, index) => {
                const option = document.createElement('option');
                option.value = guardian.contact; // Use contact as the value
                option.innerText = guardian.name;
                  guardianSelect.appendChild(option);
            });
        }

        function displayMessages() {
            messageBox.innerHTML = '';
            messages.forEach(message => {
                const messageElement = document.createElement('div');
                messageElement.className = 'message';
                messageElement.innerHTML = `<strong>${message.role} to ${message.recipient}:</strong> ${message.content} <em>(${message.time})</em>`;
                messageBox.appendChild(messageElement);

            });
        }
        // Open menu
function openMenu() {
    document.getElementById('menu-window').style.display = 'block';
}

// Close menu
function closeMenu() {
    document.getElementById('menu-window').style.display = 'none';
}

    </script>
</body>
</html>

