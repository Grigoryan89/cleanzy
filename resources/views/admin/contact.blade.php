@extends('layouts.master')
@section('content')


    <div class="row custyle">
        <table class="table table-striped custab">
            <thead>
            <tr>
                <th>{{__('app.about_contact.name')}}</th>
                <th>{{__('app.about_contact.email')}}</th>
                <th>{{__('app.about_contact.phone')}}</th>
                <th>Նամակ</th>
            </tr>
            </thead>
            @foreach($contact as $item)
            <tr>
                <td>{{$item->cont_name}}</td>
                <td>{{$item->cont_email}}</td>
                <td>{{$item->cont_phone}}</td>
                <td style="word-break: break-all;">{{$item->cont_message}}</td>
            </tr>
            @endforeach

        </table>
    </div>

@endsection
