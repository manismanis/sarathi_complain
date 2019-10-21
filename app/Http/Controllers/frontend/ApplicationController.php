<?php

namespace App\Http\Controllers\frontend;

use App\Complain;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationController extends FrontendController
{
    public function index()
    {
        return view($this->pagePath . '.general.home');
    }

    public function about()
    {
        return view($this->pagePath . '.general.about');
    }

    public function impact()
    {
        return view($this->pagePath . '.general.impact');
    }

    public function drivers()
    {
        return view($this->pagePath . '.impact/drivers');
    }

    public function cab_owners()
    {
        return view($this->pagePath . '.impact/cab_owners');
    }

    public function customers()
    {
        return view($this->pagePath . '.impact/customers');
    }

    public function media()
    {
        return view($this->pagePath . '.general.media');
    }

    public function contact()
    {
        return view($this->pagePath . '.general.contact');
    }

    public function Complain()
    {
        $complainData = Complain::orderBy('id', 'DESC')->get();
        $this->data('complainData', $complainData);
        return view($this->pagePath . '.complain.add-complain', $this->data);
    }

    public function addComplain(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->pagePath . '.add-complain', $this->data);
        }

        if ($request->isMethod('post')) {  //form submit garna lagda..
            $this->validate($request, [
                'subject' => 'required|min:10|max:100',
                'details' => 'required|min:15|max:500',
                'name' => 'required|min:3|max:50',
                'phone' => 'required|min:10|max:10',
                'upload' => 'mimes:jpg,jpeg,png,gif,doc,docx'

            ]);

            $data['subject'] = $request->subject;
            $data['details'] = $request->details;
            $data['name'] = $request->name;
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;
            $data['created_at'] = Carbon::now()->toDateString();
            $token = $request->input('g-recaptcha-response');


            if ($request->hasFile('upload')) {
                $file = $request->file('upload');
                $ext = $file->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;   //imageko name override nahos vanera md5 gareko ani chadai name change garnalai microtime
                $uploadPath = public_path('uploads/images/complains');
                if (!$file->move($uploadPath, $imageName)) {
                    return redirect()->back();
                }

                $data['image'] = $imageName;

            }
        }

        if (strlen($token > 0)) {
            if (Complain::create($data)) {
                return redirect()->back()->with('success', 'Complain has been submitted');
            }
        } else {
            return redirect()->back()->with('error', 'Please complete the Recaptcha to submit your complain');
        }


    }


}
