@extends('layouts.index')

@section('title', 'IRE Online | Olu Logo Redesign')

@section('content')
<div class="apparel-page">
    <h1>View Project</h1>
    <a href='/branding'>Back to Branding</a>
</div>
<div class="gallery-bottom ga">
    <!-- Website -->
    <h3 style="text-align: center;margin-bottom: 25px;">Olu Logo Redesign</h3>

    <div class="row">
        <?php
        echo '<div class="col-12" style="margin-bottom: 25px;"><embed style="width: 100%;height: 500px;" src="/images/branding/pdf/Olu Designs.pdf" alt=""></div>';
        ?>
    </div>
    <div class="row">
        <?php
        // Get array of files within uploads folder
        $files = scandir('../public/images/branding/olu');
        
        // Count number of files and store them to variable..
        $num_files = count($files)-2;
                
        // Loop through the array of files
        for ($i = 0; $i < $num_files; $i++) {
            // Print the filenames to the page
            echo '<div class="col-12" style="margin-bottom: 25px;"><img style="width: 100%;" src="/images/branding/olu/'.$files[$i+2].'" alt=""></div>';
        }
        ?>
    </div>
</div>
@endsection