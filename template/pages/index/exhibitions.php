<?php 



$exhibitions = array();


$exhibitions[] = array(
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'open-day' => '31',
    'open-month' => 'JAN',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla nec purus feugiat, molestie ipsum et, consequat nunc.',
    'link' => '#',
);

$exhibitions[] = array(
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'open-day' => '30',
    'open-month' => 'JUN',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla nec purus feugiat, molestie ipsum et, consequat nunc.',
    'link' => '#',
);

$exhibitions[] = array(
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'open-day' => '31',
    'open-month' => 'DEC',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla nec purus feugiat, molestie ipsum et, consequat nunc.',
    'link' => '#',
);

$exhibitions[] = array(
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'open-day' => '31',
    'open-month' => 'JAN',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla nec purus feugiat, molestie ipsum et, consequat nunc.',
    'link' => '#',
);


//reverse the array so that the most recent news is first
$exhibitions = array_reverse($exhibitions);

$featured_exhibition = array_shift($exhibitions);

//get the next 3 items
$exhibitions = array_slice($exhibitions, 0, 3);


?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <img src="<?php echo $BASE_URL;?>/site-assets/template/assets/line-fade.svg" class="w-100" alt="<?php echo $featured_exhibition['title']; ?>" />
        </div>
    </div>
</div>

<section class="container-fluid bg-white exh-trigger">
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-royalblue fs-2 fw-bold text-center fst-italic mb-5 pb-5">Upcoming Exhibitions &amp; Events</h2>
            </div>
        </div>
        <div class="row overflow-hidden">
            <div class="col-12 col-md-4 exh-featured opacity-0">
                <div class="position-relative">
                    <div class="position-absolute top-0 start-0 ms-3 bg-royalblue text-white px-3 py-2 text-center">
                        <p class="m-0 fw-medium xx-small mb-1">CLOSES</p>
                        <h3 class="m-0 fw-bold"><?php echo $featured_exhibition['open-day']; ?></h3>
                        <p class="m-0 fw-bold mb-2" style="line-height:0.2;"><?php echo $featured_exhibition['open-month']; ?></p>
                    </div>
                    <img src="<?php echo $BASE_URL;?>/site-assets/template/assets/sample/1200x800.png" class="img-fluid" alt="<?php echo $featured_exhibition['title']; ?>" />
                    <p class="text-royalblue fs-5 fw-semibold mt-3"><?php echo $featured_exhibition['title']; ?></p>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="row overflow-hidden">
                    <?php foreach($exhibitions as $exhibition): ?>
                    <div class="col-12 col-md-4 exh-cont opacity-0">
                        <a href="<?php echo $exhibition['link']; ?>" class="text-decoration-none">
                            <div class="position-relative">
                                <div class="position-absolute top-0 start-0 ms-3 bg-white text-royalblue px-3 py-2 text-center">
                                    <p class="m-0 fw-medium xx-small mb-1">OPENS</p>
                                    <h3 class="m-0 fw-bold"><?php echo $featured_exhibition['open-day']; ?></h3>
                                    <p class="m-0 fw-bold mb-2" style="line-height:0.2;"><?php echo $featured_exhibition['open-month']; ?></p>
                                </div>
                                <img src="<?php echo $BASE_URL;?>/site-assets/template/assets/sample/1200x800.png" class="img-fluid" alt="<?php echo $featured_exhibition['title']; ?>" />
                                <p class="text-royalblue fw-semibold mt-3"><?php echo $featured_exhibition['title']; ?></p>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div> 
            </div>
        </div>
    </div>
</section>

<script>
    //news-trigger scrollmagic to animate opacity on feature-article and older-articles
    var scene = new ScrollMagic.Scene({
        triggerElement: '.exh-trigger',
        triggerHook: 0.8,
        reverse: false
    }).on('enter', function(){
        $('.exh-featured').addClass('animate__animated animate__fadeInUp').removeClass('opacity-0');

        var del=300;

        $('.exh-cont').each(function(){

            var that = this;

            //fade in the article after a random delay
            setTimeout(function(){
                $(that).addClass('animate__animated animate__fadeInUp').removeClass('opacity-0');
             }, del);

            del+=300;

        });
    }).addTo(controller);

</script>
