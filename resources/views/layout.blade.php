<!DOCTYPE html>
<html lang="en">

<head>
  @section('head')
  @show
</head>


<body>
 
  @section('header')
    <header>
      <div class="bground-header-container">
        <p class="bground-header-container-text">
          We make you feel comfortable
        </p>
        <div class="container-nav">
          <nav class="container-nav-navbar">
            <div id="mobile-menu-btn">
              <div class="container-nav-navbar-mobile-menu-btn">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <div class="container-nav-navbar-content">
              <div class="container-nav-navbar-content-logo-container">
                <a href="./index.php">
                  <div class="container-nav-navbar-content-logo-container-square">
                    H
                  </div>
                </a>
                <div class="container-nav-navbar-content-logo-container-text">
                  <a href="./index.php"><span>Hotel</span> Miranda</a>
                </div>
                <div class="container-nav-navbar-content-pages">
                  <ul>
                    <li><a href="./about-us.php">About Us</a></li>
                    <li><a href="./rooms-grid.php">Rooms</a></li>
                    <li><a href="./offers.php">Offers</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="container-nav-navbar-images-container">
              <div class="container-nav-navbar-images-container-border">
                <object data="assets/icons/person_outline_black.svg" width="28"></object>
              </div>
              <div class="container-nav-navbar-images-container-border">
                <object data="assets/icons/search_black.svg" width="28"></object>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <aside class="mobile-menu mobile-menu--closed">
        <ul>
          <li><a href="./about-us.php">About Us</a></li>
          <li><a href="./rooms-grid.php">Rooms</a></li>
          <li><a href="./offers.php">Offers</a></li>
          <li><a href="./contact.php">Contact</a></li>
        </ul>
      </aside>
    </header>
  @show

  @section('content_page')
  @show

  @section('footer')
    <footer>
      <div class="footer-container">
        <div class="footer-container-info">
          <div class="footer-container-info-logo">
            <div class="footer-container-info-logo-square">H</div>
            <div class="footer-container-info-logo-text">
              <span>Hotel</span> Miranda
            </div>
          </div>
          <p class="footer-container-info-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima enim
            qui repellendus, sequi, esse minus quidem neque incidunt repudiandae
            voluptatibus quam tempora eum quo recusandae doloribus dignissimos
            fugit ad expedita.
          </p>
          <div class="footer-container-info-networks">
            <div class="bground-container">
              <div class="icon-social-networks">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.73 455.73" style="enable-background: new 0 0 455.73 455.73" xml:space="preserve">
                  <path d="M0,0v455.73h242.704V279.691h-59.33v-71.864h59.33v-60.353c0-43.893,35.582-79.475,79.475-79.475
    h62.025v64.622h-44.382c-13.947,0-25.254,11.307-25.254,25.254v49.953h68.521l-9.47,71.864h-59.051V455.73H455.73V0H0z" />
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                </svg>
              </div>
            </div>
            <div class="bground-container">
              <div class="icon-social-networks">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background: new 0 0 512.002 512.002" xml:space="preserve">
                  <path d="M500.398,94.784c-8.043,3.567-16.313,6.578-24.763,9.023c10.004-11.314,17.631-24.626,22.287-39.193
    c1.044-3.265-0.038-6.839-2.722-8.975c-2.681-2.137-6.405-2.393-9.356-0.644c-17.945,10.643-37.305,18.292-57.605,22.764
    c-20.449-19.981-48.222-31.353-76.934-31.353c-60.606,0-109.913,49.306-109.913,109.91c0,4.773,0.302,9.52,0.9,14.201
    c-75.206-6.603-145.124-43.568-193.136-102.463c-1.711-2.099-4.347-3.231-7.046-3.014c-2.7,0.211-5.127,1.734-6.491,4.075
    c-9.738,16.709-14.886,35.82-14.886,55.265c0,26.484,9.455,51.611,26.158,71.246c-5.079-1.759-10.007-3.957-14.711-6.568
    c-2.525-1.406-5.607-1.384-8.116,0.054c-2.51,1.439-4.084,4.084-4.151,6.976c-0.012,0.487-0.012,0.974-0.012,1.468
    c0,39.531,21.276,75.122,53.805,94.52c-2.795-0.279-5.587-0.684-8.362-1.214c-2.861-0.547-5.802,0.456-7.731,2.638
    c-1.932,2.18-2.572,5.219-1.681,7.994c12.04,37.591,43.039,65.24,80.514,73.67c-31.082,19.468-66.626,29.665-103.939,29.665
    c-7.786,0-15.616-0.457-23.279-1.364c-3.807-0.453-7.447,1.795-8.744,5.416c-1.297,3.622,0.078,7.66,3.316,9.736
    c47.935,30.735,103.361,46.98,160.284,46.98c111.903,0,181.907-52.769,220.926-97.037c48.657-55.199,76.562-128.261,76.562-200.451
    c0-3.016-0.046-6.061-0.139-9.097c19.197-14.463,35.724-31.967,49.173-52.085c2.043-3.055,1.822-7.094-0.545-9.906
    C507.7,94.204,503.76,93.294,500.398,94.784z" />
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                </svg>
              </div>
            </div>
            <div class="bground-container">
              <div class="icon-social-networks">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.731 455.731" style="enable-background: new 0 0 455.731 455.731" xml:space="preserve">
                  <g>
                    <rect x="0" y="0" width="455.731" height="455.731" />
                    <g>
                      <g id="XMLID_5_">
                        <g>
                          <rect x="280.887" y="131.1" style="fill: #ffffff" width="88.812" height="22.092" />
                          <path style="fill: #ffffff" d="M405.047,255.26c0,3.985-0.159,7.821-0.477,11.488H290.608h-0.265
            c-1.06,25.185,17.32,40.173,38.22,40.173c14.811,0,27.828-7.856,35.33-21.173h37.389c-10.26,37.442-40.403,53.022-75.989,53.022
            c-46.615,0-79.754-37.389-79.754-83.509s35.71-83.509,79.754-83.509S405.047,209.14,405.047,255.26z M290.343,238.868h70.254
            c-2.792-20.749-17.453-33.978-35.127-33.978C307.796,204.889,293.135,218.118,290.343,238.868z" />
                          <path style="fill: #ffffff" d="M231.842,258.795c2.872,32.034-2.872,51.917-35.569,68.045
            c-12.239,6.036-27.58,7.927-41.976,7.927H50.684V116.962c0,0,99.858,0,113.997,0s57.811,8.395,58.059,50.371
            c0.168,29.021-16.26,42.285-29.984,48.639C192.756,215.971,228.97,226.761,231.842,258.795z M185.174,268.012
            c0-30.567-34.517-29.772-34.517-29.772H98.625v59.543h52.032C150.657,297.784,185.174,298.579,185.174,268.012z
            M176.611,179.483c0-25.627-28.941-24.964-28.941-24.964H98.625v49.929h49.045C147.67,204.448,176.611,205.11,176.611,179.483z" />
                        </g>
                      </g>
                    </g>
                  </g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                </svg>
              </div>
            </div>
            <div class="bground-container">
              <div class="icon-social-networks">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455 455" style="enable-background: new 0 0 455 455" xml:space="preserve">
                  <g>
                    <path style="fill-rule: evenodd; clip-rule: evenodd" d="M246.4,204.35v-0.665c-0.136,0.223-0.324,0.446-0.442,0.665H246.4z" />
                    <path style="fill-rule: evenodd; clip-rule: evenodd" d="M0,0v455h455V0H0z M141.522,378.002H74.016V174.906h67.506V378.002z
      M107.769,147.186h-0.446C84.678,147.186,70,131.585,70,112.085c0-19.928,15.107-35.087,38.211-35.087
      c23.109,0,37.31,15.159,37.752,35.087C145.963,131.585,131.32,147.186,107.769,147.186z M385,378.002h-67.524V269.345
      c0-27.291-9.756-45.92-34.195-45.92c-18.664,0-29.755,12.543-34.641,24.693c-1.776,4.34-2.24,10.373-2.24,16.459v113.426h-67.537
      c0,0,0.905-184.043,0-203.096H246.4v28.779c8.973-13.807,24.986-33.547,60.856-33.547c44.437,0,77.744,29.02,77.744,91.398V378.002
      z" />
                  </g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                </svg>
              </div>
            </div>
            <div class="bground-container">
              <div class="icon-social-networks">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 461.001 461.001" style="enable-background: new 0 0 461.001 461.001" xml:space="preserve">
                  <g>
                    <path d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728
      c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137
      C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607
      c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z" />
                  </g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-container-services">
          <p>Services</p>
          <div class="footer-container-services-info">
            <ul>
              <li>+ Restaurant & Bar</li>
              <li>+ Swimming Pool</li>
              <li>+ Wellness & Spa</li>
              <li>+ Restaurant</li>
              <li>+ Conference Room</li>
              <li>+ Cocktail Party House</li>
            </ul>
            <ul>
              <li>+ Gaming Zone</li>
              <li>+ Marriage Party</li>
              <li>+ Party Planning</li>
              <li>+ Tour Consultancy</li>
            </ul>
          </div>
        </div>
        <div class="footer-container-contact">
          <p class="footer-container-contact-title">Contact Us</p>
          <div class="footer-container-contact-info">
            <div class="contact-method">
              <div class="contact-method-logo">
                <object data="assets/icons/phone.svg" width="60"></object>
              </div>
              <div class="contact-method-info">
                <div class="contact-method-info-title">Phone Number</div>
                <div class="contact-method-info-description">
                  +12 345 678 900
                </div>
              </div>
            </div>
            <div class="contact-method">
              <div class="contact-method-logo">
                <object data="assets/icons/mail.svg" width="60"></object>
              </div>
              <div id="mail-info-container" class="contact-method-info">
                <div class="contact-method-info-title">Email</div>
                <div class="contact-method-info-description">
                  contact@mirandahotel.com
                </div>
              </div>
            </div>
            <div class="contact-method">
              <div class="contact-method-logo">
                <object data="assets/icons/location-footer.svg" width="60"></object>
              </div>
              <div class="contact-method-info">
                <div class="contact-method-info-title">Location</div>
                <div class="contact-method-info-description">
                  Fake street 123
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bar">
        <div class="footer-bar--container">
          <div class="footer-bar-copyright">Demo by Pablo Avilés</div>
          <div class="footer-bar-info">
            Terms of use | Privacy Environmental Policy
          </div>
        </div>
      </div>
    </footer>
  @show
</body>

</html>