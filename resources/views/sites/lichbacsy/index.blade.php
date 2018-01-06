@extends('sites.master')
@section('content')
@include('sites._include.navbar')
@include('sites._include.banner')
<div class="page-content">
    <div class="container main">
        <div class="row">
            <div class="col-md-10 post" id="ok">
                <div class="col-md-12 ">
                    <div class="col-md-12">
                        <div class="card card-body text-center inforprofile">
                            <h3 ><i class="fa fa-calendar" aria-hidden="true"></i> <span style="color:red">LỊCH BÁC SĨ SIÊU ÂM</span> </h3>

                            <div class="card text-center">
                                <table class="table table-hover table-bordered">
                                    <thead >
                                        <tr>
                                            <th class="text-center">{{ trans('message.room') }}</th>
                                            <th class="text-center">Thứ 2</th>
                                            <th class="text-center">Thứ 3</th>
                                            <th class="text-center">Thứ 4</th>
                                            <th class="text-center">Thứ 5</th>
                                            <th class="text-center">Thứ 6</th>
                                            <th class="text-center">Thứ 7</th>
                                            <th class="text-center">Chủ Nhật</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if (isset($calendars))
                                    @foreach ($calendars as $item)
                                        <tr >
                                            <th  class="text-center">{{ $item->name }}</th>
                                            <th class="text-center">
                                                @foreach ($item->doctorCalender as $doctor)
                                                    @if ($doctor->mon == config('custom.calendar.yes'))
                                                    {{ $doctor->doctor->name }}
                                                    @endif
                                                @endforeach
                                            </th>
                                           <th class="text-center">
                                                @foreach ($item->doctorCalender as $doctor)
                                                    @if ($doctor->tue == config('custom.calendar.yes'))
                                                    {{ $doctor->doctor->name }}
                                                    @endif
                                                @endforeach
                                            </th>
                                            <th class="text-center">
                                                @foreach ($item->doctorCalender as $doctor)
                                                    @if ($doctor->wed == config('custom.calendar.yes'))
                                                        {{ $doctor->doctor->name }}
                                                    @endif
                                                @endforeach
                                            </th>
                                            <th class="text-center">
                                                @foreach ($item->doctorCalender as $doctor)
                                                    @if ($doctor->thu == config('custom.calendar.yes'))
                                                    {{ $doctor->doctor->name }}
                                                    @endif
                                                @endforeach
                                            </th>
                                            <th class="text-center">
                                                @foreach ($item->doctorCalender as $doctor)
                                                    @if ($doctor->fri == config('custom.calendar.yes'))
                                                    {{ $doctor->doctor->name }}
                                                    @endif
                                                @endforeach
                                            </th>
                                            <th class="text-center">
                                                @foreach ($item->doctorCalender as $doctor)
                                                    @if ($doctor->sat == config('custom.calendar.yes'))
                                                    {{ $doctor->doctor->name }}
                                                    @endif
                                                @endforeach
                                            </th>
                                            <th class="text-center">
                                                @foreach ($item->doctorCalender as $doctor)
                                                    @if ($doctor->sun == config('custom.calendar.yes'))
                                                    {{ $doctor->doctor->name }}
                                                    @endif
                                                @endforeach
                                            </th>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('sites._include.mucluc')
        </div>
    </div>
</div>

@include('sites._include.footer')
@endsection
@section('style')
{{ Html::style('css/sites/profile/profile.css') }}
{{ Html::style('css/sites/_include/navbar.css') }}
{{ Html::style('css/sites/_include/footer.css') }}
{{ Html::style('css/sites/_include/banner.css') }}
@endsection
@section('script')
{{ Html::script('js/lichsukham/lichsukham.js') }}
@endsection
