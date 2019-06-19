<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//Import Model
use App\Detail_Model;

class DetailtiketController extends Controller
{
    /* S E L E C T  D A T A */
    public function detail()
    {
    $result=Detail_Model::disp_detail();

    return view('admin/content', ['res' => $result]);
	}


	/* C R E A T E  D A T A */
	public function add_Detail(Request $data_input)
	{
		
		Detail_Model::add_detail($data_input);

		return redirect('/admin');
	}
	/****/

	/* D E L E T E  D A T A */
	public function delete_Detail($id)
	{
		Detail_Model::delete_detail($id);

		return redirect('/admin');
	}
	/******/

	/* E D I T  D A T A */
	public function edit_Detail($id)
	{
	 	$show_data_for_edit=Detail_Model::get_for_edit($id);


	 	return view('admin/content', ['select' => $show_data_for_edit]);
	}

	//**P U N Y A  D E S I
	// public function update_Detail(Request $request){

	// 	Detail_Model::update($request);

 //        return redirect('/admin/detail');
	// }
}