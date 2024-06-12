<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Car;
use App\Models\Review;
use App\Models\Setting;
use App\Models\Shopcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    public static function categorylist(){
        return Category::where('parent_id','=',0)->with("children")->get();
    }
    public static function settinglist(){
        return Setting::first();
    }
    public static function countview($id){
        return Review::where("product_id",$id)->where('status','True')->count();
    }
    public static function averageview($id){
        return Review::where("product_id",$id)->average('rate');
    }
    public static function countsepet(){
        return Shopcart::where("user_id",Auth::id())->count();
    }
    public function index(){
        $setting=Setting::first();
        $slider=Car::select('title','id','slug','image','quantity','category_id')->limit(4)->get();
        $popular=Car::limit(8)->where('status','True')->inRandomOrder()->get();
        $picked=Car::limit(16)->inRandomOrder()->get();
        return view("home.index",[
            'setting'=>$setting,
            'slider'=>$slider,
            'populer'=>$popular,
            'picked'=>$picked,
        ]);
    }

    public function contact(){
        $setting=Setting::first();
        return view("home.contact",[
            'setting'=>$setting
        ]);
    }

    public function sendmessage(Request $request){
        $data= new Message();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->ip=$_SERVER["REMOTE_ADDR"];
        $data->save();
        return redirect()->route("contact")->with("success","Mesajiniz Basariyla Gonderilmisdir.");
    }
    public function aboutus(){
        $setting=Setting::first();
        return view("home.aboutus",[
            'setting'=>$setting
        ]);
    }
    public function referance(){
        $setting=Setting::first();
        return view("home.referance",[
            'setting'=>$setting
        ]);
    }
    public function category_product($id){
        $datalist=Car::where("category_id",$id)->get();

        $data=Category::find($id);
        return view("home.category_product",[
            'data'=>$data,
            'datalist'=>$datalist,
        ]);
    }
    public function product_detail($id){
        $data=Car::find($id);
        $galery=Image::where("product_id",$id)->get();
        $review=Review::where("product_id",$id)->where("status","True")->get();
        $popular=Car::limit(8)->where('status','True')->inRandomOrder()->get();
        return view("home.product_detail",[
            'data'=>$data,
            'galery'=>$galery,
            'review'=>$review,
            'popular'=>$popular
        ]);
    }
    public function getproduct(Request $request){
        $search=$request->search;
        $data=Car::where("title",'like','%'.$search.'%')->get()->count();
        if($data==1){
            $data=Car::where("title",'like','%'.$search.'%')->first();
            return redirect()->route("product_detail",[$data->id,$data->slug]);
        }
        else{
            return redirect()->route('productlist',[$search]);
        }
    }
    public function productlist($search){
        $datalist=Car::where("title",'like','%'.$search.'%')->get();
        if(isEmpty($datalist)){
            return view('home.product_list',[
                'datalist'=>$datalist,
                'search'=>$search
            ])->with("warning","Aramaniza uygun sonuc bulunamadi");
        }
        else{
            return view('home.product_list',[
                'datalist'=>$datalist,
                'search'=>$search
            ]);
        }

    }
    public function faq(){
        $data=Faq::where("status",'=','True')->get();
        return view("home.faq",[
            'data'=>$data
        ]);
    }


    public function login(){
        return view("admin.login");

    }
    public function login_check(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('adminhome');
        }

        return back()->withErrors([
            'email' => 'Email ve ya şifre yanlış.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
