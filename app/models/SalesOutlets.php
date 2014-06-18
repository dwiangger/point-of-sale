<?php
class SalesOutlets extends Eloquent
{
	protected $table = "sales_outlets";
   public static $rules = [
         'name' => 'required',
         'address' => 'required'
   ];

   public static function dropdownList()
   {
      return array('' => 'Select Outlet') + self::orderBy('name', 'asc')->get()->lists('name', 'id');
   }
}
