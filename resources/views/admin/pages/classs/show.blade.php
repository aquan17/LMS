<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab_1" data-toggle="tab">
                <h5 class="fw-bold">Thông tin chính</h5>
            </a>
        </li>
        <li class="">
            <a href="#tab_2" data-toggle="tab">
                <h5 class="fw-bold">Danh sách học sinh</h5>
            </a>
        </li>
        <li>
            <a href="#tab_3" data-toggle="tab">
                <h5 class="fw-bold">Danh sách giáo viên</h5>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <label class="control-label"><strong>@lang('Khu vực')</strong></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <p>{{ $detail->area->name ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <label class="control-label"><strong>@lang('Mã lớp')</strong></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <p>{{ $detail->code ?? '' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <label class="control-label"><strong>@lang('Tên lớp')</strong></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <p>{{ $detail->name ?? '' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <label class="control-label"><strong>@lang('Nhóm trẻ')</strong></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <p>{{ $detail->education_ages->name ?? '' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <label class="control-label"><strong>@lang('Hệ đào tạo')</strong></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <p>{{ $detail->education_programs->name ?? '' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <label class="control-label"><strong>@lang('Phòng học')</strong></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <p>{{ $detail->room->name ?? '' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <label class="control-label"><strong>@lang('Sức chứa')</strong></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <p>{{ $detail->slot ?? 0 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <label class="control-label"><strong>@lang('Năm cuối')</strong></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <div class="sw_featured d-flex-al-center">
                                    <label class="switch">
                                        <input class="teacher_main about-banner" type="checkbox" value="1" disabled
                                            {{ isset($detail->is_lastyear) && $detail->is_lastyear == '1' ? 'checked' : '' }}>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="control-label"><strong>@lang('Ngày tạo')</strong></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p>{{ date('H:i - d/m/Y', strtotime($detail->created_at)) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="control-label"><strong>@lang('Người tạo')</strong></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p>{{ $detail->admin_created->name ?? '' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="control-label"><strong>@lang('Ngày cập nhật')</strong></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p>{{ date('H:i - d/m/Y', strtotime($detail->updated_at)) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="control-label"><strong>@lang('Người cập nhật')</strong></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p>{{ $detail->admin_updated->name ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane " id="tab_2">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box" style="border-top: 3px solid #d2d6de;">
                        <div class="box-header">
                            <h3 class="box-title">@lang('Danh sách học viên')</h3>
                        </div>
                        <div class="box-body no-padding">
                            <table class="table table-hover sticky">
                                <thead>
                                    <tr>
                                        <th>@lang('Mã Học Viên')</th>
                                        <th>@lang('Họ tên')</th>
                                        <th>@lang('Nickname')</th>
                                        <th>@lang('Ngày vào')</th>
                                        <th>@lang('Ngày ra')</th>
                                        <th>@lang('Trạng thái')</th>
                                        <th>@lang('Loại')</th>
                                    </tr>
                                </thead>
                                <tbody class="box_student">
                                    @isset($detail->students)
                                        @foreach ($detail->students as $item)
                                            <tr class="item_student" data-id="{{ $item->id }}">
                                                <td>{{ $item->student_code }}</td>
                                                <td>{{ $item->last_name ?? '' }}
                                                    {{ $item->first_name ?? '' }}</td>
                                                <td>{{ $item->nickname ?? '' }}</td>
                                                <td>{{ optional($item->pivot)->start_at ? date('d-m-Y', strtotime($item->pivot->start_at)) : '' }}
                                                </td>
                                                <td>{{ optional($item->pivot)->stop_at ? date('d-m-Y', strtotime($item->pivot->stop_at)) : '' }}
                                                </td>
                                                <td>{{ __($item->pivot->status) }} </td>
                                                <td>{{ __($item->pivot->type) }} </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="tab-pane " id="tab_3">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">@lang('Danh sách giáo viên')</h3>
                        </div>
                        <div class="box-body no-padding">
                            <table class="table table-hover sticky ">
                                <thead>
                                    <tr class="text-center">
                                        <th>@lang('Giáo viên')</th>
                                        <th>@lang('Ngày bắt đầu')</th>
                                        <th>@lang('Ngày kết thúc')</th>
                                        <th>@lang('GVCN')</th>
                                        <th>@lang('Status')</th>
                                    </tr>
                                </thead>
                                <tbody class="box_teacher">
                                    @isset($detail->teacher)
                                        @foreach ($detail->teacher as $item)
                                            <tr class="item_teacher" data-id="{{ $item->id }}">
                                                <td>{{ $item->name ?? '' }} </td>
                                                <td>{{ optional($item->pivot)->start_at ? date('d-m-Y', strtotime($item->pivot->start_at)) : '' }}
                                                </td>
                                                <td>{{ optional($item->pivot)->stop_at ? date('d-m-Y', strtotime($item->pivot->stop_at)) : '' }}
                                                </td>
                                                <td>
                                                    <div class="sw_featured d-flex-al-center">
                                                        <label class="switch">
                                                            <input class="teacher_main about-banner"
                                                                name="teacher[{{ $item->id }}][is_teacher_main]"
                                                                type="checkbox" value="1" disabled
                                                                {{ isset($item->pivot->is_teacher_main) && $item->pivot->is_teacher_main == '1' ? 'checked' : '' }}>

                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>{{ __($item->pivot->status) }}</td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
