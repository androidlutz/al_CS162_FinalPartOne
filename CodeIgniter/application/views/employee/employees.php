>
  <style>
    body {
	background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
		url(Images/conference4.jpg);
	height: 100vh;
	background-size: cover;
	background-position: center;
}
  </style>
  
  <div class="nav-wrapper">
    <div class="left-side" style="display:contents">
      <div class="nav-link-wrapper">
        <a href="index">Home</a>
      </div>
  
      <div class="nav-link-wrapper">
        <a href="booking">Booking</a>
      </div>
      <div class="nav-link-wrapper">
        <a href="customers">Customers</a>
      </div>
      <div class="nav-link-wrapper">
        <a href="employees">Employees</a>
      </div>
      <div class="nav-link-wrapper">
        <a href="rooms">Rooms</a>
      </div>
    </div>
  <body>
    <div class="login-page">
      <div class="form">
        <form class="register-form" action="">
          <h2>Ceil Associate Create Profile</h2>
          <input type="text" placeholder="user name" />
          <input type="text" placeholder="password" />
          <input type="text" placeholder="PIN" />
          <button>Create</button>
          <p class="message">Already Registered? <a href="#">Login</a></p>
        </form>

        <form class="login-form">
          <h2>Ceil Associate Login</h2>

          <input type="text" placeholder="user name" />
          <input type="text" placeholder="password" />
          <button>login</button>
          <p class="message">Not Registered? <a href="#"> Register</a></p>
        </form>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
      $(".message a").click(function () {
        $("form").animate({ height: "toggle", opacity: "toggle" }, "slow");
      });
    </script>