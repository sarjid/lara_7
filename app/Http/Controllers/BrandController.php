<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Multiimg;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class BrandController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function AllBrand(){
        $brands = Brand::latest()->paginate(5);
        return view('admin.brand.index',compact('brands'));
    }



    // store brand
    public function StoreBrand(Request $request){

        $request->validate([
            'brand_name' => 'required|min:4',


        ],
        [
            'brand_name.required' => 'Please Input Brand Name',
            'brand_name.min' => 'Brand longer then 4 characters',

        ]);

        $brand_image = $request->file('brand_image');

        // $name_gen=hexdec(uniqid());
        // $img_ext = strtolower($brand_image->getClientOriginalExtension());
        // $img_name = $name_gen.'.'.$img_ext;
        // $up_location ='img/brand/';
        // $last_img = $up_location.$img_name;
        // $brand_image->move($up_location,$img_name);


        $name_gen=hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
        Image::make($brand_image)->resize(300,400)->save('img/brand/'.$name_gen);

        $last_img = 'img/brand/'.$name_gen;

        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_image' =>  $last_img,
            'created_at' =>  Carbon::now()

        ]);

        return Redirect()->back()->with('success','Brand  Inserted');



    }

    // edit
    public function Edit($id){
        $brands = Brand::find($id);
        return view('admin.brand.edit',compact('brands'));

    }


    // update brand
    public function update(Request $request,$id){

        $request->validate([
            'brand_name' => 'required|min:4',
        ],
        [
            'brand_name.required' => 'Please Input Brand Name',
            'brand_name.min' => 'Brand longer then 4 characters',

        ]);

        $brand_image = $request->file('brand_image');
        $old_img = $request->old_image;
        if($brand_image){
        $name_gen=hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location ='img/brand/';
        $last_img = $up_location.$img_name;
        $brand_image->move($up_location,$img_name);

        unlink($old_img);

        Brand::find($id)->update([
            'brand_name' => $request->brand_name,
            'brand_image' =>  $last_img,
            'created_at' =>  Carbon::now()

        ]);
        return Redirect()->back()->with('success','Brand  Updated');


        }else{
            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'created_at' =>  Carbon::now()

            ]);
            return Redirect()->back()->with('success','Brand  Updated');

        }

    }

    // Delete

    public function Delete($id){

        $img = Brand::find($id);
        $old_Image = $img->brand_image;
        unlink($old_Image);
        Brand::find($id)->delete();
        return Redirect()->back()->with('success','Brand  Deleted');

    }


    // mulitiple image upload
    public function index(){
        $images = Multiimg::latest()->get();
        return view('admin.multi_img.index',compact('images'));
    }

    // store

    public function StoreImg(Request $request){
        $image = $request->file('image');
        foreach($image as $multi_img){


        $name_gen=hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
        Image::make($multi_img)->resize(300,300)->save('img/multiple_image/'.$name_gen);

        $last_img = 'img/multiple_image/'.$name_gen;

        Multiimg::insert([

            'image' =>  $last_img,
            'created_at' =>  Carbon::now()

        ]);

    }

        return Redirect()->back()->with('success','Brand  Inserted');



    }

    // user profile

    public function Profile(){
        return view('admin.profile.index');
    }


    // update

    public function UpdateProfile(Request $request){
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',


        ]);
        $id = Auth::user()->id;

        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,

        ]);
        return Redirect()->back()->with('success','Proflie  Updated');


    }

    // password

    public function Password(){
        return view('admin.profile.password');
    }


    // update pass
    public function UpdatePassoword(Request $request){

        $id = Auth::user()->id;
        $db_pass = Auth::user()->password;
        $old_pass = $request->old_password;
        $new_pass = $request->new_password;
        $confirm_pass = $request->confirm_password;

        if(Hash::check($old_pass, $db_pass)){

            if($new_pass === $confirm_pass){

                User::find($id)->update([
                    'password' => Hash::make($request->new_password)

                ]);
                Auth::logout();
                return Redirect()->route('login');

            }else{
                return Redirect()->back()->with('danger','new password and confirm passoword not same');

            }



        }else{
            return Redirect()->back()->with('error','old Passowrd Not match');
        }

    }





}
