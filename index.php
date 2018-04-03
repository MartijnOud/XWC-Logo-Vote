<?php
/**
 * Whitecoin Logo Voting website
 *
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<style>
html, body {
    height: 100%;
    font-family: Ubuntu, BlinkMacSystemFont,-apple-system,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
}

h1, h2, h3 {
    color: #292a2c;
}

p {
    color: #7a8893;
}

a {
    color: #9161f9;
}

.introduction h1 {
    font-size: 4rem;
    padding-top: 3rem;
    padding-bottom: 3rem;
}
.introduction p {
    font-size: 1.4rem;
    padding-top: 1rem;
    padding-bottom: 1rem;
}

.candidate {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.candidate p {
    padding-top: 1rem;
    padding-bottom: 1rem;
}
</style>
</head>
<body>

<section class="section introduction">
<div class="container is-fullhd has-text-centered">
    <h1 class="title">Vote on a new logo for Whitecoin.</h1>
    <p>We are working hard on a new identity for Whitecoin. With that comes a new logo. The design team has made several excellent logo's and you get to decide what the new logo for XWC will be.</p>

    <p>You can scroll down this page to see the candidates. Next to the each logo is an uniqe voting wallet. To vote you simply send a minimum of XWC to the wallet to cast a vote. 1 vote equals 1 XWC. At the end of the voting the candidate with the most votes will be the new logo.</p>
</div><!-- /container -->
</section>

<?php
$arrCandidates = [];
$arrCandidates[] = [
    'title' => 'Candidate 1',
    'description' => 'Sleek and modern logo that resembles a \'C\'. ',
    'filename' => 'xwc-logo-candidate-1.png',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'title' => 'Candidate 2',
    'description' => 'The two checkmarks that spell out a W give this logo a very positive and graph like effect.',
    'filename' => 'xwc-logo-candidate-2.png',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'title' => 'Candidate 3',
    'description' => 'The double stripes give this logo a real currency vibe. An uncomplicated yet recognizable shape with a nod back to other payment methods.',
    'filename' => 'xwc-logo-candidate-3.png',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'title' => 'Candidate 4',
    'description' => 'The W in this logo is a positive trend line / graph to resemble the growth XWC has had so far.',
    'filename' => 'xwc-logo-candidate-4.png',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'title' => 'Candidate 5',
    'description' => 'Multiplying and interconnected nodes that spell out a W. This resembles the nodes and connections of a blockchain.',
    'filename' => 'xwc-logo-candidate-5.png',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'title' => 'Candidate 6',
    'description' => 'A stylized W curled like DNA strands.',
    'filename' => 'xwc-logo-candidate-6.png',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'title' => 'Candidate 7',
    'description' => 'Variant on Candidate 3 but not encircled so the shape further resembles a coin.',
    'filename' => 'xwc-logo-candidate-7.png',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
foreach ($arrCandidates as $candidate) {
?>
    <section class="section candidate">
    <div class="container is-fullhd">
        <div class="columns">
            <div class="column is-7">
                <img src="/logos/<?=$candidate['filename'];?>">
            </div><!-- /column -->
            <div class="column is-offset-1 is-3">
                <h2 class="title"><?=$candidate['title'];?></h2>
                <p><strong>Vote for this logo by donating to: </strong><a href="http://explorer2.whitecoin.info/address/<?=$candidate['wallet'];?>"><?=$candidate['wallet'];?></a></p>

                <p><?=$candidate['description'];?></p>
            </div><!-- /column -->
        </div><!-- /columns -->
    </div><!-- /container -->
    </section>
<?php
}
?>


</body>
</html>