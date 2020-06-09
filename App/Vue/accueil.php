<main class="contain" ><br>
  <div class="row">
    <form id="search_index2" method="post" action="index.php?entite=book&action=search" class="form-inline ">
      <input id="search_index2_input" name="search" class="form-control" type="text" placeholder="Tapez un titre de livre..." >
      <button id="search_index2_btn" class="btn btn-secondary" type="submit">Search</button>
    </form>
    <div class="form-group col-md-6">

      <section id="intro">
        <h3>La bibliothèque de FIL ROUGE en ligne !</h3>
                    <br><br>
                    <p style="text-align:justify">La bibliothèque de FIL ROUGE est heureuse de vous présenter son nouveau portail culturel.
                        <br><br>
                        À partir de ce portail, vous pouvez faire des <b>recherches</b> dans le <b>catalogue </b>de la bibliothèque, <b>réserver</b> des documents ou <b>prolonger</b> vos prêts en vous connectant à votre “<b>compte lecteur</b>”. Vous pouvez également vous inscrire à vos animations.
                        <br><br>
                        Vous trouverez aussi des <b>informations pratiques</b>, les <b>actualités de la bibliothèque</b>, les coups de coeur des bibliothécaires ainsi que le programme des <b>animations</b> proposées par la bibliothèque…
                        <br><br>
                        Toute l’équipe de la bibliothèque vous souhaite une belle visite !...</p>
      </section>
      
    </div>
    <div class="form-group col-md-6">
      <div id="photoshow">
        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="images/slide04.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="images/slide01.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="images/slide05.jpg" style="width:100%">
            <!--<div class="text">Caption Three</div>-->
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="images/slide06.jpg" style="width:100%">
        </div>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    </div>
  </div>
  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 4000); // Change image every 4 seconds
    }
  </script>
  
</main>
