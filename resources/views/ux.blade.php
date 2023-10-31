@extends('layouts.index')

@section('title', 'IRE Online | UX/UI')

@section('content')
<div class="apparel-page">
    <h1>UX/UI</h1>
</div>
<div class="gallery-bottom">
    <!-- Columbus crew -->
    <div class="row mb-5">
        <h3>View all of our exhibitions</h3>
        <?php
        // Get array of files within uploads folder
        $files = scandir('../public/images/exhibitions');
        
        // Count number of files and store them to variable..
        $num_files = count($files)-2;
                
        // Loop through the array of files
        for ($i = 0; $i < $num_files; $i++) {
            // Print the filenames to the page
            echo '<div class="col-6 gallery-item"><img style="width: 100%;" src="/images/exhibitions/'.$files[$i+2].'" alt=""></div>';
        }
        ?>
    </div>
</div>
@endsection