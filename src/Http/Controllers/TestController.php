<?php
namespace Dat\Demo\Http\Controllers;

class TestController extends Controller
{
    public function index() {
        return view('DatView::home' , [
            'dat' => "daasdasd"
        ] );
    }
}
