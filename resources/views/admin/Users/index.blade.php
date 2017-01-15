@extends('admin/baseAdmin')

@section('content')

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
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalShow{{$item->fldid}}">
                    نمایش
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete">
                    حذف
                </button>

            </td>
            <!-- Modal -->
            <!-- Show -->
    <div class="modal fade" id="modalShow{{$item->fldid}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">نمایش اطلاعات</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home{{$item->fldid}}" aria-controls="home" role="tab" data-toggle="tab">اطلاعات شخصی</a></li>
                            <li role="presentation" class=""><a href="#profile{{$item->fldid}}" aria-controls="profile" role="tab" data-toggle="tab">سوابق</a></li>
                            <li role="presentation" class=""><a href="#messages{{$item->fldid}}" aria-controls="messages" role="tab" data-toggle="tab">انتخاب درس ها</a></li>
                            <li role="presentation" class=""><a href="#settings{{$item->fldid}}" aria-controls="settings" role="tab" data-toggle="tab">مدارک</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home{{$item->fldid}}">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="name">نام*	</label>
                                        <label class="form-control input-sm" > {{$item->fldfname}} </label>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="name">نام خانوادگی*	</label>
                                        <label class="form-control input-sm" >{{$item->fldlname}}</label>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="name">نام پدر*	</label>
                                        <label class="form-control input-sm">{{$item->fldname_father}}</label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="country">شماره شناسنامه*</label>
                                        <label class="form-control input-sm" >{{$item->fldid_sh}}</label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="country">کد ملی*</label>
                                        <label class="form-control input-sm" >{{$item->fldnational_code}}</label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="email">ایمیل*</label>
                                        <label class="form-control input-sm" >{{$item->fldemail}}</label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="mobile">موبایل*</label>
                                        <label class="form-control input-sm" >{{$item->fldmobile}}</label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="address">آدرس سکونت*</label>
                                        <label class="form-control input-sm" >{{$item->fldaddress_location}}</label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="address">آدرس کار*</label>
                                        <label class="form-control input-sm" >{{$item->fldaddress_workplace}}</label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">تلفن محل سکونت</label>
                                        <label class="form-control input-sm">{{$item->fldaddress_location_phone }}</label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">تلفن محل کار</label>
                                        <label  class="form-control input-sm" >{{$item->fldaddress_workplace_phone}}</label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">تاریخ تولد</label>
                                        <label class="form-control input-sm">{{$item->fldbirth_day}}</label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">محل تولد</label>
                                        <label  class="form-control input-sm">{{$item->fldbirth_place}}</label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">مذهب</label>
                                        <label class="form-control input-sm"> {{$item->fldreligion}} </label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">نظام وظیفه</label>
                                        <label   class="form-control input-sm">{{$item->fldmalitary}}</label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">روزهای آموزش</label>
                                        <label class="form-control input-sm">{{$item->flddate_time_word }} </label>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="pincode">ساعت آموزش</label>
                                        <label  class="form-control input-sm">{{$item->flddate_time_word}} </label>
                                    </div>

                                    <div class = "form-group col-md-6 col-sm-6">
                                        <label for="years">جنسیت</label>
                                        <select disabled="true" name="user[fldsex]" class="form-control input-sm" id="years">
                                            <option value="1" @if($item->sex == 1) selected="true" @endif>مرد</option>
                                            <option value="0" @if($item->sex == 1) selected="true" @endif>زن</option>
                                        </select>
                                    </div>

                                    <div class = "form-group col-md-6 col-sm-6">
                                        <label for="years">وضعیت تاهل</label>
                                        <select disabled="true" name="user[fldmarital_status]" class="form-control input-sm" id="years">
                                            <option value="1">مجرد</option>
                                            <option value="0">متاهل</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile{{$item->fldid}}">
                                <div class="col-lg-12">
                                    <div class="col-md-12" id="TeachingExpirenceadd">
                                        <h2>سوابق آموزشی</h2>
                                        <hr/>
                                        @foreach($data['experience'] as $exp)
                                        @if($exp->fldtblteaching_id == $item->fldid)
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="pincode">نام دانشگاه یا آموزشگاه</label>
                                                <input disabled="true" type="text" name="expirience[flduniversity][]" value="{{$exp->flduniversity}}" class="form-control input-sm" id="pincode" placeholder="">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="pincode">نام درس</label>
                                                <input disabled="true" type="text" name="expirience[fldname_course][]" value="{{$exp->fldname_course }}" class="form-control input-sm" id="pincode" placeholder="">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="pincode">سال تحصیلی</label>
                                                <input disabled="true" type="text" name="expirience[fldyear][]" value="{{$exp->fldyear}}" class="form-control input-sm" id="pincode" placeholder="">
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>

                                    <div class="col-md-12" id="EmployementRecordadd">
                                        <h2>سوابق شغلی</h2>
                                        <hr/>
                                        @foreach($data['employement'] as $emp)
                                        @if($emp->tblteaching_id == $item->fldid)
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="pincode">نام سازمان</label>
                                                <input type="text" disabled="true" value="{{$emp->fldname_company}}" name="employement[fldname_company][]" class="form-control input-sm" id="pincode" placeholder="">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="pincode">سمت</label>
                                                <input type="text" disabled="true" value="{{$emp->fldside}}" name="employement[fldside][]" class="form-control input-sm" id="pincode" placeholder="">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="pincode">تاریخ شروع همکاری</label>
                                                <input type="text" disabled="true" value="{{$emp->flddate_start}}" name="employement[flddate_start][]" class="form-control input-sm" id="pincode" placeholder="">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="pincode">تاریخ پایان همکاری</label>
                                                <input type="text" disabled="true" value="{{$emp->flddate_end}}" name="employement[flddate_end][]" class="form-control input-sm" id="pincode" placeholder="">
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>

                                    <div class="col-md-12" id="ResaerchActivitiesadd">
                                        <h2>مقاله های منتشر شده</h2>
                                        <hr/>
                                        @foreach($data['research'] as $rese)
                                        @if($rese->tblteaching_id == $item->fldid)
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="pincode">عنوان</label>
                                                <input type="text" disabled="true" value="{{$rese->fldtitle}}" name="research[fldtitle][]" class="form-control input-sm" id="pincode" placeholder="">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="pincode">محل انتشار</label>
                                                <input type="text" disabled="true" value="{{$rese->fldplace_publication}}" name="research[fldplace_publication][]" class="form-control input-sm" id="pincode" placeholder="">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="pincode">زمان انتشار</label>
                                                <input type="text" disabled="true" value="{{$rese->flddate_publication}}" name="research[flddate_publication][]" class="form-control input-sm" id="pincode" placeholder="">
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="pincode">نوع مدرک</label>
                                                <select class="form-control" disabled="true" name="research[fldtype][]">
                                                    <option value="1" <?php if($rese->fldtype == 1): ?> selected="true" <?php endif; ?> >کتاب</option>
                                                    <option value="2" <?php if($rese->fldtype == 2): ?> selected="true" <?php endif; ?> >مقاله</option>
                                                </select>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages{{$item->fldid}}">
                                <div class="col-md-12" id="UsersCourse{{$item->fldid}}">
                                    <div class="row">
                                        <h2>درس های مورد نظر  برای تدریس</h2>
                                        <hr/>
                                        @foreach($data['usercourse'] as $uc)
                                        @if($uc->fldtbluser_id == $item->fldid)
                                        @foreach($data['course'] as $c)
                                        @if($c->fldid == $uc->fldtblcourse_id)
                                        <div class="form-group col-md-6 col-sm-6">
                                            <label for="pincode">نام درس</label>
                                            <label class="form-control disabled">{{$c->fldname}}</label>
                                        </div>
                                        @endif
                                        @endforeach
                                        @endif
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane " id="settings{{$item->fldid}}">
                                
                                <div class="col-md-12" id="AcademicStatusadd">
                                    <h2>مدارک اخذ شده</h2>
                                        <hr/>
                                         @foreach($data['academic'] as $aca)
                                        @if($aca->fldtbluser_id == $item->fldid)
                                    <div class="row">
                                        
                                        <div class="form-group col-md-6 col-sm-6">
                                            <label for="pincode">مقطع</label>
                                            <input type="text" disabled="true" value="{{$aca->fldlevel}}" name="academic[fldlevel][]" class="form-control input-sm" id="pincode" placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6">
                                            <label for="pincode">رشته</label>
                                            <input type="text" disabled="true" value="{{$aca->fldfield}}" name="academic[fldfield][]" class="form-control input-sm" id="pincode" placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6">
                                            <label for="pincode">گرایش</label>
                                            <input type="text" disabled="true" value="{{$aca->fldtendency}}" name="academic[fldtendency][]" class="form-control input-sm" id="pincode" placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6">
                                            <label for="pincode">دانشگاه</label>
                                            <input type="text" disabled="true" value="{{$aca->flduniversity}}" name="academic[flduniversity][]" class="form-control input-sm" id="pincode" placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6">
                                            <label for="pincode">معدل</label>
                                            <input type="text" disabled="true" value="{{$aca->fldgpa}}" name="academic[fldgpa][]" class="form-control input-sm" id="pincode" placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6">
                                            <label for="pincode">زمان شروع تحصیل</label>
                                            <input type="text" disabled="true" value="{{$aca->flddate_start}}" name="academic[flddate_start][]" class="form-control input-sm" id="pincode" placeholder="">
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6">
                                            <label for="pincode">زمان پایان تحصیل</label>
                                            <input type="text" disabled="true" value="{{$aca->flddate_end}}" name="academic[flddate_end][]" class="form-control input-sm" id="pincode" placeholder="">
                                        </div>
                                    </div>
                                        @endif
                                        @endforeach
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!-- Delete -->
    <!-- Delete -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                {!! Form::open(array('url' => '/admin/users/delete','class'=>'ajaxForm','id'=> 'deleteform'.$item->id)) !!}
                <div class="modal-body">
                    <input type="hidden" name="fldid" value="{{$item->fldid}}" />
                    <h3>آیا از حذف اطلاعات مطمئن هیستید ؟</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">خیر</button>
                    <button type="submit" class="btn btn-primary">بله</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <!-- End Modal -->
</tr>


@empty
<h5>اطلاعاتی یافت نشد</h5>
@endforelse
</tbody>
</table>

</div>
<script type="text/javascript">
    $(document).ready(function () {
    $('#datatable').DataTable();
    });

</script>
@stop