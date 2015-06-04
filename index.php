<?php include('siteadmin/runtime.php');
  perch_layout('global.header', array(
    'title'=>'WDB Property &#124; Williamson Dace Brown',
    'desc'=>'Property Consultants, Chartered Surveyors, Managing Agents in the City and Central London',
)); ?>
<section class="banner grey-banner home-banner">
  <div class="container hidden-xs">
    <a href="services.php">
      <div class="col-sm-3 home-circle" id="one">
          <img class="bottom" id="five" src="/assets/img/prop-consultants.png" alt="residential block in grounds">
      </div>
    </a>
    <a href="services.php">
      <div class="col-sm-3 home-circle" id="two">
        <img class="bottom" id="six" src="/assets/img/chartered-surveyors.png" alt="old residential house doorways">
      </div>
    </a>
    <a href="services.php">
      <div class="col-sm-3 home-circle" id="three">
        <img class="bottom" id="seven" src="/assets/img/managing-agents.png" alt="row of shops">
      </div>
    </a>
    <a href="services.php">
      <div class="col-sm-3 home-circle" id="four">
        <img class="bottom" id="eight" src="/assets/img/city-central.png" alt="City shop premises">
      </div>
    </a>
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
