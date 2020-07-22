<?php

namespace App\Http\Controllers\Front;

use App\Models\Application;
use App\Models\Category;
use App\Models\Complain;
use App\Models\Facility;
use App\Models\Official;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Backpack\Settings\app\Models\Setting;

class PagesController extends Controller
{
    public function index()
    {

        return view('pages.index');
    }

    public function new_complain()
    {
        if (\request()->isMethod('post')) {
            $complain = new Complain();
            $complain->name = request()->get('name');
            $complain->facility_id = request()->get('facility_id');
            $complain->description = request()->get('description');
            $complain->user_id = \auth()->user()->id;

            $attached = 'attachment';
//              Saves complain attachment to upload/complains
            if (\request()->hasFile($attached)) {
                $file = \request()->file($attached);
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/complains'), $fileName);
                $complain->{$attached} = asset('uploads/complains/' . $fileName);
            }

            $complain->save();
        }

        $facilities = Facility::all();

        return view('pages.create_complain_form', compact('facilities'));
    }

    public function official($slug)
    {
        $official = Official::where('slug', $slug)->first();
        if (!$official) {
            return abort(404);
        }

        return view('pages.official', compact('official'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function map()
    {
        $complains = Complain::all();

        return view('pages.map', compact('complains'));
    }

    public function complain($slug)
    {
        $complain = Complain::where('slug', $slug)->first();
        if (!$complain) {
            return abort(404);
        }

        $all_complains = Complain::all();

        return view('pages.complain', compact('complain', 'all_complains'));
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

    public function application(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|min:5|max:255',
            'email' => 'required|email|min:5|max:255',
            'phone' => 'required|min:5|max:255',
            'message' => 'required|min:5',
            'agree' => 'required',
            'attachment' => 'nullable|mimes:jpeg,png,jpg',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $application = new Application();
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/applications'), $fileName);
            $application->attachment = asset('uploads/applications/' . $fileName);
        }
        foreach ($application->getFillable() as $field) {
            if ($field != "attachment") {
                $application->{$field} = $request->has($field) ? $request->get($field) : null;
            }
        }
        $application->status = 'PENDING';
        $application->save();
        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => __('front.success'),
        ]);
    }

    public function sendmail(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'subject' => 'required|min:2',
            'email' => 'required|email|min:3',
            'message' => 'required|min:5'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = array(
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'bdmessage' => $request->message
        );
        Mail::send('pages.mail', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to(Setting::get('email'));
            $message->subject($data['subject']);
        });
        return redirect()->back()->with('message', [
            'type' => 'success',
            'text' => __('front.success'),
        ]);
    }
}
