<?php
namespace App\Http\Controllers;

use App\Http\Controllers\TiketAPI\APIController as API;

class HomeController extends Controller
{
    $api = new API;
    $hasil = $api ->getCurl('general_api/listCurrency');
    \App\Currncy::whereRaw('id<>0')->delete();
    $data = array();
    foreach ($hasil->result as $key) {
    	$curr = new \App\Currency;
    	$curr->code = $key->code;
    	$curr->name = $key->name;
    	$curr->save();
    	$data['id'][$curr->id]->$key->code;

    }
    echo json_encode(
    			array(
    				'status_code'=>200,
    				'inserted_data'=>sizeof($data['id'])
    				)
    			);
}
	public function view_Currency()
	{
		$s['data'] = \App\Currency::all()
		return view('master.currency')->with($s);
	}
