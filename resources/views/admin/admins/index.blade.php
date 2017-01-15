@extends('admin/baseAdmin')

@section('content')

<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modaladd">
    افزودن
</button>
<table id="datatable" class="table table-bordered table-hover" dir="rtl">
    <thead>
        <tr>
            <th>
                ردیف
            </th>
            <th>
                نام 
            </th>
            <th>
                ایمیل
            </th>
            <th>
                تاریخ ایجاد
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
        @forelse($data['admins'] as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>
                {{$item->email}}
            </td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit{{$item->id}}">
                    ویرایش
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete">
                    حذف
                </button>

            </td>
            <!-- Modal -->
            <!-- Modal Edit -->
    <div class="modal fade" id="modalEdit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">ویرایش گروه های درسی</h4>
                </div>
                {!! Form::open(array('url' => '/admin/admins/edit','class'=>'ajaxForm','id'=>"editform".$item->id)) !!}
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{$item->id}}" />
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">نام *	</label>
                            <input type="text" required="true" class="form-control input-sm" id="name" name="name" value="{{$item->name}}" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">ایمیل*	</label>
                            <input type="text" required="true" class="form-control input-sm" id="name" name="email" value="{{$item->email}}" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">رمز عبور*	</label>
                            <input type="password" required="true" class="form-control input-sm" id="name" name="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                    <button type="submit" class="btn btn-primary">ویرایش اطلاعات</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <!-- Delete -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                {!! Form::open(array('url' => '/admin/course/delete','class'=>'ajaxForm','id'=> 'deleteform'.$item->id)) !!}
                <div class="modal-body">
                    <input type="hidden" name="fldid" value="{{$item->id}}" />
                    <h3>آیا از حذف اطلاعات مطمئن هستید ؟</h3>
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
</tr>


@empty
<h5>اطلاعاتی یافت نشد</h5>
@endforelse
</tbody>
</table>

<!-- Modal Add -->
<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">افزودن گروه درسی</h4>
            </div>
            {!! Form::open(array('url' => '/admin/admins/add','class'=>'ajaxForm','id'=>'FormAddCouse')) !!}
            <div class="modal-body">
               <div class="col-md-12 col-sm-12">
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">نام *	</label>
                            <input required="true" type="text" class="form-control input-sm" id="name" name="name"  placeholder="Name">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">ایمیل*	</label>
                            <input required="true" type="text" class="form-control input-sm" id="name" name="email" " placeholder="Email">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">رمز عبور*	</label>
                            <input required="true" type="password" class="form-control input-sm" id="name" name="password" placeholder="Password">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                <button type="submit" class="btn btn-primary">ثبت اطلاعات</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').DataTable();
    });

</script>
@stop