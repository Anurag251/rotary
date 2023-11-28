<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ App\Utils\Options::get('system_name') ?? null }}</title>
    <!-- css_cdn_link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend/js/jquery-3.5.1.min.js') }}"></script>
    <!-- css_link  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }} ">
</head>

<body>
    <header>
        @include('frontend.common.top-ribbon')
        @include('frontend.common.header')
        @include('frontend.common.sigin-modal')
    </header>
    <main>
        <section id="clubListingWrap" class="secGap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="sideInfo">
                            <div class="secTitle pageTit">
                                <h1>Clubs in<br> <span>{{ \App\Utils\Options::get('district') ? "RI District ".\App\Utils\Options::get('district') : '' }}</span></h1>
                            </div>
{{--                            <p>{!! $district ? $district->description :'' !!} </p>--}}
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <div class="row topFilter">
                            <div class="col-md-5 col-lg-3">
                                <div class="showingText">
                                    <p>Total Clubs - <span>{{ (isset($total_count) && $total_count) ? $total_count : "" }}</span></p>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-5 no-mar-padright">
                                <form action="{{ route('clubs.search') }}" method="get" id="search_form">
                                    @csrf
                                    <input type="hidden" name="order" value="" id="order">
                                    <div class="input-group">
                                        <input type="text" name="search" id="search" class="form-control" placeholder="Club ID,Clubs Name, President Name " required>
                                        <span class="input-group-btn">
                                            <input type=submit class="btn btn-success btn-lg" value="Search" id="form_submit">
                                        </span>
                                        <span style="color: red">{{ $errors->first('search') }}</span>
                                    </div>
                                    <div id="match-list"></div>
                            </div>
                            <div class="col-9 col-md-6 col-lg-3">
                                <div class="select"><select name="filter" id="filter">
                                        <option value="default" id="default"> Order By : (Default)</option>
                                        <option value="ASC" id="asc" {{ (isset($order) && $order && $order=='ASC' ) ? 'selected' :''  }}> Order By : (ASC)</option>
                                        <option value="DESC" id="dsc" {{ (isset($order) && $order && $order=='DESC' ) ? 'selected' :''  }}> Order By : (DESC)</option>
                                    </select></div>
                            </div>
                            <div class="col-3 col-md-6 col-lg-1 no-mar-pad">
                                <span class="input-group-btn">
                                    <input type=button class="btn btn-success btn-lg" value="Reset" id="form_submit_reset">
                                </span>
                            </div>
                            </form>
                        </div>
                        <div class="row clubsWrap" id="clubs_wrap">
                            @if(isset($clubs))

                            @forelse($clubs as $club)
                            <div class="col-6 col-md-6 col-lg-4 clubCov">
                                <a href="{{ route('clubs.details', encrypt($club->id)) }}">
                                    <div class="club">
                                        <h6> RC - {{ $club ? $club->name :'' }}</h6>
                                        @if((isset($club) && isset($club->president) && isset(\App\Utils\Helper::getUsername($club->president->user_id)['fullname'])))
                                        <p> <span>President :</span> {{ (isset($club) && isset($club->president) && isset(\App\Utils\Helper::getUsername($club->president->user_id)['fullname']))  ? \App\Utils\Helper::getUsername($club->president->user_id)['fullname'] :'' }}
                                        </p>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            @empty
                            <span style="color: red"> Nothing Found!</span>
                            @endforelse
                            @endif

                            <div class="col-sm-12">
                                <nav aria-label="page navigation listingFilter">

                                    {{ $clubs ? $clubs->withQueryString()->links() :'' }}

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


      <section>
        <div class="club-section-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="club-left-section">
                  <div class="club-title">
                    <h5>CLUBS IN</h5>
                    <h2>{{ \App\Utils\Options::get('district') ? "RI District ".\App\Utils\Options::get('district') : '' }}</h2>
                  </div>

                  <div class="club-filter mb-3">
                    <div class="club-filter-title">
                      <i class="fa-solid fa-sliders"></i>
                      Filter
                    </div>

                    <div class="input-groups">
                      <form action="{{ route('clubs.search') }}" method="get" id="search_form">
                        @csrf
                        <input type="hidden" name="order" value="" id="order">
                        <label for=""
                          ><strong>
                            Filter by Club ID, Clubs, President</strong
                          ></label
                        >

                        <div class="group">
                          <input
                            type="text"
                            placeholder="Club ID, Clubs Name, President Name..."
                            name="search"
                            id="search"
                            required
                          />
                          <button class="search-button">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>

                        <div id="match-list">
                        <div class = "card search-derails">
                   <a href = "${base_url}?&order=&search=${match.club}&filter=default"> <h6>${match.club} (${match.president})</h6></a>
                </div>
                        </div>
                      </form>

                      <hr class="mt-4" />

                      <label for=""><strong> Order By</strong></label>

                      <div class="group">
                        <select id="chooseCategory">
                          <option value="default" id="default"> Order By : (Default)</option>
                          <option value="ASC" id="asc" {{ (isset($order) && $order && $order=='ASC' ) ? 'selected' :''  }}> Order By : (ASC)</option>
                          <option value="DESC" id="dsc" {{ (isset($order) && $order && $order=='DESC' ) ? 'selected' :''  }}> Order By : (DESC)</option>
                        </select>
                      </div>
                    </div>

                    <h6>Total Clubs - {{ (isset($total_count) && $total_count) ? $total_count : "" }}</h6>

                    <button 
                      class="submit"
                      value="Reset"
                      id="form_submit_reset"
                    >Reset</button>
                  </div>
                </div>
              </div>

              <div class="col-lg-8">
                <div class="club-item-list">
                  <div class="row">
                    @if(isset($clubs))
                    @forelse($clubs as $club)
                    <div class="col-md-6">
                      <a href="{{ route('clubs.details', encrypt($club->id)) }}">
                        <div class="club-item">
                          <h4 class="name" title="RC - {{ $club ? $club->name :'' }}">RC - {{ $club ? $club->name :'' }}</h4>
                          @if((isset($club) && isset($club->president) && isset(\App\Utils\Helper::getUsername($club->president->user_id)['fullname'])))
                            <p> President : {{ (isset($club) && isset($club->president) && isset(\App\Utils\Helper::getUsername($club->president->user_id)['fullname']))  ? \App\Utils\Helper::getUsername($club->president->user_id)['fullname'] :'' }}
                            </p>
                          @endif
                        </div>
                      </a>
                    </div>
                    @empty
                    <span style="color: red"> Nothing Found!</span>
                    @endforelse
                    @endif
                  </div>

                  <div class="pagination-area">
                    <button class="prev-button">
                      <i class="fas fa-arrow-left"></i>
                      Prev
                    </button>

                    <ul class="page-number">
                      <li>
                        <button class="active">1</button>
                      </li>
                      <li>
                        <button>2</button>
                      </li>
                      <li>
                        <button>3</button>
                      </li>
                      <li>
                        <button>...</button>
                      </li>
                      <li>
                        <button>10</button>
                      </li>
                    </ul>

                    <button class="next-button">
                      Next
                      <i class="fas fa-arrow-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>


    @include('frontend.common.footer')
    <!-- js_cdn_link -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    {{-- <script src="{{ asset('frontend/js/typehead.js') }}"></script>--}}
    <!-- js_link  -->
    <script src=" {{ asset('frontend/js/common.js') }}"></script>
    <script>
        $(window).on('load', function() {
            var swiper = new Swiper(".blogSwiper", {
                spaceBetween: 30,
                freeMode: true,
                speed: 1500,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    // when window width is >= 480px
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    // when window width is >= 640px
                    1025: {
                        slidesPerView: 3,
                        spaceBetween: 40
                    }
                }
            });
        });
        // Search Logic start here
        const search = document.getElementById('search');
        const matchList = document.getElementById('match-list');
        let states = []
        async function api() {
            let url = 'https://rotarydistrict3292.org.np/api/clubs'
            const res = await fetch(url);
            states = await res.json();
        }
        api()

        // search the states from api and filter
        const searchStates = async searchText => {
            let matches = states.data.filter(state => {
                const regex = new RegExp(`^${searchText}`, 'gi');
                return state.club.match(regex) || state.president.match(regex);
            })
            if (searchText.length === 0) {
                matches = []
                matchList.innerHTML = ''
            }
            // outputHtml(states.data)
            outputHtml(matches)
        }
        const base_url = "{{ route('clubs.search') }}";
        // show results in HTML
        const outputHtml = matches =>
        {
            if (matches.length > 0) {
                const html = matches.map(match =>

                `
                <div class = "card search-derails">
                   <a href = "${base_url}?&order=&search=${match.club}&filter=default"> <h6>${match.club} (${match.president})</h6></a>
                </div>
                `).join('')
                matchList.innerHTML = html
            }
        }

        search.addEventListener('input', () => searchStates(search.value));


        // Search filter logic end here

        $('#form_submit').click(function() {
            if ($('#search').val() == '') {
                alert('Please your query')
                return false;
            }
            $('#search_form').submit();

        })


        $('#filter').change(function() {
            $('#order').val($(this).val());
            $('#search_form').submit();
        })

        $('#form_submit_reset').click(function () {
            $('#filter').val('default');
            $('#search').val('');

        })

        var route = "{{ route('clubs.autosearch') }}"
        $('#search').keyup(function(e) {
            $.ajax({
                url: route,
                method: 'get',
                data: {
                    term: $(this).val(),
                },
                success: function(data) {
                    $('#search').autocomplete({
                        source: data,
                        select: function(event, ui) {
                            var details = "{{ route('clubs.details',':id') }}"
                            details.replace(':id', ui.item.value);
                            window.location.href = ui.item.value;
                        }
                    });
                }
            });
            var route = "{{ route('clubs.autosearch') }}";
            $('#search').keyup(function(e) {

                $('#search').autocomplete({
                    source: function(request, response) {
                        $.ajax({
                            type: "GET",
                            url: route,
                            contentType: "application/json; charset=utf-8",
                            dataType: "json",
                            success: function(data) {
                                response($.map(data.d, function(item) {
                                    return {
                                        id: item.id,
                                        value: item.name
                                    }
                                }))
                            }
                        });
                    },
                    function(value, data) {
                        if (typeof data == "undefined") {
                            emitMessage('You selected: ' + value + "<br/>");
                        } else {
                            emitMessage('You selected: ' + data.item.value + "<br/>");
                        }
                    }
                });
            });
        })
    </script>
</body>

</html>
