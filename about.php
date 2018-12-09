<?php

$title = "WiWP | About";

$metaD = "Welcome to Workshops in Wild Places";

include 'includes/header.php';

?>
     
<main id="about" role="main">

<!--banner-->

    <div role="banner" class="container-fluid p-0 scene_element scene_element--fadeinup">
      <div class="row d-flex bg-img-about-banner min-100 m-0">
            <div class="offset-lg-2"></div>
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center p-5">
                 <div class="wrap py-5 mb-5">
                     <h2 class="headline l-h pb-2 scene_element scene_element--fadeindown scene_element--delayed">About</h2>
                     <h5 class="text-white text-uppercase pb-2 scene_element scene_element--fadeinup scene_element--delayed">Workshops in <span class="pink">Wild</span> Places</h5>
                 </div>
             </div>
            <div class="offset-lg-2"></div>
        </div>
    </div>

    <!--intro-->
    
    <div class="container-fluid bg-light p-0 py-1 scene_element scene_element--fadein">
     <div class="row d-flex text-secondary min-70 m-3 shadow-lg rounded">
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end text-right bg-white min-50 p-5 o-12" data-aos="fade-up" data-aos-duration="1500">
            <h2 class="section-title text-uppercase border border-bottom-0 p-4 m-0">About <span class="pink">WiWP</span></h2>
              <p class="p-3 m-0 border enter-bottom">In these unique, innovative workshops, students travel to remote locations throughout the world to connect with the beauty, energy and power of the wild landscape and then – through a facilitated contemplative and creative process – translate that response into abstract paintings.</p>
              <a href="#sec-2">
                <i class="fa fa-long-arrow-down pink border border-top-0 px-4 py-3 m-0 enter-bottom"></i>
              </a>
        </div>
        <div class="col-lg-6 bg-img-scotland-5 min-50 p-0" data-aos="fade" data-aos-easing="ease-in-out-sine" data-aos-duration="1000"></div>
      </div><!--end row-->
       
        <!--details-->
       
        <div class="row d-flex text-secondary min-70 m-3 shadow-lg">
            <div class="col-lg-6 bg-img-mongolia min-50 p-0" data-aos="fade" data-aos-easing="ease-in-out-sine" data-aos-duration="1000"></div>
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left bg-white min-50 p-5 o-12" data-aos="fade-up" data-aos-easing="ease-in-out-sine" data-aos-duration="1500">
              <h2 class="section-title text-uppercase border border-bottom-0 p-4 m-0 enter-top">Details</h2>
                <p class="p-4 m-0 border enter-left">Held in small comfortable lodges in remote, wild locations, these abstract painting workshops guide participants to connect with the land in various ways, and translate that connection into abstract paintings. There will be brief daily meditations, quiet time, journalling, sketching, group discussions, and lots of time for painting. The focus is on connecting with the land.</p>
                <a href="#sec-3">
                <i class="fa fa-long-arrow-down pink border border-top-0 px-4 py-3 m-0 enter-bottom"></i>
              </a>
            </div>
        </div><!--end row-->

        <!-- about jms -->

        <div class="row d-flex text-secondary min-70 m-3 shadow-lg">
             <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left min-50 p-5 o-12 bg-white" data-aos="fade-up" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">
                <h2 class="section-title text-uppercase border border-bottom-0 p-3 m-0">About Janice Mason Steeves</h2>
                 <p class="p-4 m-0 border">Janice brings 35 years of painting experience to her teaching, and a passion to help each student find their own way. Her teaching focuses not only on technique, but on composition, design, color, mindset, and self-expression. She offers a unique method which encourages students to develop their own artistic voices, in addition to a personal way of thinking about art, painting, and life. Find out more at <a class="font-weight-bold pink" href="http://www.janicemasonsteeves.com">janicemasonsteeves.com.</a>
                 </p>    
                 <div class="wrap border border-top-0 p-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-lg btn-dark m-2 enter-bottom" data-toggle="modal" data-target="#exampleModalCenter">Read more</button>
                 </div>
                    <!--modal content-->
             </div><!--end col-->
             <div class="col-lg-6 bg-img-teaching min-50 p-0 m-0" data-aos="fade" data-aos-easing="ease-in-out-sine" data-aos-duration="1000"></div>
         </div><!--end row-->
         
         <!--quote-->
                
         <div class="row d-flex bg-img-long-beach-aerial text-light min-70 m-3 shadow-lg" data-aos="fade" data-aos-duration="1000">
            <div class="offset-lg-2"></div>
            <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center min-50 p-5 o-12" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="section-title text-uppercase">Get <span class="pink">Out</span> There</h2>
                <p class="h5 py-3">“Twenty years from now you will be more disappointed by the things that you didn’t do than by the ones you did do. So throw off the bowlines. Sail away from the safe harbor. Catch the trade winds in your sails. Explore. Dream. Discover."
                <span class="d-block pt-3 font-italic">― Mark Twain</span></p>
            </div>
         <div class="offset-lg-2"></div>
      </div>
      <!--end row--> 
    </div><!--end container-->
    
    <!-- Modal placed outside main container to not be affected by entrance animation -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">WiWP: Janice Mason Steeves</h5>
            <button type="button" class="close h3" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fa fa-plus"></i></span>
            </button>
          </div>
          <div class="modal-body bg-cubes text-left p-4">
             <div class="jumbotron jumbotron-fluid shadow-lg bg-jms p-4 mb-3 animated fadeIn">
                <div class="wrap h-100 w-100 p-4 border border-light">
                 <h2 class="text-light font-weight-light font-italic mb-0 pb-0 animated fadeInRight">Janice<span class="d-table">Mason</span><span class="d-table">Steeves</span></h2>
                 <p class="text-light font-weight-light font-italic pt-0 animated fadeInLeft">Bio</p>
                 </div>
             </div>
             <h5 class="font-weight-bold border-bottom pb-3 pt-2">Janice Mason Steeves</h5>
             <p>Born in Saskatchewan, Janice Mason Steeves graduated with an M.A. in Clinical Psychology from the University of Manitoba. She held school psychology positions before leaving the field to focus on painting. Further studies were completed at the Ontario College of Art and Design. Janice is represented by galleries in Canada and the U.S. and has work in public, corporate, and private collections in North America and internationally. She has been awarded artist residencies in Spain, Ireland, Sweden and Iceland. <p>The landscape is Janices starting point. Places like Lapland in Sweden, northern Iceland and the Isle of Lewis in Scotland with their stark landscapes, the clarity of their air and the quality of their light inspire a minimal, reductive quality in her paintings. Process and materials are important to her. Structured and methodical approaches combined with intuitive reactions allow her to take risks, to combine control with spontaneity.</p>
             <p>She is working on two concurrent series of paintings, each of which are painted with a mixture of cold wax and oils. One series consists of small gestural interpretations of the landscape on paper, some of which are accompanied by colour field paintings that reflect the atmosphere of place. The other series, comprised of small works on panel, are attached together to form grids. The paint is applied in extremely thin translucent layers that overlap each other creating luminous colour fields that reflect the energy and emotion of her response to nature.</p>
             <p class="pb-3 border-bottom">As an established artist of 35 years, Janice has been sharing her knowledge both in her Art Mentoring program and in the painting workshops that she teaches in Canada, the US, and Europe. She has also become interested in inspiring artists to create a whole new response to the environmental crisis that goes beyond facts, pessimism, arguments, and blame, and instead offers up what nature  means to our spirits; the love of it. With this in mind, Janice has developed an art teaching initiative called <span class="font-weight-bol font-italic pink">Workshops in Wild Places.</span> In these unique, innovative workshops, students travel to remote locations throughout the world to experience the beauty, energy and power of the wild landscape, to deeply and joyfully connect with it, and then–– through a facilitated contemplative and creative process–– translate that response into abstract paintings.</p>
              <p>Find out more at <a class="font-weight-bold pink" href="https://janicemasonsteeves.com" target="_blank">janicemasonsteeves.com</a>.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div><!--end modal-->
                    
</main>

<?php

include 'includes/footer.php';

?>