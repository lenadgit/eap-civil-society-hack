@extends('layouts.app')

@section('content')
    <div class="map-block">
        <div id="map"></div>
    </div>

    <div class="services-area" style="margin-top: -180px">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center">
                        <h2>Последние жалобы</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog_area section-paddingr">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <div class="row">
                            @foreach($complains as $complain)
                                <div class="col-md-6">
                                    <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0"
                                                 src="{{ asset($complain->attachment) }}" alt="">
                                            <a href="#!" class="blog_item_date">
                                                <p>{{ date('d.m.Y', strtotime($complain->created_at)) }}</p>
                                            </a>
                                        </div>

                                        <div class="blog_details">
                                            <a class="d-inline-block" href="{{ route('complain', $complain->slug) }}">
                                                <h2>{!! $complain->name !!}</h2>
                                            </a>
                                            <p style="">{!! cutWords($complain->description) !!}</p>
                                            <ul class="blog-info-link">
                                                <li><a href="#!"><i
                                                            class="fa fa-user"></i> {!! $complain->user->name !!}
                                                    </a></li>
                                                <li>
                                                    <a href="{{ route('official',$complain->facility->official->slug) }}"><i
                                                            class="fa fa-user-secret"></i> {!! $complain->facility->official->name !!}
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            @if(Auth::check())
                                <form action="#">

                                    <a href="{{ route('new_complain') }}" class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                       type="submit">Создать жалобу
                                    </a>
                                </form>
                            @endif
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Resaurant food</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Travel news</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Modern technology</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Product</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Inspiration</p>
                                        <p>21</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Health Care (21)</p>
                                        <p>09</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
