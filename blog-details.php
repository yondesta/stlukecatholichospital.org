<?php
include 'header.php';

// --- BLOG POST DATA SOURCE ---
$posts_data = [
    'malaria_prevention' => [
        'id' => 1,
        'title' => 'Essential Tips for Malaria Prevention During Rainy Season',
        'author' => 'Dr. M. Chansa (Internal Med.)',
        'date' => 'Sep 15, 2024',
        'category' => 'Preventive Medicine',
        'comments' => 12,
        'image' => 'assets/img/blog/post-1-lg.webp',
        'tags' => ['Malaria', 'Prevention', 'Rainy Season', 'Community Health'],
        'content_blocks' => [
            'p1' => "The annual shift to the rainy season brings increased moisture and, regrettably, a surge in mosquito populations. This is the peak time for malaria transmission, making vigilance and proactive prevention measures absolutely critical for every household in our community.",
            'p2' => "At St. Luke Catholic Hospital, we treat numerous cases of malaria daily. Our internal medicine team emphasizes that simple, consistent actions at home are the first line of defense against this preventable disease.",
            'h4_1' => "The Power of the Mosquito Net",
            'p3' => "The single most effective tool against nocturnal mosquito bites is the Long-Lasting Insecticidal Net (LLIN). 

[Image of people sleeping under mosquito nets]
 Ensure that everyone in your family, especially young children and pregnant women, sleeps under a properly tucked-in net every night. Check for holes regularly and seek replacements when necessary.",
            'h4_2' => "Environmental Control Measures",
            'p4' => "Mosquitoes breed in stagnant water. Community action is essential: empty any containers (tires, buckets, discarded cans) that hold water, clear drainage systems, and cut down tall grass near your home. If water must be stored, ensure the containers are tightly covered.",
            'h4_3' => "Early Diagnosis and Treatment",
            'p5' => "If you or a family member develops fever, chills, and flu-like symptoms, do not hesitate. Seek immediate testing at St. Luke's or the nearest clinic. Early diagnosis using Rapid Diagnostic Tests (RDTs) and prompt administration of Artemisinin-based Combination Therapies (ACTs) significantly improves outcomes and prevents severe complications.",
            'quote' => '“Prevention is not just about nets and medication; it’s about a continuous community effort and swift action when symptoms first appear.”',
            'p6' => "Our hospital and the College of Nursing students are running an awareness campaign this month. Look out for our community outreach teams in your area for free screenings and educational pamphlets.",
        ],
    ],
    'midwifery_training' => [
        'id' => 2,
        'title' => 'The Role of Clinical Placement in Midwifery Training',
        'author' => 'Clinical Tutor J. Banda',
        'date' => 'Sep 01, 2024',
        'category' => 'Student Life',
        'comments' => 8,
        'image' => 'assets/img/blog/post-2-lg.webp',
        'tags' => ['Midwifery', 'Education', 'College', 'Clinical Placement'],
        'content_blocks' => [
            'p1' => "For a student of Midwifery, textbooks and lectures only provide the foundation. The true art and science of providing maternal care are mastered in the clinical setting, and St. Luke's Hospital offers the perfect, integrated environment for this training.",
            'p2' => "Our clinical placements are designed to transition students from theoretical knowledge to competent, compassionate practice, all under the direct supervision of qualified tutors and hospital staff.",
            'h4_1' => "Learning by Doing: Hands-on Experience",
            'p3' => "Students spend significant time in the maternity and postnatal wards, assisting with antenatal clinics, observing deliveries, and participating in newborn care.  This direct engagement helps them develop essential procedural skills and critical thinking in real-time.",
            'h4_2' => "The Mentorship Model",
            'p4' => "Each student is paired with an experienced Registered Midwife or Clinical Tutor. This mentorship ensures personalized guidance, constructive feedback, and ethical decision-making support. We believe this one-on-one attention is key to forming excellent future healthcare leaders.",
            'h4_3' => "Holistic Care Integration",
            'p5' => "Our training emphasizes the hospital's holistic mission. Students learn to provide emotional and spiritual support to mothers and families, treating pregnancy and childbirth as profound, whole-person events, not just medical procedures.",
            'quote' => '“The experience gained here—the responsibility, the joy, and the challenges—cannot be taught in a classroom. It transforms a student into a healer.”',
            'p6' => "We are proud of the high standard of care our students contribute to the hospital and look forward to their graduation into the workforce.",
        ],
    ],
    // Add more posts here
];

// Get the post key from the URL query string
$post_key = isset($_GET['post']) ? $_GET['post'] : '';

// Check if the post key exists in the data array
if (array_key_exists($post_key, $posts_data)) {
    $post = $posts_data[$post_key];
} else {
    // Fallback if the post is not found
    $post = [
        'title' => 'Blog Post Not Found',
        'author' => 'System',
        'date' => date('M d, Y'),
        'category' => 'Error',
        'comments' => 0,
        'image' => 'assets/img/blog/default-error.webp',
        'tags' => ['Error', 'Missing'],
        'content_blocks' => [
            'p1' => 'The article you are looking for does not exist. Please check the URL or navigate back to the main blog page.',
            'quote' => '“We apologize for the inconvenience.”',
            'p2' => 'Click the link in the sidebar to return to the list of articles.',
        ],
    ];
}
?>

  <main class="main blog-details-page">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading clinical-bg">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <!-- DYNAMIC TITLE -->
              <h1 class="heading-title"><?php echo $post['title']; ?></h1>
              <p class="mb-0">
                A deeper look into <?php echo strtolower($post['category']); ?>.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li class="current">Post Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Blog Details Section -->
    <section id="blog-details" class="blog-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-8">

            <article class="article post-entry">

              <div class="post-img">
                <!-- DYNAMIC IMAGE -->
                <img src="<?php echo $post['image']; ?>" alt="Blog Post Image" class="img-fluid">
              </div>

              <h2 class="title">
                <!-- DYNAMIC TITLE -->
                <?php echo $post['title']; ?>
              </h2>

              <div class="meta-top">
                <ul>
                  <!-- DYNAMIC AUTHOR & DATE -->
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?php echo $post['author']; ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="<?php echo date('Y-m-d', strtotime($post['date'])); ?>"><?php echo $post['date']; ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#"><?php echo $post['comments']; ?> Comments</a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <!-- DYNAMIC CONTENT BLOCKS -->
                <?php foreach ($post['content_blocks'] as $tag => $content): ?>
                  <?php if (strpos($tag, 'p') === 0): ?>
                    <p><?php echo $content; ?></p>
                  <?php elseif (strpos($tag, 'h4') === 0): ?>
                    <h4><?php echo $content; ?></h4>
                  <?php elseif ($tag === 'quote'): ?>
                    <blockquote>
                      <p><?php echo $content; ?></p>
                    </blockquote>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#"><?php echo $post['category']; ?></a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <?php foreach ($post['tags'] as $tag): ?>
                    <li><a href="#"><?php echo $tag; ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End post article -->

            <!-- Comments Section (Static Placeholder) -->
            <div class="comments">

              <h4 class="comments-count">4 Comments</h4>

              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt="Commenter"></div>
                  <div>
                    <h5><a href="#">Jane Doe</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2024-09-17">17 Sep, 2024</time>
                    <p>
                      Thank you for this crucial reminder! I just checked my family's nets and found a tear. Fixed it immediately.
                    </p>
                  </div>
                </div>
              </div><!-- End comment #1 -->

              <div class="reply-form">
                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <form action="">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Your Email*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>
                </form>
              </div>

            </div><!-- End comments section -->

          </div>

          <div class="col-lg-4">
            <div class="sidebar">
              <!-- Re-use the sidebar structure from blog.php for consistency -->

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

            </div>
          </div>

        </div>

      </div>

    </section><!-- End Blog Details Section -->

  </main>

<?php include 'footer.php'; ?>