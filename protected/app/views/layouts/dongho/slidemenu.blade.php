@if(isset($menu) && $menu == "index")
{{--*/ $slide = SiteHelpers::getSlide(); /*--}}
<section class="row-section top-slideshow " style='  '>
	<div class="container"><!-----Slider------>

        <div id="myCarousel_9858811426156503" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            	<?php
			  	$i = 0;
              	foreach($slide as $sl){
					$class = $i == 0 ? 'class="active"' : '';
				?>
                	<li data-target="#myCarousel_9858811426156503" data-slide-to="{{$i}}" {{$class}}></li>
                <?php
					$i++;
				}
			   ?>
            </ol>
            <div class="carousel-inner">
            	<?php
				  	$i = 0;
	              	foreach($slide as $sl){
						$class = $i == 0 ? 'active' : '';
				?>
                <div class="item {{$class}}">
                    <a href="{{$sl->slideshow_link}}">	
                      <img src="{{URL::to('')}}/uploads/slideshow/{{$sl->slideshow_image}}" alt="">
                    </a>
                </div>
                <?php
                	$i++;}
                ?>
          </div>
          <a class="left carousel-control" href="#myCarousel_9858811426156503" role="button" data-slide="prev"><i class="fa fa-caret-left"></i></a>
          <a class="right carousel-control" href="#myCarousel_9858811426156503" role="button" data-slide="next"><i class="fa fa-caret-right"></i></a>
        </div><!-- /.carousel -->

<script>
	//script de chạy slide
	$(document).ready(function() {
	  var owl = $("#slide_9858811426156503");
	  owl.owlCarousel({
		  items : 6, 
		  itemsDesktop : [1000,4], 
		  itemsDesktopSmall : [900,3],
		  itemsTablet: [600,2],
		  itemsMobile : false
	});
	  // Custom Navigation Events
	  $(".next_9858811426156503").click(function(){
		owl.trigger('owl.next');
	  })
	  $(".prev_9858811426156503").click(function(){
		owl.trigger('owl.prev');
	  })
	});

</script></div></section>
@endif