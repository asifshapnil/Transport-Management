<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Bus;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function getBill(){
      $bus = Bus::all();
      return view('bill.addBill')->with('bus', $bus);
    }

    public function postBill(Request $request){
        $this->validate($request, [
          'busid'=> 'required',
          'date'=>'required'
        ]);

        $bill = new Bill;

        $bill->bus_id = $request->input('busid');
        $bill->fuel = $request->input('fuel');
        $bill->fine = $request->input('fine');
        $bill->repair = $request->input('repair');
        $bill->staffbill = $request->input('staffbill');
        $bill->date = $request->input('date');

        $bill->save();

        $datevalue = Bill::whereDay('created_at', '=', date(''));

        return redirect()->back()->with('success','Bill successfully added');


    }

    public function checkBill(){
      $bus = Bus::all();
      return view('bill.checkBill')->with('bus', $bus);
    }

    public function findBill(Request $request){
        $this->validate($request, [
          'busid'=> 'required',

        ]);

        $busid = $request->input('busid');
        $bus_num = Bus::where('id', $busid)->first();

        $currentMnth = date('m');
        $bill= Bill::where('bus_id', $busid)->whereRaw('MONTH(created_at)', $currentMnth)->get();
        

        return view('bill.showSingleBill')->with(['bill'=> $bill, 'bus_num'=>$bus_num]);

      }

      public function editBill($bus_id, $date){
        $bill = Bill::where('bus_id', $bus_id)->where('date', $date)->first();
        return view('bill.editBill')->with('bill', $bill);
      }

      public function updateBill(Request $request, $id){
        $bill = Bill::where('id', $id)->first();

        $bill->fuel = $request->input('fuel');
        $bill->fine = $request->input('fine');
        $bill->repair = $request->input('repair');
        $bill->staffbill = $request->input('staffbill');
        $bill->date = $request->input('date');

        $bill->save();

        $bus_num = Bus::where('id', $bill->bus_id)->first();

        $currentMnth = date('m');
        $bill= Bill::where('bus_id', $bill->bus_id)->whereRaw('MONTH(created_at)', $currentMnth)->get();
        return view('bill.showSingleBill')->with(['bill'=> $bill, 'bus_num'=>$bus_num]);



      }

}
