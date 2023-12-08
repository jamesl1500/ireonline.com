@extends('layouts.index')

@section('title', 'IRE Online | UX/UI')

@section('content')
<div class="apparel-page">
    <h1>View Project</h1>
    <a href='/ux'>Back to UX/UI</a>
</div>
<div class="gallery-bottom ga">
    <!-- Website -->
    <h3 style="text-align: center;margin-bottom: 25px;">CashNest - A Financial Education App for Kids</h3>
    <p>
        CashNest is a financial education app designed to teach kids aged 8-15 about responsible money management, saving, and budgeting in a fun and interactive way. This case study delves into the design and user interface aspects of the app, highlighting its icon designs and key interface pages.
    </p>
    <div class="row">
        <?php
        // Get array of files within uploads folder
        $files = scandir('../public/images/ux/cashnest/pdf');
        
        // Count number of files and store them to variable..
        $num_files = count($files)-2;
                
        // Loop through the array of files
        for ($i = 0; $i < $num_files; $i++) {
            // Print the filenames to the page
            echo '<div class="col-12" style="margin-bottom: 25px;"><embed style="width: 100%;height: 500px;" src="/images/ux/cashnest/pdf/'.$files[$i+2].'" alt=""></div>';
        }
        ?>
    </div>
    <div class="row">
        <?php
        // Get array of files within uploads folder
        $files = scandir('../public/images/ux/cashnest');
        
        // Count number of files and store them to variable..
        $num_files = count($files)-2;
                
        // Loop through the array of files
        for ($i = 0; $i < $num_files; $i++) {
            // Print the filenames to the page
            echo '<div class="col-12" style="margin-bottom: 25px;"><img style="width: 100%;" src="/images/ux/cashnest/'.$files[$i+2].'" alt=""></div>';
        }
        ?>
    </div>
</div>
@endsection