<?php

namespace App\Http\Controllers;

use App\Http\Model\TeachingUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends \App\Http\Controllers\Controller {

    public function index() {
        //users data reaf from database
        //read users data
        $data['users'] = \App\Model\TeachingUsers::where('flddeleted', '<>', 1)->get();
        //read user experience
        $data['experience'] = \App\Model\TeachingExperience::all();
        $data['employement'] = \App\Model\EmployementRecord::all();
        $data['research'] = \App\Model\ResearchActivities::all();
        $data['course'] = \App\Model\Course::all();
        $data['usercourse'] = \App\Model\UserCourse::all();
        $data['academic'] = \App\Model\AcademiStatus::all();
//        $data['course'] = \App\Model\Course::where('flddeleted', '<>', 1)->get();
        //return view in admin
        return view("admin/Users/index", array("data" => $data));
    }

    /**
     * for request ajax
     * @return type
     */
    public function getDepartment() {
        //read all departement data
        $d = json_encode(\App\Model\Department::where('flddeleted', '<>', 1)->get()->toArray());
        //return data json 
        return response()->json($d)->header('content-Type', 'application/json');
    }

    /**
     * for Request ajax
     * @param int $id
     * @return json
     */
    public function getCourse($id) {
        $d = json_encode(\App\Model\Course::where('flddeleted', '<>', 1)->where('fldtbldeparment_id', '=', $id)->get()->toArray());
        return response()->json($d)->header('content-Type', 'application/json');
    }

    /**
     * add user
     * @param Request $request
     * @return string
     */
    public function add(Request $request) {
        $required = [ 0 => [
                'key' => 'fldfname',
                'label' => 'نام',
            ],
            1 => [
                'key' => 'fldlname',
                'label' => 'نام خانوادگی',
            ],
            2 => [
                'key' => 'fldname_father',
                'label' => 'نام پدر',
            ],
            3 => [
                'key' => 'fldid_sh',
                'label' => 'شماره شناسنامه',
            ],
            4 => [
                'key' => 'fldnational_code',
                'label' => 'کد ملی',
            ],
            5 => [
                'key' => 'fldmobile',
                'label' => 'تلفن همراه',
            ],
            6 => [
                'key' => 'fldaddress_location',
                'label' => 'آدرس محل سکونت',
            ],
            7 => [
                'key' => 'fldaddress_location_phone',
                'label' => 'تلفن محل سکونت',
            ],
            8 => [
                'key' => 'fldbirth_day',
                'label' => 'تاریخ تولد',
            ],
            9 => [
                'key' => 'fldreligion',
                'label' => 'مذهب',
            ]
        ];
        $user_data = $request->input("user");
        foreach ($required as $key => $value) {
            if (empty($user_data[$required[$key]['key']])) {
                return "مقدار " . $required[$key]['label'] . " نمی تواند خالی باشد.";
            }
        }

        //set new user data
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

        // set Teaching Experience Section
        $user_expirience = $request->input("expirience");
        //loop for read data array
        for ($i = 0; $i < count($user_expirience['flduniversity']); $i++) {
            $expirience = new \App\Model\TeachingExperience();
            $expirience->flduniversity = $user_expirience['flduniversity'][$i];
            $expirience->fldname_course = $user_expirience['fldname_course'][$i];
            $expirience->fldyear = $user_expirience['fldyear'][$i];
            $expirience->fldtblteaching_id = $user->id;
            $expirience->save();
        }

        //set Employement Record
        $user_employement = $request->input("employement");
        //loop for read data array
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
        //loop for read data array
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
        //loop for read data array
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
        //loop for read data array
        for ($i = 0; $i < count($user_course['fldcourse_id']); $i++) {
            $course = new \App\Model\UserCourse();
            $course->fldtblcourse_id = $user_course['fldcourse_id'][$i];
            $course->fldtbluser_id = $user->id;
            $course->save();
        }
        return ' اطلاعات با موفقیت ثبت شد';
    }

    public function delete(Request $request) {
        $data = $request->only("fldid");
        $data['flddeleted'] = 1;
        if (empty($data['fldid']))
            return '';
        $d = \App\Model\TeachingUsers::where('fldid', '=', $data['fldid'])->update($data);
    }

}
