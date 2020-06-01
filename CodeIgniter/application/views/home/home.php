
    <div class="container">
      <div
        class="nav-wrapper"
        style="background-image: url(Images/CeilInn5.jpg);"
      >
        <div class="left-side">
          <div class="nav-link-wrapper">
            <a href="home">Home</a>
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

        <div class="right-side">
          <div class="brand">
            <div><img src="images/LogoMakr_3pZ3Ez.png" alt="" /></div>
          </div>
        </div>
      </div>

      <div class="content-wrapper">
        <div class="portfolio-items-wrapper">
          <div class="portfolio-item-wrapper">
            <div
              class="portfolio-img-background"
              style="background-image: url(Images/CeilInn2.jpg);"
            ></div>
            <div class="img-text-wrapper">
              <div class="logo-wrapper">
                <img src="#" alt="" />
              </div>
              <div class="subtitle">
                <a href="About.html"
                  >You will find comfort and convenience at the Ceil Inn</a
                >
              </div>
            </div>
          </div>
          <div class="portfolio-item-wrapper">
            <div
              class="portfolio-img-background"
              style="background-image: url(Images/CeilInn.jpg);"
            ></div>
            <div class="img-text-wrapper">
              <div class="subtitle">
                <a href="Booking.php">Book a Room With Us Today</a>
              </div>
            </div>
          </div>
          <div class="portfolio-item-wrapper">
            <div
              class="portfolio-img-background"
              style="background-image: url(Images/Employees.jpg);"
            ></div>
            <div class="img-text-wrapper">
              <div class="subtitle">
                <a href="Employees.php">Employees</a>
              </div>
            </div>
          </div>
          <div class="portfolio-item-wrapper">
            <div
              class="portfolio-img-background"
              style="background-image: url(Images/CeilHood.jpg);"
            ></div>
            <div class="img-text-wrapper">
              <div class="subtitle">
                <a href="#">Destinations</a>
              </div>
            </div>
          </div>
          <div class="portfolio-item-wrapper">
            <div
              class="portfolio-img-background"
              style="background-image: url(Images/CeilWind.jpg);"
            ></div>
            <div class="img-text-wrapper">
              <div class="subtitle">
                World Famous Watersports
              </div>
            </div>
          </div>
          <div class="portfolio-item-wrapper">
            <div
              class="portfolio-img-background"
              style="background-image: url(Images/bedroom.jpg);"
            ></div>
            <div class="img-text-wrapper">
              <div class="logo-wrapper">
                <img src="Images/LogoMakr_9Bv3nz.png" alt="" />
              </div>
              <div class="subtitle">
                <a href="Rooms.php">Chec Out Our Luxurious Rooms</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <footer
        class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge"
        style="margin-top: 128px;"
      >
        <p>
          Contact
        </p>
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
      </footer>
    </div>
  </body>
  <script>
    const portfolioItems = document.querySelectorAll(".portfolio-item-wrapper");

    portfolioItems.forEach((portfolioItem) => {
      portfolioItem.addEventListener("mouseover", () => {
        portfolioItem.childNodes[1].classList.add("img-darken");
      });
      portfolioItem.addEventListener("mouseout", () => {
        portfolioItem.childNodes[1].classList.remove("img-darken");
      });
    });
  </script>