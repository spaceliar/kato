<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InfoRequest;
use App\Info;
class AboutController extends Controller
{
    public function getInfo(){
    	$about = Info::findOrFail(1);

    	return view('quantri.gioithieu')->with('about',$about);
    }
    public function postInfo(InfoRequest $request){
    	$validate = $request->validate();
    	$about = Info::findOrFail(1);
    	$about->name = $request->name;
    	$about->address = $request->address;
    	$about->phone = $request->phone;
    	$about->fax = $request->fax;
    	$about->email = $request->email;
    	$about->save();
    	return redirect(route('getInfo'))->with('success','Đã thay đổi thành công');
    }
    public function getInfo2(){
    	$about = Info::findOrFail(1);

    	return view('admin.info')->with('about',$about);
    }
    public function getGioiThieu(){
    	return view('gioithieu');
    }
}
