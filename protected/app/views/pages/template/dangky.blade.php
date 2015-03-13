{{ HTML::script('sximo/themes/shop/js/jquery.jcombo.min.js') }}
<div class="container">
			<div class="box register">
                <h2>Đăng ký miễn phí</h2>
                <p>Vậy còn chờ gì ? Hãy tham gia ngay!</p>
                @if(Session::has('message_dangky'))
                     {{ Session::get('message_dangky') }}
                @endif
                <ul class="parsley-error-list">
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
                <form  method="post" action="{{URL::to('home/dangky')}}" enctype="multipart/form-data">
                	<div class="group-name">Thông tin tài khoản</div>
                    <div class="input-group">
                      <span class="input-group-addon">Tài khoản <font color="red">*</font></span>
                      <input  type="text" class="form-control" name="username" value="{{$input['username']}}" >
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Mật khẩu <font color="red">*</font></span>
                      <input type="password" class="form-control" name="password">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Nhập lại mật khẩu <font color="red">*</font></span>
                      <input type="password" class="form-control" name="repassword">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Email <font color="red">*</font></span>
                      <input type="text" class="form-control" name="email" value="{{$input['email']}}">
                    </div>
                    <div class="group-name">Thông tin cá nhân</div>
                    <div class="input-group">
                      <span class="input-group-addon">Tên của bạn <font color="red">*</font></span>
                      <input type="text" class="form-control" name="name" value="{{$input['name']}}">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Giới tính <font color="red">*</font></span>
                      <select name="sex" class="form-control">
                        <option value="1" @if($input['sex'] == 1) selected @endif>Nam</option>
                        <option value="0" @if($input['sex'] == 0) selected @endif>Nữ</option>
                      </select>
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Số điện thoại <font color="red">*</font></span>
                      <input type="text" class="form-control" name="phone" value="{{$input['phone']}}">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Địa chỉ </span>
                      <input type="text" class="form-control" name="address" value="{{$input['address']}}">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Tỉnh/Thành <font color="red">*</font></span>
                      <select name="provinceid" id="city" class="form-control">
                      </select>
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Quận/Huyện <font color="red">*</font></span>
                      <select name="districtid" id="district" class="form-control">
                      </select>
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Phường/Xã <font color="red">*</font></span>
                      <select name="wardid" id="ward" class="form-control">
                      </select>
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Ảnh đại diện</span>
                      <input type="file" class="form-control" name="file" >
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">Mã bảo mật <font color="red">*</font></span>
                      @if(CNF_RECAPTCHA =='true') 

                        {{ Form::captcha(array('theme' => 'white')); }}

                      @endif
                    </div>
                  	<button type="submit" class="btn btn-default submit">Đăng ký</button>
                </form>
			</div>
        </div><!-- container -->
        <script type="text/javascript">
          $(document).ready(function() { 
            $("#city").jCombo("{{ URL::to('ward/comboselect?filter=province:provinceid:name') }}",
            {  selected_value : "{{$input['provinceid']}}",initial_text: "-- Tỉnh/Thành --", });
            $("#city").on('change', function() {
              var val = this.value ; 
              $("#district").jCombo("{{ URL::to('ward/comboselect?filter=district:districtid:name:') }}"+val,
            {  selected_value : "{{$input['districtid']}}",initial_text: "-- Quận/Huyện --", });
            });
            $("#district").on('change', function() {
              var val = this.value ; 
              $("#ward").jCombo("{{ URL::to('ward/comboselect?filter=ward:wardid:name:') }}"+val,
            {  selected_value : "{{$input['wardid']}}",initial_text: "-- Phường/Xã --", });
            });
          });
        </script>