<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ App\Utils\Options::get('system_name') }}</title>

    <!-- css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/styles/styles.css')}}" />
    <!-- responsive -->
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/styles/responsive.css')}}" /> --}}
    <!-- swiper -->
    <link rel="stylesheet" href="{{asset('frontend/assets/styles/swiper.min.css')}}" />
    <!-- jquery -->
    <script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
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
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css"
  />

  <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }} ">
  <link rel="stylesheet" href="{{ asset('frontend/css/lightgallery.min.css') }} ">


  </head>
  <body>
    <header>
      @include('frontend.common.top-ribbon')
      @include('frontend.common.header')
      @include('frontend.common.sigin-modal')
  </header>

<main>

     <!-- 
    <div
      class="ads-popup"
      style="
        background-image: url(https://www.upmenu.com/wp-content/uploads/2023/05/8-restaurant-seo-online-ordering-system.gif);
      "
    >
      <div class="ads-bg"></div>

      <div class="logo-area">
        <img src="./assets/images/logo.png" alt="" />
        <h5>ADVERTISEMENT</h5>
      </div>

      <div class="ads-container">
        <button
          class="ads-close"
          onclick="closeAds()"
          title="Close Advertisement"
        >
          <i id="adsCloseButton" class="fas fa-times"></i>
          <svg
            id="adsLoading"
            xmens="http://www.w3.org/2000/svg."
            version="1.1"
            width="160px"
            height="160px"
          >
            <defs>
              <linearGradient id="GradientColor">
                <stop offset="0%" stop-color="#DA22FF" />
                <stop offset="100%" stop-color="#9733EE" />
              </linearGradient>
            </defs>
            <circle cx="80" cy="80" r="20" stroke-linecap="round" />
          </svg>

          <div class="countdown-container">
            <div id="countdown">5</div>
          </div>
        </button>

        <div class="inner-container">
        

          <div class="big-image-ads">
            <img
              src="https://www.upmenu.com/wp-content/uploads/2023/05/8-restaurant-seo-online-ordering-system.gif"
              alt=""
            />
          </div>
        </div>
      </div>
    </div> -->

      <div class="ads-banners">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <div class="content">
                <!-- <h5 class="head">Explore top-rated attractions</h5> -->
  
                <h2 class="banner-title">
                  Let us help you <br /><span>Connecting</span> Rotarians
                </h2>
  
                <p class="desc">
                  Over more than 6000 professional from all over Nepal - Bhutan.
                </p>
  
                {{-- <form action="{{ route('filter') }}" method="GET">
                  <div class="search-box">
                      <div class="group">
                          <select name="chooseCategory" id="chooseCategory">
                              <option value="">Choose Rotary Business</option>
                              @foreach($classifications as $classification)
                                  <option value="{{ $classification->id }}">{{ $classification->name }}</option>
                              @endforeach
                          </select>
                      </div>
              
                      <button type="submit" class="submit">
                          <i class="fas fa-search"></i>
                          Search
                      </button>
                  </div>
              </form> --}}

              <form id="filterForm" action="{{ route('filter') }}" method="GET">
                <div class="search-box">
                    <div class="group">
                        <select name="chooseCategory" id="chooseCategory">
                            <option value="">Choose Rotary Business</option>
                            @foreach($classifications as $classification)
                                <option value="{{ $classification->id }}">{{ $classification->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
              
              </div>
            </div>
  
            <div class="col-md-5">
              <div class="image">
                @if($topbannerads)
                <a href="{{ $topbannerads->url }}" target="_blank"> <!-- Assuming $topbannerads contains the ad details -->
                  <img src="{{ asset( $topbannerads->image) }}" alt="{{ $topbannerads->title }}">
                </a>
              @endif
              </div>
            </div>
          </div>
        </div>
      </div>
      @if($topads)
      <div class="ads-area-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="ads-area-banner-image">
                <a href="{{ $topads->url }}" target="_blank"> <!-- Assuming $topads contains the ad details -->
                  <img src="{{ asset( $topads->image) }}" alt="{{ $topads->title }}">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
    
  
      <section class="bg">
        <div class="ads-category-section">
          <div class="container">
            <div class="new-title">
              <div class="main-title">
                <h3>
                  Rotary <span> <div class="text">Bus</div> </span>iness
                </h3>
                <p>Classification of Rotarians in District 3292</p>
              </div>
  
              <div class="section-search">
                <form action="">
                    <div class="group">
                        <input type="search" id="categorySearch" placeholder="Search Classification Name..." />
                        <button class="icon"><i class="fas fa-search"></i></button>
                    </div>
                    
                    
                </form>
  
                {{-- <a href="#" class="view-all-button">View All </a> --}}
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">

                <div class="row" id="classificationList">
                  @foreach($classifications->take(24) as $classification)
                      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-4 filter-item">
                        <a href="{{ route('filter', ['chooseCategory' => $classification->id]) }}">
                              <div class="item">
                                  <div class="content">
                                      <h4 class="name">{{$classification->name}}</h4>
                                      <p class="total-ads">{{$classification->users->count()}}</p>
                                  </div>
                                  <div class="icon">
                                      @if($classification->image)
                                          <img src="{{ asset('classification/'.$classification->image) }}" alt="{{$classification->name}}-icon" />
                                      @else
                                          <img src="{{ asset('frontend/assets/images/buisness_default.svg') }}" alt="Default Image" />
                                      @endif
                                  </div>
                              </div>
                          </a>
                      </div>
                  @endforeach

                  
              </div>

              <div class="row">
              <div
                    class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-4 skeleton-loading-area"
                  >
                    <a href="#">
                      <div class="skeleton-loading">
                        <div class="name"></div>
                        <div class="total-ads"></div>

                        <div class="icon"></div>
                      </div>
                    </a>
                  </div>

                  <div
                    class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-4 skeleton-loading-area"
                  >
                    <a href="#">
                      <div class="skeleton-loading">
                        <div class="name"></div>
                        <div class="total-ads"></div>

                        <div class="icon"></div>
                      </div>
                    </a>
                  </div>

                  <div
                    class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-4 skeleton-loading-area"
                  >
                    <a href="#">
                      <div class="skeleton-loading">
                        <div class="name"></div>
                        <div class="total-ads"></div>

                        <div class="icon"></div>
                      </div>
                    </a>
                  </div>

                  <div
                    class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-4 skeleton-loading-area"
                  >
                    <a href="#">
                      <div class="skeleton-loading">
                        <div class="name"></div>
                        <div class="total-ads"></div>

                        <div class="icon"></div>
                      </div>
                    </a>
                  </div>
              </div>

              </div>
              <div class="col-md-4">
                <div class="ads-area-banner">
                  @if($adsright)
                  @foreach($adsright as $adright)
                  <div class="ads-area-banner-image bigAdss">
                    <a href="{{ $adright->url }}" target="_blank">
                      <img
                        src="{{ asset( $adright->image) }}"
                        alt="{{ $adright->title }}"
                      />
                    </a>
                  </div>
                  @endforeach
                  @endif     
                </div>
              </div>
            </div>
          
            
<div id="loadingPoint"></div>
            <div class="text-center">
                <button id="loadMoreButton" class="btn btn-primary">Load More</button>
            </div>
          </div>
        </div>
      </section>

      <div class="ads-area-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              @if($adsmiddle)
              <div class="ads-area-banner-image">
                <a href="{{ $adsmiddle->url }}">
                  <img
                    src="{{ asset( $adsmiddle->image) }}"
                    alt="{{ $adsmiddle->title }}"
                  />
                </a>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>

      <section>
        <div class="ads-sections">
          <div class="container">
            <div class="new-title">
              <div class="main-title">
                <h3>
                  Featu<span class="left-title"><div class="text">red</div></span>
                  Ads
                </h3>
                <p>Checkout these latest coo ads from our members</p>
              </div>
  
              <div class="section-search">
                {{-- <form action="">
                  <div class="group">
                    <input type="search" placeholder="Search..." />
                    <button class="icon"><i class="fas fa-search"></i></button>
                  </div>
                </form> --}}
  
                <a href="{{ route('allfeatures') }}" class="view-all-button">View All</a>

              </div>
            </div>
  
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="ads-area-banner longAdss">
                  @if($adscard)
                  <div class="ads-area-banner-image longAdss">
                    <a href="{{ $adscard->url }}">
                      <img
                        src="{{ asset( $adscard->image) }}"
                        alt="{{ $adscard->title }}"
                      />
                    </a>
                  </div>
                  @endif
                </div>
              </div>
  @foreach($classificationswithuser as $classwithuser)
  @foreach($classwithuser->users->take(7) as $class)
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                {{-- <a href="{{ route('detail.show', ['id' => $class->id]) }}"> --}}
                <div class="item">
                  <div class="image">
                    <div class="featured">Featured</div>
  
                    <!-- <button class="wishlist">
                      <i class="far fa-heart"></i>
                    </button> -->
  
                    <a href="{{ route('detail.show', ['id' => $class->id]) }}">
                      @php
                      $galleryImages = json_decode($class->user_details->gallery);
                      $firstImage = isset($galleryImages[0]) ? $galleryImages[0]->gallery_images : asset('frontend/img/default.png');
                  @endphp
                  
                  <img src="{{ $firstImage }}" alt="automotive-icon" />
                  

                      
                    </a>
                  </div>
  
                  <div class="content">
                    <div class="rot-info">
                      <div class="user-image">
                          <a href="{{ route('detail.show', ['id' => $class->id]) }}">
                        @if (!empty($class->user_details->buisness_image))
                        <img src="{{ asset('frontend/img/buisness/' . $class->user_details->buisness_image) }}" alt="" />
                    @else
                        <img src="{{ asset('frontend/img/default.png') }}" alt="Default Image" />
                    @endif
                    </a>
                        
                      </div>
  
                      <div class="rot-name">
                        <h3 class="name" title="{{ (isset($class)) ? \App\Utils\Helper::getUsername($class->id)['fullname'] : '' }}">{{ (isset($class)) ? \App\Utils\Helper::getUsername($class->id)['fullname'] : '' }}</h3>
                      </div>
                    </div>
  
                    <div class="heading first-heading">
                      <div class="address">
                        <i class="fas fa-map-marker-alt"></i>
                        <span title="{{$class->user_details->buisness_district}}"
                          >{{$class->user_details->buisness_district}}</span
                        >
                      </div>
  
                      <div class="cate">
                        <i class="far fa-circle-stop"></i>
                        <span
                          title="{{$classwithuser->name}}"
                        >
                        {{$classwithuser->name}}</span
                        >
                      </div>
  
                      {{-- <div class="views">
                        <i class="far fa-eye"></i>
                        <span>4000</span>
                      </div> --}}
                    </div>
  
                    <h4 class="name">
                      <a href="{{ route('detail.show', ['id' => $class->id]) }}" title="{{$class->user_details->buisness_name}}">{{$class->user_details->buisness_name}}</a>
                   
                    </h4>
  
                    <div class="item-contact-info">
                      <div class="heading other-head c-address">
                        <div class="cate">
                          <span title="{{$class->user_details->buisness_address}}">{{$class->user_details->buisness_address}}</span>
                        </div>
                      </div>
  
                      <div class="heading other-head c-phone-no">
                        <div class="cate">
                          <span>
                            <a href="tel:{{$class->user_details->buisness_phone}}" title="{{$class->user_details->buisness_phone}}">
                              {{$class->user_details->buisness_phone}}
                            </a>
                          </span>
                        </div>
                      </div>
  
                      <div class="heading other-head c-email">
                        <div class="cate">
                          <span>
                            <a
                              href="mailto:{{$class->user_details->buisness_email}}"
                              title="{{$class->user_details->buisness_email}}"
                              >{{$class->user_details->buisness_email}}</a
                            >
                          </span>
                        </div>
                      </div>
  
                      <div class="heading other-head c-web-link">
                        <div class="cate">
                          <span>
                            <a href="{{$class->user_details->buisness_url}}" title="{{$class->user_details->buisness_url}}"
                              >{{$class->user_details->buisness_url}}</a
                            >
                          </span>
                        </div>
                      </div>
                    </div>
  
                    <div class="item-contact-info open-close-time">
                      <div class="heading other-head">
                        <div class="cate">
                          <strong>Opens in 10min </strong>
                          tomorrow
                        </div>
                      </div>
                    </div>
  
                    <div class="item-footer">
                        <a href="{{ route('detail.show', ['id' => $class->id]) }}">
                      <div
                        class="club-name"
                        title="Rtn. {{ (isset($class)) ? \App\Utils\Helper::getUsername($class->id)['fullname'] : '' }} - {{$class->clubuser->name}}"
                      >
                        Rtn. {{ (isset($class)) ? \App\Utils\Helper::getUsername($class->id)['fullname'] : '' }} - {{$class->clubuser->name}}
                      </div>
                      </a>
                      {{-- <div class="rating"><span>4.5</span> (50)</div> --}}
                    </div>
                  </div>
                </div>
              {{-- </a> --}}
              </div>
              @endforeach
  @endforeach
          
            </div>
          </div>
        </div>
      </section>

      <div class="ads-area-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              @if($adsbottom)
              <div class="ads-area-banner-image">
                <a href="{{ $adsbottom->url }}">
                  <img
                    src="{{ asset( $adsbottom->image) }}"
                    alt="{{ $adsbottom->title }}"
                  />
                </a>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>

    </main>
    @include('frontend.common.footer')
    {{-- <script src="{{asset('frontend/assets/js/scripts.js')}}"></script> --}}
    <script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>

    <script>
      $(document).ready(function () {
          // Bind an event handler to the select element's change event
          $('#chooseCategory').change(function () {
              // Trigger the form submission
              $('#filterForm').submit();
          });
      });
    </script>
    <script>
      $(document).ready(function () {
      $("#chooseCategory").select2();
      $("#chooseLocation").select2();

      
      $("#categorySearch").on("keyup", function () {
        const searchKeyword = $(this).val().toLowerCase();
        $("#classificationList .filter-item").each(function () {
          const classificationName = $(this).find(".name").text().toLowerCase();
          if (classificationName.includes(searchKeyword)) {
              $(this).show(); // Show the item
          } else {
              $(this).hide(); // Hide the item
          }
        });
      });

      // Define a variable to track the skip value
      let skip = 24; // Number of classifications already displayed
      let isLoading = false;

      const loadingPoint = document.getElementById("loadingPoint");

      window.addEventListener("scroll", (e) => {
        if (window.scrollY - 20 > loadingPoint.offsetTop) {
          console.log("load");
        }
      });

      const fetchMoreData = () => {
        if (isLoading) return;

        const baseUrl = "{{ config('app.url') }}";
        const dataContainer = document.getElementById('classificationList');
        const loadingInfos = document.querySelectorAll('.skeleton-loading-area');

        function isNearBottom() {
          const lastClassification = dataContainer.lastElementChild;
          const bounding = lastClassification.getBoundingClientRect();
          return bounding.top <= window.innerHeight;
        }

        const fetchMoreClassifications = () => {
          isLoading = true;
          loadingInfos.forEach((loadingInfo) => {
            loadingInfo.style.display = 'block';
          })
          setTimeout(() => {
            
            fetch('{{ route('load.more.classifications') }}?skip=' + skip)
              .then(response => response.json())
              .then(data => {
                if (data.classifications.length > 0) {
                  // Generate HTML for new classifications and append it
                  data.classifications.forEach(classification => {
                    const newClassificationHTML = `
                      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-4 filter-item">
                        <a
                          href="{{ route('filter', ['chooseCategory' => $classification->id]) }}"
                        >
                          <div class="item">
                            <div class="content">
                              <h4 class="name">${classification.name}</h4>
                              <p class="total-ads">${classification.users.length}</p>
                              <!-- Use 'length' to count users in an array -->
                            </div>
                            <div class="icon">
                              ${classification.image ? `<img
                                src="${baseUrl}/classification/${classification.image}"
                                alt="${classification.name}-icon"
                              />` : `<img
                                src="${baseUrl}/frontend/assets/images/buisness_default.svg"
                                alt="Default image"
                              />`}
                            </div>
                          </div>
                        </a>
                      </div>
                    `;
                    $('#classificationList').append(newClassificationHTML);
                  });
    
                  skip += data.classifications.length;
                } else {
                  window.removeEventListener('scroll', throttledScroll);
                  console.log('removed')
                  return true
                }
    
                isLoading = false;
                loadingInfos.forEach((loadingInfo) => {
                  loadingInfo.style.display = 'none';
                })
              })
                .catch(error => console.error(error));
              }, 1000);
            };

          const throttledScroll = _.throttle(() => {
            if (isNearBottom()) {
              fetchMoreClassifications();
            }
          }, 500); // Adjust the throttle time (500 milliseconds in this case)

          window.addEventListener('scroll', throttledScroll);
            fetchMoreClassifications();
          }
          // fetchMoreData()
        });

    </script>
  
    <script>
        var swiper = new Swiper(".ads-section .mySwiper", {
          spaceBetween: 10,
          slidesPerView: 1,
          loop: true,
          speed: 600,
          autoplay: {
            delay: 4000,
            disableOnInteraction: false,
          },
          navigation: {
            nextEl: ".slide-button-next",
            prevEl: ".slide-button-prev",
          },
          breakpoints: {
            550: {
              spaceBetween: 10,
              slidesPerView: 2,
            },
            850: {
              spaceBetween: 10,
              slidesPerView: 3,
            },
            1200: {
              spaceBetween: 10,
              slidesPerView: 4,
            },
          },
        });
  
        const adsPopup = document.querySelector(".ads-popup");
        const countdownElement = document.getElementById("countdown");
        const adsClose = document.getElementById("adsCloseButton");
        const adsLoading = document.getElementById("adsLoading");
        const adsCloseButton = document.querySelector(".ads-close");
  
        const closeAds = () => {
          adsPopup.classList.remove("active");
        };

        if(adsPopup){

          setTimeout(() => {
            adsPopup.classList.add("active");
            adsLoading.classList.add("start");
            let countdown = 5;
            const countdownInterval = setInterval(() => {
              countdown--;
              countdownElement.textContent = countdown;
    
              const percentage = (countdown / 5) * 100;
    
              if (countdown === 0) {
                clearInterval(countdownInterval);
                countdownElement.style.display = "none";
                adsLoading.style.display = "none";
                adsClose.style.display = "block";
                adsCloseButton.style.pointerEvents = "all";
              }
            }, 1000);
          }, 2000);
        }
  
    </script>


    </body>
    
    </html>
    