<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function Home(){
        return view('frontend.modules.Home');
    } 

    public function About(){
        return view('frontend.modules.About');
    } 

    public function Contact(){
        return view('frontend.modules.Contact');
    } 
    public function Instructor(){
        return view('frontend.modules.Instructor');
    } 
    public function Signup(){
        return view('frontend.modules.Signup');
    } 
    public function Login(){
        return view('frontend.modules.Login');
    } 
    public function Blog(){
        return view('frontend.modules.Blog');
    }
    public function SingleCourse(){
        return view('frontend.modules.Single-Course');
    } 
    public function SingleBlog(){
        return view('frontend.modules.Single-Blog');
    } 
    public function Cart(){
        return view('frontend.modules.Cart');
    } 
    public function Checkout(){
        return view('frontend.modules.Checkout');
    } 
}
