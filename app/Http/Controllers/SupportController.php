<?php

namespace App\Http\Controllers;

use App\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function add_support(){
        $show_support = Support::orderBy('id', 'desc')->get();
        return view('back.support.add-support', [
            'show_support'   => $show_support
        ]);
    }

    public function save_support(Request $request){
        $this->validate($request,[
            'question'  => 'required',
            'answer'    => 'required'
        ]);

        $support = new Support();
        $support->question  = $request->question;
        $support->answer  = $request->answer;
        $support->save();
        return redirect()->back()->with('message', 'Customer Support has been added');
    }

    public function active_support($id){
        $active_support = Support::find($id);
        $active_support->status = 0;
        $active_support->save();
        return redirect()->back()->with('message', 'Support has been Pending');
    }
    public function pending_support($id){
        $pending_support = Support::find($id);
        $pending_support->status = 1;
        $pending_support->save();
        return redirect()->back()->with('message', 'Support has been Active');
    }

    public function delete_support($id){
        $delete_support = Support::find($id);
        $delete_support->delete();
        return redirect()->back()->with('message', 'Support has been Deleted');
    }
}
