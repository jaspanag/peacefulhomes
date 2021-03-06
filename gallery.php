<?php include ("includes/top.php");?>

<!-- START Article (Chapter) -->

<article>

  <h2>Photo Gallery</h2>


    <!-- Create your slider and add images -->
    <section>

    <div id="slider">
        <img src="images/arts2.jpg" alt="arts">
        <img data-src="images/dinner.jpg" src="images/dinner.jpg" alt="dinner">
        <img data-src="images/pies2.jpg" src="images/pies2.jpg" alt="pies">
        <img data-src="images/hallway.jpg" src="images/hallway.jpg" alt="hallway">
 
    </div>

    <!-- Include slider JS file -->
    <script src="js/ideal-image-slider.js"></script>
    <!-- Create your slider -->
    <script>
	var slider = new IdealImageSlider.Slider('#slider');
    slider.start();
     </script>

        
    </section>
        
    <section>
    <p>Grewal and Chahal are nurses and their new business will specialize in dementia and memory care, elder care, and those with developmental disabilities. They promise excellent care in a safe and loving environment complete with home-cooked meals.</p>
    </section>

</article>

<!-- END Article (Chapter) -->

<!-- START Aside -->
<aside>
  <h2>Why choose Peaceful Homes? Because we provide quality care.</h2>

    <p>Peaceful Homes, an Adult Family Home, is now open in Covington and ready to receive its first residents. Owners Rajveer Grewal and Sarasdeep Chahal have created a warm and inviting residence for the care of seniors and adults with disabilities.</p>

</aside>
<!-- END Aside -->


<?php include ("includes/bottom.php");?>
