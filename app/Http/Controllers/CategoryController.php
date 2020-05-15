<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function AllCat(){
        $categories = Category::latest()->paginate(5);
        // $categories = DB::table('categories')->paginate(5);

        $trashCat = Category::onlyTrashed()->latest()->paginate(3);
        return view('admin.category.index',compact('categories','trashCat'));
    }

    public function AddCat(Request $request){

        $request->validate([
            'category_name' => 'required|max:255',

        ],
        [
            'category_name.required' => 'Please Input Category Name',
            'category_name.max' => 'Category less then 255chars',

        ]);


  Category::insert([

            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()

        ]);

    // $data = array();
    // $data['category_name'] = $request->category_name;
    // $data['user_id'] = Auth::user()->id;

    //  DB::table('categories')->insert($data);

    return Redirect()->back()->with('success','Category Inserted');





    }

    // edit

    public function Edit($id){

        // $categories = Category::find($id);

        $categories = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit',compact('categories'));

    }

    // update

    public function update(Request $request,$id){
        $request->validate([
            'category_name' => 'required|max:255',

        ],
        [
            'category_name.required' => 'Please Input Category Name',
            'category_name.max' => 'Category less then 255chars',

        ]);


        // $update = Category::find($id)->update([


        //     'category_name' => $request->category_name,
        //     'user_id' => Auth::user()->id


        // ]);

        $data = array();
        $data['category_name'] = $request->category_name;
        $data['user_id'] = Auth::user()->id;

        DB::table('categories')->where('id',$id)->update($data);



    return Redirect()->route('all.category')->with('success','Category  Updated');
    }



    //  soft delete
    public function SoftDelete($id){
        $delete = Category::find($id)->delete();
        return Redirect()->back()->with('success','Category  Deleted');
    }


    //  Restore
    public function Restore($id){
        $delete = Category::withTrashed()->find($id)->restore();
        return Redirect()->back()->with('success','Category  Restore');
    }



     //  permanently delete
     public function Pdelete($id){
        $delete = Category::onlyTrashed()->find($id)->forceDelete();
        return Redirect()->back()->with('success','Category Permanently Del');
    }


    // page view 


    public function AboutPage(){
        return view('pages.about');
    }




}
