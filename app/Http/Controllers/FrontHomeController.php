<?php

namespace App\Http\Controllers;
use App\Model\Frontend\Summernote;

use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        $data = Summernote::getData(1);
        return view('index', compact("data"));   
    }

    public function contact(){
        $data = Summernote::getData(2);
        return view('frontpages.contact', compact("data"));   
    }

    public function about(){
        $data = Summernote::getData(3);
        return view('frontpages.about', compact("data"));   
    }


    public function mobileAccessories(){
        $data = Summernote::getData(4);
        return view('frontpages.communications.mobile_accessories', compact("data"));   
    }

    public function recharges(){
        $data = Summernote::getData(5);
        return view('frontpages.communications.recharges', compact("data"));   
    }

    public function photocopies(){
        $data = Summernote::getData(6);
        return view('frontpages.communications.photocopies', compact("data"));   
    }

    public function electricalsServices(){
        $data = Summernote::getData(7);
        return view('frontpages.electricals.electricals_services', compact("data"));   
    }

    public function officeUse(){
        $data = Summernote::getData(8);
        return view('frontpages.stationaries.office_use', compact("data"));   
    }

    public function allTypesBooks(){
        $data = Summernote::getData(9);
        return view('frontpages.stationaries.all_types_books', compact("data"));   
    }

    public function aarhoan(){
        $data = Summernote::getData(10);
        return view('frontpages.aarhoan', compact("data"));   
    }
}
