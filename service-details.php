<?php
include 'header.php';

// --- SERVICE DATA SOURCE (SIMULATING A DATABASE) ---
$services_data = [
    'general_med' => [
        'name' => 'General Medical Care',
        'title' => 'Primary & General Medical Care',
        'subtitle' => 'Comprehensive medical services for diagnosis and management of acute and chronic illnesses in adults and children.',
        'image' => 'assets/img/health/consultation-1.webp',
        'content_title' => 'Your First Step to Health',
        'description_1' => "Our General Medicine department is dedicated to being your primary point of contact for all health concerns. We focus on accurate diagnosis, effective non-surgical treatment, and personalized long-term care plans for chronic conditions.",
        'description_2' => "We emphasize a holistic approach, ensuring that your treatment is integrated with our preventative and spiritual care services, upholding the mission of St. Luke's Hospital.",
        'features_1' => ['Management of Chronic Conditions (Diabetes, Hypertension)', 'Routine Check-ups and Health Screenings', 'Acute Illness Treatment'],
        'features_2' => ['Referral to Specialists as needed', 'Inpatient and Outpatient Services', 'Nutritional and Lifestyle Counseling'],
    ],
    'mch' => [
        'name' => 'Maternal & Child Health',
        'title' => 'Maternal & Child Health and Midwifery',
        'subtitle' => 'Dedicated care for women during pregnancy, childbirth, and postnatally, along with comprehensive pediatric services for children.',
        'image' => 'assets/img/health/maternity-5.webp',
        'content_title' => 'Safe and Compassionate Beginnings',
        'description_1' => "Our Maternal and Child Health (MCH) services are the heartbeat of St. Luke's, offering full-spectrum care from family planning and antenatal clinics through delivery and well-child visits. Our department integrates seamlessly with the College of Midwifery, ensuring care is always evidence-based and delivered with great compassion.",
        'description_2' => "We focus on a woman-centered approach, ensuring that mothers and newborns receive the holistic care—physical, emotional, and spiritual—that aligns with our Catholic mission.",
        'features_1' => ['Comprehensive Antenatal & Postnatal Care', 'Skilled Birth Attendance and Delivery Suites', 'Neonatal and Pediatric Wards'],
        'features_2' => ['Family Planning and Gynaecological Consultations', 'Immunization and Well-Child Clinics', 'Lactation and Nutritional Counseling'],
    ],
    'emergency' => [
        'name' => 'Emergency Care',
        'title' => '24/7 Emergency & Trauma Care',
        'subtitle' => 'Immediate, round-the-clock medical attention for critical injuries, accidents, and sudden life-threatening illnesses.',
        'image' => 'assets/img/health/emergency-3.webp',
        'content_title' => 'Ready to Respond Instantly',
        'description_1' => "The Emergency & Trauma Unit at St. Luke’s is staffed 24 hours a day by a dedicated team trained in critical care and rapid response. We are equipped to handle a wide range of medical and surgical emergencies with urgency and precision.",
        'description_2' => "Our trauma protocols ensure swift stabilization and triage, ensuring patients with the most critical needs receive immediate attention. We work closely with our surgical and diagnostic teams.",
        'features_1' => ['Trauma Stabilization and Resuscitation', 'Rapid Triage and Assessment', 'Ambulance and Transport Coordination'],
        'features_2' => ['On-site Diagnostic Support', 'Immediate Access to Theatre/Wards', 'Observation and Short-Stay Unit'],
    ],
    'diagnostics' => [
        'name' => 'Diagnostic Services',
        'title' => 'Advanced Diagnostic Services',
        'subtitle' => 'Providing accurate, timely diagnostic results through state-of-the-art laboratory and medical imaging facilities.',
        'image' => 'assets/img/health/laboratory-3.webp',
        'content_title' => 'The Foundation of Accurate Care',
        'description_1' => "Accurate diagnosis is the cornerstone of effective treatment. Our laboratory and imaging departments utilize modern technology to provide fast, reliable results for our clinical staff and external partners.",
        'description_2' => "We offer a wide range of tests from routine blood work to specialized microbiology, ensuring that treatment plans are based on precise, evidence-based data.",
        'features_1' => ['Clinical Chemistry and Haematology', 'Microbiology and Parasitology', 'Blood Transfusion Services'],
        'features_2' => ['Ultrasound and X-Ray Imaging', 'Quality Assurance and Control', 'Experienced Lab Technicians'],
    ],
    'preventive' => [
        'name' => 'Preventive Health',
        'title' => 'Preventive Health & Wellness Programs',
        'subtitle' => 'Focusing on community wellness, health education, and immunization drives to prevent illness and promote long-term health.',
        'image' => 'assets/img/health/preventive-5.webp',
        'content_title' => 'Investing in Community Health',
        'description_1' => "Our mission extends beyond the hospital walls. St. Luke’s is committed to improving public health through proactive preventative programs, including community outreach and health education initiatives led by our medical and college teams.",
        'description_2' => "We run regular campaigns for immunization, non-communicable disease screening, and maternal health education, often utilizing our student body for supervised practical experience.",
        'features_1' => ['Routine Immunization Programs (Child/Adult)', 'Health Education Workshops', 'Chronic Disease Screening Camps'],
        'features_2' => ['Community Mobile Clinics (Outreach)', 'Wellness and Lifestyle Counseling', 'Student-Led Health Projects'],
    ],
    'surgery' => [
        'name' => 'General Surgery',
        'title' => 'General Surgery Department',
        'subtitle' => 'Offering compassionate, comprehensive surgical care across various disciplines, supported by dedicated surgical and nursing teams.',
        'image' => 'assets/img/health/surgery-8.webp',
        'content_title' => 'Commitment to Safe, Ethical Procedures',
        'description_1' => "At St. Luke Catholic Hospital, our General Surgery department is committed to excellence in patient care, ensuring every procedure is performed with the highest ethical standards and patient safety as the primary concern. Our theatre is equipped for emergency and planned operations, and our post-operative care is managed by our highly trained nursing staff, ensuring optimal recovery.",
        'description_2' => "We collaborate closely with other departments, including diagnostics and intensive care, to ensure a seamless process from pre-op assessment to full recovery. This comprehensive approach is part of our holistic, faith-based healing mission.",
        'features_1' => ['Emergency and Trauma Surgery', 'Abdominal & Visceral Surgery (e.g., Appendectomy, Hernia Repair)', 'Basic Orthopedic Procedures'],
        'features_2' => ['Minor Procedures (Lump excision, Wound management)', 'Post-operative Monitoring and Care', 'Specialist Referrals and Consultations'],
    ]
];

// Get the service key from the URL query string, defaulting to 'surgery' if none is provided
$service_key = isset($_GET['service']) ? $_GET['service'] : 'surgery';

// Check if the service key exists in the data array
if (array_key_exists($service_key, $services_data)) {
    $service = $services_data[$service_key];
} else {
    // Fallback data if the key is invalid
    $service = [
        'name' => 'Service Not Found',
        'title' => 'Service Not Found',
        'subtitle' => 'The requested service details could not be found. Please return to the services page.',
        'image' => 'assets/img/health/default-error.webp',
        'content_title' => 'Error: Invalid Request',
        'description_1' => 'Please check the URL or click the link below to view all available services.',
        'description_2' => '',
        'features_1' => ['Return to Services Page'],
        'features_2' => ['Call Hospital for Help'],
    ];
}
?>

  <main class="main service-details-page">

    <div class="page-title">
      <div class="heading clinical-bg">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title"><?php echo $service['title']; ?></h1>
              <p class="mb-0">
                <?php echo $service['subtitle']; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li class="current"><?php echo $service['name']; ?></li>
          </ol>
        </div>
      </nav>
    </div><section id="service-details" class="service-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="service-details-wrap">
              <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['name']; ?> Image" class="img-fluid service-image">
              <h3><?php echo $service['content_title']; ?></h3>
              <p>
                <?php echo $service['description_1']; ?>
              </p>
              <p>
                <?php echo $service['description_2']; ?>
              </p>

              <h4>Core Services Offered</h4>
              <div class="row features-list">
                <div class="col-md-6">
                  <ul>
                    <?php foreach ($service['features_1'] as $feature): ?>
                      <li><i class="bi bi-check-circle"></i> <span><?php echo $feature; ?></span></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul>
                    <?php foreach ($service['features_2'] as $feature): ?>
                      <li><i class="bi bi-check-circle"></i> <span><?php echo $feature; ?></span></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>

              </div>
          </div>

          <div class="col-lg-4">
            <div class="service-sidebar">

              <div class="sidebar-block categories">
                <h4>All Services</h4>
                <ul>
                  <?php foreach ($services_data as $key => $data): ?>
                    <li>
                        <a href="service-details.php?service=<?php echo $key; ?>">
                            <i class="bi bi-chevron-right"></i> <?php echo $data['name']; ?>
                            <?php if ($key == $service_key): ?>
                                <span class="active">(Current)</span>
                            <?php endif; ?>
                        </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <div class="sidebar-block contact-info text-center">
                <h4>Need Immediate Care?</h4>
                <p>For urgent medical assistance, please call our 24/7 hotline.</p>
                <a href="tel:[Emergency Phone Number]" class="btn btn-primary d-block"><i class="bi bi-telephone"></i> [Emergency Phone Number]</a>
                <a href="appointment.php" class="btn btn-secondary mt-3 d-block">Request a Consultation</a>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section></main>

<?php include 'footer.php'; ?>