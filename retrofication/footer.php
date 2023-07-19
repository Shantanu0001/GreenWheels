<!DOCTYPE html>
<html lang="en">

<head>

    <style>

/**
* #FOOTER
*/
.footer-bottom {
margin-bottom: 0;
}



/**
* responsive larger than 1200px screen
*/

@media (min-width: 1200px) {

/**
* #REUSED STYLE 
*/

.container {
max-width: 1200px;
} 

/**
* #HEADER
*/

.desktop-menu-category-list {
gap: 45px;
}
/**
* #BLOG
*/

.blog {
margin-bottom: 50px;
}

.blog-card {
min-width: -webkit-calc(25% - 22.5px);
min-width: calc(25% - 22.5px);
}

/**
* #FOOTER
*/

footer {
padding-top: 50px;
}

.footer-category {
margin-bottom: 50px;
padding-bottom: 35px;
}

/**
* #PRODUCT
*/

.product-featured .showcase>div {
min-width: -webkit-calc(50% - 10px);
min-width: calc(50% - 10px);
}

.product-featured .display-number {
--fs-5: 1.125rem;
}

.product-grid {
-ms-grid-columns: (1fr)(4);
grid-template-columns: repeat(4, 1fr);
}

}


/**
* responsive larger than 1400px screen
*/

@media (min-width: 1400px) {

/**
* #BASE 
*/




/**
* #REUSED STYLE 
*/

.container {
max-width: 1350px;
}
}
</style>
</head>

<footer>
    <div class="row primary">
      <div class="column about">
        <h3 class="h3">Connect with us</h3>
        <!--<p>
                <i class="fa fa-map-marker" aria-hidden="true"></i>   Sienna Towers, Service Road, Bangalore
            </p>-->
        <div class="social">
          <i class="fa fa-facebook-square"></i>
          <i class="fa fa-twitter-square"></i>
          <i class="fa fa-linkedin-square"></i>
          <i class="fa fa-instagram"></i>
        </div>
      </div>

      <div class="column link">
        <h3 class="h3">Company</h3>
        <ul class="colink">
          <li class="link"><a href="/About Us.html" class="alink">About us</a></li>
          <li class="link"><a href="/Contact us.html" class="alink">Contact us</a></li>
          <li class="link"><a href="/team.html" class="alink">Team</a></li>

        </ul>
      </div>

      <div class="column subscribe">
        <h3 class="h3">Newsletter</h3>
        <div>
          <input id="email" type="email" placeholder="Your email id here" />
          <button id="sub">Subscribe</button>
        </div>
      </div>
    </div>
    <div class="row copyright">
      <div class="footer-menu">
        <a href="/FAQ.html" class="alink">F.A.Q</a>
        <a href="" class="alink">Privacy Policy</a>
        <a href="" class="alink">Terms & Conditions</a>

      </div>

      <div class="footer-bottom">

        <div class="container">

          <p class="copyright">
            Copyright &copy; <a href="#"> GreenWheels</a> all rights reserved.
          </p>

        </div>

      </div>

  </footer>