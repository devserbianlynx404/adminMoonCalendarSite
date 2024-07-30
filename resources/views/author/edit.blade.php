@extends('layouts.app')
@section('title', 'Редактирование Лунной фазы')
@section('content')

    <section class="content blog-page">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Редактирование Астролога ({{$author->name}}) </h2>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
{{--                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>--}}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form id="lunarFieldOfActivityForm" action="/author/update/{{$author->id}}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="body">
                                <div class="">
                                    <label>Имя:</label>
                                </div>
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Введите название сферы" value="{{$author->name}}" />
                                </div>
                                <button type="submit" class="btn btn-info waves-effect m-t-20">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
