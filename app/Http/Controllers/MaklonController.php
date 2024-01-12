<?php

namespace App\Http\Controllers;

use App\Why;
use App\Video;
use App\Proses;
use App\Hubungi;
use App\Mproduk;
use App\Maklonside;
use App\Sertifikasi;
use Illuminate\Http\Request;
use Webkul\Admin\Helpers\Reporting\Product;
use Webkul\Shop\Repositories\ThemeCustomizationRepository;

class MaklonController extends Controller
{
    const STATUS = 1;
    public function __construct(protected ThemeCustomizationRepository $themeCustomizationRepository)
    {
    }
    public function index()
    {
        visitor()->visit();

        $side1 = Maklonside::where('side',1)->first();
        $side2 = Maklonside::where('side',2)->first();
        $side3 = Maklonside::where('side',3)->first();
        $side4 = Maklonside::where('side',4)->first();
        $whys = Why::all();
        $ser = Sertifikasi::all();
        $proses = Proses::all();
        $video = Video::first();
        $produk = Mproduk::all();
        $page = 'maklon';
        $customizations = $this->themeCustomizationRepository->orderBy('sort_order')->findWhere([
            'status'     => self::STATUS,
            'channel_id' => core()->getCurrentChannel()->id
        ]);
        
        return view('shop::home.index',compact('page','side1','side2','side3','side4','whys','proses','ser','video','produk'));
    }

    public function admin()
    {
        $maklon = Maklonside::all();
        $why = Why::all();
        $proses = Proses::all();
        $ser = Sertifikasi::all();
        $video = Video::all();
        $produk = Mproduk::all();
        $hubungi = Hubungi::all();
        return view('admin::maklon.index',compact('maklon','why','proses','ser','video','produk','hubungi'));
    }

    function whycreate(){
        return view('admin::maklon.whycreate');
    }
    function prosescreate(){
        return view('admin::maklon.prosescreate');
    }
    function sercreate(){
        return view('admin::maklon.sercreate');
    }
    function produkcreate(){
        return view('admin::maklon.produkcreate');
    }

    function update(Request $request){
        $maklon =  Maklonside::find($request->id);
        $maklon->side = $request->side;
        $maklon->title = $request->title;
        $maklon->desk = $request->desk;
        if ($request->hasFile('image')) {
            $fileimg = $request->file('image');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $maklon->img = $name;
        }
        $maklon->save();
        return redirect()->route('maklon.index');
    }
    function prosesupdate (Request $request){
        $proses =  Proses::find($request->id);
        $proses->title = $request->title;
        if ($request->hasFile('image')) {
            $fileimg = $request->file('image');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $proses->img = $name;
        }
        $proses->save();
        return redirect()->route('maklon.index');
    }
    function produkupdate (Request $request){
        $produk =  Mproduk::find($request->id);
        $produk->title = $request->title;
        if ($request->hasFile('image')) {
            $fileimg = $request->file('image');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $produk->image = $name;
        }
        $produk->save();
        return redirect()->route('maklon.index');
    }
    function serupdate (Request $request){

        $proses =  Sertifikasi::find($request->id);
        $proses->title = $request->title;
        if ($request->hasFile('image')) {
            $fileimg = $request->file('image');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $proses->img = $name;
        }
        $proses->save();
        return redirect()->route('maklon.index');
    }

    function prosesstore(Request $request){
        $proses =  new Proses();
        $proses->title = $request->title;
        if ($request->hasFile('image')) {
            $fileimg = $request->file('image');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $proses->image = $name;
        }
        $proses->save();
        return redirect()->route('maklon.index');
    }

    function hubungistore(Request $request){
        $hubungi =  new Hubungi();
        $hubungi->subject = $request->subject;
        $hubungi->fullname = $request->fullname;
        $hubungi->notlpn = $request->notlpn;
        $hubungi->email = $request->email;
        $hubungi->pesan = $request->pesan;
        $hubungi->save();
        return redirect()->route('maklon.customer');
    }


    function produkstore (Request $request){
        $produk =  new Mproduk();
        $produk->title = $request->title;
        if ($request->hasFile('image')) {
            $fileimg = $request->file('image');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $produk->image = $name;
        }
        $produk->save();
        return redirect()->route('maklon.index');
    }
    function serstore(Request $request){
        $proses =  new Sertifikasi();
        $proses->title = $request->title;
        if ($request->hasFile('image')) {
            $fileimg = $request->file('image');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $proses->image = $name;
        }
        $proses->save();
        return redirect()->route('maklon.index');
    }

    function whyupdate(Request $request){
        $why =  why::find($request->id);
        $why->title = $request->title;
        $why->desk = $request->desk;
        $why->save();
        return redirect()->route('maklon.index');
    }
    function videoesupdate (Request $request){
        $video =  Video::find($request->id);
        $video->link = $request->link;
        $video->save();
        return redirect()->route('maklon.index');
    }
    function whystore(Request $request){
        $why =  new Why();
        $why->title = $request->title;
        $why->desk = $request->desk;
        $why->save();
        return redirect()->route('maklon.index');
    }

    function edit($id){
        $maklon = Maklonside::find($id);
        return view('admin::maklon.edit',compact('maklon'));
    }
    function videoesedit ($id){
        $video = Video::find($id);
        return view('admin::maklon.editvideo',compact('video'));
    }
    function whyedit($id){
        $why = Why::find($id);
        return view('admin::maklon.whyedit',compact('why'));
    }
    function prosesedit($id){
        $proses = Proses::find($id);
        return view('admin::maklon.editproses',compact('proses'));
    }
    function produkedit($id){
        $proses = Mproduk::find($id);
        return view('admin::maklon.editproduk',compact('proses'));
    }
    function seredit($id){

        $proses = Sertifikasi::find($id);
        return view('admin::maklon.seredit',compact('proses'));
    }

    function whydestroy($id){
        $why = Why::find($id);
        $why->delete();
        return redirect()->route('maklon.index');
    }

    function prosesdestroy($id){
        $proses = Proses::find($id);
        $proses->delete();
        return redirect()->route('maklon.index');
    }
    function serdestroy($id){
        $ser = Sertifikasi::find($id);
        $ser->delete();
        return redirect()->route('maklon.index');
    }


}
