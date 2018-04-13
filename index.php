<?php
/**
 * Whitecoin Logo Voting website
 *
 */
include 'settings.php';
include 'classes/Minify.php';

ob_start("MinifyHTML");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Vote for a new Whitecoin logo! - Whitecoin</title>
<meta charset="utf-8">
<meta name="description" content="Help pick a new logo for Whitecoin! View the candidates and vote on your favorite.">

<meta property="og:title" content="Vote for a new Whitecoin logo" />
<meta property="og:description" content="Help pick a new logo for Whitecoin! View the candidates and vote on your favorite." />
<meta property="og:image" content="logos/whitecoin-vote-new-logo.png" />

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
    -webkit-animation: Scroll 4s ease infinite;
    -moz-animation: Scroll 4s ease infinite;
    animation: Scroll 4s ease infinite;
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
    font-size: 3rem;
    padding-bottom: 3rem;
    color: #fff;
}
.introduction p {
    font-size: 1.3rem;
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

.candidate--logo img:hover {
    cursor: zoom-in;
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

.bottom--logo:hover {
    opacity: 0.8;
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
<?php
if (!empty($AnalyticsUA)) {
?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $AnalyticsUA;?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '<?php echo $AnalyticsUA;?>');
    </script>
<?php
}
?>
<body>

<section class="section introduction">
<div class="container is-fullhd has-text-centered">
    <h1 class="title">Vote on a new logo for Whitecoin.</h1>
    <p>We are working hard on a new identity for Whitecoin. With that comes a new logo. Help us pick a new logo by voting for your favourite. Next to the each logo is an uniqe voting wallet. To vote you simply donate to the wallet to cast a vote. 1 XWC equals 1 vote. At the end of the voting the candidate with the most votes wins.</p>
</div><!-- /container -->
</section>

<?php
foreach ($arrCandidates as $candidate) {
?>
    <section class="section candidate" id="candidate-<?=$candidate['pos'];?>">
    <div class="container is-fullhd">
        <div class="columns">
            <div class="column is-6 candidate--logo">
                <a href="logos/<?=$candidate['filename'];?>" title="<?=$candidate['title'];?>" class="js-lightbox"><img src="logos/<?=$candidate['filename'];?>" data-src="logos/<?=$candidate['filename'];?>" alt="<?= $candidate['title']; ?>"></a>
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

<section class="bottom section is-hidden-tablet-only is-hidden-mobile">
    <div class="container">
        <div class="columns">
            <?php
            // Once More Mate
            $i = 0;
            foreach ($arrCandidates as $candidate) {

            // if ($i % 3 == 0) {
            //     echo '</div>';
            //     echo '<div class="columns">';
            // }

            ?>
                <div class="column">
                    <a class="bottom--logo" href="logos/<?=$candidate['filename'];?>" title="<?=$candidate['title'];?>" class="js-lightbox"><img src="logos/<?=$candidate['filename'];?>" data-src="logos/<?=$candidate['filename'];?>" alt="<?= $candidate['title']; ?>"></a>
                </div>
            <?php
            $i++;
            }
            ?>
        </div>
    </div><!-- /container -->
</section>


<script>
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

        var image = document.createElement('img');
        image.src = imgsrc;
        image.style.position = 'absolute';
        image.style.top = '50%';
        image.style.left = '50%';
        image.style.transform = 'translate(-50%, -50%)';
        container.appendChild(image);

        var closeContainer = document.createElement('a');
        closeContainer.setAttribute('class', 'lightbox-close');
        closeContainer.style.position = 'fixed';
        closeContainer.style.top = '0';
        closeContainer.style.right = '0';
        closeContainer.style.padding = '15px 25px';
        container.appendChild(closeContainer);

        var close = document.createElement('img');
        close.setAttribute('class', 'lightbox-close');
        close.src = 'logos/icon-close.svg';
        close.style.height = '2rem';
        closeContainer.appendChild(close);
    }

    // Listen to close
    // If user clicks outside container
    window.onclick = function(event) {

        if (event.target.classList.contains('lightbox-close')) {
            document.getElementById('lightbox-container').remove();
        }

        if (event.target == document.getElementById('lightbox-container')) {
            document.getElementById('lightbox-container').remove();
        }

    }
    // Touch handeler
    document.addEventListener('touchend', function(event) {

        if (event.target.classList.contains('lightbox-close')) {
            document.getElementById('lightbox-container').remove();
            this.removeEventListener('touchend', arguments.callee, false);
        }

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

    items[i].addEventListener('click', function(e) {
        e.preventDefault();
        var imgsrc = this.getElementsByTagName('img')[0].getAttribute('src');
        lightBox(imgsrc);
    });

}
</script>
</body>
</html>