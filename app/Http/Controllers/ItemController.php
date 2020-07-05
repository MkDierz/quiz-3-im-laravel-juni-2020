<?php

namespace App\Http\Controllers;

use App\article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class ItemController extends Controller
{
    public function index()
    {
        //
        $data = article::get_all();
        return view('index',compact('data'));
    }

    public function create()
    {
        //
        return view('form');
    }

    public function store(Request $request)
    {
        //
        $data = $request->all();
        unset($data["_token"]);
        $data['user_id'] = Auth::id();
        $slug = Str::slug($request->article_judul, '-');
        $data['article_slug'] = $slug;
        $item = article::insert($data);
        if ($item) {
            return redirect('/items/');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = article::get_id($id)[0];
//        dd($data);
        return view('edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        unset($request["_token"]);
        unset($request["_method"]);
//        dd($request->all());
//        question::whereId($id)->update($request->all());
        $request['id'] = $id;
        $slug = Str::slug($request->article_judul, '-');
        $request['article_slug'] = $slug;
        article::update_tbl($request->all());
        if ($request) {
            return redirect('/items/' );
        }
    }

    public function destroy($id)
    {
        article::delete_tbl($id);
        return redirect('/items');
    }
}
