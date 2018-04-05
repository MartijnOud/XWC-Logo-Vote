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

.introduction {
    min-height: 80%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: linear-gradient(to top right,#6449de 0,#bd5afd);
    background-size: 200% 200%;
    -webkit-animation: Scroll 7s ease infinite;
    -moz-animation: Scroll 7s ease infinite;
    animation: Scroll 7s ease infinite;
}

@-webkit-keyframes Scroll {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes Scroll {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes Scroll {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}

.introduction h1 {
    font-size: 4rem;
    padding-bottom: 3rem;
    color: #fff;
}
.introduction p {
    font-size: 1.4rem;
    padding-top: 1rem;
    padding-bottom: 1rem;
    color: #fff;
}

@media only screen and (min-width: 1024px) {
    .candidate {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
}

.candidate--logo {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}

.candidate--logo img {
    padding-top: 5rem;
    padding-bottom: 5rem;
}

.candidate--details {
    box-shadow: 0 0 90px 0 rgba(0, 30, 70, .08);
    padding: 60px 60px;
}

.candidate--details-pos {
    color: #ccc;
    font-weight: lighter;
}

.candidate p {
    padding-top: 1rem;
    padding-bottom: 1rem;
    overflow: hidden;
    text-overflow: ellipsis;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

.fadeIn {
  animation-name: fadeIn;
}

.js-lightbox #Layer_1 {
    cursor: pointer!important;
}


#lightbox-container {
    animation: fadeIn 0.4s ease;
}
</style>
</head>
<body>

<section class="section introduction">
<div class="container is-fullhd has-text-centered">
    <h1 class="title">Vote on a new logo for Whitecoin.</h1>
    <p>We are working hard on a new identity for Whitecoin. With that comes a new logo. Help us pick a new logo by voting for your favourite. Next to the each logo is an uniqe voting wallet. To vote you simply donate to the wallet to cast a vote. 1 XWC equals 1 vote. At the end of the voting the candidate with the most votes wins.</p>
</div><!-- /container -->
</section>

<?php
$arrCandidates = [];
$arrCandidates[] = [
    'pos' => 1,
    'title' => 'Candidate 1',
    'description' => 'Sleek and modern logo that resembles a \'C\' and a coin. ',
    'filename' => 'Whitecoin - Logo 1.svg',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'pos' => 2,
    'title' => 'Candidate 2',
    'description' => 'The two checkmarks that spell out a W give this logo a very positive and graph like effect. An uncomplicated yet recognizable shape which can work in any situation.',
    'filename' => 'Whitecoin - Logo 2.svg',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'pos' => 3,
    'title' => 'Candidate 3',
    'description' => 'The double strikethrough is a nod back to other payment method and give this logo a strong currency vibe.',
    'filename' => 'Whitecoin - Logo 3.svg',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'pos' => 4,
    'title' => 'Candidate 4',
    'description' => 'Alternative to Candidate 3 but encircled so the shape further resembles a coin.',
    'filename' => 'Whitecoin - Logo 4.svg',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'pos' => 5,
    'title' => 'Candidate 5',
    'description' => 'Alternative to Candidate 3 but with an inverted circle.',
    'filename' => 'Whitecoin - Logo 5.svg',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'pos' => 6,
    'title' => 'Candidate 6',
    'description' => 'A stylized W curled like DNA strands.',
    'filename' => 'Whitecoin - Logo 6.svg',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'pos' => 7,
    'title' => 'Candidate 7',
    'description' => 'Multiplying and interconnected nodes that spell out a W. This resembles the nodes and connections of a blockchain. This versatile concept could be extended to other design areas.',
    'filename' => 'Whitecoin - Logo 7.svg',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'pos' => 8,
    'title' => 'Candidate 8',
    'description' => 'Variant on Candidate 7; the nodes and connections spell out a more clear W.',
    'filename' => 'Whitecoin - Logo 8.svg',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
$arrCandidates[] = [
    'pos' => 9,
    'title' => 'Candidate 9',
    'description' => 'The W in this logo is a positive trend line / graph to resemble the growth XWC has had so far.',
    'filename' => 'Whitecoin - Logo 9.svg',
    'wallet' => 'QPVcNhtNHowe5zdbKMYMBM25RHyAcNUDV',
];
foreach ($arrCandidates as $candidate) {

?>
    <section class="section candidate" id="candidate-<?=$candidate['pos'];?>">
    <div class="container is-fullhd">
        <div class="columns">
            <div class="column is-6 candidate--logo">
                <object class="js-lightbox" type="image/svg+xml" data="/logos/<?=$candidate['filename'];?>">Your browser does not support SVGs</object>
            </div><!-- /column -->
            <div class="column is-offset-2 is-4 candidate--details">
                <h2 class="title"><a class="is-hidden-mobile candidate--details-pos" href="/#candidate-<?=$candidate['pos'];?>">#</a> <?=$candidate['title'];?></h2>
                <p><strong>Vote for this logo by donating to: </strong><a href="http://explorer2.whitecoin.info/address/<?=$candidate['wallet'];?>" title="<?=$candidate['wallet'];?>"><?=$candidate['wallet'];?></a></p>

                <p><?=$candidate['description'];?></p>
            </div><!-- /column -->
        </div><!-- /columns -->
    </div><!-- /container -->
    </section>
<?php
}
?>

<script type="text/javascript">
function lightBox(imgsrc) {

    // Create lightbox
    if (imgsrc) {
        var container = document.createElement('div');
        container.setAttribute('id', 'lightbox-container');
        container.style.width = '100%';
        container.style.height = '100%';
        container.style.position = 'fixed';
        container.style.left = '0';
        container.style.top = '0';
        container.style.background = '#fff';
        container.classList.add('fadeIn');
        document.body.appendChild(container);

        var object = document.createElement('object');
        object.type = 'image/svg+xml';
        object.data = imgsrc;
        object.style.position = 'absolute';
        object.style.top = '50%';
        object.style.left = '50%';
        object.style.transform = 'translate(-50%, -50%)';
        document.getElementById('lightbox-container').appendChild(object);
    }

    // Listen to close
    // If user clicks outside container
    window.onclick = function(event) {

        if (event.target == document.getElementById('lightbox-container')) {
            document.getElementById('lightbox-container').remove();
        }

    }
    // Touch handeler
    document.addEventListener('touchend', function(event) {

        if (event.target == document.getElementById('lightbox-container')) {
            document.getElementById('lightbox-container').remove();
            this.removeEventListener('touchend', arguments.callee, false);
        }
    });
    // Scroll
    document.addEventListener('scroll', function(event) {

        document.getElementById('lightbox-container').remove();
        this.removeEventListener('scroll', arguments.callee, false);

    });
    // Esc
    document.onkeydown = function(event) {

        var key = event || window.eventl
        if (key.keyCode == 27) {
            document.getElementById('lightbox-container').remove();
        }

    }
}


var items = document.querySelectorAll('.js-lightbox');
for (var i = 0; i < items.length; i++) {

    items[i].addEventListener('load', function() {
        var doc = this.contentDocument;
        var data = this.data;
        doc.addEventListener('click', function() {
            lightBox(data);
        });
    });

}
</script>
</body>
</html>