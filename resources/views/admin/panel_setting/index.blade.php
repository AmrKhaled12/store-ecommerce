@extends('layouts.mainAdmin')
@section('title')
    General Setting
@endsection


@section('main_name')
<h1>Setting</h1>
<h3 class="card-title"> بيانات الضبط العام</h3>
    <div class="card-body">
        <table id="example2" class="table table-bordered table-striped">
            @foreach($admin_panel as $data)
            <thead>
            <tr>
                <td class="width30">اسم الشركة</td>
                <td>{{ $data->system_name}}</td>
            </tr>

            <tr>
                <td class="width30">كود الشركة</td>
                <td>{{ $data->com_code}}</td>
            </tr>
            <tr>
                <td class="width30">حالة الشركة</td>
                <td>@if( $data->active==1) active @else Not active @endif</td>
            </tr>
            <tr>
                <td class="width30">عنوان الشركة</td>
                <td>{{ $data->address}}</td>
            </tr>
            <tr>
                <td class="width30">هاتف الشركة</td>
                <td>{{ $data->phone}}</td>
            </tr>

            <tr>
                <td class="width30">ملاحظات</td>
                <td>{{ $data->general_alert}}</td>
            </tr>

            <tr>
                <td class="width30">لوجو الشركة</td>
                <td>
                    <div class="image">
                       <img class="custom_img" src="{{asset('assets/admin/uploads').'/'.$data->photo}}" alt="لوجو الشركة">
                    </div>
                </td>
            </tr>


            </thead>
                <a class="btn btn-primary" href="{{route('edit',$data->com_code)}}" role="button">Edit</a>
            @endforeach
        </table>

    </div>


@endsection

