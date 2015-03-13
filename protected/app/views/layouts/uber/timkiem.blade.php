{{ HTML::script('sximo/themes/shop/js/jquery.jcombo.min.js') }}
<section id="search">
    	<div class="container search clearfix">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" >
                <li id="tab_guest" class="active"><a href="javascript:"  >Hành khách</a></li>
                <li id="tab_driver" ><a href="javascript:" >Tài xế</a></li>
            </ul>
            <form id="formsearch" method="get" action="{{URL::to('')}}/hanh-khach.html">
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active clearfix" id="guest">
                	<div class="place start">
                    	<span>Nơi đi</span>
                        <select name="province_from" id="province_from" class="form-control">
                        </select>
                        <select name="district_from" id="district_from"  class="form-control">
                            </select>
                    </div><!-- start-place -->
                    <div class="place finish">
                    	<span>Nơi đến</span>
                         <select name="province_to" id="province_to"  class="form-control">
                            </select>
                        <select name="district_to" id="district_to" class="form-control">
                            </select>
                    </div><!-- finish-place -->
                    <button id="submit_search">Tìm kiếm</button>
                </div>
            </div>
          </form>
        </div><!-- container -->
    </section>
  <script type="text/javascript">
            $(document).ready(function() { 
                  $("#province_from").jCombo("{{ URL::to('ward/comboselect?filter=province:provinceid:name') }}",
                  {  selected_value : "79",initial_text: "-- Tỉnh/Thành --", });
                  $("#province_from").on('change', function() {
                    var val = this.value ; 
                    $("#district_from").jCombo("{{ URL::to('ward/comboselect?filter=district:districtid:name:') }}"+val,
                  {  selected_value : "",initial_text: "-- Quận/Huyện --", });
                  });
                  $("#province_to").jCombo("{{ URL::to('ward/comboselect?filter=province:provinceid:name') }}",
                  {  selected_value : "79",initial_text: "-- Tỉnh/Thành --", });
                  $("#province_to").on('change', function() {
                    var val = this.value ; 
                    $("#district_to").jCombo("{{ URL::to('ward/comboselect?filter=district:districtid:name:') }}"+val,
                  {  selected_value : "",initial_text: "-- Quận/Huyện --", });
                  });

                  $("#tab_guest").on('click',function() {
                      $(this).attr('class', 'active');
                      $("#formsearch").attr('action', '{{URL::to('')}}/hanh-khach.html');
                      $("#tab_driver").attr('class', '');
                  });
                  $("#tab_driver").on('click',function() {
                      $(this).attr('class', 'active');
                      $("#formsearch").attr('action', '{{URL::to('')}}/tai-xe.html');
                      $("#tab_guest").attr('class', '');
                  });
                  $("#submit_search").on('click', function() {
                     $("#formsearch").submit();
                    /* Act on the event */
                  });
              });
        </script>




