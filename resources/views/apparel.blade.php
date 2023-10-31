@extends('layouts.index')

@section('title', 'IRE Online | Apparel')

@section('content')
<div class="apparel-page">
    <h1>Apparel</h1>
</div>
<div class="gallery-bottom">
    <!-- Columbus crew -->
    <div class="row mb-5">
        <h3>Columbus Crew</h3>
        <?php
        // Get array of files within uploads folder
        $files = scandir('../public/images/apparel/columbuscrew');
        
        // Count number of files and store them to variable..
        $num_files = count($files)-2;
                
        // Loop through the array of files
        for ($i = 0; $i < $num_files; $i++) {
            // Print the filenames to the page
            echo '<div class="col-3 gallery-item"><img style="width: 100%;" src="/images/apparel/columbuscrew/'.$files[$i+2].'" alt=""></div>';
        }
        ?>
    </div>

    <!-- More -->
    <div class="row mb-5">
        <h3>More</h3>
        <?php
        // Get array of files within uploads folder
        $files = scandir('../public/images/apparel/more');
        
        // Count number of files and store them to variable..
        $num_files = count($files)-2;
                
        // Loop through the array of files
        for ($i = 0; $i < $num_files; $i++) {
            // Print the filenames to the page
            echo '<div class="col-3 gallery-item"><img style="width: 100%;" src="/images/apparel/more/'.$files[$i+2].'" alt=""></div>';
        }
        ?>
    </div>
</div>
@endsection