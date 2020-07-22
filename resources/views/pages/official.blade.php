@extends('layouts.app')

@section('content')
    <section class="best-features-area inner-padding">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-8 col-lg-10">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-10 col-md-10">
                            <div class="section-tittle">
                                <h2>{!! $official->name !!}</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Section caption -->
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Phone</h3>
                                    <p>{!! $official->phone !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Position</h3>
                                    <p>{!! $official->position !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Email</h3>
                                    <p>{!! $official->email !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>About</h3>
                                    <p style="max-width: 10px !important;" >{!! $official->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shpe -->
        <div class="features-shpae features-shpae2 d-none d-lg-block">
            <img style="width: 100%;height: auto;max-width: 700px  !important;" src="{{ asset($official->image) }}"
                 alt="">
        </div>
    </section>
@endsection
