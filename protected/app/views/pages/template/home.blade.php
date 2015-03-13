{{--*/ $guest = SiteHelpers::listposthome(1) /*--}}
{{--*/ $driver = SiteHelpers::listposthome(0) /*--}}
<div class="container">
          <div class="box home-list clearfix">
              <div class="thread-list guest">
                  <div class="box-heading"><span>Hành khách</span></div>
                  <ul>

                  @foreach($guest as $item)
                        {{ SiteHelpers::templatePost($item,1) }}
                    @endforeach
                    <li class="more">Và còn hàng ngàn hành khách khác ... <a href="{{URL::to('hanh-khach.html')}}">Xem tất cả hành khách</a></li>
                    </ul>
                </div><!-- guest-list -->
                <div class="thread-list driver">
                  <div class="box-heading"><span>Tài xế</span></div>
                  <ul>
                  @foreach($driver as $item)
                        {{ SiteHelpers::templatePost($item,1) }}
                    @endforeach
                    <li class="more">Và còn hàng ngàn tài xế khác ... <a href="{{URL::to('tai-xe.html')}}">Xem tất cả tài xế</a></li>
                    </ul>
                </div><!-- driver-list -->
            </div><!-- home-list -->
            {{--*/ $advertise = SiteHelpers::getAdvertise(0) /*--}}
            @if(count($advertise) >0)
            	<div class="box home-ads row clearfix">
                	@foreach($advertise as $ads)
                    	<div><a href="{{$ads->advertise_link}}"><img src="{{URL::to('')}}/uploads/advertise/thumb/{{$ads->image}}"></a></div>
                    @endforeach
                </div><!-- home-ads -->
            @endif
            
            <!--<div class="box home-links carousel clearfix">
              <div class="box-heading"><span>Liên kết</span></div>
                <ul class="row">
                  <li><a href="#"><img src="images/lienket.jpg"></a></li>
                    <li><a href="#"><img src="images/lienket.jpg"></a></li>
                    <li><a href="#"><img src="images/lienket.jpg"></a></li>
                    <li><a href="#"><img src="images/lienket.jpg"></a></li>
                    <li><a href="#"><img src="images/lienket.jpg"></a></li>
                    <li><a href="#"><img src="images/lienket.jpg"></a></li>
                    <li><a href="#"><img src="images/lienket.jpg"></a></li>
                    <li><a href="#"><img src="images/lienket.jpg"></a></li>
                </ul>
                <a id="prev" class="prev" href="#">&lt;</a>
                <a id="next" class="next" href="#">&gt;</a>
                <div id="pager" class="pager"></div>

            </div>-->
      <script>
            $(document).ready(function() {
             
                $('.home-links .row').carouFredSel({
                    prev: '#prev',
                    next: '#next',
                    pagination: "#pager",
                    scroll: 1000
                });
                
            });
            </script>

        </div><!-- container -->