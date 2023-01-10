@extends('frontEnd.master')

@section('title')
    Rawshan Kabir | Creative web designer
@endsection

@section('content')

    <!--banner start-->

    <section id="banner">
        <div class="bnr_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="bnr_content text-left">
                            <h1 class="animated heartBeat">Hi! I'm Rawshan Kabir.</h1>
                            <h6 class="cd-intro">
                                <h1 class="cd-headline zoom">
                                    <span>Creative Front & Back End Wab</span>
                                    <span class="cd-words-wrapper">
											<b class="is-visible">Designer.</b>
											<b>Developer.</b>
											<b>& Creator.</b>
										</span>
                                </h1>
                            </h6>
                            <a class="btn my-2 my-sm-0" href="https://drive.google.com/file/d/1bYYET6nr0jHA43c2IF2gud9ZfJETtJEE/view?usp=share_link" type="submit" target="blank">Get CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <!-- particles.js container -->--}}
{{--        <div id="particles-js"></div>--}}

    </section>

    <!--banner end-->
    <!--about start-->

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_heading text-center mb-5">
                        <h3>About Me</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about_content">
                        <h2 class="nam wow bounce">My Name Is Mr.Kabir.</h2>
                        <p class="wow slideInLeft">{{substr($about->about_content,0,250)}}</p>
                        <p class="wow slideInRight">{{substr($about->about_content,250)}}</p>
                    </div>
                    <div class="ab_icon">
                        <ul>
                            <li class="ab_icon2 wow slideInLeft"><a href="https://www.facebook.com/rawshan.55/" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="ab_icon wow slideInUp"><a href="https://www.linkedin.com/in/rawshan-kabir-78b76b227/" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="ab_icon2 wow slideInRight"><a href="https://github.com/kabir5055" target="blank"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 pic_ab wow slideInRight">
                    <img src="{{ asset($about->about_image) }}" class="img-fluid w-100 " alt="about">
                </div>
            </div>
        </div>
    </section>
    <!--about end-->
    <!--services start-->

    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_heading mb-5 text-center">
                        <h3>Services</h3>
                    </div>
                </div>
                @foreach($services as $service)
                    @if($service->status == 1)
                        <div class="col-lg-4 mb-5">
                            <div class="ser_main wow slideInRight">
                                <div class="ser_icon">
                                    <div class="ser_icon2">
                                        <div class="ser_icon3">
                                            <img src="{{ asset('frontEndAsset') }}/pic/ser_icon01.png" class="img-fluid" alt="ser_icon01">
                                        </div>
                                    </div>
                                </div>
                                <div class="ser_content text-center">
                                    <h3>{{ $service->services_name }}</h3>
                                    <p>{{ $service->services_content }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!--services end-->
    <!--work start-->

    <section id="work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_heading text-center">
                        <h3>My Works</h3>
                    </div>
                </div>
                <div class="col-lg-12 slider2">
                    @foreach($works as $work)
                        @if($work->status == 1)
                            <div class="col-lg-4">
                                <div class="work_main">
                                    <div class="work_gly">
                                        <a href=""><img src="{{ asset($work->mywork_image) }}" class="img-fluid w-100"></a>
                                        <div class="work_icon">
                                            <li><a class="venobox" data-gall="gallery01" href="{{ asset($work->mywork_image) }}"><i class="fas fa-search-plus"></i></a></li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
        <div class="prev0"><i class="fas fa-arrow-left"></i></div>
        <div class="next0"><i class="fas fa-arrow-right"></i></div>
    </section>


    <!--work end-->
    <!--work start-->

    <section id="test_moniyal">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="common_heading text-center">
                        <h3>FeedBack</h3>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12 slider">
                    @foreach($testimonial as $testimonial)
                        @if($testimonial->status == 1)
                            <div class="test">
                                <div class="testimg">
                                    <img src="{{ asset($testimonial->testimonial_image) }}" class="img-fluid" alt="">
                                </div>
                                <div class="testcontent">
                                    <p>{{ $testimonial->testimonial_content }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="prev"><i class="fas fa-arrow-left"></i></div>
        <div class="next"><i class="fas fa-arrow-right"></i></div>
    </section>


    <!--work end-->

    <!--skills start-->

    <section id="skill">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_heading text-center">
                        <h3>My Skills</h3>
                    </div>
                </div>
                <div id="SkillBox">
                    <img src="https://2.bp.blogspot.com/--aPlnH6X1YA/UEf7yeJ3gGI/AAAAAAAATgw/TgMK9IVzipk/s1600/Skills%2B-%2BPawan%2BMall.png" alt="Skill - Pawan Mall" />
                    <div class="SkillBar">
                        <div id="Skill-HTML">
                            <span class="Skill-Area ">HTML</span>
                            <span class="PercentText ">95%</span>
                        </div>
                    </div>

                    <div class="SkillBar">
                        <div id="Skill-CSS">
                            <span class="Skill-Area ">CSS/CSS3</span>
                            <span class="PercentText ">70%</span>
                        </div>
                    </div>

                    <div class="SkillBar">
                        <div id="Skill-php">
                            <span class="Skill-Area ">PHP</span>
                            <span class="PercentText ">80%</span>
                        </div>
                    </div>

                    <div class="SkillBar">
                        <div id="Skill-laravel">
                            <span class="Skill-Area ">LARAVEL </span>
                            <span class="PercentText ">75%</span>
                        </div>
                    </div>

                    <div class="SkillBar">
                        <div id="Skill-python">
                            <span class="Skill-Area ">PYTHON</span>
                            <span class="PercentText ">70%</span>
                        </div>
                    </div>

                    <div class="SkillBar">
                        <div id="Skill-Django">
                            <span class="Skill-Area ">DJANGO </span>
                            <span class="PercentText ">65%</span>
                        </div>
                    </div>

                    <div class="SkillBar">
                        <div id="Skill-Javascript">
                            <span class="Skill-Area ">Javascript</span>
                            <span class="PercentText ">40%</span>
                        </div>
                    </div>

                    <div class="SkillBar">
                        <div id="Skill-SQL">
                            <span class="Skill-Area ">MySQL </span>
                            <span class="PercentText ">60%</span>
                        </div>
                    </div>

                    <div class="SkillBar">
                        <div id="Skill-C">
                            <span class="Skill-Area ">Programing C</span>
                            <span class="PercentText ">75%</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--skills end-->

    <!--Isotop start-->


    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_heading text-center">
                        <h3>Team</h3>
                    </div>
                    <div class=""  data-js="hero-gly">
                        <div class="temp ui-group">
                            <div class="filters button-group js-radio-button-group">
                                <button class="button is-checked" data-filter="*">All Team</button>
                                <button class="button" data-filter=".WDD">Web Design & Development</button>
                                <button class="button" data-filter=".GD">Graphic Design</button>
                                <button class="button" data-filter=".UXUI">SEO optimizer</button>
                            </div>
                        </div>
                        <div class="grid">
                            @foreach($teams as $team)
                                @if($team->status == 1)
                                    <div class="col-lg-3 element-item {{ $team->category }} " data-category="transition">
                                        <div class="team_main">
                                            <div class="team_box">
                                                <img src="{{ asset($team->team_image) }}" class="img-fluid" height="700" width="250" alt="NotSupport">
                                                <div class="team_overlay">
                                                    <ul>
                                                        <li><a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="{{ $team->linkedIn }}"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="{{ $team->github }}"><i class="fab fa-github"></i></a></li>
                                                        <li><a href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="team_txt text-center">
                                                <h3>{{ $team->name }}</h3>
                                                <p>{{ $team->designation }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Isotop end-->

    <!--up counter start-->


    <section id="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_heading text-center">
                        <h3>Done Project</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <h1><span class="counter">52</span></h1>
                    <h3>Customers</h3>
                    <i class="fa fa-users upco"></i>
                </div>
                <div class="col-md-4">
                    <h1><span class="counter">975</span></h1>
                    <h3>Total Web Pages</h3>
                    <i class="fa fa-desktop upco"></i>
                </div>
                <div class="col-md-4">
                    <h1><span class="counter">12,218</span></h1>
                    <h3>Cups Of Coffee</h3>
                    <i class="fa fa-coffee upco"></i>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!--up counter end-->

    <!--countdown-->


    <section id="countdown">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_heading text-center">
                        <h3>It's Birth Day</h3>
                    </div>
                    <div class="timer">
                        <div class="countdown" id="js-countdown">
                            <div class="countdown__item countdown__item--large">
                                <div class="countdown__timer js-countdown-days" aria-labelledby="day-countdown">

                                </div>

                                <div class="countdown__label" id="day-countdown">Days</div>
                            </div>

                            <div class="countdown__item">
                                <div class="countdown__timer js-countdown-hours" aria-labelledby="hour-countdown">

                                </div>

                                <div class="countdown__label" id="hour-countdown">Hours</div>
                            </div>

                            <div class="countdown__item">
                                <div class="countdown__timer js-countdown-minutes" aria-labelledby="minute-countdown">

                                </div>

                                <div class="countdown__label" id="minute-countdown">Minutes</div>
                            </div>

                            <div class="countdown__item">
                                <div class="countdown__timer js-countdown-seconds" aria-labelledby="second-countdown">

                                </div>

                                <div class="countdown__label" id="second-countdown">Seconds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!--countdown end-->

@endsection
