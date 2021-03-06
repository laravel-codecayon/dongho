	<div class="table-footer">
	<div class="row">
	 <div class="col-sm-5">
	  <div class="table-actions" style=" padding: 10px 0">
	 

		   {{--*/ $pages = array(5,10,20,30,50) /*--}}
		   {{--*/ $orders = array('asc','desc') /*--}}
		<select name="rows" data-placeholder="{{ Lang::get('core.grid_show') }}" class="select-alt"  >
		  <option value=""> Page </option>
		  @foreach($pages as $p)
		  <option value="{{ $p }}" 
			@if(isset($pager['rows']) && $pager['rows'] == $p) 
				selected="selected"
			@endif	
		  >{{ $p }}</option>
		  @endforeach
		</select>
		<select name="sort" data-placeholder="{{ Lang::get('core.grid_sort') }}" class="select-alt"  >
		  <option value=""> Sort </option>	 
		  @foreach($test as $field)
			  <option value="{{ $field['name'] }}" 
				@if(isset($pager['sort']) && $pager['sort'] == $field['name']) 
					selected="selected"
				@endif	
			  >{{ $field['label'] }}</option>
		  @endforeach
		 
		</select>	
		<select name="order" data-placeholder="{{ Lang::get('core.grid_order') }}" class="select-alt">
		  <option value=""> Order</option>
		   @foreach($orders as $o)
		  <option value="{{ $o }}"
			@if(isset($pager['order']) && $pager['order'] == $o)
				selected="selected"
			@endif	
		  >{{ ucwords($o) }}</option>
		 @endforeach
		</select>	
		<button type="submit" id="filter_footer" class="btn btn-primary btn-sm">GO</button>	
		<input type="hidden" name="md" value="{{ (isset($masterdetail['filtermd']) ? $masterdetail['filtermd'] : '') }}" />

	  </div>					
	  </div>
	   <div class="col-sm-3">
		<p class="text-center" style=" padding: 25px 0">
		{{ Lang::get('core.grid_displaying') }} :  <b>{{ $pagination->getFrom() }}</b> 
		{{ Lang::get('core.grid_to') }} <b>{{ $pagination->getTo() }}</b> 
		{{ Lang::get('core.grid_of') }} <b>{{ $pagination->getTotal() }}</b>
		</p>
	   </div>
		<div class="col-sm-4">			 
	  {{ $pagination->appends($pager)->links() }}
	  </div>
	  </div>
	</div>	
	
	