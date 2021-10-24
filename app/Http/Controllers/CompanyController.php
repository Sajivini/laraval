<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class CompanyController extends Controller
{
    public function addDetails(){
        return view('add-comDetails');
    }

    public function createDetails(Request $request){
        $post = new Post();
        $post ->username = $request->username;
        $post ->email = $request->email;
        $post ->telephone = $request->telephone;
        $post ->logo = $request->logo;
        $post ->coverImage = $request->coverImage;
        $post ->websiteLink = $request->websiteLink;
        $post->save();
        return back()->with('deatils_created','Details has been created succesfully');
    }

    public function getDetails(){
        $Details = Post::orderBy('id','DESC')->get();
        return view('Details',compact('Details'));
    }

    public function deleDetails($id){
        Post::where('id',$id)->delete();
        return back()->with("Detail_deleted",'Details has been deleted sucessfully');

        

    }
}
