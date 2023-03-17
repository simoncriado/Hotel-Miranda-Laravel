@extends('layout')

    @section('content')
    <main>
      <!-- Subheader Section -->
      <section class="subheaderSection">
        <p class="tourSection__container--subtitleDesktop">
          We Make You Feel Comfortable
        </p>
        <p class="subheaderSection__subtitle">THE ULTIMATE LUXURY</p>
        <h1 class="subheaderSection__title">Ultimate Room</h1>
        <div class="subheaderSection__navigation">
          <p class="subheaderSection__navigation__page">Home</p>
          <p class="subheaderSection__navigation__page--active">Rooms</p>
        </div>
      </section>

      <!-- Rooms Section -->
      <div class="swiperRoomsList roomSlider__slides">
        <div >
          <div class="swiper-slide">
            
            @foreach ($rooms as $room)
            <div style="position: relative">
              <img
                class="roomSlider__slides--extras"
                src="./assets/images/roomExtras.png"
                alt="Room extras"
              />
              @if (strpos($room->photo, 'http') === false)
              <img
                class="roomSlider__slides--roomImg"
                src="https://mktmarketingdigital.com/wp-content/plugins/elementor/assets/images/placeholder.png"
                alt="Hotel room"
              />
              @else
              <img
                class="roomSlider__slides--roomImg"
                src={{$room->photo}}
                alt="Hotel room"
              />
              @endif
              <h1 class="roomSlider__slides--title">{{$room->bed_type}}</h1>
              <p class="roomSlider__slides--description">
              {{$room->description}}
              </p>
              <div class="roomSlider__slides__container">
                <p class="roomSlider__slides__container--price">
                  ${{$room->room_rate /100}}<span
                    class="roomSlider__slides__container--price--perNight"
                    >/Night</span
                  >
                </p>
                <a
                  href="{{ url('./room-details/' . $room->id) }}"
                  class="roomSlider__slides__container--bookNow"
                  >Book now</a
                >
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </main>
    @endsection

    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="{{asset("js/index.js")}}"></script>
    <script type="module" src="{{asset("js/mobile-menu.js")}}></script>
    @endsection
