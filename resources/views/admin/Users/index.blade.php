@extends('admin/baseAdmin')

@section('content')

<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modaladd">
    افزودن
</button>

<table id="datatable" class="table table-bordered table-hover" dir="rtl">
    <thead>
        <tr>
            <th>
                نام
            </th>
            <th>
                نام خانوادگی
            </th>
            <th>
                کد ملی
            </th>
            <th>
                ایمیل
            </th>
            <th>
                موبایل
            </th>
            <th>
                جنسیت
            </th>
            <th>
                آخرین تغییرات
            </th>
            <th>
                عملیات
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse($data['users'] as $item)
        <tr>
            <td>{{$item->fldfname}}</td>
            <td>{{$item->fldlname}}</td>
            <td>{{$item->fldnational_code}}</td>
            <td>{{$item->fldemail}}</td>
            <td>{{$item->fldmobile}}</td>
            <td>{{$item->fldsex}}</td>
            <td>{{$item->fldupdate_at}}</td>
            <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalShow">
                    show
                </button>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit{{$item->fldid}}">
                    edit
                </button>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalDelete">
                    delete
                </button>

            </td>
            <!-- Modal -->
            <!-- Show -->
    <div class="modal fade" id="modalShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!-- Edit -->
    <div class="modal fade" id="modalEdit{{$item->fldid}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(array('url' => '/admin/users/edit','class'=>'ajaxForm')) !!}
                    <input type="hidden" name="fldid" value="{{$item->fldid}}" />
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">نام*	</label>
                            <input type="text" class="form-control input-sm" id="name" name="fldfname" value="{{$item->fldfname}}" placeholder="First name">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">نام خانوادگی*	</label>
                            <input type="text" class="form-control input-sm" id="name" name="fldlname" value="{{$item->fldlname}}" placeholder="Last name">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="email">ایمیل*</label>
                            <input type="email" class="form-control input-sm" name="fldemail" value="{{$item->fldemail}}" id="email" placeholder="Email">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="mobile">موبایل*</label>
                            <input type="text" class="form-control input-sm" name="fldmobile" value="{{$item->fldmobile}}" id="mobile" placeholder="Mobile">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="address">آدرس سکونت*</label>
                            <textarea class="form-control input-sm" name="fldaddress_location" id="address" rows="3">{{$item->fldaddress_location}}</textarea>
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="address">آدرس کار*</label>
                            <textarea class="form-control input-sm" name="fldaddress_workplace" id="address" rows="3">{{$item->fldaddress_workplace}}</textarea>
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">تلفن محل سکونت</label>
                            <input type="text" name="fldaddress_location_phone" value="{{$item->fldaddress_location_phone }}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">تلفن محل کار</label>
                            <input type="text" name="fldaddress_workplace_phone" value="{{$item->fldaddress_workplace_phone}}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="country">شماره شناسنامه*</label>
                            <input type="text" class="form-control input-sm" name="fldid_sh" value="{{$item->fldid_sh}}" id="country" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">تاریخ تولد</label>
                            <input type="text" name="fldbith_day" value="{{$item->fldbirth_day}}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">محل تولد</label>
                            <input type="text" name="fldbith_place" value="{{$item->fldbirth_place}}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">مذهب</label>
                            <input type="text" name="fldreligion" value="{{$item->fldreligion}}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">نظام وظیفه</label>
                            <input type="text" name="fldmalitary" value="{{$item->fldmalitary}}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">روزهای آموزش</label>
                            <input type="text" name="flddate_work" value="{{$item->flddate_time_word }}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">ساعت آموزش</label>
                            <input type="text" name="flddate_time" value="{{$item->flddate_time_word}}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class = "form-group col-md-6 col-sm-6">
                            <label for="years">جنسیت</label>
                            <select class="form-control input-sm" id="years">
                                <option>-- انتخاب کنید --</option>
                                <option value="0">زن</option>
                                <option value="1">مرد</option>
                            </select>
                        </div>

                        <div class="col-md-12" id="TeachingExpirence{{$item->fldid}}">
                            <div class="row">
                                <h2>سوابق تحصیلی</h2>
                                <hr/>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">نام دانشگاه یا آموزشگاه</label>
                                    <input type="text" name="flduniversity[]" value="{{$item->flduniversity}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">نام درس</label>
                                    <input type="text" name="fldname_course[]" value="{{$item->fldname_course }}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">سال تحصیلی</label>
                                    <input type="text" name="fldyear[]" value="{{$item->fldyear}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="button" id="buttonAddTeaching" onclick="addTeachingExpirience('{{$item->fldid}}')" class="btn btn-primary">افزودن سوابق بیشتر</button>
                        </div>

                        <div class="col-md-12" id="EmployementRecord{{$item->fldid}}">
                            <div class="row">
                                <h2>سوابق شغلی</h2>
                                <hr/>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">نام سازمان</label>
                                    <input type="text" name="fldname_company[]" value="{{$item->fldname_company}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">سمت</label>
                                    <input type="text" name="fldside[]" value="{{$item->fldside }}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">تاریخ شروع همکاری</label>
                                    <input type="text" name="flddate_start[]" value="{{$item->flddate_start}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">تاریخ پایان همکاری</label>
                                    <input type="text" name="flddate_end[]" value="{{$item->flddate_start}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="button" id="buttonAddRecord" onclick="addEmployementRecord('{{$item->fldid}}')" class="btn btn-primary">افزودن سوابق شغلی بیشتر</button>
                        </div>

                        <div class="col-md-12" id="ResaerchActivities{{$item->fldid}}">
                            <div class="row">
                                <h2>مقاله های منتشر شده</h2>
                                <hr/>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">عنوان</label>
                                    <input type="text" name="fldtitle[]" value="{{$item->fldtitle}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">محل انتشار</label>
                                    <input type="text" name="fldplace_publication[]" value="{{$item->fldplace_publication }}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">زمان انتشار</label>
                                    <input type="text" name="flddate_publication[]" value="{{$item->flddate_publication}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">نوع مدرک</label>
                                    <select class="form-control" name="fldtype">
                                        <option value="1">کتاب</option>
                                        <option value="2">مقاله</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="button" id="buttonAddRecord" onclick="addResaerchActivities('{{$item->fldid}}')" class="btn btn-primary">افزودن سوابق شغلی بیشتر</button>
                        </div>
                        
                        
                        <div class="col-md-12" id="AcademicStatus{{$item->fldid}}">
                            <div class="row">
                                <h2>مدارک اخذ شده</h2>
                                <hr/>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">مقطع</label>
                                    <input type="text" name="fldlevelu[]" value="{{$item->fldlevel}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">رشته</label>
                                    <input type="text" name="fldfieldu[]" value="{{$item->fldfield }}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">گرایش</label>
                                    <input type="text" name="fldtendencyu[]" value="{{$item->fldtendency}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">دانشگاه</label>
                                    <input type="text" name="flduniversityu[]" value="{{$item->flduniversity}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">معدل</label>
                                    <input type="text" name="fldgpau[]" value="{{$item->fldgpa}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">زمان شروع تحصیل</label>
                                    <input type="text" name="flddate_startu[]" value="{{$item->flddate_start}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">زمان پایان تحصیل</label>
                                    <input type="text" name="flddate_endu[]" value="{{$item->flddate_start}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="button" id="buttonAddRecord" onclick="addAcademicStatus('{{$item->fldid}}')" class="btn btn-primary">افزودن مدارک تحصیلی بیشتر</button>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <!-- Modal -->
        <!-- Delete -->
        <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        </tr>


        @empty
        <h5>اطلاعاتی یافت نشد</h5>
        @endforelse
        </tbody>
</table>


    <!-- Add -->
    <div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(array('url' => '/admin/users/edit','class'=>'ajaxForm')) !!}
                    <input type="hidden" name="fldid" value="{{$item->fldid}}" />
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">نام*	</label>
                            <input type="text" class="form-control input-sm" id="name" name="fldfname" value="{{$item->fldfname}}" placeholder="First name">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">نام خانوادگی*	</label>
                            <input type="text" class="form-control input-sm" id="name" name="fldlname" value="{{$item->fldlname}}" placeholder="Last name">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="email">ایمیل*</label>
                            <input type="email" class="form-control input-sm" name="fldemail" value="{{$item->fldemail}}" id="email" placeholder="Email">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="mobile">موبایل*</label>
                            <input type="text" class="form-control input-sm" name="fldmobile" value="{{$item->fldmobile}}" id="mobile" placeholder="Mobile">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="address">آدرس سکونت*</label>
                            <textarea class="form-control input-sm" name="fldaddress_location" id="address" rows="3">{{$item->fldaddress_location}}</textarea>
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="address">آدرس کار*</label>
                            <textarea class="form-control input-sm" name="fldaddress_workplace" id="address" rows="3">{{$item->fldaddress_workplace}}</textarea>
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">تلفن محل سکونت</label>
                            <input type="text" name="fldaddress_location_phone" value="{{$item->fldaddress_location_phone }}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">تلفن محل کار</label>
                            <input type="text" name="fldaddress_workplace_phone" value="{{$item->fldaddress_workplace_phone}}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="country">شماره شناسنامه*</label>
                            <input type="text" class="form-control input-sm" name="fldid_sh" value="{{$item->fldid_sh}}" id="country" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">تاریخ تولد</label>
                            <input type="text" name="fldbith_day" value="{{$item->fldbirth_day}}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">محل تولد</label>
                            <input type="text" name="fldbith_place" value="{{$item->fldbirth_place}}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">مذهب</label>
                            <input type="text" name="fldreligion" value="{{$item->fldreligion}}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">نظام وظیفه</label>
                            <input type="text" name="fldmalitary" value="{{$item->fldmalitary}}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">روزهای آموزش</label>
                            <input type="text" name="flddate_work" value="{{$item->flddate_time_word }}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="pincode">ساعت آموزش</label>
                            <input type="text" name="flddate_time" value="{{$item->flddate_time_word}}" class="form-control input-sm" id="pincode" placeholder="">
                        </div>

                        <div class = "form-group col-md-6 col-sm-6">
                            <label for="years">جنسیت</label>
                            <select class="form-control input-sm" id="years">
                                <option>-- انتخاب کنید --</option>
                                <option value="0">زن</option>
                                <option value="1">مرد</option>
                            </select>
                        </div>

                        <div class="col-md-12" id="TeachingExpirence{{$item->fldid}}">
                            <div class="row">
                                <h2>سوابق تحصیلی</h2>
                                <hr/>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">نام دانشگاه یا آموزشگاه</label>
                                    <input type="text" name="flduniversity[]" value="{{$item->flduniversity}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">نام درس</label>
                                    <input type="text" name="fldname_course[]" value="{{$item->fldname_course }}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">سال تحصیلی</label>
                                    <input type="text" name="fldyear[]" value="{{$item->fldyear}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="button" id="buttonAddTeaching" onclick="addTeachingExpirience('{{$item->fldid}}')" class="btn btn-primary">افزودن سوابق بیشتر</button>
                        </div>

                        <div class="col-md-12" id="EmployementRecord{{$item->fldid}}">
                            <div class="row">
                                <h2>سوابق شغلی</h2>
                                <hr/>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">نام سازمان</label>
                                    <input type="text" name="fldname_company[]" value="{{$item->fldname_company}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">سمت</label>
                                    <input type="text" name="fldside[]" value="{{$item->fldside }}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">تاریخ شروع همکاری</label>
                                    <input type="text" name="flddate_start[]" value="{{$item->flddate_start}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">تاریخ پایان همکاری</label>
                                    <input type="text" name="flddate_end[]" value="{{$item->flddate_start}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="button" id="buttonAddRecord" onclick="addEmployementRecord('{{$item->fldid}}')" class="btn btn-primary">افزودن سوابق شغلی بیشتر</button>
                        </div>

                        <div class="col-md-12" id="ResaerchActivities{{$item->fldid}}">
                            <div class="row">
                                <h2>مقاله های منتشر شده</h2>
                                <hr/>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">عنوان</label>
                                    <input type="text" name="fldtitle[]" value="{{$item->fldtitle}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">محل انتشار</label>
                                    <input type="text" name="fldplace_publication[]" value="{{$item->fldplace_publication }}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">زمان انتشار</label>
                                    <input type="text" name="flddate_publication[]" value="{{$item->flddate_publication}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">نوع مدرک</label>
                                    <select class="form-control" name="fldtype">
                                        <option value="1">کتاب</option>
                                        <option value="2">مقاله</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="button" id="buttonAddRecord" onclick="addResaerchActivities('{{$item->fldid}}')" class="btn btn-primary">افزودن سوابق شغلی بیشتر</button>
                        </div>
                        
                        
                        <div class="col-md-12" id="AcademicStatus{{$item->fldid}}">
                            <div class="row">
                                <h2>مدارک اخذ شده</h2>
                                <hr/>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">مقطع</label>
                                    <input type="text" name="fldlevelu[]" value="{{$item->fldlevel}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">رشته</label>
                                    <input type="text" name="fldfieldu[]" value="{{$item->fldfield }}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">گرایش</label>
                                    <input type="text" name="fldtendencyu[]" value="{{$item->fldtendency}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">دانشگاه</label>
                                    <input type="text" name="flduniversityu[]" value="{{$item->flduniversity}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">معدل</label>
                                    <input type="text" name="fldgpau[]" value="{{$item->fldgpa}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">زمان شروع تحصیل</label>
                                    <input type="text" name="flddate_startu[]" value="{{$item->flddate_start}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">زمان پایان تحصیل</label>
                                    <input type="text" name="flddate_endu[]" value="{{$item->flddate_start}}" class="form-control input-sm" id="pincode" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="button" id="buttonAddRecord" onclick="addAcademicStatus('{{$item->fldid}}')" class="btn btn-primary">افزودن مدارک تحصیلی بیشتر</button>
                        </div>
                        
                        
                        <div class="col-md-12" id="TeachingExpirence{{$item->fldid}}">
                            <div class="row">
                                <h2>درس های مورد نظر  برای تدریس</h2>
                                <hr/>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode">گروه درسی</label>
                                    <select name="fldgroup" class="form-control input-sm" id="departmentselect" >
                                        <option value="0">-- انتخاب کنید --</option>

                                    </select>
                                </div>

                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="pincode"> درس</label>
                                    <select name="fldcourse_id" id="courseselect" class="form-control">
                                        <option value="0">-- انتخاب کنید --</option>
                                    </select>
                                </div>
                            </div>
                        </div>

<!--                        <div class="col-lg-12">
                            <button type="button" id="buttonAddTeaching" onclick="addTeachingExpirience('{{$item->fldid}}')" class="btn btn-primary">افزودن سوابق بیشتر</button>
                        </div>-->
                        
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
     var department;
    $(document).ready(function () {
        $('#datatable').DataTable();
        var html='';
        $.get("{{url('/admin/users/department')}}").success(function(response){
            department = JSON.parse(response);
            console.log(JSON.parse(response));

            for(var i =0;i<department.length;i++){
            html=html+"\n\
            <option value='"+department[i]['fldid']+"'>"+department[i]['fldgroup']+"</option>";
            }
            $("#departmentselect").append(html);
        });

        $("#departmentselect").on('select').change(function(){
                html = '';
                var url = "{{url('/admin/users/course')}}/"+$("#departmentselect").val();
                var course;
               $.get(url).success(function(response){
               department = JSON.parse(response);
               console.log(JSON.parse(response));

               for(var i =0;i<department.length;i++){
               html=html+"\n\
               <option value='"+department[i]['fldid']+"'>"+department[i]['fldname']+"</option>";
               }
               $("#courseselect").append(html);
            }); 
        });
    });
    
    
    //add Teaching Expirience inputs
    function addTeachingExpirience(id){
    var html = '<hr/>\n\<div class="row">\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">نام دانشگاه یا آموزشگاه</label>\n\
                                    <input type="text" name="flduniversity[]" value="{{$item->flduniversity}}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">نام درس</label>\n\
                                    <input type="text" name="fldname_course[]" value="{{$item->fldname_course }}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">سال تحصیلی</label>\n\
                                    <input type="text" name="fldyear[]" value="{{$item->fldyear}}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                            </div>';
    $('#TeachingExpirence' + id).append(html);
    }
    
    //add Employement Record inputs
    function addEmployementRecord(id){
    var html = '<div class="row">\n\
                                <hr/>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">نام سازمان</label>\n\
                                    <input type="text" name="fldname_company[]" value="{{$item->fldname_company}}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">سمت</label>\n\
                                    <input type="text" name="fldside[]" value="{{$item->fldside }}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">تاریخ شروع همکاری</label>\n\
                                    <input type="text" name="flddate_start[]" value="{{$item->flddate_start}}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">تاریخ پایان همکاری</label>\n\
                                    <input type="text" name="flddate_end[]" value="{{$item->flddate_start}}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                            </div>';
    $('#EmployementRecord' + id).append(html);
    }
    
    //add research activities inputs
    function addResaerchActivities(id){
    var html = '<div class="row">\n\
                                <hr/>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">عنوان</label>\n\
                                    <input type="text" name="fldtitle[]" value="{{$item->fldtitle}}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">محل انتشار</label>\n\
                                    <input type="text" name="fldplace_publication[]" value="{{$item->fldplace_publication }}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">زمان انتشار</label>\n\
                                    <input type="text" name="flddate_publication[]" value="{{$item->flddate_publication}}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">نوع مدرک</label>\n\
                                    <select class="form-control" name="fldtype">\n\
                                        <option value="1">کتاب</option>\n\
                                        <option value="2">مقاله</option>\n\
                                    </select>\n\
                                </div>\n\
                            </div>';
    $('#ResaerchActivities' + id).append(html);
    }
    
    //add academic status inputs
    function addAcademicStatus(id){
     var html='<div class="row">\n\
                                <hr/>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">مقطع</label>\n\
                                    <input type="text" name="fldlevelu[]" value="{{$item->fldlevel}}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">رشته</label>\n\
                                    <input type="text" name="fldfieldu[]" value="{{$item->fldfield }}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">گرایش</label>\n\
                                    <input type="text" name="fldtendencyu[]" value="{{$item->fldtendency}}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">دانشگاه</label>\n\
                                    <input type="text" name="flduniversityu[]" value="{{$item->flduniversity}}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">معدل</label>\n\
                                    <input type="text" name="fldgpau[]" value="{{$item->fldgpa}}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">زمان شروع تحصیل</label>\n\
                                    <input type="text" name="flddate_startu[]" value="{{$item->flddate_start}}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                                <div class="form-group col-md-6 col-sm-6">\n\
                                    <label for="pincode">زمان پایان تحصیل</label>\n\
                                    <input type="text" name="flddate_endu[]" value="{{$item->flddate_start}}" class="form-control input-sm" id="pincode" placeholder="">\n\
                                </div>\n\
                            </div>';   
        $('#AcademicStatus' + id).append(html);
    }
    
   
</script>
@stop