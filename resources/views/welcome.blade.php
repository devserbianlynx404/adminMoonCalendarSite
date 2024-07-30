@extends('layouts.app')
@section('title', 'Велком')
@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Список Лунных дней</h2>

                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
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
                                    <th>Описание</th>
                                    <th data-breakpoints="sm xs md">Символы</th>
                                    <th data-breakpoints="sm xs md">Камни</th>
                                    <th data-breakpoints="sm xs md">Дата изменения</th>
                                    <th>Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Simple Black Clock </td>
                                    <td>Символы</td>
                                    <td>Камни</td>
                                    <td><h5>29.07.2024 21:49</h5></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><h5>Simple Black Clock</h5></td>
                                    <td>Символы</td>
                                    <td>Камни</td>
                                    <td><h5>29.07.2024 21:49</h5></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><h5>Simple Black Clock</h5></td>
                                    <td>Символы</td>
                                    <td>Камни</td>
                                    <td><h5>29.07.2024 21:49</h5></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><h5>Simple Black Clock</h5></td>
                                    <td>Символы</td>
                                    <td>Камни</td>
                                    <td><h5>29.07.2024 21:49</h5></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><h5>Simple Black Clock</h5></td>
                                    <td>Символы</td>
                                    <td>Камни</td>
                                    <td><h5>29.07.2024 21:49</h5></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><h5>Simple Black Clock</h5></td>
                                    <td>Символы</td>
                                    <td>Камни</td>
                                    <td><h5>29.07.2024 21:49</h5></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                    <td>Символы</td>
                                    <td>Камни</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><h5>Simple Black Clock</h5></td>
                                    <td>Символы</td>
                                    <td>Камни</td>
                                    <td><h5>29.07.2024 21:49</h5></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <ul class="pagination pagination-primary m-b-0">
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
