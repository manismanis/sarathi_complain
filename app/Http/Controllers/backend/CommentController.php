<?php

namespace App\Http\Controllers\backend;

use App\Admin;
use App\Comment;
use App\Complain;
use App\CompletedComplain;
use App\Mail\WelcomeMail;
use App\UserComment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CommentController extends BackendController
{
    public function index()
    {
        //to show the data of logged in user only..

        $userType = Auth::guard('admin')->user()->user_type;
        if ($userType != 'admin') {
            $id = Auth::guard('admin')->user()->id;


            $commentData = Comment::where('user_id', '=', $id)->get();
            $this->data('commentData', $commentData);
            return view($this->pagePath . '.manage-complains.show-comments', $this->data);
        } else {

            $commentData = Comment::all();
            $this->data('commentData', $commentData);
            return view($this->pagePath . '.manage-complains.show-comments', $this->data);
        }


    }

    public function onprocessComment()
    {
        //to show the data of logged in user only..

        $userType = Auth::guard('admin')->user()->user_type;
        if ($userType != 'admin') {
            $id = Auth::guard('admin')->user()->id;


            $commentData = Comment::where('user_id', '=', $id)->get();
            $this->data('commentData', $commentData);
            return view($this->pagePath . '.manage-complains.show-onprocess-complains', $this->data);
        } else {

            $commentData = Comment::all();
            $this->data('commentData', $commentData);
            return view($this->pagePath . '.manage-complains.show-onprocess-complains', $this->data);
        }


    }

    //processing bata done garesi yaha jane

    public function CompletedComplains()
    {

        //to show the data of logged in user only..

        $userType = Auth::guard('admin')->user()->user_type;
        if ($userType != 'admin') {
            $id = Auth::guard('admin')->user()->id;


            $commentData = Comment::where('user_id', '=', $id)->get();
            $this->data('commentData', $commentData);
            return view($this->pagePath . '.manage-complains.completed-complains', $this->data);
        } else {

            $commentData = Comment::all();
            $this->data('commentData', $commentData);
            return view($this->pagePath . '.manage-complains.completed-complains', $this->data);
        }

    }

    public function addComment(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('adminData', Admin::all());

            //button click garda request patha leko id ko related data lera add comment page ma lera aauna..
            $criteria = $request->criteria;
            $findData = Complain::findOrFail($criteria);
            $this->data('complainData', $findData);
//            $this->data('commentData', Comment::all());
            $commentData = Comment::orderBy('id', 'DESC')->get();
            $this->data('commentData', $commentData);

            return view($this->pagePath . '.manage-complains.add-comment', $this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'comments' => 'required'
            ]);

            $data['comments'] = $request->comments;
            $data['deadline'] = $request->deadline;
            $data['user_id'] = $request->fullname;
            $data['complain_id'] = $request->id;
            $data['created_at'] = Carbon::now()->toDateString();

            //to send the mail while submitting the submitting the form
            $userFind = Admin::findOrFail($request->fullname);

            $userEmail = $userFind->email;

            $data['email'] = $userEmail;

            if (Comment::create($data)) {

                Mail::to($userEmail)->send(new WelcomeMail($data));

                return redirect()->route('show-comments')->with('success', 'Comment has been created');
            }
        }


    }



    public function updateComplainStatus(Request $request)
    {
        if ($request->isMethod('get')) {  //get bata aauchha bhane return back
            return redirect()->back();
        }

        if ($request->isMethod('post')) {
            $criteria = $request->criteria;    //criteria bhanne name deko chha hidden method bata aako ho jasma value chai hamro id pass garya chha..
            $comment = Comment::findorFail($criteria);
            $data['comments'] = $request->comments;

            if (isset($_POST['OnProcess'])) {
                $comment->status = 'Completed';
            }
            if (isset($_POST['Completed'])) {
                $comment->status = 'OnProcess';
            }

            if ($comment->update()) {
                return redirect()->route('completed-complains')->with('success', 'Complain Status is updated successfully');
            }
        }

        return false;

    }

    public function deleteComment(Request $request)
    {
        $criteria = $request->criteria;
        $findData = Comment::findOrFail($criteria);
        if ($findData->delete()) {
            return redirect()->back()->with('success', 'Comment is deleted');
        }
    }

    public function viewComplain(Request $request)
    {
        $this->data('commentData', Comment::all());
        $criteria = $request->criteria;
        $findData = Complain::findOrFail($criteria);
        $this->data('ComplainData', $findData);
        return view($this->pagePath . '.complains.view-complain', $this->data);

    }

    public function viewComment(Request $request)
    {
        $this->data('adminData', Admin::all());
        $this->data('complainData', Complain::all());
        $criteria = $request->criteria;
        $findData = Comment::findOrFail($criteria);
        $this->data('commentData', $findData);
        return view($this->pagePath . '.manage-complains.view-comment', $this->data);
    }

    public function editComment(Request $request)
    {
        $this->data('adminData', Admin::all());
        $this->data('complainData', Complain::all());
        $criteria = $request->criteria;
        $findData = Comment::findOrFail($criteria);
        $this->data('commentData', $findData);
        return view($this->pagePath . '.manage-complains.edit-comment', $this->data);
    }

    public function editCommentAction(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();
        }

        if ($request->isMethod('post')) {
            $criteria = $request->criteria;  //edit-comment ko form ma input ko hidden method bata criteria ma value pass gareko chha jun hamro comment ko id ko

            $data['comments'] = $request->comments;
            $data['deadline'] = $request->deadline;
            $data['user_id'] = $request->fullname[0];  //to convert array to string
//            $data['complain_id'] = $request->id;
        }

        if (Comment::where('id', '=', $criteria)->update($data)) {  //yo logic bujhne..
            return redirect()->route('show-comments')->with('success', 'Comment has been updated');

        }
    }

    public function writeComment(Request $request)
    {
        $this->data('adminData', Admin::all());
        $this->data('complainData', Complain::all());
        $criteria = $request->criteria;
        $findData = Comment::findOrFail($criteria);
        $this->data('commentData', $findData);
        return view($this->pagePath . '.manage-complains.write-comment', $this->data);
    }

    public function writeCommentAction(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect()->back();
        }

        if ($request->isMethod('post')) {
            $criteria = $request->criteria;  //edit-comment ko form ma input ko hidden method bata criteria ma value pass gareko chha jun hamro comment ko id ko

            $data['replies'] = $request->replies;
//            $data['deadline'] = $request->deadline;
//            $data['user_id'] = $request->fullname[0];  //to convert array to string
//            $data['complain_id'] = $request->id;
        }

        if (Comment::where('id', '=', $criteria)->update($data)) {  //yo logic bujhne..
            return redirect()->route('show-onprocess-comments')->with('success', 'Comment has been updated');

        }
    }




}
