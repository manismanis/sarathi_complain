<?php

namespace App\Http\Controllers\backend;

use App\Admin;
use App\Complain;
use App\Processing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProcessingController extends BackendController
{
    public function index()
    {
        $processingData = Processing::orderBy('id', 'DESC')->get();
        $this->data('processingData ', $processingData );
        return view($this->pagePath . '.manage-complains.processing-complain', $this->data);
    }

    public function addComment(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('complainData', Complain::all());
            $this->data('adminData', Admin::all());
            $this->data('processingData', Processing::all());

            return view($this->pagePath . '.manage-complains.add-comment', $this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'deadline' => 'required',
            ]);


            $data['comments'] = $request->comments;
            $data['deadline'] = $request->deadline;
            $data['assigned_to'] = $request->assigned_to;
            $data['status'] = $request->status;
//            $data['admin_id'] = $request->fullname;
            $data['complain_id'] = $request->name;
            $data['created_at'] = Carbon::now()->toDateString();


            if (Processing::create($data)) {
                return redirect()->route('processing-complains')->with('success', 'Complain is created');
            }
        }
    }

}
