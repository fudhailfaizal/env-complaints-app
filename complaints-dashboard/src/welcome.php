<?php include('includes/header.php') ?>

<style>
  body, html {
    height: 100%; /* Ensure body and HTML take up full viewport height */
    margin: 0; /* Reset default margin */
    font-family: 'Playfair Display', serif; /* Set default font */
  }
  body {
    background-image: url('images/bg.jpg');
    background-size: cover;
    /* Other background properties can be added here */
    position: relative;
  }

  .custom-nav {
    width: 100%;
    height: 66px;
    background: #406A31;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
  }

  .profile {
    display: flex;
    align-items: center;
  }

  .profile a {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: white;
    margin-right: 20px; /* Adjust spacing between profile and logo */
  }

  .profile svg {
    width: 24px;
    height: 24px;
    margin-right: 8px;
  }

  .logo {
    display: flex;
    align-items: center;
  }

  .logo-title {
    color: #fff;
    font-family: 'Playfair Display', serif;
    font-size: 24px;
    font-weight: bold;
    text-align: center; /* Center-align the text */
    margin-right: 10px; /* Adjust the spacing */
  }

  .logo-icon svg {
    width: 34px;
    height: 34px;
    fill: white; /* Change the SVG color to white */
    margin-right: 10px; /* Adjust the spacing */
  }

  .hamburger {
    width: 35px;
    height: 23px;
    display: flex;
    align-items: center;
  }

  .hamburger svg {
    width: 37px;
    height: 25px;
    stroke-width: 1px;
    stroke: #FFF;
  }
  .welcome-text {
    position: absolute;
    top: 150px; /* 60px from the navbar */
    left: 50%;
    transform: translateX(-50%);
    color: #000;
    font-family: 'Playfair Display', serif;
    font-size: 64px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    text-align: center;
  }
  .welcome-text p{
    width: 635px;
    height: 36px;

    color: #000;
    text-align: center;
    font-family: Playfair Display;
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
  }
  .buttons-container {
    position: absolute;
    bottom: 100px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 0 300px; /* Adjust padding as needed */
    box-sizing: border-box;
  }

  .button {
  width: calc(25% - 15px);
  height: 265px;
  border-radius: 8px;
  background: linear-gradient(180deg, rgba(31, 30, 30, 0.60) 0%, rgba(90, 133, 75, 0.00) 100%);
  backdrop-filter: blur(10px);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 40px;
  color: white;
  cursor: pointer;
  transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease; /* Added separate transitions */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Added a subtle shadow */
}

.button:hover {
  background: linear-gradient(180deg, rgba(0, 0, 0, 0.60) 0%, rgba(0, 0, 0, 0.55) 99.99%, rgba(90, 133, 75, 0.00) 100%);
  backdrop-filter: blur(15px);
  box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); /* Adjusted shadow on hover */
  transform: scale(1.02); /* Slight scale up effect on hover */
}

.button:active {
  background: #406A31;
  backdrop-filter: blur(15px);
  transform: scale(0.98); /* Added a slight scale down effect on click */
}
</style>

<body>
  <nav class="custom-nav">
    <div class="profile">
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M20.3995 21.6L20.3998 18.0003C20.4 16.012 18.7882 14.4 16.7998 14.4H7.20056C5.2125 14.4 3.60079 16.0115 3.60056 17.9996L3.60016 21.6M15.6002 5.99999C15.6002 7.98822 13.9884 9.59999 12.0002 9.59999C10.0119 9.59999 8.40016 7.98822 8.40016 5.99999C8.40016 4.01177 10.0119 2.39999 12.0002 2.39999C13.9884 2.39999 15.6002 4.01177 15.6002 5.99999Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Profile
      </a>
    </div>
    <div class="logo">
      <div class="logo-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
          <g clip-path="url(#clip0_1236_20260)">
            <path d="M11.51 5.37997C13.51 8.19997 11.98 11.43 11.24 12.69C11.1315 12.8662 10.9858 13.0166 10.813 13.1306C10.6403 13.2446 10.4447 13.3195 10.24 13.35C8.79001 13.6 5.18001 13.88 3.24001 11.06C1.33001 8.39997 1.41001 3.71997 1.58001 1.48997C1.58672 1.32383 1.63278 1.16165 1.71442 1.0168C1.79605 0.871937 1.91092 0.748538 2.04957 0.656755C2.18822 0.564972 2.34669 0.507429 2.51193 0.488865C2.67717 0.4703 2.84445 0.491244 3.00001 0.549972C5.15001 1.16997 9.63001 2.71997 11.51 5.37997Z" stroke="#000001" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M4.77002 4.44995C7.06055 7.14922 9.07087 10.0742 10.77 13.18" stroke="#000001" stroke-linecap="round" stroke-linejoin="round"/>
          </g>
          <defs>
            <clipPath id="clip0_1236_20260">
              <rect width="14" height="14" fill="white"/>
            </clipPath>
          </defs>
        </svg>
      </div>
      <div class="logo-title">
        EcoSuite
      </div>
    </div>
    <div class="hamburger">
      <svg xmlns="http://www.w3.org/2000/svg" width="37" height="25" viewBox="0 0 37 25" fill="none">
        <path d="M1 12.5H36M1 1H36M1 24H36" stroke="white" stroke-linecap="round"/>
      </svg>
    </div>
  </nav>
  <div class="welcome-text">
    Welcome Admin
    <p>Make the world a better place, One step at a time.</p>
  </div>
  <div class="buttons-container">
    <div class="button">View Complaints</div>
    <div class="button">View Database</div>
    <div class="button">Manage User</div>
    <div class="button">Direct Database</div>
  </div>
  <div class="container">
    <div class="body">
      <!-- Your content here -->
    </div>
  </div>
</body>
