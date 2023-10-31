@extends('layouts.index')

@section('title', 'IRE Online | Branding')

@section('content')
<div class="apparel-page">
    <h1>Branding</h1>
</div>
<div class="gallery-bottom">
    <!-- Columbus crew -->
    <div class="row mb-5">
        <h3>Redesigns and more</h3>
        <?php
        // Get array of files within uploads folder
        $files = scandir('../public/images/branding/pdf');
        
        // Count number of files and store them to variable..
        $num_files = count($files)-2;
                
        // Loop through the array of files
        for ($i = 0; $i < $num_files; $i++) {
            // Print the filenames to the page
            echo '<div class="col-6 gallery-item"><embed style="width: 100%;height: 500px;" src="/images/branding/pdf/'.$files[$i+2].'" alt=""></div>';
        }
        ?>
    </div>

    <div class="row mb-5">
        <h3>2001 A Space Odyssey Redesign</h3>
        <?php
        // Get array of files within uploads folder
        $files = scandir('../public/images/branding/more');
        
        // Count number of files and store them to variable..
        $num_files = count($files)-2;
                
        // Loop through the array of files
        for ($i = 0; $i < $num_files; $i++) {
            // Print the filenames to the page
            echo '<div class="col-6 gallery-item"><img style="width: 100%;" src="/images/branding/more/'.$files[$i+2].'" alt=""></div>';
        }
        ?>
    </div>
</div>
@endsection