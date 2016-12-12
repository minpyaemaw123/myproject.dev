<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Apicontroller extends Controller
{
    //
	public function widgetData()
	{
		$rows = DB::table('widgets')
		->select('id as Id',
			'name as Name',
			DB::raw('DATE_FORMAT(created_at, "%m-%d-%Y") as Created'))
		->paginate(10);
		return response()->json($rows);
	}
}
