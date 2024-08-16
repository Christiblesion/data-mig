<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arham;

class suzee extends Controller
{
    //


    public function create()
    {
        $title = "Add Registration";
        $url = url("/admission");
        $data = compact("title", "url");
        return view("admission")->with($data);
    }


    public function storedata(Request $request)
    {

        echo "<pre>";
        print_r($request->all());



        $christi = new christy;
        $christi->name = $request["name"];
        $christi->email = $request["email"];
        $christi->gender = $request["gen"];
        $christi->dob = $request["dob"];
        $christi->address = $request["address"];
        $christi->city = $request["city"];
        $christi->location = $request["location"];
        $christi->save();

        return redirect("/showquery");
    }


    public function showkaro()
    {

        $christi =  christy::all();

        // echo "<pre>";
        // print_r($christi->toArray());

        $data = compact("christi");


        return view("show")->with($data);
    }





    public function delete($std_id)
    {
        Arham::find($std_id)->delete();
        return redirect()->back();
    }




    public function edit($std_id)
    {


        $chrsiti = christy::find($std_id);

        if (is_null($christi)) {

            return redirect("/showquery");
        } else {



            $title = "update Registration";
            $url = url("/admission/update/") . "/" . $std_id;
            $data = compact("christi", "title", "url");


            return view("admission")->with($data);
        }
    }










    public function update(Request $request, $std_id)
    {

        $christi = christy::find($std_id);
        $christi->name = $request["name"];
        $christi->email = $request["email"];
        $christi->gender = $request["gen"];
        $christi->dob = $request["dob"];
        $christi->address = $request["address"];
        $christi->city = $request["city"];
        $christi->location = $request["location"];
        $christi->save();

        return redirect("/showquery");
    }
}