<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- css -->
    <link rel="stylesheet" href="./assets/styles/styles.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="./assets/styles/responsive.css" />
    <!-- swiper -->
    <link rel="stylesheet" href="./assets/styles/swiper.min.css" />
    <!-- jquery -->
    <script src="./assets/js/jquery.js"></script>
    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header>
      <div class="header-top">
        <div class="wrapper header-other">
          <div class="social-icons">
            <div class="icon">
              <a class="link-button" href="#" target="blank" title="">
                <i class="fab fa-facebook"></i>
              </a>
            </div>

            <div class="icon">
              <a class="link-button" href="#" target="blank" title="">
                <i class="fab fa-instagram"></i>
              </a>
            </div>

            <div class="icon">
              <a class="link-button" href="#" target="blank" title="">
                <i class="fab fa-linkedin"></i>
              </a>
            </div>
          </div>

          <ul class="header-contact">
            <li>
              <div class="contact-link">
                <a class="link-button" href="mailto:rotary@ntc.net.np">
                  <i class="fas fa-envelope"></i>

                  rotary@ntc.net.np
                </a>
              </div>
            </li>

            <li>
              <div class="contact-link">
                <a class="link-button" href="tel:015355344">
                  <i class="fas fa-phone"></i>

                  015355344
                </a>
              </div>
            </li>

            <li class="button-link">
              <div class="contact-link">
                <a class="link-button" href="#"> Member Login </a>
              </div>
            </li>

            <li class="button-link">
              <div class="contact-link">
                <a class="link-button" href="#"> Event Registration </a>
              </div>
            </li>

            <li class="button-link drop-menu">
              <div class="contact-link">
                <a class="link-button" class="link-button" href="#"
                  ><i class="fas fa-user"></i> Prajwol
                </a>

                <ul class="drop-profile">
                  <li>
                    <a href="#"
                      ><button>
                        <i class="fas fa-gauge"></i> Super Admin
                      </button></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><button>
                        <i class="fas fa-user"></i> My Profile
                      </button></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><button>
                        <i class="fas fa-arrow-right-from-bracket"></i> Log Out
                      </button></a
                    >
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="nav-menu-area">
        <div class="wrapper inner">
          <a href="/">
            <div class="logo">
              <img
                src="https://rotarydistrict3292.org.np/uploads/config/1654765524-948302.jpg"
                alt="logo"
              />
            </div>
          </a>

          <ul class="nav-links">
            <li>
              <a href="#">
                <button class="nav-btn">RI District 3292</button>
              </a>
            </li>

            <li>
              <a href="#">
                <button class="nav-btn">District Governor</button>
              </a>
            </li>

            <li>
              <a href="#">
                <button class="nav-btn">DG Calendar</button>
              </a>
            </li>

            <li>
              <a href="#">
                <button class="nav-btn">Top Stories</button>
              </a>
            </li>

            <li>
              <a href="#">
                <button class="nav-btn">District Committee</button>
              </a>
            </li>

            <li class="drop-menu">
              <button class="nav-btn">
                Resources <i class="fas fa-angle-down"></i>
              </button>

              <ul class="drop-down">
                <li>
                  <a href="#">
                    <button>Rotary Club Matter</button>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <button>Downloads</button>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <button>GML</button>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                <button class="nav-btn">Clubs</button>
              </a>
            </li>
            <li>
              <a href="#">
                <button class="nav-btn">Rotarians</button>
              </a>
            </li>
          </ul>

          <div class="side-nav-btn">
            <div class="das"></div>
          </div>

          <div class="mobile-profile">
            .profile
          </div>
        </div>
      </div>
    </header>

    <!-- side menu -->
    <div class="side-nav">
      <div class="side-nav-close-btn">
        <i class="fas fa-times"></i>
      </div>

      <div class="logo">
        <a href="/">
          <img
            src="https://rotarydistrict3292.org.np/uploads/config/1654765524-948302.jpg"
            alt="logo"
          />
        </a>
      </div>

      <div class="nav-links-area">
        <ul class="nav-links">
          <li class="drop-menu">
            <button class="nav-btn">
              {data.label} <i class="fas fa-angle-down"></i>
            </button>

            <div class="drop-down-area">
              <ul class="drop-down">
                <li key="{idx}">
                  <a href="#">
                    <button>{subMenu?.label}</button>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="{data?.url}">
              <button class="nav-btn">{data.label}</button>
            </a>
          </li>

          <li class="drop-menu">
            <button class="nav-btn">
              {data.label} <i class="fas fa-angle-down"></i>
            </button>

            <div class="drop-down-area">
              <ul class="drop-down">
                <li key="{idx}">
                  <a href="#">
                    <button>{subMenu?.label}</button>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="{data?.url}">
              <button class="nav-btn">{data.label}</button>
            </a>
          </li>

          <li class="drop-menu">
            <button class="nav-btn">
              {data.label} <i class="fas fa-angle-down"></i>
            </button>

            <div class="drop-down-area">
              <ul class="drop-down">
                <li key="{idx}">
                  <a href="#">
                    <button>{subMenu?.label}</button>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="{data?.url}">
              <button class="nav-btn">{data.label}</button>
            </a>
          </li>
        </ul>

        <div class="button-group">
          <a href="#">
            <button>Event Registration</button>
          </a>

          <a href="#">
            <button>Member Login</button>
          </a>
        </div>
      </div>
    </div>

    <!-- banner-start -->
    <div class="slide-banner">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img
              src="https://radiustheme.com/demo/html/neeon/media/gallery/video-gallery-bg_1.jpg"
              alt="image"
            />
            <div class="main">
              <div class="content">
                <h1>Adventure begins here</h1>
                <div class="button">
                  <a href="#" class="read-more-btn">Read More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <img
              src="https://radiustheme.com/demo/html/neeon/media/gallery/video-gallery-bg_2.jpg"
              alt="image"
            />
            <div class="main">
              <div class="content">
                <h1>the best outside time</h1>
                <div class="button">
                  <a href="#" class="read-more-btn">Read More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <img
              src="https://radiustheme.com/demo/html/neeon/media/gallery/video-gallery-bg_3.jpg"
              alt="image"
            />
            <div class="main">
              <div class="content">
                <h1>Hiking is the true answer</h1>
                <div class="button">
                  <a href="#" class="read-more-btn">Read More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <img
              src="https://radiustheme.com/demo/html/neeon/media/gallery/video-gallery-bg_4.jpg"
              alt="image"
            />
            <div class="main">
              <div class="content">
                <h1>the peace of moutains</h1>
                <div class="button">
                  <a href="#" class="read-more-btn">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <!-- banner-end -->

    <!-- governer-monthly-letter-start -->
    <section class="bg governer-monthly-letter">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="governer-section">
              <div class="image-area">
                <img
                  src="https://rotarydistrict3292.org.np/frontend/img/news/1656608031-709480.jpg"
                  alt=""
                />

                <div class="de-name-area">
                  <h4>Rajendra Prasad Dhoju</h4>
                  <p>District Governor (2023-2024)</p>
                </div>
              </div>
              <div class="content">
                <div class="row">
                  <div class="col-lg-5"></div>
                  <div class="col-lg-7">
                    <h1 class="governer-title">
                      GOVERNOR'S <br />
                      MONTHLY LETTER
                    </h1>

                    <div class="message-area">
                      <p>
                        Dear Fellow Rotarians, Rotaractors, and Interactors,
                      </p>

                      <p>
                        I am truly privileged to witness the remarkable
                        dedication and activity among Rotarians across our
                        district. The positive energy, aspirations, and
                        initiatives I’ve seen in clubs, members, and district
                        teams have been nothing short of inspiring.
                      </p>

                      <p>
                        <b
                          >September, dedicated to ‘Basic Education and Literacy
                          Month’ in Rotary, has seen a series of marvelous
                          events and activities. Recognizing that the future of
                          our children hinges on the quality of education they
                          receive, as well as the nurturing environment and the
                          dedication of teachers in the classroom, we, as
                          Rotarians, stand ready to contribute with utmost
                          dedication.</b
                        >
                      </p>
                    </div>

                    <div class="view-all-button-area button-left">
                      <button class="view-all-button">Read More</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- governer-monthly-letter-end -->

    <!-- teams-section-start -->
    <section>
      <div class="teams-section">
        <div class="title">
          <h4>TOP STORIES</h4>
          <h2>DISTRICT 3292 | TOP STORIES</h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="list">
                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="item">
                        <div class="image-area">
                          <img
                            src="https://rotarydistrict3292.org.np/frontend/img/news/1656608031-709480.jpg"
                            alt="..."
                          />
                        </div>

                        <div class="content">
                          <ul>
                            <li class="phone">{data.designation}</li>
                          </ul>
                          <div class="name">{data.name}</div>

                          <ul class="social-media">
                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-linkedin"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-instagram"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-facebook"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#">
                                <i class="fas fa-envelope"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="item">
                        <div class="image-area">
                          <img
                            src="https://rotarydistrict3292.org.np/frontend/img/news/1688808827-672272.png"
                            alt="..."
                          />
                        </div>

                        <div class="content">
                          <ul>
                            <li class="phone">{data.designation}</li>
                          </ul>
                          <div class="name">{data.name}</div>

                          <ul class="social-media">
                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-linkedin"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-instagram"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-facebook"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#">
                                <i class="fas fa-envelope"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="item">
                        <div class="image-area">
                          <img
                            src="https://rotarydistrict3292.org.np/frontend/img/news/1688807787-430647.jpg"
                            alt="..."
                          />
                        </div>

                        <div class="content">
                          <ul>
                            <li class="phone">{data.designation}</li>
                          </ul>
                          <div class="name">{data.name}</div>

                          <ul class="social-media">
                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-linkedin"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-instagram"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-facebook"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#">
                                <i class="fas fa-envelope"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="item">
                        <div class="image-area">
                          <img
                            src="https://rotarydistrict3292.org.np/frontend/img/news/1688807527-575003.png"
                            alt="..."
                          />
                        </div>

                        <div class="content">
                          <ul>
                            <li class="phone">{data.designation}</li>
                          </ul>
                          <div class="name">{data.name}</div>

                          <ul class="social-media">
                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-linkedin"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-instagram"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-facebook"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#">
                                <i class="fas fa-envelope"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="item">
                        <div class="image-area">
                          <img
                            src="https://rotarydistrict3292.org.np/frontend/img/news/1656478750-292630.jpg"
                            alt="..."
                          />
                        </div>

                        <div class="content">
                          <ul>
                            <li class="phone">{data.designation}</li>
                          </ul>
                          <div class="name">{data.name}</div>

                          <ul class="social-media">
                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-linkedin"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-instagram"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-facebook"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#">
                                <i class="fas fa-envelope"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="item">
                        <div class="image-area">
                          <img
                            src="https://rotarydistrict3292.org.np/frontend/img/news/1688808827-672272.png"
                            alt="..."
                          />
                        </div>

                        <div class="content">
                          <ul>
                            <li class="phone">{data.designation}</li>
                          </ul>
                          <div class="name">{data.name}</div>

                          <ul class="social-media">
                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-linkedin"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-instagram"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#" target="blank">
                                <i class="fab fa-facebook"></i>
                              </a>
                            </li>

                            <li>
                              <a href="#">
                                <i class="fas fa-envelope"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- teams-section-end -->

    <!-- Resources-start -->
    <section class="bg">
      <div class="explore-activity-sec">
        <div class="container">
          <div class="title">
            <h2>Resources</h2>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="item">
                <img
                  src="https://rotarydistrict3292.org.np/frontend/img/categories/thumb/7491654765074president-resources.jpg"
                  alt="img"
                />
                <a href="#" class="box" title="President Resources">
                  <span>President Resources</span>
                </a>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="item">
                <img
                  src="https://rotarydistrict3292.org.np/frontend/img/categories/thumb/3751654780528district_resources.jpg"
                  alt="img"
                />
                <a href="#" class="box" title="Rotary Distric 3292 Resources">
                  <span>Rotary Distric 3292 Resources</span>
                </a>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="item">
                <img
                  src="https://rotarydistrict3292.org.np/frontend/img/categories/thumb/4291654767015manual.jpg"
                  alt="img"
                />
                <a href="#" class="box" title="Menuals">
                  <span>Menuals</span>
                </a>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
              <div class="item">
                <img
                  src="https://rotarydistrict3292.org.np/frontend/img/categories/thumb/9901654767028how-to.jpg"
                  alt="img"
                />
                <a href="#" class="box" title="How To"> <span>How To</span> </a>
              </div>
            </div>
          </div>

          <div class="view-all-button-area">
            <button class="view-all-button">More Resources</button>
          </div>
        </div>
      </div>
    </section>
    <!-- Resources-end -->

    <!-- dg-calendar-start -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="dg-calendar">
              <div class="title">
                <h4>October 2023</h4>
                <h2>District Governor's Calendar</h2>
              </div>

              <div class="table-area">
                <table>
                  <thead>
                    <tr>
                      <th class="tDate">Date</th>
                      <th class="tDay">Day</th>
                      <th class="tEvent">Event</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="tDate">1</td>
                      <td class="tDay">Sunday</td>
                      <td class="tEvent">DG Visit of RC Lalitpur Midtown</td>
                    </tr>

                    <tr>
                      <td class="tDate">1</td>
                      <td class="tDay">Sunday</td>
                      <td class="tEvent">DG Visit of RC Lalitpur Midtown</td>
                    </tr>

                    <tr>
                      <td class="tDate">1</td>
                      <td class="tDay">Sunday</td>
                      <td class="tEvent">DG Visit of RC Lalitpur Midtown</td>
                    </tr>

                    <tr>
                      <td class="tDate">1</td>
                      <td class="tDay">Sunday</td>
                      <td class="tEvent">DG Visit of RC Lalitpur Midtown</td>
                    </tr>

                    <tr>
                      <td class="tDate">1</td>
                      <td class="tDay">Sunday</td>
                      <td class="tEvent">DG Visit of RC Lalitpur Midtown</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="view-all-button-area">
                <button class="view-all-button">Full Calendar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- dg-calendar-end -->

    <!-- footer-start -->
    <footer>
      <div class="wrapper">
        <OurPartnersComponent title="{title}" />

        <div class="footer-list">
          <div class="item" data-aos="fade-down">
            <a href="#">
              <div class="logo">
                <img src="./assets/images/logo.png" alt="logo" />
              </div>
            </a>

            <ul>
              <li>
                <i class="fas fa-map-marker-alt"></i>
                Rotary Bhawan, Thapathali
              </li>
              <li>
                <i class="fas fa-phone"></i>

                <a href="tel:015355344"> 015355344 </a>
              </li>
              <li>
                <i class="fas fa-envelope"></i>

                <a href="mailto:rotary@ntc.net.np"> rotary@ntc.net.np </a>
              </li>
            </ul>
          </div>

          <div class="item" data-aos="fade-down">
            <div class="f-title">Useful Links</div>

            <ul>
              <li>
                <a href="#">About Us</a>
              </li>
              <li>
                <a href="#">DG Message</a>
              </li>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
          </div>

          <div class="item" data-aos="fade-down">
            <div class="f-title">Activities</div>

            <ul>
              <li>
                <a href="#">About Us</a>
              </li>
              <li>
                <a href="#">DG Message</a>
              </li>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
          </div>

          <div class="item" data-aos="fade-down">
            <div class="f-title">Company</div>

            <ul>
              <li>
                <a href="#">About Us</a>
              </li>
              <li>
                <a href="#">DG Message</a>
              </li>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="copyright">
          <span> Copyright 2023 </span>

          <div class="download-on">
            <h4>Find us on</h4>
            <button class="download-on-button">
              <img src="./assets/images/play_store.png" alt="playstore" />
            </button>
            <button class="download-on-button">
              <img src="./assets/images/app_store.png" alt="appstore" />
            </button>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer-end -->

    <!-- swiper js -->
    <script src="./assets/js/swiper.min.js"></script>

    <script>
      var swiper = new Swiper(".slide-banner .mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        speed: 1000,
        effect: "fade",
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      var swiper = new Swiper(".teams-section .mySwiper", {
        spaceBetween: 20,
        slidesPerView: 1,
        speed: 1000,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          550: {
            slidesPerView: 2,
          },
          850: {
            slidesPerView: 3,
          },
          1200: {
            slidesPerView: 4,
          },
        },
      });
    </script>

    <script src="./assets/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
