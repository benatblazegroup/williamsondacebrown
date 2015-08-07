<?php include('siteadmin/runtime.php');
  perch_layout('global.header', array(
    'title'=>'WDB Property &#124; Williamson Dace Brown',
    'desc'=>'Property Consultants, Chartered Surveyors, Managing Agents in the City and Central London',
)); ?>
<section class="banner grey-banner home-banner">
  <div class="container hidden-xs">
    <div id="wdb-carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#wdb-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#wdb-carousel" data-slide-to="1"></li>
        <li data-target="#wdb-carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="building" alt="...">
        </div>
        <div class="item">
          <img src="badge" alt="...">
        </div>
        <div class="item">
          <img src="building" alt="...">
        </div>
        <div class="item">
          <img src="badge" alt="...">
        </div>
        <div class="item ">
          <img src="building" alt="...">
        </div>
        <div class="item">
          <img src="badge" alt="...">
        </div>
        <div class="item">
          <img src="building" alt="...">
        </div>
        <div class="item">
          <img src="badge" alt="...">
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
    <h1 class="home-hero">A property consultancy for today</h1>
    <p>A team of Chartered Surveyors and property experts to help with all your professional services, property management, residential &amp; commercial sales and lettings.</p>
    <p>Authorised and Registered with the Financial Services Authority for insurance mediation activities only.</p>
    <div class="home-buttons">
      <a class="btn btn-default btn-olive" href="/propertylisting/archive.php?cat=residential" title="Residential">Residential</a>
      <a class="btn btn-default btn-olive" href="/propertylisting/archive.php?cat=commercial" title="Commercial">Commercial</a>
    </div>
  </div>
</section>
<?php perch_layout('global.footer'); ?>
