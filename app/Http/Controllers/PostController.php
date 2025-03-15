<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        return $request->all();
    }


    public function delete(Request $request)
    {
        return $request->all();
    }

    public function update(Request $request)
    {
        return $request->all();
    }

    public function patch(Request $request)
    {
        return $request->all();
    }
}