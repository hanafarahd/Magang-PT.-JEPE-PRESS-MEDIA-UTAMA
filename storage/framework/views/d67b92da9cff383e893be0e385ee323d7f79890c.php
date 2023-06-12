

<?php $__env->startSection('content'); ?>

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="d-flex align-items-center">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/blogs_details" style="color: #0f88bd">Back to Artikel</a></li>
            <li class="title"><?php echo e($blog->title); ?></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">


              <h2 class="title"><?php echo e($blog->title); ?></h2>

              <div class="meta-top">
                
              </div><!-- End meta top -->

              <div class="content">
                <p class="post-summernote"><?php echo $blog->summernote; ?></p>
                
              </div><!-- End post content -->

              <div class="meta-bottom">
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->


          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit" style="background-color: #0f88bd"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3 class="sidebar-title"><?php echo e($category->category); ?></h3>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div><!-- End sidebar categories-->

              <!-- ======= Recent Posts ======= -->
              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">
                  <?php $__currentLoopData = $recent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="post-item mt-3">
                    <img src="<?php echo e(asset('imagepost/'.$recent->image)); ?>" alt="">
                    <div>
                      <h2 class="title">
                        <a href="<?php echo e(url('/blog_details/'.$recent->slug)); ?>"><?php echo e($recent->title); ?></a>
                      </h2>
                      <p class="post-date">
                      <time datetime="2022-01-01"><?php echo e($recent->created_at); ?></time>
                      </p>
                    </div>
                  </div><!-- End recent post item-->
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

              </div><!-- End sidebar recent posts-->


            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="background-color: #FE8E3D">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="/" class="logo d-flex align-items-center">
            <span>Kantor Pusat</span>
          </a>
          <p>PT. JEPE PRESS MEDIA UTAMA</p>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/JPBooks.id/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/jpbooksid/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCH-zcTpzZm7oA00GWaFKUeg" class="youtube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="#katalog">Katalog</a></li>
              <li><a href="/blogs_details">Artikel</a></li>
              <li><a href="/contact">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Jl. Karah Agung I No.45  <br>
            Surabaya, SBY 60232 <br>
            Jawa Timur <br><br>
            <strong>Phone:</strong> 031-8289999 (ext: 303) <br>
            <strong>Fax:</strong> 031-8281004 <br>
            <strong>Jam Kerja:</strong> 08.00-17.00 <br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center" style="background-color: #0f88bd"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('impact/assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('impact/assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('impact/assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset('impact/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('impact/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('impact/assets/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('impact/assets/js/main.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blog-details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\jpbooks\resources\views/blog-details.blade.php ENDPATH**/ ?>