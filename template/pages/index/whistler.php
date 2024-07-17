<div class="whistler-banner opacity-0 container bg-img-cover bg-img-center-center justify-content-end d-flex flex-column py-5 rounded-5 shadow-sm" style="background-image:url(<?php echo $BASE_URL;?>/site-assets/template/assets/whistler-banner-bg.jpg);">
    <div class="row">
        <div class="col-6 offset-3 py-5">
            <div class="px-5">
                <img src="<?php echo $BASE_URL;?>/site-assets/template/assets/whistler-logo.svg" class="img-fluid mx-5" alt="">
            </div>
            <h2 class="text-royalblue fs-3 fw-bold text-center my-5">Sign up below to receive our newsletter</h2>
            <div class="row">
                <div class="col-12">
                    <div class="form-group d-flex flex-row">
                        <input type="text" class="form-control p-3 rounded-0 fs-5" id="whistler-signup-email" placeholder="Your Email Address">
                        <button class="btn btn-royalblue text-ctagreen fw-medium fs-4 rounded-0 px-4" type="button"><span class="icon icon-arrow-right"></span></button>
                    </div>
                </div>
            </div>                        
        </div>
    </div>
</div>


<script>

//whistler-banner scrollmagic to animate opacity
var scene = new ScrollMagic.Scene({
    triggerElement: '.whistler-banner',
    triggerHook: 0.8,
    reverse: false
}).on('enter', function(){
    $('.whistler-banner').addClass('animate__animated animate__fadeInUp').removeClass('opacity-0');
}).addTo(controller);




</script>

<?php 


$news_items = array();

$news_items[] = array(
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'date' => '2022-01-01',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla nec purus feugiat, molestie ipsum et, consequat nunc.',
    'image' => 'https://via.placeholder.com/1400x500',
    'link' => '#',
);

$news_items[] = array(
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'date' => '2022-06-01',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla nec purus feugiat, molestie ipsum et, consequat nunc.',
    'image' => 'https://via.placeholder.com/200x150',
    'link' => '#',
);

$news_items[] = array(
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'date' => '2022-12-01',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla nec purus feugiat, molestie ipsum et, consequat nunc.',
    'image' => 'https://via.placeholder.com/200x150',
    'link' => '#',
);

$news_items[] = array(
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'date' => '2023-01-01',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla nec purus feugiat, molestie ipsum et, consequat nunc.',
    'image' => 'https://via.placeholder.com/200x150',
    'link' => '#',
);

$news_items[] = array(
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'date' => '2023-06-01',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla nec purus feugiat, molestie ipsum et, consequat nunc.',
    'image' => 'https://via.placeholder.com/200x150',
    'link' => '#',
);

$news_items[] = array(
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'date' => '2023-12-01',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nunc. Nulla nec purus feugiat, molestie ipsum et, consequat nunc.',
    'image' => 'https://via.placeholder.com/200x150',
    'link' => '#',
);


//reverse the array so that the most recent news is first
$news_items = array_reverse($news_items);

//get the most recent news item
$most_recent= array_shift($news_items);

//get the next 4 news items
$news_items = array_slice($news_items, 0, 4);
?>


<div class="container py-5 mt-5 news-trigger">
    <div class="row">
        <div class="col-12">
            <h2 class="text-royalblue fs-2 fw-bold text-center fst-italic mb-5 pb-5">Latest News</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-7 overflow-hidden">
            <div class="row opacity-0 feature-article">
                <div class="col-12">
                    <img src="<?php echo $BASE_URL;?>/site-assets/template/assets/sample/1200x800.png" class="img-fluid mb-5" alt="<?php echo $most_recent['title']; ?>">
                    <h3 class="text-royalblue fs-3 fw-bold"><?php echo $most_recent['title']; ?></h3>
                    <p class="text-dark"><?php echo $most_recent['date']; ?></p>
                    <p class="text-dark"><?php echo $most_recent['description']; ?></p>
                    <a href="<?php echo $most_recent['link']; ?>" class="text-decoration-none text-royalblue fs-5 text-uppercase">Read more <span class="icon icon-arrow-right ms-1 fs-6"></span></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-xl-1 older-articles overflow-hidden mt-5 mt-md-0">
            <div class="row">
                <?php foreach($news_items as $news): ?>
                <div class="col-12 ">
                    <div class="row mb-5 opacity-0 article-cont">
                        <div class="col-4">
                            <img src="<?php echo $BASE_URL;?>/site-assets/template/assets/sample/300x300.png" class="img-fluid" alt="<?php echo $news['title']; ?>">
                        </div>
                        <div class="col-8">
                            <h3 class="text-royalblue fs-5 fw-bold small"><?php echo $news['title']; ?></h3>
                            <p class="text-dark small"><?php echo $news['date']; ?></p>
                            <p class="text-dark small"><?php echo substr($news['description'], 0, 65); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script>
    //news-trigger scrollmagic to animate opacity on feature-article and older-articles
    var scene = new ScrollMagic.Scene({
        triggerElement: '.news-trigger',
        triggerHook: 0.8,
        reverse: false
    }).on('enter', function(){
        $('.feature-article').addClass('animate__animated animate__fadeInLeft').removeClass('opacity-0');

        var del=300;

        $('.article-cont').each(function(){

            //get a random number for between 300 and 1500
            //var rand= Math.floor(Math.random() * 1200) + 300;

            var that = this;

            //fade in the article after a random delay
            setTimeout(function(){
                $(that).addClass('animate__animated animate__fadeInRight').removeClass('opacity-0');
            }, del);
            
            del = del + 300;

        });
    }).addTo(controller);

</script>