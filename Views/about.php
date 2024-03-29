<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
  <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
    <h3 class="display-3 font-weight-bold text-white">About Us</h3>
    <div class="d-inline-flex text-white">
      <p class="m-0"><a class="text-white" href="">Home</a></p>
      <p class="m-0 px-2">/</p>
      <p class="m-0">About Us</p>
    </div>
  </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <img class="img-fluid rounded mb-5 mb-lg-0" src="<?= APP_URL ?>public/assets/img/about-3.jpg" alt="" />
      </div>
      <div class="col-lg-7">
        <p class="section-title pr-5">
          <span class="pr-2">About Us WikiGenius</span>
        </p>
        <h1 class="mb-4">Unleashing Collaborative Intelligence</h1>
        <p>
          WikiGenius transforms ideas into shared knowledge effortlessly. With an intuitive interface, it empowers users
          to create, edit, and explore information seamlessly. Join WikiGenius to revolutionize how knowledge is crafted
          and shared in a smarter, connected world!
        </p>
        <div class="row pt-2 pb-4">
          <div class="col-6 col-md-4">
            <img class="img-fluid rounded" src="<?= APP_URL ?>public/assets/img/wiki.jpg" alt=""
              style="width: 75%; height: 7.7rem" />
          </div>
          <div class="col-6 col-md-8">
            <ul class="list-inline m-0">
              <li class="py-2 border-top border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Effortless Wiki Creation
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Seamless Collaboration
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Intuitive Knowledge Discovery
              </li>
            </ul>
          </div>
        </div>
        <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- Facilities Start -->
<div class="container-fluid pt-5">
  <div class="container pb-3">
    <div class="row">
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Quick Creation</h4>
            <p class="m-0">
              Create wikis instantly with WikiGenius swift interface. Share knowledge effortlessly in a matter of
              seconds!
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Vibrant Editing</h4>
            <p class="m-0">
              Craft dynamic wikis with rich content editing. Make your information visually engaging and easy to
              understand.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Precise Tagging</h4>
            <p class="m-0">
              Boost discoverability by adding multiple tags to your wikis. Help others find your content with pinpoint
              accuracy.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Effortless Editing</h4>
            <p class="m-0">
              Seamlessly update your wikis with WikiGenius easy editing tools. Keep your information current with
              minimal effort.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Organized Categories</h4>
            <p class="m-0">
              Keep things tidy with category management. Associate wikis with specific categories for a structured
              platform.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Relevance Matters</h4>
            <p class="m-0">
              Archive outdated wikis with WikiGenius to prioritize valuable, current content effortlessly.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Facilities Start -->

<!-- Team Start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Our Authors</span>
      </p>
      <h1 class="mb-4">Meet Our Authors</h1>
    </div>
    <div class="row">
      <?php $counter = 0 ?>
      <?php foreach ($data["users"] as $user ): ?>
        <?php if ($counter < 4): ?>
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
            <img class="img-fluid w-100" src="<?= APP_URL ?>public/<?= $user->image ?>" alt="" />
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <h4>
            <?= $user->username ?>
          </h4>
        </div>
        <?php $counter++; ?>
          <?php endif; ?>
        <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- Team End -->
