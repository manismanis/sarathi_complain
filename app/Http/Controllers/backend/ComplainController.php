<?php

namespace App\Http\Controllers\backend;

use App\Comment;
use App\Complain;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ComplainController extends BackendController
{
    public function index()
    {
        $complainData = Complain::orderBy('id', 'DESC')->get();
        $this->data('complainData', $complainData);
        return view($this->pagePath . '.complains.show-complains', $this->data);
    }

    public function addComplain(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->pagePath . '.complains.add-complain', $this->data);
        }

        if ($request->isMethod('post')) {  //form submit garna lagda..
            $this->validate($request, [
                'subject' => 'required|min:10|max:50',
                'details' => 'required|min:15|max:500',
                'name' => 'required|min:3|max:50',
                'phone' => 'required|min:10|max:15',
                'email' => 'unique:complains,email',
                'upload' => 'mimes:jpg,jpeg,png,gif,doc,docx',

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
                return redirect()->route('complains')->with('success', 'Complain has been Submitted');
            }
        } else {
            return redirect()->back()->with('error', 'Go through the captcha proces first');
        }

    }

    public function viewComplain(Request $request)
    {

        $criteria = $request->criteria;
        $findData = Complain::findOrFail($criteria);
        $this->data('ComplainData', $findData);
        return view($this->pagePath . '.complains.view-complain', $this->data);

    }

    public function deleteFile($id)  //userko related image delete garna ko lagi
    {
        $criteria = $id;
        $findData = Complain::findOrFail($criteria); //Complain bhanne model ma database ko model chha, ani tesko criteria = id ho
        $filename = $findData->image;
        $deletePath = public_path('uploads/images/complains/' . $filename);
        if (file_exists($deletePath) && is_file($deletePath)) {  //$delepath ma item file chha ra file ho bhane..delete garne
            return unlink($deletePath);
        }
        return true;  //image nahuda ni delete garna
    }


    public function deleteComplain(Request $request)
    {
        $criteria = $request->criteria;
        $findData = Complain::findOrFail($criteria);
        if ($this->deleteFile($criteria) && ($findData->delete())) {

            return redirect()->route('complains')->with('success', 'Complain is deleted');
        }


    }

    public function editComplain(Request $request)
    {

        $criteria = $request->criteria;
        $findData = Complain::findOrFail($criteria);
        $this->data('ComplainData', $findData);
        return view($this->pagePath . '.complains.edit-complain', $this->data);

    }

    public function editComplainAction(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();
        }

        if ($request->isMethod('post')) {
            $criteria = $request->criteria;
            $this->validate($request, [
                'subject' => 'required|min:3|max:50',
                'details' => 'required|min:15|max:500',
                'name' => 'required|min:3|max:20',
                'phone' => 'required|min:10|max:15',
                'email' => 'required|email|', [
                    Rule::unique('complains', 'email')->ignore($criteria)
                ],
                'upload' => 'mimes:jpg,jpeg,png,gif,doc,docx'
            ]);

            $data['subject'] = $request->subject;
            $data['details'] = $request->details;
            $data['name'] = $request->name;
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;

            //file upload...
            if ($request->hasFile('upload')) {
                $file = $request->file('upload');
                $ext = $file->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;   //imageko name override nahos vanera md5 gareko ani chadai name change garnalai microtime
                $uploadPath = public_path('uploads/images/complains');
                if ($this->deleteFile($criteria) && $file->move($uploadPath, $imageName)) {
                    $data['image'] = $imageName;

                }


            }

            if (Complain::where('id', '=', $criteria)->update($data)) {
                return redirect()->route('complains')->with('success', 'Complain is updated');


            }

        }
    }

    public function Download($file_name)
    {
        $file_path = public_path('uploads/images/complains/' . $file_name);
        return response()->download($file_path);
    }

}
