@extends('layouts.app-layout')
@section('title','Home')

@section('content')
<div id="app">
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="ipt-title">{{__('Contact')}}</h1>
                    <span class="ipn-subtitle"></span>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading center">
                        <h2>{{__('Contact')}}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="scontent">
                        <div class="ck-content">
                            <p>
                            <div id="contact" class="row">
                                <div class="col-lg-7 col-md-7">
                                    <form action="{{route('contact.send')}}" method="post" class="contact-form generic-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>{{__('Name')}}</label>
                                                    <input type="text" name="name" class="form-control simple">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>{{__('Email')}}</label>
                                                    <input type="email" name="email" class="form-control simple">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>{{__('Subject')}}</label>
                                                    <input type="text" name="subject" class="form-control simple">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>{{__('Phone')}}</label>
                                                    <input type="text" name="phone" class="form-control simple">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>{{__('Message')}}</label>
                                            <textarea class="form-control simple" name="content" rows="6" minlength="10"></textarea>
                                        </div>

                                        <div class="form-actions form-group">
                                            <button class="btn btn-theme-light-2 rounded" type="submit">{{__('Send message')}}</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-lg-5 col-md-5">
                                    <div class="contact-info">
                                        <h2>{{__('Get In Touch')}}</h2>


                                        <br>
                                        <div class="cn-info-detail">
                                            <div class="cn-info-icon">
                                                <i class="ti-home"></i>
                                            </div>
                                            <div class="cn-info-content">
                                                <h4 class="cn-info-title">Reach Us</h4>
                                                {{__('Collins Street West, Victoria 8007, Australia')}}.
                                            </div>
                                        </div>

                                        <div class="cn-info-detail">
                                            <div class="cn-info-icon">
                                                <i class="ti-email"></i>
                                            </div>
                                            <div class="cn-info-content">
                                                <h4 class="cn-info-title">{{__('Email')}}</h4>
                                                info@example.com
                                            </div>
                                        </div>

                                        <div class="cn-info-detail">
                                            <div class="cn-info-icon">
                                                <i class="ti-mobile"></i>
                                            </div>
                                            <div class="cn-info-content">
                                                <h4 class="cn-info-title">{{__('Call Us')}}</h4>
                                                +1 246-345-0695
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            </p>

                            <h3>{{__('Directions')}}</h3>

                            <p>
                            <div style="height: 400px; width: 100%; position: relative; text-align: right;">
                                <div style="height: 400px; width: 100%; overflow: hidden; background: none!important;">
                                    <iframe src="https://maps.google.com/maps?q=North Link Building, 10 Admiralty Street, 757695 Singapore%20&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                            </p>

                            <p> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection