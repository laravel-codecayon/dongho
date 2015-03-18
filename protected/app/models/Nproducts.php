<?php
class Nproducts extends BaseModel  {
	
	protected $table = 'products';
	protected $primaryKey = 'ProductID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "  SELECT products.* FROM products  ";
	}
	public static function queryWhere(  ){
		
		return " WHERE products.ProductID IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "  ";
	}

	public static $rules=array(
			"ProductName" => "required",
			"UnitPrice" => "numeric",
			"file" => "mimes:gif,png,jpg,jpeg|image|max:20000",
		);
	
	public function columnTable(){
		$array = array(
			"ProductID" => array("label"=>Lang::get('core.table_id'), "type"=>"text", "name"=>"ProductID", "value" => ""),
			"ProductName" => array("label"=>Lang::get('core.table_name'), "type"=>"text", "name"=>"ProductName", "value" => ""),
			"UnitPrice" => array("label"=>Lang::get('core.table_price'), "type"=>"text", "name"=>"UnitPrice", "value" => ""),
			"CategoryID" => array("label"=>Lang::get('core.table_category'), "type"=>"select", "name"=>"CategoryID", "value" => "", "model"=>"categories", "id"=>"CategoryID", "show" =>"CategoryName"),
			"type_id" => array("label"=>Lang::get('core.table_type'), "type"=>"select", "name"=>"type_id", "value" => "", "model"=>"product_type", "id"=>"type_id", "show" =>"type_name"),
			"id_promotion" => array("label"=>Lang::get('core.table_promotion'), "type"=>"select_nola", "name"=>"id_promotion", "value" => "", "model"=>"promotion", "id"=>"id_promotion", "show" =>"name"),
			"status" => array("label"=>Lang::get('core.table_status'), "type"=>"radio", "name"=>"status", "value" => "","option"=>array("0"=>Lang::get('core.table_disable'),"1"=>Lang::get('core.table_enable'))),
			"is_hot" => array("label"=>Lang::get('core.hot'), "type"=>"radio", "name"=>"is_hot", "value" => "","option"=>array("0"=>Lang::get('core.no'),"1"=>Lang::get('core.yes'))),
			"position" => array("label"=>Lang::get('core.table_position'), "type"=>"text", "name"=>"position", "value" => ""),
			"created" => array("label"=>Lang::get('core.table_created'), "type"=>"date", "name"=>"created", "value" => ""),
		);
		return $array;
	}

}
