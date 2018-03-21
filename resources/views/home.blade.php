<?php
/**
 * Created by PhpStorm.
 * User: danishmmir
 * Date: 2/3/18
 * Time: 11:05 PM
 */
?>
@extends('layouts.home.home')

@section('news')
    <div class="grid-articles grid-articles-v2">
        <article class="post-entry article-top" id="article-1">
            <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/grid/6.jpg')}}"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta">
                    <div class="post-entry-meta-category">
                        <span class="label label-danger" id="label-1">{{--from js--}}</span>
                    </div>
                    <div class="post-entry-meta-title">
                        <h2><a href="#"></a>{{--from js--}}</h2>
                    </div>
                    <span class="post-date">{{--from js--}}</span>
                </div>
            </div>
        </article>
        <article class="post-entry article-top" id="article-2">
            <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/grid/7.jpg')}}"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta">
                    <div class="post-entry-meta-category">
                        <span class="label label-danger" id="label-2">{{--from js--}}</span>
                    </div>
                    <div class="post-entry-meta-title">
                        <h2><a href="#"></a>{{--from js--}}</h2>
                    </div>
                    <span class="post-date">{{--from js--}}</span>
                </div>
            </div>
        </article>
        <article class="post-entry article-top-sub" id="article-3">
            <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/grid/8.jpg')}}"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta">
                    <div class="post-entry-meta-category">
                        <span class="label label-danger" id="label-3">{{--from js--}}</span>
                    </div>
                    <div class="post-entry-meta-title">
                        <h2><a href="#"></a>{{--from js--}}</h2>
                    </div>
                </div>
            </div>
        </article>
        <article class="post-entry article-top-sub" id="article-4">
            <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/grid/9.jpg')}}"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta">
                    <div class="post-entry-meta-category">
                        <span class="label label-danger" id="label-4">{{--from js--}}</span>
                    </div>
                    <div class="post-entry-meta-title">
                        <h2><a href="#"></a>{{--from js--}}</h2>
                    </div>
                </div>
            </div>
        </article>
        <article class="post-entry article-top-sub" id="article-5">
            <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/grid/10.jpg')}}"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta">
                    <div class="post-entry-meta-category">
                        <span class="label label-danger" id="label-5">{{--from js--}}</span>
                    </div>
                    <div class="post-entry-meta-title">
                        <h2><a href="#"></a>{{--from js--}}</h2>
                    </div>
                </div>
            </div>
        </article>
        <article class="post-entry article-top-sub" id="article-6">
            <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/grid/11.jpg')}}"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta">
                    <div class="post-entry-meta-category">
                        <span class="label label-danger" id="label-6">{{--from js--}}</span>
                    </div>
                    <div class="post-entry-meta-title">
                        <h2><a href="#"></a>{{--from js--}}</h2>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endsection

@section('boxes')
            <div class="row">

                <div class="col-md-4">
                    <div class="heading-fancy heading-line">
                        <h4>LIFE</h4></div>
                    <div class="post-thumbnail">
                        <div class="post-thumbnail-entry" id="cat-1-1">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/7.jpg')}}">
                            <div class="post-thumbnail-content">
                                <span class="post-date"><i class="fa fa-clock-o"></i></span>
                                <span class="post-category"><i class="fa fa-tag"></i></span>
                                <h3><a href="#"></a></h3>
                                <p></p>

                            </div>
                        </div>
                    </div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry" id="cat-1-2">
                            <div class="post-thumbnail-content">
                                <a href="#">Suspendisse consectetur fringilla luctus</a>

                            </div>
                        </div>
                        <div class="post-thumbnail-entry" id="cat-1-3">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur adipiscing elit</a>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry" id="cat-1-4">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry" id="cat-1-5">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heading-fancy heading-line">
                        <h4>CRYPTOCURRENCY</h4></div>
                    <div class="post-thumbnail">
                        <div class="post-thumbnail-entry" id="cat-2-1">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/8.jpg')}}">
                            <div class="post-thumbnail-content">
                                <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                <h3><a href="#">Fringilla consectetur amet</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac neque at mi elementum gravida.</p>

                            </div>
                        </div>
                    </div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry" id="cat-2-2">
                            <div class="post-thumbnail-content">
                                <a href="#">Suspendisse consectetur fringilla luctus</a>

                            </div>
                        </div>
                        <div class="post-thumbnail-entry" id="cat-2-3">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur adipiscing elit</a>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry" id="cat-2-4">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry" id="cat-2-5">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heading-fancy heading-line">
                        <h4>FOOD</h4></div>
                    <div class="post-thumbnail">
                        <div class="post-thumbnail-entry" id="cat-3-1">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/9.jpg')}}">
                            <div class="post-thumbnail-content">
                                <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                <h3><a href="#">Dolor sit amet ipsum</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac neque at mi elementum gravida.</p>

                            </div>
                        </div>
                    </div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry" id="cat-3-2">
                            <div class="post-thumbnail-content">
                                <a href="#">Suspendisse consectetur fringilla luctus</a>

                            </div>
                        </div>
                        <div class="post-thumbnail-entry" id="cat-3-3">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur adipiscing elit</a>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry" id="cat-3-4">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry" id="cat-3-5">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('carousel')
            <div class="text-medium text-light">HIGHTLIGHTS</div>
            <div class="grid-articles carousel post-carousel m-b-20" data-dots="false">
                <article class="post-entry article-carousel" id="article-7">
                    <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/carousel/1.jpg')}}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="label label-danger" id="label-7">{{--from js--}}</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#"></a>{{--from js--}}</h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry article-carousel" id="article-8">
                    <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/carousel/1.jpg')}}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="label label-danger" id="label-8">{{--from js--}}</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#"></a>{{--from js--}}</h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry article-carousel" id="article-9">
                    <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/carousel/2.jpg')}}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="label label-danger" id="label-9">{{--from js--}}</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#"></a>{{--from js--}}</h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry article-carousel" id="article-10">
                    <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/carousel/3.jpg')}}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="label label-danger" id="label-10">{{--from js--}}</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#"></a>{{--from js--}}</h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry article-carousel" id="article-11">
                    <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/carousel/4.jpg')}}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="label label-danger" id="label-11">{{--from js--}}</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#"></a>{{--from js--}}</h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry article-carousel" id="article-12">
                    <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/carousel/5.jpg')}}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="label label-danger" id="label-12">{{--from js--}}</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#"></a>{{--from js--}}</h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry article-carousel" id="article-13">
                    <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/carousel/6.jpg')}}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="label label-danger" id="label-13">{{--from js--}}</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#"></a>{{--from js--}}</h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry article-carousel" id="article-14">
                    <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/carousel/7.jpg')}}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="label label-danger" id="label-14">{{--from js--}}</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#"></a>{{--from js--}}</h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry article-carousel" id="article-15">
                    <a href="#" class="post-image"><img alt="" src="{{asset('assets/homepages/magazine/images/news/carousel/7.jpg')}}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="label label-danger" id="label-15">{{--from js--}}</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#"></a>{{--from js--}}</h2>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="text-light text-right">
                <a class="read-more" href="blog-post.html">
                    All stories in Highlights <i class="fa fa-long-arrow-right"></i></a></div>
@endsection

@section('promotions-top')
    <section class="p-t-20 p-b-40">
        <div class="container">
            <div class="marketing-box">ADVERTISEMENT</div>
        </div>
    </section>
@endsection

@section('categories-top')
            <div class="row">
                <div class="col-md-4">
                    <div class="heading-fancy heading-line">
                        <h4>TECH</h4></div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/1.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Suspendisse consectetur fringilla luctus</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/2.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur adipiscing elit</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/3.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/4.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 8h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="heading-fancy heading-line">
                        <h4>SPORT</h4></div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/5.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Suspendisse consectetur fringilla luctus</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/6.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur adipiscing elit</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/7.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/8.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Fringilla luctus Lorem ipsum dolor sit amet</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heading-fancy heading-line">
                        <h4>FASHION</h4></div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/1.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Suspendisse consectetur fringilla luctus</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/2.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur adipiscing elit</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/3.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/4.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 8h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
@endsection

@section('promotions-bottom')
    <section class="p-t-0 p-b-40">
        <div class="container">
            <div class="marketing-box">ADVERTISEMENT</div>
        </div>
    </section>
@endsection

@section('categories-bottom')
            <div class="row">
                <div class="col-md-4">
                    <div class="heading-fancy heading-line">
                        <h4>ENTERTAINMENT</h4></div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/1.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Suspendisse consectetur fringilla luctus</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/2.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur adipiscing elit</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/3.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/4.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 8h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="heading-fancy heading-line">
                        <h4>NATURE</h4></div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/5.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Suspendisse consectetur fringilla luctus</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/6.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur adipiscing elit</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/7.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/8.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Fringilla luctus Lorem ipsum dolor sit amet</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heading-fancy heading-line">
                        <h4>POLITICS</h4></div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/1.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Suspendisse consectetur fringilla luctus</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/2.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur adipiscing elit</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/3.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="{{asset('assets/homepages/magazine/images/news/thumbnail/4.jpg')}}">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                                <span class="post-date"><i class="fa fa-clock-o"></i> 8h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
@endsection

@section('call-to-action')
    <div class="call-to-action call-to-action-colored background-colored m-b-0">
        <div class="container">
            <div class="col-md-10">
                <h3>Ready to purchase POLO Template?</h3>
                <p>This is a simple hero unit, a simple call-to-action-style component for calling extra attention to featured content.</p>
            </div>
            <div class="col-md-2"> <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-light btn-outline">Purchase</a> </div>
        </div>
    </div>
@endsection

@section('go2top')
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>
@endsection

@section('scripts')
<script src="{{asset('js/custom/home/home.js')}}"></script>
<script src="{{asset('js/custom/utils.js')}}"></script>

@endsection