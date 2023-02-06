<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Admin_panel_setting;
use Illuminate\Http\Request;

class Admin_panel_SettingController extends Controller
{
   public function index(){
      // $data=Admin_panel_setting::where('com_code',auth()->user()->com_code)->first();
//       if(!empty($data)){
//           if($data['updated_by']>0 and $data['updated_by']!=null){
//               $data['updated_by']=Admin::where('id',$data['updated_by'])->value('name');
//           }


       $full_data=Admin::select('id','name','email')->with(['admin_panel_settings'=>function($q){
          $q->select('id','system_name','phone','com_code','photo','active','general_alert','address','admin_id');
       }])->get();
         $admin_panel=array();

       foreach ($full_data as $value ){
          $admin_panel= $value->admin_panel_settings;
      }


           return view('admin.panel_setting.index',['full_data'=>$full_data,'admin_panel'=>$admin_panel]);


   }
   public function retrive_data_to_edit($com_code){
      $data_to_edit= Admin_panel_setting::where('com_code',$com_code)->first();
      return $data_to_edit;
   }
}
