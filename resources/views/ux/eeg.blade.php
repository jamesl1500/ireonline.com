@extends('layouts.index')

@section('title', 'IRE Online | UX/UI')

@section('content')
<div class="apparel-page">
    <h1>View Project</h1>
    <a href='/ux'>Back to UX/UI</a>
</div>
<div class="gallery-bottom">
    <!-- Website -->
    <div class="row mb-5">
        <h3>Educational Empowerment Group</h3>
        <?php
        // Get array of files within uploads folder
        $files = scandir('../public/images/ux/eeg');
        
        // Count number of files and store them to variable..
        $num_files = count($files)-2;
                
        // Loop through the array of files
        for ($i = 0; $i < $num_files; $i++) {
            // Print the filenames to the page
            echo '<div class="col-6"><img style="width: 100%;" src="/images/ux/eeg/'.$files[$i+2].'" alt=""></div>';
        }
        ?>
    </div>
</div>
@endsection