<?php 


$action_links=array();


$action_links[] = array(
    'title' => 'BUY ART',
    'image' => 'https://via.placeholder.com/200x150',
    'link' => '#',
);

$action_links[] = array(
    'title' => 'ANNUAL EXHIBITION',
    'image' => 'https://via.placeholder.com/200x150',
    'link' => '#',
);


$action_links[] = array(
    'title' => 'HOW TO JOIN',
    'image' => 'https://via.placeholder.com/200x150',
    'link' => '#',
);

$action_links[] = array(
    'title' => 'HISTORY',
    'image' => 'https://via.placeholder.com/200x150',
    'link' => '#',
);

$action_links[] = array(
    'title' => 'ROME SCHOLARSHIP',
    'image' => 'https://via.placeholder.com/200x150',
    'link' => '#',
);

$action_links[] = array(
    'title' => 'MEMBERS',
    'image' => 'https://via.placeholder.com/200x150',
    'link' => '#',
);

$action_links[] = array(
    'title' => 'NEWS',
    'image' => 'https://via.placeholder.com/200x150',
    'link' => '#',
);

$action_links[] = array(
    'title' => 'CONTACT',
    'image' => 'https://via.placeholder.com/200x150',
    'link' => '#',
);

?>



<section class="container-fluid bg-white py-5 my-5 action-link-trigger">
    <div class="container">
        <div class="row">
            <?php foreach($action_links as $link): ?>
            <div class="col-12 col-md-6 col-lg-3 overflow-hidden">
                <a href="<?php echo $link['link']; ?>" class="d-block text-decoration-none action-link opacity-0">
                    <div class="border-0">
                        <img src="<?php echo $BASE_URL;?>/site-assets/template/assets/sample/200x150.png" class="card-img-top" alt="<?php echo $link['title']; ?>">
                        <div class="fs-5 text-center text-dark fw-light my-3">
                            <?php echo $link['title']; ?>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End of action links -->

<script>
   
    //action-link-trigger scrollmagic to animate opacity on action-link
    var scene = new ScrollMagic.Scene({
        triggerElement: '.action-link-trigger',
        triggerHook: 0.8,
        reverse: false
    }).on('enter', function(){

        var del=300;

        $('.action-link').each(function(){

            var that = this;

            //fade in the article after a random delay
            setTimeout(function(){
                $(that).addClass('animate__animated animate__fadeInUp').removeClass('opacity-0');
             }, del);

            del+=300;

        });

    }).addTo(controller);

</script>