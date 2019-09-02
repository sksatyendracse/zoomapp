<?php

namespace App\Http\Controllers;

use App\Model\Frontend\Summernote;
use Illuminate\Http\Request;
use Auth;

class SummernoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:frontadmin')->except('logout');
    }

    public function index(){
        return view('dashboard');   
    }

    public function getSummernoteeditor(Request $request){

        $id=$request->input('id');
        $data = Summernote::getData($id);
        return view('pages.home', compact("data"));
    }

    public function postSummernoteeditor(Request $request)
    {
        $this->validate($request, [
            'detail' => 'required',
            'feature' => 'required',
        ]);

        $detail=$request->input('detail');
        $feature=$request->input('feature');
        $id_summer=$request->input('id');
        $dom = new \DomDocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img){
           try{
                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $image_name= "/upload/" . time().$k.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
           }catch(\Throwable $e){

           }
        }
        $detail = $dom->saveHTML();
        if($id_summer){
            $summernote = Summernote::getData($id_summer);
        }else{
            $summernote = new Summernote;
        }
        $summernote->content = $detail;
        $summernote->title=$feature;
        $summernote->created_by=Auth::guard('frontadmin')->user()->id;
        $summernote->modified_by=Auth::guard('frontadmin')->user()->id;
        $summernote->save();
        
        return redirect()->back();
    }
}
