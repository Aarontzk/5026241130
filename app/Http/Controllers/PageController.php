<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function menu()       { return view('menu'); }
    public function p2intro()    { return view('p2intro'); }
    public function p2news()     { return view('p2news'); }
    public function p2news1()    { return view('p2news1'); }
    public function p3responsive() { return view('p3responsive'); }
    public function p3template() { return view('p3template'); }
    public function p3popover()  { return view('p3popover'); }
    public function p4()         { return view('p4'); }
    public function p5tugas()    { return view('p5tugas'); }
    public function p5()         { return view('p5'); }
    public function p6linktree() { return view('p6linktree'); }
    public function p6instagram(){ return view('p6instagram'); }
    public function p7welcome()   { return view('p7welcome'); }
}
