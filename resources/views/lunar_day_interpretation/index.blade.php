@extends('layouts.app')
@section('title', 'Список зодиаков')
@section('content')

    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Список интерпретаций Лунного дня</h2>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
{{--                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>--}}
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover product_item_list c_table theme-color mb-0">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Автор</th>
                                        <th data-breakpoints="sm xs md">Лунный день</th>
                                        <th data-breakpoints="sm xs md">Описание</th>
                                        <th data-breakpoints="sm xs md">Дата изменения</th>
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lunar_day_interpretation_data as $lunar_day_activity)
                                        <tr>
                                            <td>{{$lunar_day_activity['id']}}</td>
                                            <td>{{\App\Models\Author::getAuthorNameById($lunar_day_activity['author_id'])}}</td>
                                            <td>{{\App\Models\LunarDay::getLunarDayNameById($lunar_day_activity['lunar_day_id'])}}</td>
                                            <td>{!! $lunar_day_activity['short_description'] !!}</td>
                                            <td>{{$lunar_day_activity['updated_at']}}</td>
                                            <td>
                                                <a href="/lunar-day-interpretation/edit/{{$lunar_day_activity['id']}}" class="js_click_update_day btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
{{--                                                <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>--}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            $('.js_click_update_day').on('click', function () {--}}
{{--                let id = $(this).data('id');--}}
{{--                $.ajax({--}}
{{--                    method: 'POST', // Type of response and matches what we said in the route--}}
{{--                    url: `/lunar-day/edit/${id}`, // This is the url we gave in the route--}}
{{--                    data: {"rate": `${jQuery('.js_update_rate_' + id).val()}`,--}}
{{--                        "_token": "{{ csrf_token() }}"}, // <-- this is your POST data--}}
{{--                    success: (response) => { // What to do if we succeed--}}
{{--                        $('.js_update_rate_field_' + id).text(response.rate);--}}
{{--                        jQuery('.js_update_rate_' + jQuery(this).data('id')).val('');--}}
{{--                    },--}}
{{--                    error: (jqXHR, textStatus, errorThrown) => { // What to do if we fail--}}
{{--                        showErrors($(this).closest('.js-steam-change-balance-group'), jqXHR);--}}
{{--                    }--}}
{{--                });--}}
{{--            })--}}
{{--        });--}}
{{--    </script>--}}
@endsection

