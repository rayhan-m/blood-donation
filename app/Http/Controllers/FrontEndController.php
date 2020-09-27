<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function FindBlood()
    {
        return view('find_blood');
    }

    public function ajaxDistricList(Request $request)
   {
      $districts = DB::table('districs')->where('division_id', $request->id)->get();
      return response()->json([$districts]);
   }
    public function BloodRequestSubmit(Request $request)
   {
      $validator = Validator::make($request->all(), [
            'blood_group_id' => 'required',
            'division_id' => 'required',
            'district_id' => 'required',
            'upozila_id' => 'required',
            'union_id' => 'required',
            'location' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

      // return $request;
      DB::table('find_bloods')->insert(
         array(
         'blood_group_id' => $request->blood_group_id,
         'division_id' => $request->division_id,
         'district_id' => $request->district_id,
         'upozila_id' => $request->upozila_id,
         'union_id' => $request->union_id,
         'location' => $request->location,
         'patient_medical_history' => $request->patient_medical_history,
         'user_id' => Auth::user()->id
      ));
      
        Toastr::success('Operation Successful.', 'Success');
        return redirect()->route('previous_record');
   }

   public function ajaxUpazilaList(Request $request)
   {

      $upazilas = DB::table('upazilas')->where('district_id', $request->id)->get();
      return response()->json([$upazilas]);
   }

   public function ajaxUnionList(Request $request)
   {

      $unions = DB::table('unions')->where('upazilla_id', $request->id)->get();
      return response()->json([$unions]);
   }

   public function DonateBlood(){
      $user_details = DB::table('users')->where('id',Auth::user()->id)->first();
      $donate_request_lists  = DB::table('find_bloods')
        ->leftjoin('users','users.id','find_bloods.user_id')
        ->leftjoin('divisions','divisions.id','find_bloods.division_id')
        ->leftjoin('districs','districs.id','find_bloods.district_id')
        ->leftjoin('upazilas','upazilas.id','find_bloods.upozila_id')
        ->leftjoin('unions','unions.id','find_bloods.union_id')
        ->select('find_bloods.*','users.name','divisions.name as division_name','divisions.id as division_id','districs.name as district_name','districs.id as district_id','upazilas.name as upozila_name','upazilas.id as upazila_id','unions.name as union_name','unions.id as union_id')
        ->where('find_bloods.active_status',1)
        ->where('find_bloods.blood_group_id',$user_details->blood_group_id)
        ->where('find_bloods.division_id',$user_details->division_id)
        ->where('find_bloods.district_id',$user_details->district_id)
        ->where('find_bloods.upozila_id',$user_details->upozila_id)
        ->where('find_bloods.union_id',$user_details->union_id)
        ->get();
      return view('donate_blood_list',compact('donate_request_lists'));
   }

   public function RequestDetails($id)
    {
        // dd($bg_id);
        $request_details  = DB::table('find_bloods')
        ->leftjoin('users','users.id','find_bloods.user_id')
        ->leftjoin('donate_bloods','donate_bloods.find_blood_id','find_bloods.id')
        ->leftjoin('divisions','divisions.id','find_bloods.division_id')
        ->leftjoin('districs','districs.id','find_bloods.district_id')
        ->leftjoin('upazilas','upazilas.id','find_bloods.upozila_id')
        ->leftjoin('unions','unions.id','find_bloods.union_id')
        ->select('find_bloods.*','users.name','donate_bloods.is_agree','divisions.name as division_name','divisions.id as division_id','districs.name as district_name','districs.id as district_id','upazilas.name as upozila_name','upazilas.id as upazila_id','unions.name as union_name','unions.id as union_id')
        ->where('find_bloods.id',$id)->first();
        // return $request_details;
        // $request_details  = DB::table('users')->select('users.*')->where('active_status',1)->where('blood_group_id',$bg_id)->where('division_id',$div_id)->where('district_id',$dis_id)->where('upozila_id',$upa_id)->where('union_id',$uni_id)->get();
        return view('view_request_details', compact('request_details'));
    }
   public function PreviousRecord()
    {
        // dd($bg_id);
        $request_details  = DB::table('find_bloods')
        ->leftjoin('users','users.id','find_bloods.user_id')
        
        ->leftjoin('divisions','divisions.id','find_bloods.division_id')
        ->leftjoin('districs','districs.id','find_bloods.district_id')
        ->leftjoin('upazilas','upazilas.id','find_bloods.upozila_id')
        ->leftjoin('unions','unions.id','find_bloods.union_id')
        ->select('find_bloods.*','users.name','divisions.name as division_name','divisions.id as division_id','districs.name as district_name','districs.id as district_id','upazilas.name as upozila_name','upazilas.id as upazila_id','unions.name as union_name','unions.id as union_id')
        ->where('find_bloods.user_id',Auth::user()->id)->get();
      //   return $request_details;
        // $request_details  = DB::table('users')->select('users.*')->where('active_status',1)->where('blood_group_id',$bg_id)->where('division_id',$div_id)->where('district_id',$dis_id)->where('upozila_id',$upa_id)->where('union_id',$uni_id)->get();
        return view('view_previous_record', compact('request_details'));
    }

    public function BloodRequestDetails($id)
    {
        // dd($bg_id);
        $request_details  = DB::table('find_bloods')
        ->leftjoin('users','users.id','find_bloods.user_id')
        ->leftjoin('divisions','divisions.id','find_bloods.division_id')
        ->leftjoin('districs','districs.id','find_bloods.district_id')
        ->leftjoin('upazilas','upazilas.id','find_bloods.upozila_id')
        ->leftjoin('unions','unions.id','find_bloods.union_id')
        ->select('find_bloods.*','users.name','divisions.name as division_name','divisions.id as division_id','districs.name as district_name','districs.id as district_id','upazilas.name as upozila_name','upazilas.id as upazila_id','unions.name as union_name','unions.id as union_id')
        ->where('find_bloods.id',$id)->first();
        // return $request_details;
        // $request_details  = DB::table('users')->select('users.*')->where('active_status',1)->where('blood_group_id',$bg_id)->where('division_id',$div_id)->where('district_id',$dis_id)->where('upozila_id',$upa_id)->where('union_id',$uni_id)->get();
        $donors= DB::table('donate_bloods')
        ->leftjoin('users','users.id','donate_bloods.user_id')
        ->leftjoin('divisions','divisions.id','users.division_id')
        ->leftjoin('districs','districs.id','users.district_id')
        ->leftjoin('upazilas','upazilas.id','users.upozila_id')
        ->leftjoin('unions','unions.id','users.union_id')
        ->where('donate_bloods.find_blood_id',$id)
        ->select('users.*','users.id as donor_id','donate_bloods.*','divisions.name as division_name','divisions.id as division_id','districs.name as district_name','districs.id as district_id','upazilas.name as upozila_name','upazilas.id as upazila_id','unions.name as union_name','unions.id as union_id')
        ->get();
        return view('blood_request_details', compact('request_details','donors'));
    }
    public function WantToDonate($id)
    {
        DB::table('donate_bloods')->insert(
            array(
            'user_id' => Auth::user()->id,
            'find_blood_id' => $id
        ));
      
        Toastr::success('Operation Successful.', 'Success');
        return redirect()->back();
    }

}