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
                نام درس
            </th>
            <th>
                گروه درسی
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
        @forelse($data['course'] as $item)
        <tr>
            <td>{{$item->fldid}}</td>
            <td>{{$item->fldname}}</td>
            <td>
                @foreach($data['department'] as $itemDepartment)
                @if($itemDepartment->fldid == $item->fldtbldeparment_id)   
                {{$itemDepartment->fldgroup}}
                @endif
                @endforeach
            </td>
            <td>{{$item->fldcreated_at}}</td>
            <td>{{$item->fldupdated_at}}</td>
            <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit{{$item->fldid}}">
                    ویرایش
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete">
                    حذف
                </button>

            </td>
            <!-- Modal -->
            <!-- Modal Edit -->
    <div class="modal fade" id="modalEdit{{$item->fldid}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">ویرایش گروه های درسی</h4>
                </div>
                {!! Form::open(array('url' => '/admin/course/edit','class'=>'ajaxForm','id'=>"editform".$item->fldid)) !!}
                <div class="modal-body">
                    <input type="hidden" name="fldid" value="{{$item->fldid}}" />
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">نام درس*	</label>
                            <input type="text" class="form-control input-sm" id="name" name="fldname" value="{{$item->fldname}}" placeholder="First name">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">گروه درسی*	</label>
                            <select name="fldtbldeparment_id" class="form-control" >
                                @foreach($data['department'] as $itemDepartment)
                                    <option value="{{$itemDepartment->fldid}}" @if($itemDepartment->fldid == $item->fldtbldeparment_id) selected="true"  @endif >
                                            {{$itemDepartment->fldgroup}}
                                    </option>
                                @endforeach
                        </select>
                    </div>
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
                <input type="hidden" name="fldid" value="{{$item->fldid}}" />
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
            {!! Form::open(array('url' => '/admin/course/add','class'=>'ajaxForm','id'=>'FormAddCouse')) !!}
            <div class="modal-body">
                <div class="col-md-12 col-sm-12">
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="name">نام درس*	</label>
                        <input type="text" class="form-control input-sm" id="name" name="fldname" placeholder="گروه">
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="name">گروه درسی*	</label>
                        <select name="flddeparment_id" class="form-control" >
                            @foreach($data['department'] as $itemDepartment)
                            <option value="{{$itemDepartment->fldid}}" >
                                {{$itemDepartment->fldgroup}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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