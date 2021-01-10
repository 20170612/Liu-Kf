<?php
namespace Liu\Kf;

use Illuminate\Http\Request;

class IndexController
{
    public function index(Request $request)
    {
	return $request->user();
    }
}