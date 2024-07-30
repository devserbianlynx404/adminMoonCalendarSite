@extends('layouts.app')
@section('title', 'Редактирование Лунной фазы')
@section('content')

    <section class="content blog-page">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Редактирование Интерпретации Лунного дня по ({{\App\Models\Author::getAuthorNameById($lunar_day_interpretation['author_id'])}}) </h2>
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
                    <form id="lunarDayInterpratationForm" action="/lunar-day-interpretation/update/{{$lunar_day_interpretation->id}}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="body">
                                <div class="">
                                    <label>Автор:</label>
                                </div>
                                <div class="form-group">
                                        <input readonly name="author_id" type="hidden" class="form-control" value="{{$lunar_day_interpretation['author_id']}}" />
                                        <input readonly name="name" type="text" class="form-control" placeholder="Введите название сферы" value="{{\App\Models\Author::getAuthorNameById($lunar_day_interpretation['author_id'])}}" />
                                </div>
                                <div class="">
                                    <label>Лунный день:</label>
                                </div>
                                <div class="form-group">
                                    <input readonly name="lunar_day_id" type="hidden" class="form-control" value="{{$lunar_day_interpretation->lunar_day_id}}" />
                                    <input readonly name="title" type="text" class="form-control" placeholder="Лунный день" value="{{\App\Models\LunarDay::getLunarDayNameById($lunar_day_interpretation->lunar_day_id)}}" />
                                </div>
                                <textarea name="description" id="content" style="display:none;"></textarea>
{{--                                <select name="influence" class="form-control show-tick">--}}
{{--                                    <option>Выберите влияние луны --</option>--}}
{{--                                    <option @if($lunar_activity_field->influence == 1) selected @endif value="1">Ужасно</option>--}}
{{--                                    <option @if($lunar_activity_field->influence == 2) selected @endif value="2">Плохо</option>--}}
{{--                                    <option @if($lunar_activity_field->influence == 3) selected @endif value="3">Норма</option>--}}
{{--                                    <option @if($lunar_activity_field->influence == 4) selected @endif value="4">Хорошо</option>--}}
{{--                                    <option @if($lunar_activity_field->influence == 5) selected @endif value="5">Отлично</option>--}}
{{--                                </select>--}}
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <div class="">
                                    <label>Интерпретация:</label>
                                </div>
                                <div class="summernote">
                                    {!! $lunar_day_interpretation->description !!}
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
            $('#lunarDayInterpratationForm').on('submit', function() {
                // Сохраните содержимое Summernote в скрытом текстовом поле
                var content = $('.summernote').summernote('code');
                console.log('Content:', content); // Для отладки
                $('#content').val(content);
            });
        });
    </script>
@endsection
