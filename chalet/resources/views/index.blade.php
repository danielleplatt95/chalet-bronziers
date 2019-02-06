@extends('layouts.app')


@section('content')
<div class="central">
    <div class="title">

      <h1>Chalet Bronziers</h1>
      <h2>Rue des Bronziers, Peisey Nancroix, 73210 Peisey-Vallandry, France<h2>

    </div>
</div>

<div class="coverimg">
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <div class="central">
    <h2><i>Your home in the French Alps</i></h2>
    </div>

    <script>
  $(function(){
      $(".element").typed({
        strings: ["App Shah...", " an Engineer (MS)...","a WordPress Lover...", "a Java Developer..."],
        typeSpeed:100,
        backDelay:3000,
        loop:true
      });
  });
</script>


</div>


<div class="about">

  <h1 class = "element">Welcome.</h1>
  <br><br>
  <p>Set in the heart of the beautiful village Peisey Nancroix, Chalet Bronziers gives you access to Paradiski, a paradise ski resort with over 400km of piste and enumerous off-piste opportunities.
  A newly refurbished chalet in a building with serious character and history that will give you the rustic feel of a ski cabin with the latest mod-cons and amenities. 
  We hope to give you the perfect home-from-home in the Alps; somewhere you can cosy-up by the fire or relax in the sauna after a chilly day on the slopes, 
  a large area to cook and dine in (or put your feet up and book a chef to do all the hard work), and plenty of social space to spend the perfect holiday with family or friends.</p>
<br>

<p>Chalet Plan:</p>
 <p><i class="fas fa-bed"></i>   sleeps 10 (4 bedrooms)</p>
 <p><i class="fas fa-bath"></i>  4 bathrooms</p>
 <p><i class="fas fa-utensils"></i>   large open plan kitchen/dining room</p>
 <p><i class="fas fa-couch"></i>   large living room</p>
 <p><i class="fab fa-pagelines"></i>   decked backgarden</p>
 <br>
 <p>Our Favourite Things:</p>
 <p><i class="fab fa-hotjar"></i>   outdoor cabin sauna</p>
 <p><i class="fas fa-futbol"></i>   table football</p>
 <p><i class="fas fa-wifi"></i>   wifi</p>
 <p><i class="fas fa-dice"></i>   board games, books, films</p>
<br>



</div>

<div class="gallery">
  <h1>Gallery.</h1>
  <br><br>
  <p>Take a peek inside of Chalet Bronziers - if you have any questions, please do not hesitate to get in touch.</p>
  <br><br>
  <br><br>

  <div class="row">
    <div class="column">
      <img src="{{URL::asset('/images/sofas.jpg')}}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="{{URL::asset('/images/garden.jpg')}}" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="{{URL::asset('/images/bedroom1.jpg')}}" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="{{URL::asset('/images/dining.jpg')}}" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
    </div>
  </div>
<br><br>
  <div class="row">
    <div class="column">
      <img src="{{URL::asset('/images/bedroom2.jpg')}}" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="{{URL::asset('/images/food.jpg')}}" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="{{URL::asset('/images/sauna.jpg')}}" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="{{URL::asset('/images/kitchen.jpg')}}" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
    </div>
  </div>

  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

      <div class="mySlides">
        <div class="numbertext">1 / 8</div>
        <img src="{{URL::asset('/images/sofas.jpg')}}" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 8</div>
        <img src="{{URL::asset('/images/garden.jpg')}}" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 8</div>
        <img src="{{URL::asset('/images/bedroom1.jpg')}}" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">4 / 8</div>
        <img src="{{URL::asset('/images/dining.jpg')}}" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">5 / 8</div>
        <img src="{{URL::asset('/images/bedroom2.jpg')}}" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">6 / 8</div>
        <img src="{{URL::asset('/images/food.jpg')}}" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">7 / 8</div>
        <img src="{{URL::asset('/images/sauna.jpg')}}" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">8 / 8</div>
        <img src="{{URL::asset('/images/kitchen.jpg')}}" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="caption-container">
        <p id="caption"></p>
      </div>


      <div class="column">
        <img class="demo cursor" src="../assets/img/sofas.jpg" style="width:100%" onclick="currentSlide(1)" alt="Living Room">
      </div>
      <div class="column">
        <img class="demo cursor" src="../assets/img/garden.jpg" style="width:100%" onclick="currentSlide(2)" alt="Back Garden">
      </div>
      <div class="column">
        <img class="demo cursor" src="../assets/img/bedroom1.jpg" style="width:100%" onclick="currentSlide(3)" alt="Bedroom">
      </div>
      <div class="column">
        <img class="demo cursor" src="../assets/img/dining.jpg" style="width:100%" onclick="currentSlide(4)" alt="Dining Room">
      </div><div class="column">
        <img class="demo cursor" src="../assets/img/bedroom2.jpg" style="width:100%" onclick="currentSlide(1)" alt="Bedroom">
      </div>
      <div class="column">
        <img class="demo cursor" src="../assets/img/food.jpg" style="width:100%" onclick="currentSlide(2)" alt="Back Garden">
      </div>
      <div class="column">
        <img class="demo cursor" src="../assets/img/bathroom1.jpg" style="width:100%" onclick="currentSlide(3)" alt="Bathroom">
      </div>
      <div class="column">
        <img class="demo cursor" src="../assets/img/kitchen.jpg" style="width:100%" onclick="currentSlide(4)" alt="Kitchen">
      </div>
    </div>
  </div>

<br><br>

<div id="TA_socialButtonBubbles850" class="TA_socialButtonBubbles"><ul id="5aUJts2" class="TA_links vsDKFCT3w"><li id="TZJCcWbr4GY" class="ybXVAE"><a target="_blank" href="https://www.tripadvisor.com/Hotel_Review-g3870368-d7608075-Reviews-Chalet_Bronziers-Peisey_Nancroix_Savoie_Auvergne_Rhone_Alpes.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/socialWidget/20x28_green-21693-2.png"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=850&amp;locationId=7608075&amp;color=green&amp;size=rect&amp;lang=en_US&amp;display_version=2"></script>

</div>

<script src="../assets/scripts/gallery.js">
</script>

<div class="info">
  <h1>Peisey Nancroix.</h1>
  <br><br>
  <p>
  Peisey Nancroix is part of a cluster of beautiful and charming villages which make up Peisey-Vallandry, a scenic area of Paradiski, which provides a vast ski area for all abilities and boasts gorgeous tree runs and incredible views. 
  The village is easily accessible to the pistes via 'Lonzagne Cable' (an open air cable car) or via a free bus. <br><br>
  The village itself is an old bronze mining village with plenty of character and history. It hosts bars and restaurants, as well as a small supermarket, ski hire stores, a delicious bakery and a butchers. 
  There is also a shop where you can buy local cheese, as well as a few shops to buy gifts to take back home.<br><br>
  Whether visiting in the snowy winter or the hot summer, Peisey Nancroix is undoubtedly beautiful and a great place to get in touch with nature.</p>
<br><br>
  <div id="map"></div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwfb8l5pZDSwnZLsriSlH27s8EgeIVGI4&callback=initMap">
    </script>
    <br><br>
    <p>We recommend:</p>
    <p><i class="fas fa-tree"></i> adventuring off-piste through the trees</p>
    <p><i class="fas fa-star"></i> star-gazing in the clear skies</p>
    <p><i class="fas fa-utensils"></i> sampling the local cuisine</p>
    <p><i class="fas fa-binoculars"></i> visiting the Vanoise national park</P>
</div>


@include('things-to-do')

@include('reviews')


<div class="bigimg">
  <br><br>
  <br><br>
  <h1>Book now.</h1>
  <div class="central">
  <button class="button" style="vertical-align:middle"><span>Enquire </span></button>
</div>
</div>


@include('contact')

@include('footer')

@endsection