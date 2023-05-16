<?php
include "header.php";
?>

   


    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Article Posts</h4>
                <h2>Our Recent Article Entries</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    <!-- The Articles Start here-->

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  
                  <h4>AfCFTA, PUBLIC PRIVATE PARTNERSHIPS AND INNOVATION</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a href="AfCFTA Booklet by Titus Ngatia.pdf" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="AfCFTA Booklet Design.png" alt="">
                    </div>
                    <div class="down-content">
                      <span>Innovation</span>
                      <a href="AfCFTA Booklet by Titus Ngatia.pdf"><h4>AfCFTA, PUBLIC PRIVATE PARTNERSHIPS AND INNOVATION</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Titus Ngatia</a></li>
                        <li><a href="#">May 16, 2023</a></li>
                        <!-- <li><a href="#">12 Comments</a></li> -->
                      </ul>

                      <p>The AfCFTA was negotiated by African States but will be implemented by the PRIVATE SECTOR. 
                        Read my proposal inspired by the inaugural AfCFTA Business Forum 2023, Cape Town, South Africa.</p>
                    </div>
                  </div>
                </div>
        
      
     
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="Article 2.png" alt="">
                    </div>
                    <div class="down-content">
                      <span>Lifestyle</span>
                      <a href="Article 2.pdf"><h4>THE DEGREE OF SUCCESS VS THE SUCCESS OF THE DEGREE</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Titus Ngatia</a></li>
                        <li><a href="#">June 18, 2022</a></li>
                         <!-- <li><a href="#">12 Comments</a></li> -->
                      </ul>
                      <p>Read my article on the ongoing heated political debate in Kenya about the requirement of a university degree 
                        as per the law for aspiring gubernatorial and presidential candidates.</p>
                  
                    </div>
                  </div>
                </div>
                
                 <!-- The Articles End here-->

                 <!-- The Page Numbers Start here -->
                <div class="col-lg-12">
                  <ul class="page-numbers">
                    <li><a href="articles.php">1</a></li>
                   <!-- <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- The Search Bar starts here-->
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="AfCFTA Booklet by Titus Ngatia.pdf">
                          <h5>AfCFTA, PUBLIC PRIVATE PARTNERSHIPS AND INNOVATION</h5>
                          <span>May 16, 2023</span>
                        </a></li>
                        <li><a href="Article 2.pdf">
                          <h5>THE DEGREE OF SUCCESS VS THE SUCCESS OF THE DEGREE?</h5>
                          <span>June 18, 2022</span>
                        </a></li>
                       </ul>
                    </div>
                  </div>
                </div>

                <!-- The Search Bar ends here-->

              </div>
            </div>
          </section>


    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>



    <?php
    include "engagements.php";
    include "footer.php";
    ?>