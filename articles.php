<?php
include "header.php";
?>


    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>EFFORTLESS INSIGHT AFRICA<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="articles.php">Articles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

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
          </div>
</section>

    


    <?php
    include "engagements.php";
    include "footer.php";
    ?>