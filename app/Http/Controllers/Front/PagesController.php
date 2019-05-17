<?php

namespace App\Http\Controllers\Front;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function index() {
        return 'salam';
    }

    public function sendMessage(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fullname' => 'required|min:3|max:255',
            'email' => 'required|email|min:5|max:255',
            'subject' => 'required|min:3|max:255',
            'message' => 'required|min:5',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }




        return redirect()->route('contact')->with('message', [
            'type' => 'success',
            'text' => __('general.success'),
        ]);

    }

    public function pages($slug)
    {
        $page = Page::FindBySlug($slug)->first();
        if (!$page) {
            $page = Page::FindBySlugLocale($slug)->first();
            if (!$page) {
                abort(404);
            }
        }

        return view('pages.pages', compact('page'));
    }

}
