<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Model\Rakuraku;

class RakurakuController extends Controller
{
	public function index() {
            return view('rakuraku.index');
	}

	public function confirm(Request $request) {
	    $arr_form_data = array(
		    'name' => $request->name, 
		    'email' => $request->email,
		    'email2' => $request->email2,
		    'phone' => $request->phone, 
		    'area' => $request->area, 
		    'amount'=> $request->amount, 
		    'date1' => $request->datepicker1, 
		    'date2' => $request->datepicker2, 
		    'chk_list' => $request->chk_cat,
		    'textArea' => $request->free_youbou
	    );

	    Session::put('form_value', $arr_form_data);

            return view('rakuraku.confirm')->with($arr_form_data);
	}

	public function complete(Request $request) {
		$data = Session::get('form_value');

		$rakuraku = new RakuRaku();
                $rakuraku->name = $data['name']; 
                $rakuraku->email = $data['email'];
                $rakuraku->phone = $data['phone'];
                $rakuraku->address = $data['area'];
                $rakuraku->price = $data['amount'];
                $rakuraku->visit_start_date = $data['date1'];
                $rakuraku->visit_end_date = $data['date2'];
                $rakuraku->course_type = implode(",", $data['chk_list']);
		$rakuraku->message = $data['textArea'];
		$rakuraku->save();

            return view('rakuraku.complete');
	}
}
