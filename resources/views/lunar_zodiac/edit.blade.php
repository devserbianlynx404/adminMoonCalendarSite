@extends('layouts.app')
@section('title', 'Редактирование Лунной фазы')
@section('content')

    <section class="content blog-page">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Редактирование знака зодиака ({{$lunar_zodiac_data->name}}) </h2>
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
                    <form id="lunarPhaseForm" action="/lunar-zodiac/update/{{$lunar_zodiac_data->id}}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="body">
                                <div class="">
                                    <label>Название зодиака:</label>
                                </div>
                                <div class="form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Введите название зодиака" value="{{$lunar_zodiac_data->name}}" />
                                </div>
                                <div class="">
                                    <label>Заголовок:</label>
                                </div>
                                <div class="form-group">
                                    <input name="title" type="text" class="form-control" placeholder="Введите заголовок" value="{{$lunar_zodiac_data->title}}" />
                                </div>
                                <textarea name="description" id="content" style="display:none;"></textarea>
    {{--                            <select class="form-control show-tick">--}}
    {{--                                <option>Select Category --</option>--}}
    {{--                                <option>Web Design</option>--}}
    {{--                                <option>Photography</option>--}}
    {{--                                <option>Technology</option>--}}
    {{--                                <option>Lifestyle</option>--}}
    {{--                                <option>Sports</option>--}}
    {{--                            </select>--}}
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <div class="">
                                    <label>Описание зодиака:</label>
                                </div>
                                <div class="summernote">
                                    {!! $lunar_zodiac_data->description !!}
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

    <script>
        $(document).ready(function() {
            // Проверка инициализации Summernote
            if ($('.summernote').length > 0 && $('.summernote').data('summernote')) {
                console.log('Summernote is initialized');
            } else {
                console.log('Summernote is not initialized');
            }

            // Обработка отправки формы
            $('#lunarPhaseForm').on('submit', function() {
                // Сохраните содержимое Summernote в скрытом текстовом поле
                var content = $('.summernote').summernote('code');
                console.log('Content:', content); // Для отладки
                $('#content').val(content);
            });
        });
    </script>
@endsection
