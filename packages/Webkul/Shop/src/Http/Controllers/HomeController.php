<?php

namespace Webkul\Shop\Http\Controllers;

use App\Why;
use App\Misi;
use App\About;
use App\Video;
use App\Proses;
use App\Reward;
use App\History;
use App\Mproduk;
use App\Aboutbaner;
use App\Maklonside;
use App\Sertifikasi;
use Webkul\Shop\Repositories\ThemeCustomizationRepository;

class HomeController extends Controller
{
    /**
     * Using const variable for status
     */
    const STATUS = 1;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected ThemeCustomizationRepository $themeCustomizationRepository)
    {
    }

    /**
     * Loads the home page for the storefront.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        visitor()->visit();
        
      
        // $page = $_GET['page'];
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if($page == 'maklon'){

                $side1 = Maklonside::where('side', 1)->first();
                $side2 = Maklonside::where('side', 2)->first();
                $side3 = Maklonside::where('side', 3)->first();
                $side4 = Maklonside::where('side', 4)->first();
                $whys = Why::all();
                $ser = Sertifikasi::all();
                $proses = Proses::all();
                $video = Video::first();
                $produk = Mproduk::all();
                return view('shop::home.index', compact('page', 'side1', 'side2', 'side3', 'side4', 'whys', 'proses', 'ser', 'video', 'produk'));

            }elseif($page == 'rewards'){
                $rewards = Reward::paginate(6); // Change 10 to the number of items per page you want
                return view('shop::home.index', compact('page', 'rewards'));
            }elseif($page == 'single')
            {
                $rewards = Reward::find($_GET['id']); // Change 10 to the number of items per page you want
                return view('shop::home.index', compact('page', 'rewards'));
            }elseif($page == 'about'){
                $about = About::first();
                $misis = Misi::all();
                $history = History::all();
                $banner = Aboutbaner::first();
                return view('shop::home.index', compact('page', 'about','misis','history','banner'));
            }
            else{
                
                $about = About::first();
                $misis = Misi::all();
                $history = History::all();
                $banner = Aboutbaner::all();
                return view('shop::home.index', compact('page', 'about','misis','history','banner'));
            } 
        }else {
            // Handle the case when 'page' is not set in the URL
            // For example, set a default value or show an error message.
            $page = 'default'; // Setting a default value
        }
        $customizations = $this->themeCustomizationRepository->orderBy('sort_order')->findWhere([
            'status'     => self::STATUS,
            'channel_id' => core()->getCurrentChannel()->id
        ]);

        return view('shop::home.index', compact('page','customizations'));
    }

    /**
     * Loads the home page for the storefront if something wrong.
     *
     * @return \Exception
     */
    public function notFound()
    {
        abort(404);
    }
}
