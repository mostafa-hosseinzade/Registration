@extends('base')

@section('content')
<section class="col-lg-12" style="padding-top: 100px;background-color: white;">
    <div class="panel panel-primary" style="margin:20px;">
        <div class="panel-heading">
            <h3 class="panel-title" style="direction: rtl;float: right">فرم ثبت نام</h3>
            <br/>
            <br/>
        </div>
        <div class="panel-body">
            {!! Form::open(array('url' => '/admin/users/add','class'=>'ajaxForm','id'=>'senduseradd')) !!}
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">اطلاعات شخصی</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">سوابق</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">انتخاب درس ها</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">مدارک</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content" style="direction: rtl">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="col-md-12 col-sm-12">
                            <h2>اطلاعات شخصی</h2>
                            <hr/>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="name">نام*	</label>
                                <input type="text" class="form-control input-sm" id="fldfname" name="user[fldfname]" placeholder="First name">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="name">نام خانوادگی*	</label>
                                <input type="text" class="form-control input-sm" id="fldlname" name="user[fldlname]"  placeholder="Last name">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="name">نام پدر*	</label>
                                <input type="text" class="form-control input-sm" id="fldname_father" name="user[fldname_father]" placeholder="Last name">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="country">شماره شناسنامه*</label>
                                <input type="text" class="form-control input-sm" name="user[fldid_sh]" id="id_sh" placeholder="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="country">کد ملی*</label>
                                <input type="text" class="form-control input-sm" name="user[fldnational_code]" id="national_code" placeholder="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="email">ایمیل*</label>
                                <input type="email" class="form-control input-sm" name="user[fldemail]" id="email" placeholder="Email">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="address">آدرس سکونت*</label>
                                <textarea class="form-control input-sm" name="user[fldaddress_location]" id="address_location" rows="3"></textarea>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="address">آدرس کار</label>
                                <textarea class="form-control input-sm" name="user[fldaddress_workplace]" id="address_work" rows="3"></textarea>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="mobile">موبایل*</label>
                                <input type="text" class="form-control input-sm" name="user[fldmobile]" id="mobile" placeholder="Mobile">
                            </div>
                            
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="pincode">تلفن محل سکونت*</label>
                                <input type="text" name="user[fldaddress_location_phone]" class="form-control input-sm" id="phone_location" placeholder="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="pincode">تلفن محل کار</label>
                                <input type="text" name="user[fldaddress_workplace_phone]"  class="form-control input-sm" id="phone_work" placeholder="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="pincode">تاریخ تولد*</label>
                                <input type="text"  id="date_birth_day" 
                                       placeholder="انتخاب تاریخ"
                                       data-name="datepicker1" 
                                       data-mddatetimepicker="true" 
                                       data-targetselector="#date_birth_day" 
                                       data-trigger="click" 
                                       data-englishnumber="true" 
                                       name="user[fldbirth_day]" 
                                       class="form-control input-sm ">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="pincode">محل تولد</label>
                                <input type="text" name="user[fldbirth_place]"  class="form-control input-sm" id="birth_place" placeholder="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="pincode">مذهب*</label>
                                <input type="text" name="user[fldreligion]" class="form-control input-sm" id="religion" placeholder="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="pincode">نظام وظیفه</label>
                                <select name="user[fldmalitary]" class="form-control input-sm" id="pincode" >
                                    <option value="0">ندارم</option>
                                    <option value="1">معاف</option>
                                    <option value="2">اتمام سربازی</option>
                                    <option value="3">دارم</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="pincode">روزهای آموزش</label>
                                <input type="text" name="user[flddate_work]" class="form-control input-sm" id="pincode" placeholder="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="pincode">ساعت آموزش</label>
                                <input type="text" name="user[flddate_time]" class="form-control input-sm" id="pincode" placeholder="">
                            </div>

                            <div class = "form-group col-md-6 col-sm-6">
                                <label for="years">جنسیت</label>
                                <select name="user[fldsex]" class="form-control input-sm" id="years">
                                    <option value="1">مرد</option>
                                    <option value="0">زن</option>
                                </select>
                            </div>

                            <div class = "form-group col-md-6 col-sm-6">
                                <label for="years">وضعیت تاهل</label>
                                <select name="user[fldmarital_status]" class="form-control input-sm" id="years">
                                    <option value="1">مجرد</option>
                                    <option value="0">متاهل</option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="col-lg-12">
                            <div class="col-md-12" id="TeachingExpirenceadd">
                                <div class="row">
                                    <h2>سوابق تحصیلی</h2>
                                    <hr/>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">نام دانشگاه یا آموزشگاه</label>
                                        <input type="text" name="expirience[flduniversity][]" class="form-control input-sm" id="pincode" placeholder="">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">نام درس</label>
                                        <input type="text" name="expirience[fldname_course][]" class="form-control input-sm" id="pincode" placeholder="">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">سال تحصیلی</label>
                                        <input type="number" name="expirience[fldyear][]" class="form-control input-sm" id="pincode" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12">
                                <button type="button" id="buttonAddTeaching" onclick="addTeachingExpirience('add')" class="btn btn-primary">افزودن سوابق بیشتر</button>
                            </div>

                            <div class="col-md-12" id="EmployementRecordadd">
                                <div class="row">
                                    <h2>سوابق شغلی</h2>
                                    <hr/>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">نام سازمان</label>
                                        <input type="text" name="employement[fldname_company][]" class="form-control input-sm" id="pincode" placeholder="">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">سمت</label>
                                        <input type="text" name="employement[fldside][]" class="form-control input-sm" id="pincode" placeholder="">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">تاریخ شروع همکاری</label>
                                        <input type="text" id="date_start_work" 
                                               placeholder="انتخاب تاریخ"
                                               data-name="datepicker1" 
                                               data-mddatetimepicker="true" 
                                               data-targetselector="#date_start_work" 
                                               data-trigger="click" 
                                               data-englishnumber="true"
                                               name="employement[flddate_start][]" class="form-control input-sm ">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">تاریخ پایان همکاری</label>
                                        <input type="text" id="date_end_work" 
                                               placeholder="انتخاب تاریخ"
                                               data-name="datepicker1" 
                                               data-mddatetimepicker="true" 
                                               data-targetselector="#date_end_work" 
                                               data-trigger="click" 
                                               data-englishnumber="true"
                                               name="employement[flddate_end][]" class="form-control input-sm ">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12">
                                <button type="button" id="buttonAddRecord" onclick="addEmployementRecord('add')" class="btn btn-primary">افزودن سوابق شغلی بیشتر</button>
                            </div>

                            <div class="col-md-12" id="ResaerchActivitiesadd">
                                <div class="row">
                                    <h2>مقاله های منتشر شده</h2>
                                    <hr/>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">عنوان</label>
                                        <input type="text" name="research[fldtitle][]" class="form-control input-sm" id="pincode" placeholder="">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">محل انتشار</label>
                                        <input type="text" name="research[fldplace_publication][]" class="form-control input-sm" id="pincode" placeholder="">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">زمان انتشار</label>
                                        <input type="text" id="date_publication_research" 
                                               placeholder="انتخاب تاریخ"
                                               data-name="datepicker3" 
                                               data-mddatetimepicker="true" 
                                               data-targetselector="#date_publication_research" 
                                               data-trigger="click" 
                                               data-englishnumber="true" 
                                               name="research[flddate_publication][]"
                                               class="form-control input-sm">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">نوع مدرک</label>
                                        <select class="form-control" name="research[fldtype][]">
                                            <option value="1">کتاب</option>
                                            <option value="2">مقاله</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12">
                                <button type="button" id="buttonAddRecord" onclick="addResaerchActivities('add')" class="btn btn-primary">افزودن سوابق شغلی بیشتر</button>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        <div class="col-md-12" id="UsersCourseadd">
                            <div class="row">
                                <h2>درس های مورد نظر  برای تدریس</h2>
                                <hr/>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode"> درس</label>
                                    <select name="usercourse[fldcourse_id][]" id="courseselect"  class="form-control fldcourse0">
                                        <option value="0">-- انتخاب کنید --</option>
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">گروه درسی</label>
                                    <select name="usercourse[fldgroup][]" onchange="findCourse($(this).val(), $(this).attr('course'))" class="form-control input-sm departmentselect" course="fldcourse0" id="departmentselect" >
                                        <option value="0">-- انتخاب کنید --</option>

                                    </select>
                                </div>

                                
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12">
                            <button type="button" id="buttonAddTeaching" onclick="addUsersCourse('add')" class="btn btn-primary">افزودن سوابق بیشتر</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="settings">

                        <div class="col-md-12" id="AcademicStatusadd">
                            <div class="row">
                                <h2>مدارک اخذ شده</h2>
                                <hr/>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">مقطع</label>
                                    <input type="text" name="academic[fldlevel][]" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">رشته</label>
                                    <input type="text" name="academic[fldfield][]" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">گرایش</label>
                                    <input type="text" name="academic[fldtendency][]" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">دانشگاه</label>
                                    <input type="text" name="academic[flduniversity][]" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">معدل</label>
                                    <input type="text" name="academic[fldgpa][]" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">زمان شروع تحصیل</label>
                                    <input type="text"  id="date_start_university" 
                                           placeholder="انتخاب تاریخ"
                                           data-name="datepicker1" 
                                           data-mddatetimepicker="true" 
                                           data-targetselector="#date_start_university" 
                                           data-trigger="click" 
                                           data-englishnumber="true" name="academic[flddate_start][]" class="date form-control input-sm">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">زمان پایان تحصیل</label>
                                    <input type="text" id="date_end_university" 
                                           placeholder="انتخاب تاریخ"
                                           data-name="datepicker2" 
                                           data-mddatetimepicker="true" 
                                           data-targetselector="#date_end_university" 
                                           data-trigger="click" 
                                           data-englishnumber="true" name="academic[flddate_end][]" class="form-control input-sm">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12">
                            <button type="button" id="buttonAddRecord" onclick="addAcademicStatus('add')" class="btn btn-primary">افزودن مدارک تحصیلی بیشتر</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="panel-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        <div class="clearfix"></div>
        {!! Form::close() !!}
    </div>

</div>
<div class="clearfix"></div>
</section>
<div class="clearfix"></div>

<script type="text/javascript">


    ///////Course Section
    var department;
    var course;
    var counter = 0;
    $(document).ready(function () {
        var html = '';
        $.get("{{url('/admin/users/department')}}").success(function (response) {
            department = JSON.parse(response);
            for (var i = 0; i < department.length; i++) {
                html = html + "\n\
                    <option value='" + department[i]['fldid'] + "'>" + department[i]['fldgroup'] + "</option>";
            }
            $("#departmentselect").append(html);
        });
    });
    function findCourse(idDepartment, id) {
        html = '';
        var url = "{{url('/admin/users/course')}}/" + idDepartment;
        var course;
        $.get(url).success(function (response) {
            course = JSON.parse(response);
            for (var i = 0; i < course.length; i++) {
                html = html + "\n\
                        <option value='" + course[i]['fldid'] + "'>" + course[i]['fldname'] + "</option>";
            }
            $("." + id).html(html);
        });
    }

    function addUsersCourse(id) {
        counter += 1;
        var html = '<div class="row">\n\
                                <hr/>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">گروه درسی</label>\n\
                                    <select name="usercourse[fldgroup][]" onchange="findCourse($(this).val(),$(this).attr(' + "'course'" + '))" class="form-control input-sm departmentselect" course="fldcourse' + counter + '" id="departmentselect" >\n\
                                    <option value="0">-- انتخاب کنید --</option>';
        console.log(department);
        for (var i = 0; i < department.length; i++) {
            html = html + "\n\
                                        <option value='" + department[i]['fldid'] + "'>" + department[i]['fldgroup'] + "</option>";
        }

        html = html + '</select>\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode"> درس</label>\n\
                                    <select name="usercourse[fldcourse_id][]" id="courseselect" class="form-control fldcourse' + counter + '">\n\
                                        <option value="0">-- انتخاب کنید --</option>\n\
                                    </select>\n\
                                </div>\n\
                            </div>';
        console.log(html);
        $("#UsersCourse" + id).append(html);
    }
    ////////////////// End Section Department

    //add Teaching Expirience inputs
    function addTeachingExpirience(id) {
        var html = '<hr/>\n\<div class="row">\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">نام دانشگاه یا آموزشگاه</label>\n\
                                    <input type="text" name="expirience[flduniversity][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">نام درس</label>\n\
                                    <input type="text" name="expirience[fldname_course][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">سال تحصیلی</label>\n\
                                    <input type="text" name="expirience[fldyear][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                            </div>';
        $('#TeachingExpirence' + id).append(html);
    }

    //add Employement Record inputs
    function addEmployementRecord(id) {
        var html = '<div class="row">\n\
                                <hr/>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">نام سازمان</label>\n\
                                    <input type="text" name="employement[fldname_company][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">سمت</label>\n\
                                    <input type="text" name="employement[fldside][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">تاریخ شروع همکاری</label>\n\
                                    <input type="text" name="employement[flddate_start][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">تاریخ پایان همکاری</label>\n\
                                    <input type="text" name="employement[flddate_end][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                            </div>';
        $('#EmployementRecord' + id).append(html);
    }

    //add research activities inputs
    function addResaerchActivities(id) {
        var html = '<div class="row">\n\
                                <hr/>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">عنوان</label>\n\
                                    <input type="text" name="research[fldtitle][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">محل انتشار</label>\n\
                                    <input type="text" name="research[fldplace_publication][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">زمان انتشار</label>\n\
                                    <input type="text" name="research[flddate_publication][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">نوع مدرک</label>\n\
                                    <select class="form-control" name="research[fldtype][]">\n\
                                        <option value="1">کتاب</option>\n\
                                        <option value="2">مقاله</option>\n\
                                    </select>\n\
                                </div>\n\
                            </div>';
        $('#ResaerchActivities' + id).append(html);
    }

    //add academic status inputs
    function addAcademicStatus(id) {
        var html = '<div class="row">\n\
                                <hr/>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">مقطع</label>\n\
                                    <input type="text" name="academic[fldlevel][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">رشته</label>\n\
                                    <input type="text" name="academic[fldfield][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">گرایش</label>\n\
                                    <input type="text" name="academic[fldtendency][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">دانشگاه</label>\n\
                                    <input type="text" name="academic[flduniversity][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">معدل</label>\n\
                                    <input type="text" name="academic[fldgpa][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">زمان شروع تحصیل</label>\n\
                                    <input type="text" name="academic[flddate_start][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">زمان پایان تحصیل</label>\n\
                                    <input type="text" name="academic[flddate_end][]" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                            </div>';
        $('#AcademicStatus' + id).append(html);
    }


</script>
<div class="modal fade" style="direction: rtl" id="modalSendData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">ثبت اطلاعات</h4>
            </div>
            <div class="modal-body">
                <h3 id="resultmsg">test</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">بستن</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    Object.size = function (obj) {
        var size = 0, key;
        for (key in obj) {
            if (obj.hasOwnProperty(key))
                size++;
        }
        return size;
    };

    var required = {0: {
            'key': 'fldfname',
            'label': 'نام',
        },
        1: {
            'key': 'fldlname',
            'label': 'نام خانوادگی',
        },
        2: {
            'key': 'fldname_father',
            label : 'نام پدر',
        },
        3: {
            'key': 'id_sh',
            'label': 'شماره شناسنامه',
        },
        4: {
            'key': 'national_code',
            'label': 'کد ملی',
        },
        5: {
            'key': 'mobile',
            'label': 'تلفن همراه',
        },
        6: {
            'key': 'address_location',
            'label': 'آدرس محل سکونت',
        },
        7: {
            'key': 'phone_location',
            'label': 'تلفن محل سکونت',
        },
        8: {
            'key': 'date_birth_day',
            'label': 'تاریخ تولد',
        },
        9: {
            'key': 'religion',
            'label': 'مذهب',
        }
    };
    //ajax form
    $(".ajaxForm").submit(function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var url = $(this).attr("action"); 
        var id = $(this).attr("id");
        var send = true;
        var msg = 'عملیات با موفقیت انجام شد اطلاعات شما بررسی و با شما تماس گرفته خواهد شد!!!';
        for (var i = 0; i < Object.size(required); i++) {
            
            if ($('#' + required[i]['key']).val().length == 0) {
//                alert("id is " + '#' + required[i]['key'] + " value is : " + $('#' + required[i]['key']).val().length);
                msg = "لطفا اطلاعات مربوط به " + required[i]['label'] + " را کامل نمائید";
                send = false;
                break;
            }
        }

        if (send == true) {
            $.ajax({
                type: "POST",
                url: url,
                data: $("#" + id).serialize(), // serializes the form's elements.
                success: function (data)
                {
                    $('#resultmsg').html(msg);
                    $("#modalSendData").modal(); // show response from the php script.
//                        document.location=document.URL;
                }
            });
        } else {
            $("#resultmsg").css({'color': '#CC5C5C'});
            $('#resultmsg').html(msg);
            $("#modalSendData").modal();
        }
    });
</script>
@stop