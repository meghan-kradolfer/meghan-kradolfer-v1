
<?php
/* Template Name: Floorplan */
$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0];

$bgImage = get_post_thumbnail_id() ? $featuredImage : get_stylesheet_directory_uri().'/assets/images/purity_banner1.jpg';

get_header();
?>
<main class="basic floorplan" >
    <?php get_template_part( 'templates/parts/page-header', 'none' ); ?>
  <section class="basic-content text-center white">
    <div class="container padding-md">
      <h2>See what make a Purity Home so unique</h2>
      <em class="visible-lg">Click on areas of our floorplan to see what makes up a Purity Home</em>

      <div id="floorplan-nav">
        <ul>
          <li data-id="4">
            Terra Lana Insulation
          </li>
          <li data-id="3">
            Magnum Board
          </li>
          <li data-id="5">
            Foreverbreathe™ Paints
          </li>
          <li data-id="1">
            Foreverbreathe™ Oil Coatings
          </li>
          <li data-id="2">
            Foreverbeech Flooring
          </li>
          <li data-id="6">
            LVL Portal Framing Construction
          </li>
          <li data-id="9">
            Foreverbreathe™ Wall System
          </li>
        </ul>
      </div>

      <div id="floorplan-map">
        <img width=1200 height=659 src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/interactive_floorplan.jpg" alt="Interactive floorplan, Purity Homes" />

        <svg width="1200" height="659" class="floorplan-sections">

        <polygon id="area_1" class="section"
                 points="307,509 312,501 312,483 511,478 513,496 537,496 542,502"
                 data-title="Foreverbreathe™ Oil Coatings"
                 data-desc="100% natural timber coatings using breathable plant-based chemistry"
                 data-href="/foreverbreathe-oil-coatings" ></polygon>

        <polygon id="area_2" class="section"
                 points="581,494 581,457 604,455 604,447 656,446 650,486 650,486 658,494"
                 data-title="Foreverbeech Flooring"
                 data-desc="Sustainably harvested West Coast Foreverbeech flooring, decking and cladding"
                 data-href="http://www.foreverbeech.co.nz" ></polygon>
        <polygon id="area_2-1" class="section"
                 points="808,489 808,445 834,443 848,449 848,455 947,487"
                 data-title="Foreverbeech Flooring"
                 data-desc="Sustainably harvested West Coast Foreverbeech flooring, decking and cladding"
                 data-href="http://www.foreverbeech.co.nz" ></polygon>
        <polygon id="area_2-2" class="section"
                 points="307,500 312,483 511,478 511,495"
                 data-title="Foreverbeech Flooring"
                 data-desc="Sustainably harvested West Coast Foreverbeech flooring, decking and cladding"
                 data-href="http://www.foreverbeech.co.nz"></polygon>
        <polygon id="area_2-3" class="section"
                 points="974,493 1075,491 1075,481 973,439"
                 data-title="Foreverbeech Flooring"
                 data-desc="Sustainably harvested West Coast Foreverbeech flooring, decking and cladding"
                 data-href="http://www.foreverbeech.co.nz" ></polygon>
        <polygon id="area_2-4" class="section"
                 points="238,500 243,486 285,487 285,500"
                 data-title="Foreverbeech Flooring"
                 data-desc="Sustainably harvested West Coast Foreverbeech flooring, decking and cladding"
                 data-href="http://www.foreverbeech.co.nz" ></polygon>

        <polygon id="area_3" class="section"
                 points="100,500 100,350 297,349 300,500 286,500 285,390 235,390 236,500  "
                 data-title="Magnum Board"
                 data-desc="Breathable exterior cladding and rigid air barrier and interior lining"
                 data-href="http://www.hardie-thomson.co.nz" ></polygon>

        <polygon id="area_4" class="section"
                 points="552,323,567,324,567,308,579,294,578,187,690,187,703,171,40,157,42,177,86,176,88,516,475,510,484,499,580,494,578,340,537,340"
                 data-title="Terra Lana"
                 data-desc="Terra Lana natural wool insulation for floors, walls and ceiling"
                 data-href="http://www.terralana.co.nz/" ></polygon>


        <polygon id="area_5" class="section"
                 points="580,212,592,187,962,191,836,262,581,261"
                 data-title="Foreverbreathe™ Paints"
                 data-desc="Breathable exterior and interior paint"
                 data-href="http://www.hardie-thomson.co.nz/" id="area_5"></polygon>

        <polygon id="area_10" class="section"
                 points="959,323,959,191,691,186,706,170,1008,176,1008,193,976,191,973,497,476,509,485,497,526,494,524,357,533,347,535,493,960,486,958,341,540,342,552,326,567,325,567,307,579,288,581,321"
                 data-title="Breathable cladding options, Foreverbeech, Earthen and Magnumboard"
                 data-desc=""
                 data-href=""></polygon>

        <polygon id="area_7" class="section"
                 points="399,481 399,378 450,378 450,483"
                 data-title="Plywood kitchens, internal doors and bathroom cabinetry"
                 data-desc="Our homes are MDF-free"
                 data-href=""></polygon>
        <polygon id="area_7-2" class="section"
                 points="269,484 268,389 285,389 287,486"
                 data-title="Plywood kitchens, internal doors and bathroom cabinetry"
                 data-desc="Our homes are MDF-free"
                 data-href=""></polygon>
        <polygon id="area_7-3" class="section"
                 points="665,491 666,452 804,449 804,490"
                 data-title="Plywood kitchens, internal doors and bathroom cabinetry"
                 data-desc="Our homes are MDF-free"
                 data-href="" ></polygon>
        <polygon id="area_7-3" class="section"
                 points="649,486,649,440,791,435,810,443,808,491,663,495"
                 data-title="Plywood kitchens, internal doors and bathroom cabinetry"
                 data-desc="Our homes are MDF-free"
                 data-href=""></polygon>
        <polygon id="area_7-3" class="section"
                 points="223,323,223,266,233,266,230,259,254,259,255,266,263,266,263,322"
                 data-title="Plywood kitchens, internal doors and bathroom cabinetry"
                 data-desc="Our homes are MDF-free"
                 data-href="" ></polygon>
        <polygon id="area_7-4" class="section"
                 points="544,495,545,385,576,385,575,492"
                 data-title="Plywood kitchens, internal doors and bathroom cabinetry"
                 data-desc="Our homes are MDF-free"
                 data-href=""></polygon>

        <polygon id="area_8" class="section"
                 points="79,588,78,529,128,529,129,590"
                 data-title="Raised Pole Foundation"
                 data-desc=""
                 data-href=""></polygon>
        <polygon id="area_8-1" class="section"
                 points="551,576,551,513,603,512,606,576"
                 data-title="Raised Pole Foundation"
                 data-desc=""
                 data-href=""></polygon>
        <polygon id="area_8-2" class="section"
                 points="939,568,940,506,992,505,993,570"
                 data-title="Raised Pole Foundation"
                 data-desc=""
                 data-href="" ></polygon>
        <polygon id="area_9" class="section"
                 points="92,502,85,179,42,177,42,158,706,170,692,187,577,185,578,294,568,310,566,184,98,179,100,323,549,324,541,341,102,340,101,505"
                 data-title="Foreverbreathe™ Wall System"
                 data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/foreverbreathe.jpg"
                 data-href="/foreverbreathe"></polygon>

        <polygon id="area_6" class="section"
                 data-title="LVL Portal Framing Construction"
                 points="580,493,579,183,564,185,538,260,541,465,552,465,549,259,567,207,570,493"></polygon>


        <polygon id="area_6_1" class="section"
                 data-title="LVL Portal Framing Construction"
                 points="91,500,87,176,118,194,121,476,113,476,109,202,97,194,102,506,91,506"></polygon>

        <polygon id="area_6_2" class="section"
                 data-title="LVL Portal Framing Construction"
                 points="972,491,972,191,960,192,834,261,836,441,848,441,849,265,961,206,958,492"></polygon>

        </svg>

        <div id="overlay"></div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
<script type="text/javascript">

  function showArea($this, action) {

    function insertHTML(title, desc, link, cords, img) {
      $('polygon.section').removeClass('active');
      $this.addClass('active');
      var btnLink  = link ? '<a class="btn btn-white btn-block" href="'+link+'" target="_blank">view more</a>' : '';
      var img = img ? '<img class="overlay-img" src="'+img+'" />' : '';
      desc = desc ? '<p>'+desc+'</p>' : '';
      $('#overlay').html('<div class="content"><span class="overlay-close">&times;</span><h3>'+title+'</h3>'+desc+img+btnLink+'</div>');
      $('#overlay').css('opacity', 1);
      $('#overlay').css('top', (cords[1] - 200)+'px').css('left', (cords[0] - 100)+'px');
      $('.overlay-close').click(function() {
        $('#overlay').html('');
        $('li').removeClass('active');
        $('polygon.section').removeClass('active');
      });
    }

    var title = $this.data('title'),
      desc = $this.data('desc'),
      link = $this.data('href'),
      img = $this.data('img'),
      cords = $this.attr("points").split(" ")[0].split(",");


    if(action == 'click') {

      $this.click(function(){
        insertHTML(title, desc, link, cords, img)
      });
    } else if (action == 'hover') {
      $this.mouseenter(function(){
        insertHTML(title, desc, link, cords, img)
      }).mouseleave(function(){
        $('#overlay').html('');
      });
    } else {
      insertHTML(title, desc, link, cords, img)
    }
  }

  $('polygon.section').each(function(){
    showArea($(this), 'click');
  });

  $('#floorplan-nav li').click(function() {
    $('li').removeClass('active');
    var id = $(this).data('id');
    $(this).addClass('active');
    showArea($('#area_'+id));
  });

  $('#floorplan-nav li').hover(function() {
    $('polygon').removeClass('active');
    var id = $(this).data('id');
    var $class = "area_"+id;
    $('*[id^="'+$class+'"]').addClass('active');
  });
</script>
