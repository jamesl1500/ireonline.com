@extends('layouts.index')

@section('title', 'IRE Online | UX/UI')

@section('content')
<div class="apparel-page">
    <h1>View Project</h1>
    <a href='/ux'>Back to UX/UI</a>
</div>
<div class="gallery-bottom ga">
    <!-- Website -->
    <h3 style="text-align: center;margin-bottom: 25px;">Educational Empowerment Group</h3>
    <p>
        Welcome to the Educational Empowerment Group (EEG) website, where we're on a mission to transform the lives of at-promise, inner-city students. Our redesigned platform is a vibrant hub of high energy and excitement, dedicated to inspiring and empowering the next generation. At EEG, we believe in the boundless potential of every student. Our website reflects our commitment to making education an exhilarating journey, full of possibilities and endless horizons.
        <br><br>
        Here, you'll find a world of vibrant visuals and interactive learning experiences that engage, inspire, and ignite curiosity. From captivating success stories to electrifying events, EEG is all about creating opportunities, spreading optimism, and empowering students to reach for the stars. Join us in our quest to change the trajectory of these young minds and unlock their limitless potential. Together, we'll make education a thrilling adventure filled with promise and passion.
        <br><br>
        <a href="https://www.edempowerment.com/">View Website</a>
    </p>
    <div class="row">
        <?php
        // Get array of files within uploads folder
        $files = scandir('../public/images/ux/eeg');
        
        // Count number of files and store them to variable..
        $num_files = count($files)-2;
                
        // Loop through the array of files
        for ($i = 0; $i < $num_files; $i++) {
            // Print the filenames to the page
            echo '<div class="col-12" style="margin-bottom: 25px;"><img style="width: 100%;" src="/images/ux/eeg/'.$files[$i+2].'" alt=""></div>';
        }
        ?>
    </div>
</div>
@endsection