<?php

namespace App\Http\Controllers;

use App\Http\Model\TeachingUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends \App\Http\Controllers\Controller {

    public function index() {
        header("content-type:application/json");
        //users data
        $data['users'] = \App\Model\TeachingUsers::where('flddeleted', '<>', 1)->get();
        $data['experience'] = \App\Model\TeachingExperience::all();
        $data['employement'] = \App\Model\EmployementRecord::all();
        $data['research'] = \App\Model\ResearchActivities::all();
        $data['course'] = \App\Model\Course::all();
        $data['usercourse'] = \App\Model\UserCourse::all();
        $data['academic'] = \App\Model\AcademiStatus::all();
        
//        $data['course'] = \App\Model\Course::where('flddeleted', '<>', 1)->get();
        return view("admin/Users/index", array("data" => $data));
    }

    public function edit(Request $request) {
        var_dump($request->all());
    }

    public function getDepartment() {
        $d = json_encode(\App\Model\Department::where('flddeleted', '<>', 1)->get()->toArray());
        return response()->json($d)->header('content-Type', 'application/json');
    }

    public function getCourse($id) {
        $d = json_encode(\App\Model\Course::where('flddeleted', '<>', 1)->where('fldtbldeparment_id', '=', $id)->get()->toArray());
        return response()->json($d)->header('content-Type', 'application/json');
    }

    public function add(Request $request) {

        $user_data = $request->input("user");
        //user section
        $user = new \App\Model\TeachingUsers();
        $user->fldfname = $user_data['fldfname'];
        $user->fldlname = $user_data['fldlname'];
        $user->fldname_father = $user_data['fldname_father'];
        $user->fldid_sh = $user_data['fldid_sh'];
        $user->fldnational_code = $user_data['fldnational_code'];
        $user->fldbirth_day = $user_data['fldbirth_day'];
        $user->fldbirth_place = $user_data['fldbirth_place'];
        $user->fldreligion = $user_data['fldreligion'];
        $user->fldmarital_status = $user_data['fldmarital_status'];

        $user->fldsex = $user_data['fldsex'];
        $user->fldmalitary = $user_data['fldmalitary'];
        $user->flddate_time_work = "{" . $user_data['flddate_time'] . "},{" . $user_data['flddate_work'] . "}";
        $user->fldaddress_location = $user_data['fldaddress_location'];
        $user->fldaddress_workplace = $user_data['fldaddress_workplace'];
        $user->fldaddress_location_phone = $user_data['fldaddress_location_phone'];
        $user->fldaddress_workplace_phone = $user_data['fldaddress_workplace_phone'];
        $user->fldemail = $user_data['fldemail'];
        $user->fldmobile = $user_data['fldmobile'];
        $user->save();

        //Teaching Experience Section
        $user_expirience = $request->input("expirience");
        for ($i = 0; $i < count($user_expirience['flduniversity']); $i++) {
            $expirience = new \App\Model\TeachingExperience();
            $expirience->flduniversity = $user_expirience['flduniversity'][$i];
            $expirience->fldname_course = $user_expirience['fldname_course'][$i];
            $expirience->fldyear = $user_expirience['fldyear'][$i];
            $expirience->fldtblteaching_id = $user->id;
            $expirience->save();
        }

        //Employement Record
        $user_employement = $request->input("employement");

        for ($i = 0; $i < count($user_employement['fldname_company']); $i++) {
            $employement = new \App\Model\EmployementRecord();
            $employement->fldname_company = $user_employement['fldname_company'][$i];
            $employement->fldside = $user_employement['fldside'][$i];
            $employement->flddate_start = $user_employement['flddate_start'][$i];
            $employement->flddate_end = $user_employement['flddate_end'][$i];
            $employement->tblteaching_id = $user->id;
            $employement->save();
        }

        //Research activities
        $user_research = $request->input("research");

        for ($i = 0; $i < count($user_research['fldtitle']); $i++) {
            $research = new \App\Model\ResearchActivities();
            $research->fldtitle = $user_research['fldtitle'][$i];
            $research->fldplace_publication = $user_research['fldplace_publication'][$i];
            $research->flddate_publication = $user_research['flddate_publication'][$i];
            $research->fldtype = $user_research['fldtype'][$i];
            $research->tblteaching_id = $user->id;
            $research->save();
        }

        //Academic 
        $user_academic = $request->input("academic");

        for ($i = 0; $i < count($user_academic['fldlevel']); $i++) {
            $academic = new \App\Model\AcademiStatus();
            $academic->fldlevel = $user_academic['fldlevel'][$i];
            $academic->fldfield = $user_academic['fldfield'][$i];
            $academic->fldtendency = $user_academic['fldtendency'][$i];
            $academic->flduniversity = $user_academic['flduniversity'][$i];

            $academic->fldgpa = $user_academic['fldgpa'][$i];
            $academic->flddate_start = $user_academic['flddate_start'][$i];
            $academic->flddate_end = $user_academic['flddate_end'][$i];
            $academic->fldtbluser_id = $user->id;
            $academic->save();
        }

        //Teaching Experience Section
        $user_course = $request->input("usercourse");
        for ($i = 0; $i < count($user_course['fldcourse_id']); $i++) {
            $course = new \App\Model\UserCourse();
            $course->fldtblcourse_id = $user_course['fldcourse_id'][$i];
            $course->fldtbluser_id = $user->id;
            $course->save();
        }
        echo ' اطلاعات با موفقیت ثبت شد';

        die;
    }
    
    public function delete(Request $request) {
        $data = $request->only("fldid");
        $data['flddeleted'] = 1;
        if(empty($data['fldid']))
            return '';
        $d = \App\Model\TeachingUsers::where('fldid', '=', $data['fldid'])->update($data);
    }

}
