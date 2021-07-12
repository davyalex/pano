<style>
  
    #owl-demo .item img{
      display: block;
      width: 100%;
      height: auto;
  }
  </style>
  
  
  
  
  
  
  <div class="custom1 owl-carousel owl-theme">
   
    <div class="item" style=""><h4><img class="img-fluid" src="{{ asset('images/ban1.png') }}" alt=""></h4></div>
    <div class="item" style=""><h4><img class="img-fluid" src="{{ asset('images/ban2.jpg') }}" alt=""></h4></div>
    <div class="item" style=""><h4><img class="img-fluid" src="{{ asset('images/ban3.png') }}" alt=""></h4></div>
    {{-- <div class="item" style=""><h4><img class="img-fluid" src="{{ asset('images/banner1.jpg') }}" alt=""></h4></div> --}}
  
  </div>
  
  
  
  
  
  
  
  <script>
   $('.custom1').owlCarousel({
      animateOut: 'fadeOut',
      // animateIn: 'fadeOut',
      items:1,
      margin:30,
      stagePadding:30,
      smartSpeed:450,
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      loop:true
  });
  </script>
  
  