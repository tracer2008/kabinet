@extends('layouts.desktop')

@section('content')

    <div class="main_content">

        <div class="home_container_wrap">
            <img src="{{asset('images/top_bg.jpg')}}" alt="" class="top_bg">
            <div class="container home_wrap">
                <div class="home_wrap_body row">
                    <div class="home_wrap_left">
                        <h1>Цифровой сервис <br/>личного кабинета <br/>для учебных заведений</h1>
                        <p class="h1_desc">Внедрение, обслуживание <br/>и модернизация без лишних хлопот</p>
                        <p class="label_info_desc p_relative">Получить коммерческое предложение на почту</p>
                        <div class="form_control_wrap p_relative">
                            <input type="text" class="form_control" placeholder="Email">
                        </div>
                    </div>

                    <div class="home_wrap_right">
                        <img src="{{asset('images/home_wrap_right_img.png')}}" alt="" class="home_wrap_right_img">
                    </div>
                </div>
            </div>
        </div>

        <div class="personal_area container">
            <div class="row row_m">
                <div class="personal_area_left">
                    <p class="label_info_desc p_relative">Получить коммерческое предложение на почту</p>
                    <h2>Личный кабинет</h2>
                    <p class="mb-0">Личный кабинет — это цифровое связующее звено студентов, преподавателей и сотрудников с учебным заведением. Сервис обладает большим набором функциональных возможностей и способен решать множество рутинных задач в онлайн-режиме.</p>
                </div>
                <div class="personal_area_right">
                    <img src="{{asset('images/bg1.jpg')}}" alt="" class="personal_area_right_img">
                </div>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
    <script src="{{ mix('js/splide.js') }}"></script>
@endpush
