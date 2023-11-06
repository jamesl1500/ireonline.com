@extends('layouts.index')

@section('title', 'IRE Online | Illustrations')

@section('content')
<div class="apparel-page">
    <h1>Illustrations</h1>
</div>
<div class="gallery-bottom ga">
    <!-- Website -->
    <div class="row mb-5">
        <?php
        // Get array of files within uploads folder
        $files = scandir('../public/images/illustrations');
        
        // Count number of files and store them to variable..
        $num_files = count($files)-2;
                
        // Loop through the array of files
        for ($i = 0; $i < $num_files; $i++) {
            // Print the filenames to the page
            echo '<div class="col-12" style="margin-bottom: 25px;"><img style="width: 100%;" src="/images/illustrations/'.$files[$i+2].'" alt=""></div>';
        }
        ?>
    </div>
</div>
@endsection