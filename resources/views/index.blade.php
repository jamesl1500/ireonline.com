@extends('layouts.index')

@section('title', 'IRE Online')

@section('content')
    <div class="content-center">
        <!-- Grid row -->
        <div class="content-grid">
            <!-- Apparel -->
            <div class="content-folder" draggable="true">
                <a href="{{ route('apparel') }}">
                    <div class="content-folder-icon">
                        <img src="{{ asset('images/bluefolder.png') }}" alt="">
                    </div>
                    <div class="content-folder-title">
                        <h4>Apparel</h4>
                    </div>
                </a>
            </div>

            <!-- Branding -->
            <div class="content-folder">
                <a href="{{ route('branding') }}">
                    <div class="content-folder-icon">
                        <img src="{{ asset('images/bluefolder.png') }}" alt="">
                    </div>
                    <div class="content-folder-title">
                        <h4>Branding</h4>
                    </div>
                </a>
            </div>

            <!-- UX/UI -->
            <div class="content-folder">
                <a href="{{ route('ux') }}">
                    <div class="content-folder-icon">
                        <img src="{{ asset('images/bluefolder.png') }}" alt="">
                    </div>
                    <div class="content-folder-title">
                        <h4>UX/UI</h4>
                    </div>
                </a>
            </div>

            <!-- About -->
            <div class="content-folder">
                <a href="{{ route('about') }}">
                    <div class="content-folder-icon">
                        <img src="{{ asset('images/bluefolder.png') }}" alt="">
                    </div>
                    <div class="content-folder-title">
                        <h4>About</h4>
                    </div>
                </a>
            </div>

            <!-- Exhibitions -->
            <div class="content-folder">
                <a href="{{ route('exhibitions') }}">
                    <div class="content-folder-icon">
                        <img src="{{ asset('images/bluefolder.png') }}" alt="">
                    </div>
                    <div class="content-folder-title">
                        <h4>Exhibitions</h4>
                    </div>
                </a>
            </div>

            <!-- Illustrations -->
            <div class="content-folder">
                <a href="{{ route('illustrations') }}">
                    <div class="content-folder-icon">
                        <img src="{{ asset('images/bluefolder.png') }}" alt="">
                    </div>
                    <div class="content-folder-title">
                        <h4>Illustrations</h4>
                    </div>
                </a>
            </div>

            <!-- Shop -->
            <div class="content-folder">
                <a href="https://ireonline.myshopify.com">
                    <div class="content-folder-icon">
                        <img src="{{ asset('images/bluefolder.png') }}" alt="">
                    </div>
                    <div class="content-folder-title">
                        <h4>Shop</h4>
                    </div>
                </a>
            </div>

            <!-- Shop -->
            <div class="content-folder">
                <a href="https://ireonline.myshopify.com/blogs/news/branding">
                    <div class="content-folder-icon">
                        <img src="{{ asset('images/bluefolder.png') }}" alt="">
                    </div>
                    <div class="content-folder-title">
                        <h4>Blog</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection