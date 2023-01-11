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

        <div class="personal_area container mb-90">
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

        <div class="functions container mb-30">
            <div class="functions_body">
                <p class="label_info_desc p_relative">Только необходимые и эффективные инструменты</p>
                <h2>Набор функциональных возможностей</h2>
                <p class="mb-0">Воспользовавшись нашим предложением вы покажете, что ваше учебное заведение прогрессирует и внедряет цифровые технологии в учебные и рабочие процессы, а также ценит время своих студентов и преподавателей.</p>
            </div>
        </div>

        <div class="functions_sliders container">
            <div class="tab_list row">
                <span id="t_students" class="tab_item order_label active" onclick="support.tab(this)">Студентам</span>
                <span id="t_teachers" class="tab_item order_label" onclick="support.tab(this)">Преподавателям</span>
                <span id="t_employees" class="tab_item order_label" onclick="support.tab(this)">Сотрудникам</span>
            </div>
            <div class="tab_content">
                <div id="t_students_tab" class="tab_pane active function_tab">

                    <div class="slider_wrap splide_wrap p_relative">
                        <div class="splide_students">
                            <div class="splide__track">
                                <div class="splide__list">
                                    @include('app.include.function.students._slide1')
                                    @include('app.include.function.students._slide2')
                                    @include('app.include.function.students._slide3')
                                    @include('app.include.function.students._slide4')
                                    @include('app.include.function.students._slide5')
                                    @include('app.include.function.students._slide6')
                                    @include('app.include.function.students._slide7')
                                    @include('app.include.function.students._slide8')
                                    @include('app.include.function.students._slide9')
                                    @include('app.include.function.students._slide10')
                                    @include('app.include.function.students._slide11')
                                    @include('app.include.function.students._slide12')
                                    @include('app.include.function.students._slide13')
                                    @include('app.include.function.students._slide14')
                                </div>
                            </div>

                            @include('app.include.function._arrows-slider')
                        </div>
                    </div>

                </div>

                <div id="t_teachers_tab" class="tab_pane">

                    <div class="slider_wrap splide_wrap p_relative">
                        <div class="splide_teachers">
                            <div class="splide__track">
                                <div class="splide__list">
                                    @include('app.include.function.teachers._slide1')
                                    @include('app.include.function.teachers._slide2')
                                    @include('app.include.function.teachers._slide3')
                                </div>
                            </div>

                            @include('app.include.function._arrows-slider')
                        </div>
                    </div>

                </div>

                <div id="t_employees_tab" class="tab_pane">

                    <div class="slider_wrap splide_wrap p_relative">
                        <div class="splide_employees">
                            <div class="splide__track">
                                <div class="splide__list">
                                    @include('app.include.function.employees._slide1')
                                    @include('app.include.function.employees._slide2')
                                    @include('app.include.function.employees._slide3')
                                </div>
                            </div>

                            @include('app.include.function._arrows-slider')
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="consultation container mb-90">
            <div class="consultation_body row justify_align">
                <p class="consultation_desc mb-0">Оставьте заявку на консультацию</p>
                <span class="consultation_btn" onclick="support.openClose('form_modal_wrap')">Написать</span>
            </div>
        </div>

        <div class="personal_area security container mb-90">
            <div class="row row_m">
                <div class="personal_area_left">
                    <p class="label_info_desc p_relative">Уделяем особое внимание безопасности</p>
                    <h2>Безопасность</h2>
                    <p class="mb-0">Мы более 10 лет активно работаем и развиваемся в сфере технологичных цифровых услуг и смогли создать практически неповторимый сервис, объединяющий удобство, широкий спектр возможностей и безопасность данных. Наши сервера обеспечены антивирусным программным обеспечением и другим софтом, препятствующим несанкционированному доступу, а также мы осознаем важность и ответственность своей работы, поэтому каждый из этапов разработки и обновлений тщательно проверяется специалистами в области цифровой безопасности.</p>
                </div>
                <div class="personal_area_right">
                    <img src="{{asset('images/bg2.jpg')}}" alt="" class="personal_area_right_img">
                </div>
            </div>
        </div>

        <div class="personal_area security container mb-90">
            <div class="row row_m">
                <div class="personal_area_left">
                    <p class="label_info_desc p_relative">Пишите, звоните - мы на связи</p>
                    <h2>Сотрудничество с нами</h2>
                    <p class="mb-0">
                        Мы открыты к разговору и обсуждению различных вариантов сотрудничества. Вы можете позвонить нам по телефону
                        <a href="tel:88005115038">8 800 511 50 38</a>, написать на
                        <a href="mailto:edusoft22@yandex.ru">edusoft22@yandex.ru</a>
                        или просто оставить заявку.
                    </p>
                </div>
                <div class="personal_area_right">
                    <img src="{{asset('images/bg2.jpg')}}" alt="" class="personal_area_right_img">
                </div>
            </div>
        </div>

        <div class="consultation container mb-90">
            <div class="consultation_body row justify_align">
                <p class="consultation_desc mb-0">Оставьте заявку на консультацию</p>
                <span class="consultation_btn" onclick="support.openClose('form_modal_wrap')">Написать</span>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
    <script src="{{ mix('js/splide.js') }}"></script>
@endpush
