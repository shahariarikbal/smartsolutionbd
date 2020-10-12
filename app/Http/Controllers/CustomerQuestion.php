<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerQuestion extends Controller
{
    public function add_customer_question(){
        $show_question = \App\CustomerQuestion::orderBy('id', 'desc')->get();
        return view('back.customers.customer_question', [
            'show_question'   => $show_question
        ]);
    }

    public function update_customer_question(Request $request){

        $ans_submit = \App\CustomerQuestion::find($request->id);
        $ans_submit->name  = $request->name;
        $ans_submit->email  = $request->email;
        $ans_submit->phone_number  = $request->phone_number;
        $ans_submit->question  = $request->question;
        $ans_submit->answer  = $request->answer;
        $ans_submit->status = 1;
        $ans_submit->save();
        return redirect('/add/customer/question')->with('message', 'Customer Answer has been added');
    }

    public function active_customer_question($id){
        $active_support = \App\CustomerQuestion::find($id);
        $active_support->status = 0;
        $active_support->save();
        return redirect()->back()->with('message', 'Customer Question has been Pending');
    }
    public function pending_customer_question($id){
        $pending_support = \App\CustomerQuestion::find($id);
        $pending_support->status = 1;
        $pending_support->save();
        return redirect()->back()->with('message', 'Customer Question has been Active');
    }

    public function delete_customer_question($id){
        $delete_support = \App\CustomerQuestion::find($id);
        $delete_support->delete();
        return redirect()->back()->with('message', 'Customer Question has been Deleted');
    }

    public function edit_customer_question($id){
        $edit_qustion = \App\CustomerQuestion::find($id);
        return view('back.customers.edit-question', [
            'edit_qustion'  => $edit_qustion
        ]);
    }
}
