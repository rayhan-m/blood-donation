<?php

namespace App\Http\Controllers;

use App\User;
use App\FindBlood;
use App\GeneralSetting;
use Illuminate\Http\Request;
use App\Mail\NotificationMail;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

class BackEndController extends Controller
{
    public function Dashboard(){
        
        $total_user = User::where('role_id',2)->get()->count();
        $users = User::where('role_id',2)->latest()->take(5)->get();

        return view('admin.dashboard',compact('total_user','users'));
    }

    public function GeneralSetting()
    {
        $data = GeneralSetting::where('active_status', '=', 1)->first();
        return view('admin.general_setting', compact('data'));
    }
    public function GeneralSettingupdate(Request $request)
    {
        $request->validate([
            'site_name' => 'required|max:150',
            'site_title' => 'required',
            'location' => 'required|max:150',
            'email' => 'required',
            'phone' => 'required|max:15',
            'copyright_text' => 'required|max:150',
        ]);
        $general_setting = GeneralSetting::find($request->id);
        $general_setting->site_name = $request->site_name;
        $general_setting->site_title = $request->site_title;
        $general_setting->location = $request->location;
        $general_setting->email = $request->email;
        $general_setting->phone = $request->phone;
        $general_setting->copyright_text = $request->copyright_text;
        $general_setting->save();

        Toastr::success('Operation successful', 'Success');
        return redirect()->route('general_setting');
    }
    public function updateLogo(Request $request)
    {
        $request->validate([
            'logo' => 'required',
        ]);
        $general_setting = GeneralSetting::find(1);
        $logo = "";
        if ($request->file('logo') != "") {
            $file = $request->file('logo');
            $logo = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('backend/uploads/logo/', $logo);
            $logo = 'backend/uploads/logo/' . $logo;
            $general_setting->logo = $logo;
        }
        $general_setting->save();

        Toastr::success('Operation successful', 'Success');
        return redirect()->back();

    }
    public function updateFav(Request $request)
    {
        $request->validate([
            'fav' => 'required',
        ]);
        $general_setting = GeneralSetting::find(1);
        $fav = "";
        if ($request->file('fav') != "") {
            $file = $request->file('fav');
            $fav = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('backend/uploads/logo/', $fav);
            $fav = 'backend/uploads/logo/' . $fav;
            $general_setting->fav = $fav;
        }
        $general_setting->save();
        Toastr::success('Operation successful', 'Success');
        return redirect()->back();
    }


    public function DonarList()
    {
        $donars = DB::table('users')
        ->leftjoin('divisions','divisions.id','users.division_id')
        ->leftjoin('districs','districs.id','users.district_id')
        ->leftjoin('upazilas','upazilas.id','users.upozila_id')
        ->leftjoin('unions','unions.id','users.union_id')
        ->select('users.*','divisions.name as division_name','districs.name as district_name','upazilas.name as upozila_name','unions.name as union_name')
        ->where('role_id',2)->get();
        return view('admin.blood_donar_list', compact('donars'));
    }

    public function BloodRequestActive()
    {
        $active_requests  = DB::table('find_bloods')
        ->leftjoin('users','users.id','find_bloods.user_id')
        ->leftjoin('divisions','divisions.id','find_bloods.division_id')
        ->leftjoin('districs','districs.id','find_bloods.district_id')
        ->leftjoin('upazilas','upazilas.id','find_bloods.upozila_id')
        ->leftjoin('unions','unions.id','find_bloods.union_id')
        ->select('find_bloods.*','users.name','divisions.name as division_name','divisions.id as division_id','districs.name as district_name','districs.id as district_id','upazilas.name as upozila_name','upazilas.id as upazila_id','unions.name as union_name','unions.id as union_id')
        ->where('find_bloods.active_status',1)->get();

        // return $active_requests;
        return view('admin.active_request_list', compact('active_requests'));
    }
    public function BloodRequestOld()
    {
        $old_requests = DB::table('find_bloods')->where('active_status',0)->get();
        return view('admin.old_reqiest_list', compact('old_requests'));
    }

    public function Donardeactive($id)
    {
        $deactive_user = DB::table('users')->where('id',$id)->update(
            array(
            'active_status' => '0',
        ));
        if ($deactive_user) {
            Toastr::success('Operation successful', 'Success');
            return redirect()->back();
        }
        
    }
    public function Donaractive($id)
    {
        $active_user = DB::table('users')->where('id',$id)->update(
            array(
            'active_status' => '1',
        ));
        if ($active_user) {
            Toastr::success('Operation successful', 'Success');
            return redirect()->back();
        }
        
    }

    public function RequestStatus($request_id,$id)
    {

        // return $request_id;
        // return $id;
        try {
            $s = FindBlood::where('id',$request_id)->first();
            // $s = DB::table('find_bloods')->select('is_approved')->where('id',$request_id)->first();
            // $s = DB::table('find_bloods')->where('active_status',1);
            // dd($s->is_approved);

            if ($id == 0) {
                $s->is_approved= '0';
                $s->save();
            } elseif($id == 1) {
                $s->is_approved= '1';
                $s->save();
            }
            Toastr::success('Operation Successful.', 'Success');
            return redirect()->back();
        } catch (\Throwable $th) {
            Toastr::error('Operation failed.', 'Failed');
            return redirect()->back();
        }
    }
    public function FindSpecficDonar($fb_id,$bg_id,$div_id,$dis_id,$upa_id,$uni_id)
    {
        // dd($bg_id);
        $specfic_donars  = DB::table('users')->select('users.*')->where('active_status',1)->where('blood_group_id',$bg_id)->where('division_id',$div_id)->where('district_id',$dis_id)->where('upozila_id',$upa_id)->where('union_id',$uni_id)->get();
        $data['fb_id']= $fb_id;
        $data['bg_id']= $bg_id;
        $data['div_id']= $div_id;
        $data['dis_id']= $dis_id;
        $data['upa_id']= $upa_id;
        $data['uni_id']= $uni_id;
        return view('admin.specific_donar_list', compact('specfic_donars','data'));
    }
    public function RequestDetails($id)
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
        return view('admin.request_details', compact('request_details','donors'));
    }

    public function SendNotificationEmail($bg_id,$div_id,$dis_id,$upa_id,$uni_id){
        $specfic_donars  = DB::table('users')->select('users.*')->where('active_status',1)->where('blood_group_id',$bg_id)->where('division_id',$div_id)->where('district_id',$dis_id)->where('upozila_id',$upa_id)->where('union_id',$uni_id)->get();

        $generalSetting = DB::table('general_settings')->select('logo', 'email','site_name')->first();
        $logo = $generalSetting->logo;
        $siteName = $generalSetting->site_name;
        foreach ($specfic_donars as $specfic_donar) {
            Mail::to($specfic_donar->email)->send(new NotificationMail($siteName, $logo));
        }
        Toastr::success('Mail Send Successfully.', 'Success');
        return redirect()->back();
    }
    public function SendNotification($fb_id,$bg_id,$div_id,$dis_id,$upa_id,$uni_id){
        $specfic_donars  = DB::table('users')->select('users.*')->where('active_status',1)->where('blood_group_id',$bg_id)->where('division_id',$div_id)->where('district_id',$dis_id)->where('upozila_id',$upa_id)->where('union_id',$uni_id)->get();
        // return $specfic_donars;
        foreach ($specfic_donars as $specfic_donar) {
            DB::table('notifications')->insert(
            array(
                'user_id' => @$specfic_donar->id,
                'find_blood_id' => @$fb_id
            ));
        }
        Toastr::success('Notification Send Successfully.', 'Success');
        return redirect()->back();
    }

    
}