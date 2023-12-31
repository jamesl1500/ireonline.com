@extends('layouts.index')

@section('title', 'IRE Online | UX/UI')

@section('content')
<div class="apparel-page">
    <h1>UX/UI</h1>
</div>
<div class="gallery-bottom ga">
    <!-- Website -->
    <div class="row mb-5">
        <h3>Educational Empowerment Group</h3>
        <?php
        // Get array of files within uploads folder
        $files = scandir('../public/images/ux/eeg');
        
        // Count number of files and store them to variable..
        $num_files = count($files)-2;
                
        // Loop through the array of files
        for ($i = 0; $i < 1; $i++) {
            // Print the filenames to the page
            echo '<div class="col-12"><img style="width: 100%;" src="/images/ux/eeg/'.$files[$i+2].'" alt=""></div>';
        }
        ?>
        <a style="text-align: center;padding-top: 25px;" href="/ux/eeg">View Project</a>
        <br><br><br /><br />
        <h3>Cashnest</h3>
        <?php
        // Get array of files within uploads folder
        $files = scandir('../public/images/ux/cashnest');
        
        // Count number of files and store them to variable..
        $num_files = count($files)-2;
                
        // Loop through the array of files
        for ($i = 0; $i < 1; $i++) {
            // Print the filenames to the page
            echo '<div class="col-12"><img style="width: 100%;" src="/images/ux/cashnest/'.$files[$i+2].'" alt=""></div>';
        }
        ?>
        <a style="text-align: center;padding-top: 25px;" href="/ux/cashnest">View Project</a>
        <br><br><br /><br />
        <div class="ar-design">
            <h3>AR Design</h3>
            <!-- AR Video -->
            <div class="col-12">
                <video style="width: 100%;" controls>
                    <source src="/images/ux/ar/aero_recording.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>
@endsection