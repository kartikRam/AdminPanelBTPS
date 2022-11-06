<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use DB;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function validate(Request $req){

    	$email=$req->input('email');
    	$password=$req->input('password');
    	$sql=DB::table('admin')->where('admin_email', $email)->first();
    	if($sql!=null){
	    	if($sql->admin_password== $password){
	    		session_start();
	    		$_SESSION['name']=$sql->admin_name;
	    		return redirect ('index');
	    	}else{
	    		return view('auth-signin');
	    	}
    	}else{
    			return view('auth-signin');
    	}
    }
    public function addManager(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $branch_name=$req->input('branch-name');
        $contact=$req->input('contact');
        $password=$req->input('password');
        $confirm_password=$req->input('confirm-password');
       
        if($password==$confirm_password){


                    $ans=DB::insert('INSERT INTO 
                    worker(worker_name,worker_email,branch_name,worker_role,worker_contact_no,worker_password) 
                    VALUES(?,?,?,?,?,?)',[$name,$email,$branch_name,"1",$contact,$password]);
                return redirect("ManageDepoManager");

        }
        else{
               session_start();
     
            return view("AddDepoManagerForm");
        }

    }
    public function getAllDepoManagerData(){
        $res= DB::table('worker')->where('worker_role','1')->get();
           session_start();
        
        return view('ManageDepoManager',compact('res')); 
    }
    public function editManager($id){
            $sql=DB::table('worker')->where('worker_id', $id)->get();
               session_start();
     
            return view('EditDepoManager',compact('sql'));
        
    }
    public function addInstituteMethod(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $district=$req->input('district');
        $address=$req->input('address');
        $contact=$req->input('contact');
        $password=$req->input('password');
        $confirm_password=$req->input('confirm-password');
        

        if($password==$confirm_password){


                    $ans=DB::insert('INSERT INTO 
                    institute(institute_name,institute_email,institute_district,institute_address,institute_password,
                    institute_contact_no) 
                    VALUES(?,?,?,?,?,?)',[$name,$email,$district,$address,$password,$contact]);
                return redirect("ManageInstitute");

        }
        else{
               session_start();
     
            return view("AddInstituteForm");
        }

    }
    public function updateManager(Request $req){
       $name=$req->input('name');
        $email=$req->input('email');
        $branch_name=$req->input('branch-name');
        $contact=$req->input('contact');
        $password=$req->input('password');

        DB::update('update worker set 
            worker_name = ?,worker_email=?,branch_name=?,worker_contact_no=?,worker_password=? 
            where worker_email= ?',[$name,$email,$branch_name,$contact,$password,$email]);
        return redirect('ManageDepoManager');
    }
    public function deleteManager($id){
        DB::table('worker')->where('worker_id', $id)->delete();
     
        return redirect('ManageDepoManager');
    }
    public function getAllInstituteData(){
         $res= DB::table('institute')->get();
               session_start();
        
        return view('ManageInstitute',compact('res')); 
    
    }
    public function editInstituteform($id){

         $sql=DB::table('institute')->where('institute_id', $id)->get();
               session_start();
     
            return view('EditInstitute',compact('sql'));
           
    }
    public function updateInstituteForm(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $district=$req->input('district');
        $address=$req->input('address');
        $contact=$req->input('contact');
        $password=$req->input('password');
        DB::update('update institute set 
            institute_name = ?,institute_email=?,institute_district=?,institute_address=?,institute_password=?,
            institute_contact_no=? 
            where institute_email= ?',[$name,$email,$district,$address,$password,$contact,$email]);

        return redirect('ManageInstitute');
    }

    public function deleteInstituteData($id){
         DB::table('institute')->where('institute_id', $id)->delete();
         return redirect('ManageInstitute');
    
    }

    public function userCount(){
        $institute= DB::table('institute')
                     ->select()
                     ->get();

        $student=DB::table('user')
                     ->select()
                     ->where('is_student','1')
                     ->get();

        $user=DB::table('user')
                     ->select()
                     ->where('is_student','0')
                     ->get();


        $conductor=DB::table('worker')
                     ->select()
                     ->where('worker_role','0')
                     ->get();

        $manager=DB::table('worker')
                     ->select()
                     ->where('worker_role','1')
                     ->get();

        

        $data= array('institute' =>count($institute) ,
                        'student'=>count($student),
                        'user'=>count($user),
                        'conductor'=>count($conductor),
                        'manager'=>count($manager));

        session_start();
       return view('index',compact('data'));

    }
    public function LogOut()
    {
        session_start();
        session_destroy();/*
        Session::flush();*/
        return view('auth-signin');
        # code...
    }
    public function updatePassword(Request $req){
        $email=$req->email;
        $password=$req->password;
        if(DB::update('update admin set admin_password=? where admin_email= ?',[$password,$email])){
            return view('auth-signin');
        }else{
            return view('auth-reset-password');
        }

    }
}
