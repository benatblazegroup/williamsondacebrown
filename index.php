<?php include('siteadmin/runtime.php');
  perch_layout('global.header', array(
    'title'=>'WDB Property &#124; Williamson Dace Brown',
    'desc'=>'Property Consultants, Chartered Surveyors, Managing Agents in the City and Central London',
)); ?>
<section class="banner grey-banner home-banner">
  <div class="container hidden-xs">
    <div id="wdb-carousel" class="carousel" data-ride="carousel" data-interval="2000">
      <div class="carousel-inner" role="listbox">
      <span class="sr-only"><a href="#home-hero">Skip carousel</a></span>
        <div class="item active">
          <img src="/assets/img/carousel2.jpg" alt="Residential block in leafy suburb">
        </div>
        <div class="item">
          <img src="/assets/img/carousel3.jpg" alt="Small alms cottages">
        </div>
        <div class="item">
          <img src="/assets/img/carousel4.jpg" alt="Town centre shop fronts">
        </div>
        <div class="item ">
          <img src="/assets/img/carousel5.jpg" alt="City centre residential block">
        </div>
        <div class="item">
          <img src="/assets/img/carousel6.jpg" alt="Property consultants">
        </div>
        <div class="item">
          <img src="/assets/img/carousel7.jpg" alt="Chartered surveyors">
        </div>
        <div class="item">
          <img src="/assets/img/carousel8.jpg" alt="Managing agents">
        </div>
        <div class="item">
          <img src="/assets/img/carousel9.jpg" alt="City and Central">
        </div>
        <div class="item">
          <img src="/assets/img/carousel9.jpg" alt="All images shown in circles">
        </div>
        <div class="item">
          <img src="/assets/img/carousel1.jpg" alt="blank image - carousel to go round again.">
        </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#wdb-carousel" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#wdb-carousel" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container visible-xs text-center">
    <h1 class="text-center">Property consultants<br>
      Chartered surveyors<br>
      Managing agents<br>
      City and central</h1>
  </div>
</section>
<section class="banner olive-banner">
  <div class="container text-center">
    <h1 class="home-hero" id="home-hero">A property consultancy for today</h1>
    <p>A team of Chartered Surveyors and property experts to help with all your professional services, property management, residential &amp; commercial sales and lettings.</p>
    <p>Authorised and Registered with the Financial Services Authority for insurance mediation activities only.</p>
    <div class="home-buttons">
      <a class="btn btn-default btn-olive" href="/propertylisting/archive.php?cat=residential" title="Residential">Residential</a>
      <a class="btn btn-default btn-olive" href="/propertylisting/archive.php?cat=commercial" title="Commercial">Commercial</a>
    </div>
  </div>
</section>
<?php perch_layout('global.footer'); ?>
