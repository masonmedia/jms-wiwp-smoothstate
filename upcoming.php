<?php

$title = "WiWP | Upcoming";

$metaD = "Welcome to Workshops in Wild Places";

include 'includes/header.php';

?>

<main id="upcoming" role="main">
   
    <!--banner-->					

    <div role="banner" class="container-fluid p-0 scene_element scene_element--fadeindown">
        <div class="row d-flex bg-img-upcoming-banner min-100 m-0">
            <div class="offset-lg-1"></div>
                <div class="col-lg-10 d-flex flex-column justify-content-center align-items-center text-center p-5">
                    <h2 class="headline l-h pb-2 mt-5 scene_element scene_element--fadeindown scene_element--delayed">Upcoming Workshops</h2>
                    <h5 class="text-white text-uppercase pt-2 scene_element scene_element--fadeinright scene_element--delayed">IN THE WORKS FOR 2020 and 2021</h5>
                </div>
            <div class="offset-lg-1"></div>
        </div>
    </div>

    <!--intro-->

    <div class="container-fluid bg-light p-0 py-1 scene_element scene_element--fadein">
        
        <!--card -- chile-->
        
        <div class="row shadow-lg m-3">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center text-secondary bg-light min-50 p-5 o-12">
                <h2 class="headline text-secondary pb-2 l-h" data-aos="fade-right" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">Chile</h2>
                <p class="h4 pt-2" data-aos="fade-up" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">Painting in the Atacama</p>
                <p class="pt-2 m-0" data-aos="fade-down" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">February 2020</p>
                <p class="font-italic pt-2 m-0" data-aos="fade-up" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">Location Coming Soon</p>
                <!--<a href="http://www.altoatacama.com/" target="_blank" class="btn btn-outline-secondary enter-bottom">Read More</a>-->
            </div>
            <div class="col-lg-6 min-50 bg-img-chile-2" data-aos="fade" data-aos-easing="linear" data-aos-duration="1500"></div>
        </div><!--end row--> 
        
        <!--card -- nova scotia-->
        
        <div id="sec-3" class="row shadow-lg m-3">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center text-secondary bg-light min-50 p-5 o-12">
                <h2 class="headline text-secondary pb-2 l-h" data-aos="fade-right" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">Nova Scotia</h2>
                <p class="h4 pt-2" data-aos="fade-up" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">Art Retreat in old growth forest</p>
                <p class="py-2" data-aos="fade" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">September 2020 | Trout Point Lodge</p>
                <!--activate modal-->
                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#troutPoint">Read More</button>
                <!--ns modal content-->
            </div>
            <div class="col-lg-6 min-50 bg-img-ns" data-aos="fade" data-aos-easing="ease-in-out-sine" data-aos-duration="1500"></div>
        </div><!--end row-->  
        
        <!--card -- mongolia-->
        
        <div class="row shadow-lg m-3">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center text-secondary bg-light min-50 p-5 o-12">
                <h2 class="headline text-secondary pb-2 l-h" data-aos="fade-right" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">Mongolia</h2>
                <p class="h4 pt-2" data-aos="fade-up" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">Art Retreat in the Gobi</p>
                <p class="py-2" data-aos="fade" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">August, 2021 | Three Camel Lodge</p>
                <!--activate modal-->
                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#mongolia">Read More</button>
                <!-- Mongolia Modal Content -->
            </div>
            <div class="col-lg-6 min-50 bg-img-mongolia-horses" data-aos="fade" data-aos-easing="ease-in-out-sine" data-aos-duration="1500"></div>
        </div><!--end row--> 
        
         <!--card -- newsletter/signup-->
        
        <div id="sec-3" class="row shadow-lg bg-light text-secondary m-3">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center p-5 o-12" data-aos="fade-up" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">
                <h2 class="headline text-secondary pb-2 l-h">Signup</h2>
                <p class="pt-2 mb-0">Get WiWP info, news, updates, and workshop info straight to your inbox.</p>
                <!-- Begin MailChimp Signup Form -->
               <div id="mc_embed_signup">
                  <form action="https://janicemasonsteeves.us12.list-manage.com/subscribe/post?u=a9ab1596540478d19124106d8&amp;id=66a407ea79" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate-2 bs" target="_blank" novalidate>
                     <!--form-->
                     <div id="mc_embed_signup_scroll">
                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a9ab1596540478d19124106d8_66a407ea79" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe-2" class="button"></div>
                     </div>
                  </form>
               </div>
               <!--End mailchimp form 2-->
            </div>
            <div class="col-lg-6 bg-img-scotland-5 min-50" data-aos="fade" data-aos-easing="ease-in-out-sine" data-aos-duration="1500"></div>
        </div><!--end row-->
        
         <!--card -- contact-->
        
        <div id="sec-3" class="row shadow-lg bg-light text-secondary m-3">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center p-5 o-12" data-aos="fade-up" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">
                <h2 class="headline text-secondary pb-2 l-h enter-top">Contact</h2>
                <p class="py-2 mb-0 enter-left">To put your name on the list or for more information about upcoming workshops, please contact Janice below.</p>
                 <a class="btn btn-outline-secondary" href="mailto:janicemasonsteeves@gmail.com">Contact</a>
            </div>
            <div class="col-lg-6 bg-img-contact min-50" data-aos="fade" data-aos-easing="ease-in-out-sine" data-aos-duration="1500"></div>
        </div><!--end row--> 
        
        <!--quote-->
                
        <div class="row d-flex bg-img-long-beach-aerial text-light min-70 m-3 shadow-lg" data-aos="fade" data-aos-duration="1000">
            <div class="offset-lg-2"></div>
            <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center min-50 p-5 o-12" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="section-title text-uppercase">Get <span class="pink">Out</span> There</h2>
                <p class="h5 py-3 m-0 enter-bottom">“Twenty years from now you will be more disappointed by the things that you didn’t do than by the ones you did do. So throw off the bowlines. Sail away from the safe harbor. Catch the trade winds in your sails. Explore. Dream. Discover."
                <span class="d-block pt-3 font-italic">― Mark Twain</span></p>
            </div>
            <div class="offset-lg-2"></div>
        </div>
      <!--end row--> 
    </div><!--end container-->
    
<!--modals-->

<!-- ns Modal -->
    <div class="modal fade" id="troutPoint" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="troutPoint">WiWP: Nova Scotia</h5>
            <button type="button" class="close h3" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fa fa-plus"></i></span>
            </button>
          </div>
          <div class="modal-body bg-cubes text-left p-4">
             <div class="jumbotron jumbotron-fluid shadow-lg bg-img-ns p-4 mb-3 animated fadeIn">
                <div class="wrap h-100 w-100 p-4 border border-light">
                 <h2 class="text-light font-weight-bold font-italic mb-0 pb-0 animated fadeInRight">Forest Bathing</h2>
                 <p class="text-light font-weight-light font-italic pt-0 animated fadeInLeft">Trout Point Lodge, Nova Scotia</p>
                 </div>
             </div>
            <!--schedule-->
             <h5 class="font-weight-bold border-top border-bottom py-3">September 27 - October 4, 2020</h5>
              <p class="pt-2">I invite you to join me at a luxury wilderness resort deep in the forests of southwestern Nova Scotia, designated a UNESCO Biosphere Reserve. Trout Point Lodge is an architectural masterpiece, made from giant Eastern Spruce logs. Trout Point's main lodge celebrates the Great Camps erected along the US and Canadian Eastern Seaboard in the early 20th century.</p>
              <p>In addition to belonging to the prestigious Small Luxury Hotels of the World, Trout Point's main lodge, rooms and suites have qualified as a 5-star Nova Scotia Inn from Canada Select, the national accommodation rating agency</p>
              <p>As well as being in Nova Scotia in high season for fall colours, we'll have the opportunity of forest bathing. The Japanese government coined the term in 1982 ... a translation of "shinrin-yoku," meaning "taking in the forest atmosphere." It means mindfully walking in the forest with all of your senses open. In addition to forest bathing, Trout Point is the world's first Starlight Hotel, a distinction given by the Starlight Foundation. There is a permanent astronomer on staff who offers guided stargazing using various sophisticated telescopes and astronomic binoculars.</p>
              <p>In our small group of 8, we'll focus on some ways to experience this forest environment, including forest bathing, meditative walking, sketching, journaling and stargazing. We'll come into the studio to create abstract responses to the land and forest, using cold wax and oil, working in small formats quickly and intuitively, as well as developing larger paintings. At the end of each day, you'll have the opportunity to share your daily work with the group as well as thoughts, ideas and writings. We'll have a group/critique discussion session on the final day, where we'll focus on the work each has done during the week with suggestions as to how to carry the work forward once back at home.</p>
              <h5 class="font-weight-bold border-top border-bottom py-3">More information</h5>
              <p class="m-0 py-2">Contact <a class="pink font-weight-bold" href="mailto:janicemasonsteeves@gmail.com">janicemasonsteeves@gmail.com</a></p>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div><!--modal content-->
        </div>
    </div><!--end ns modal-->
                
    <!-- mongolia modal -->
    <div class="modal fade" id="mongolia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mongolia">WiWP: Mongolia</h5>
            <button type="button" class="close h3" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fa fa-plus"></i></span>
            </button>
          </div>
          <div class="modal-body bg-cubes text-left p-4">
             <div class="jumbotron jumbotron-fluid shadow-lg bg-img-mongolia-horses p-4 mb-3 animated fadeIn">
                <div class="wrap h-100 w-100 p-4 border border-light">
                 <h2 class="text-light font-weight-bold font-italic mb-0 pb-0 animated fadeInRight">Art Retreat in the Gobi</h2>
                 <p class="text-light font-weight-light font-italic pt-0 animated fadeInLeft">Three Camel Lodge, Mongolia</p>
                 </div>
             </div>
            <!--schedule-->
             <h5 class="font-weight-bold border-top border-bottom py-3">August 2020</h5>
              <p class="pt-2">I invite you to join me in a remote outpost in Mongolia, probably in August of 2020.  There we will stay in the Three Camel Lodge where our accommodation is in luxury gers (or yurts) in the Gobi Desert, each with it's own bathroom. We'll hold our workshop in a ger, eat gourmet meals in the dining room and spend 2 days on out-trips in land rovers to see this area of Mongolia. There will be a tour of Ulaanbaatar, the capital of Mongolia the day after we arrive. Out-trips from our lodge would include a visit to the Yol Valley National Park, the Singing Sands, a meditation temple and the Flaming Cliffs. How exciting is this!</p>
              <h5 class="font-weight-bold border-top border-bottom py-3">More information</h5>
              <p class="m-0 py-2">Contact <a class="pink font-weight-bold" href="mailto:janicemasonsteeves@gmail.com">janicemasonsteeves@gmail.com</a></p>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div><!--modal content-->
        </div>
    </div><!--end mongolia modal-->            
                  
</main>

<?php

include 'includes/footer.php';

?>