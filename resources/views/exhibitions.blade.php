@extends('layouts.index')

@section('title', 'IRE Online | Exhibitions')

@section('content')
<div class="apparel-page">
    <h1>Exhibitions</h1>
</div>
<div class="gallery-bottom ga">
    <!-- Columbus crew -->
    <div class="row mb-5">
        <h3>Okay Exhibition</h3>
        <p>
            The art show "Okay" invites you to delve into the realm of artistic expression and exploration. With a profound understanding that perfection is not the ultimate goal, this collection of prints encapsulates the sentiment, "it's not okay, but that's okay." This phrase symbolizes the shared experience of numerous creatives who find themselves in a transitional phase, where they haven't yet reached their desired artistic zenith, but they remain resilient and optimistic on their path to self-realization.
            <br /><br />
            Through thoughtfully crafted prints, this exhibition provides a glimpse into the rich tapestry of emotions, challenges, and triumphs encountered by artists on the brink of their breakthrough. It celebrates the vulnerability, determination, and acceptance required to navigate the intricate web of artistic progress. Each artwork serves as a testament to the ongoing journey of self-discovery, reminding us that true growth lies in embracing imperfection and finding solace in the knowledge that we are closer than ever to realizing our artistic aspirations.
        </p>
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