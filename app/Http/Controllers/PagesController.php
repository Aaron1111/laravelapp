<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
  public function home()
  {
  	return view('pages.welcome');
  }

  public function homepage()
  {
    $halaman = 'homepage';
  	return view('pages.homepage', compact('halaman', 'about'));
  }  //
  public function about()
  {
    $halaman = 'about';
  	return view('pages.about', compact('halaman', 'about'));
  }  //


}


