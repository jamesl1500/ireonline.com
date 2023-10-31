@extends('layouts.index')

@section('title', 'IRE Online | About')

@section('content')
<div class="content-center about-page">
    <!-- Grid inner -->
    <img src="{{ asset('images/logo.png') }}" width="100" alt=""><br /><br />
    <h1>About IreOnline</h1>
    <p>IreOnline is a dynamic design agency specializing in branding, user experience (UX) design, and illustration. With a passion for creativity and a dedication to delivering innovative solutions, we bring your brand to life and enhance user experiences. Our team of skilled is committed to crafting compelling visuals that resonate with your audience. At IreOnline, we're not just designers; we're storytellers who transform ideas into captivating designs. Let us be your creative partner on the journey to building a unique and unforgettable brand.</p>
    <a href="{{ route('index') }}">Back to Home</a>
</div>
@endsection