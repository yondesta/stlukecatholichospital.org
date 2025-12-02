<?php include 'header.php'; ?>

  <!-- Note: The header.php file should be updated to set 'blog' as the active link. -->

  <main class="main blog-page">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading clinical-bg">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Hospital Blog & Health News</h1>
              <p class="mb-0">
                Stay informed with health tips, patient stories, and updates from St. Luke Catholic Hospital and College of Nursing.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Blog Section -->
    <section id="blog" class="blog section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-8">

            <div class="row gy-4 posts-list">

              <!-- Post Item 1 -->
              <div class="col-lg-12">
                <article class="article post-entry">
                  <div class="post-img">
                    <img src="assets/img/blog/post-1.webp" alt="Post" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="blog-details.php?post=malaria_prevention">Essential Tips for Malaria Prevention During Rainy Season</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Dr. M. Chansa (Internal Med.)</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2024-09-15">Sep 15, 2024</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">12 Comments</a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      As the rainy season peaks, the risk of malaria transmission rises significantly. Our Internal Medicine specialist outlines the most effective strategies to protect your family and community from this common yet serious illness. Key points include mosquito net usage and early diagnosis...
                    </p>
                    <div class="read-more">
                      <a href="blog-details.php?post=malaria_prevention">Read More</a>
                    </div>
                  </div>

                </article>
              </div><!-- End Post Item 1 -->

              <!-- Post Item 2 -->
              <div class="col-lg-12">
                <article class="article post-entry">
                  <div class="post-img">
                    <img src="assets/img/blog/post-2.webp" alt="Post" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="blog-details.php?post=midwifery_training">The Role of Clinical Placement in Midwifery Training</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Clinical Tutor J. Banda</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2024-09-01">Sep 01, 2024</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">8 Comments</a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      Clinical experience at St. Luke's Hospital is the foundation of excellence for our nursing and midwifery students. This post explores how supervised practical hours prepare our students to become compassionate and competent healthcare providers...
                    </p>
                    <div class="read-more">
                      <a href="blog-details.php?post=midwifery_training">Read More</a>
                    </div>
                  </div>

                </article>
              </div><!-- End Post Item 2 -->

              <!-- Post Item 3 -->
              <div class="col-lg-12">
                <article class="article post-entry">
                  <div class="post-img">
                    <img src="assets/img/blog/post-3.webp" alt="Post" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="blog-details.php?post=spiritual_care">Healing the Whole Person: The Ministry of Spiritual Care</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Fr. P. Kaunda (Hospital Chaplain)</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2024-08-20">Aug 20, 2024</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">5 Comments</a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      In line with our Catholic faith, we believe that true healing addresses the body, mind, and spirit. Father Kaunda discusses the vital role of pastoral care, prayer, and counseling for patients and their families during difficult times...
                    </p>
                    <div class="read-more">
                      <a href="blog-details.php?post=spiritual_care">Read More</a>
                    </div>
                  </div>

                </article>
              </div><!-- End Post Item 3 -->

            </div><!-- End blog posts list -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div><!-- End blog pagination -->

          </div>

          <div class="col-lg-4">
            <div class="sidebar">

              <div class="sidebar-block search">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search -->

              <div class="sidebar-block categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <li><a href="#">Hospital News <span>(25)</span></a></li>
                  <li><a href="#">Maternal Health <span>(12)</span></a></li>
                  <li><a href="#">Preventive Medicine <span>(5)</span></a></li>
                  <li><a href="#">Student Life <span>(10)</span></a></li>
                  <li><a href="#">Spiritual Care <span>(3)</span></a></li>
                  <li><a href="#">Community Outreach <span>(15)</span></a></li>
                </ul>
              </div><!-- End sidebar categories -->

              <div class="sidebar-block recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="post-item">
                  <img src="assets/img/blog/recent-1.webp" alt="Post" class="img-fluid">
                  <div>
                    <h4><a href="#">New Ultrasound Machine boosts Diagnostics</a></h4>
                    <time datetime="2024-10-01">Oct 1, 2024</time>
                  </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                  <img src="assets/img/blog/recent-2.webp" alt="Post" class="img-fluid">
                  <div>
                    <h4><a href="#">Success Stories from our Graduates</a></h4>
                    <time datetime="2024-09-10">Sep 10, 2024</time>
                  </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                  <img src="assets/img/blog/recent-3.webp" alt="Post" class="img-fluid">
                  <div>
                    <h4><a href="#">Managing Stress during Clinicals</a></h4>
                    <time datetime="2024-08-28">Aug 28, 2024</time>
                  </div>
                </div><!-- End recent post item-->

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-block tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">Health</a></li>
                  <li><a href="#">Education</a></li>
                  <li><a href="#">Midwifery</a></li>
                  <li><a href="#">Malaria</a></li>
                  <li><a href="#">Emergency</a></li>
                  <li><a href="#">Community</a></li>
                </ul>
              </div><!-- End sidebar tags -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Blog Section -->

  </main>

<?php include 'footer.php'; ?>