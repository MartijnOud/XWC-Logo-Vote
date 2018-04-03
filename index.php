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
<style>
html, body {
    height: 100%;
}

.introduction h1 {
    font-size: 6rem;
    padding-top: 4rem;
    padding-bottom: 4rem;
}
.introduction p {
    font-size: 2rem;
    padding-top: 1rem;
    padding-bottom: 1rem;
}

.candidate {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.candidate {

}
</style>
</head>
<body>

<section class="section introduction">
<div class="container is-fullhd has-text-centered">
    <h1 class="title">Help us pick a new logo.</h1>
    <p>We are working hard on a new identity for Whitecoin. With that comes a new logo. The design team has made several excellent logo's and you get to decide what the new logo for XWC will be.</p>

    <p>You can scroll down this page to see the candidates. Next to the each logo is a voting wallet. To vote you simply send 10 XWC to the wallet to cast a vote.</p>
</div><!-- /container -->
</section>

<?php
$arrCandidates = [];
$arrCandidates[] = [
    'title' => 'Candidate 1',
    'description' => 'Description......',
    'filename' => 'xwc-logo-candidate-1.png',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'title' => 'Candidate 2',
    'description' => 'Description......',
    'filename' => 'xwc-logo-candidate-2.png',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'title' => 'Candidate 3',
    'description' => 'Description......',
    'filename' => 'xwc-logo-candidate-3.png',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'title' => 'Candidate 4',
    'description' => 'Description......',
    'filename' => 'xwc-logo-candidate-4.png',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'title' => 'Candidate 5',
    'description' => 'Description......',
    'filename' => 'xwc-logo-candidate-5.png',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'title' => 'Candidate 6',
    'description' => 'Description......',
    'filename' => 'xwc-logo-candidate-6.png',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'title' => 'Candidate 7',
    'description' => 'Description......',
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