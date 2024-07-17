<?php 


//SELECT * FROM `artists` WHERE `membership-status`=3

$artists_members_sql="SELECT * FROM `artists` WHERE `membership-status`=3 ORDER BY `last-name` ASC";
$artists_members_query=$conn->prepare($artists_members_sql);
$artists_members_query->execute();
$artists_members=$artists_members_query->fetchAll(PDO::FETCH_ASSOC);

$artists_senior_members_sql="SELECT * FROM `artists` WHERE `membership-status`=4 ORDER BY `last-name` ASC";
$artists_senior_members_query=$conn->prepare($artists_senior_members_sql);
$artists_senior_members_query->execute();
$artists_senior_members=$artists_senior_members_query->fetchAll(PDO::FETCH_ASSOC);

$artists_honorary_members_sql="SELECT * FROM `artists` WHERE `membership-status`=1 OR `membership-status`=2 ORDER BY `last-name` ASC";
$artists_honorary_members_query=$conn->prepare($artists_honorary_members_sql);
$artists_honorary_members_query->execute();
$artists_honorary_members=$artists_honorary_members_query->fetchAll(PDO::FETCH_ASSOC);

?>


<section class="container-fluid bg-white">
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 text-center">
                <h2 class="text-royalblue fs-2 fw-bold text-center fst-italic mb-3">RBA Membership</h2>
                <p class="fs-6 fw-light">The membership procedure is competitive; candidates will normally be expected to have previously exhibited several times with the Society after which they may apply for election to the RBA. The election of new members takes place at the AGM, where candidates are able to show their work and, as a result of a ‘blind’ vote, one or more candidates may be elected to the Society. The members all pay an annual subscription to the RBA and, as well as being able to show their work in the exhibition, they are also requested to play an active part in the maintenance and development of the Society.</p>
            </div>
        </div>
    </div>
</section>




<section class="container-fluid bg-white">
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-12 col-12 col-md-6 offset-md-3  text-center">
                <h2 class="text-dark fs-4 fw-bold text-center mb-3">Members</h2>
                <p>There are 87 members elected to the RBA, all of whom are entitled to exhibit in the Annual Exhibition which is held at Mall Galleries in London.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <?php foreach($artists_members as $artist): ?>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="<?php echo $BASE_URL;?>/artists/<?php echo $artist['slug']; ?>" class="text-decoration-none hover-swap-cover ">
                        <div class="position-relative">

                            <!-- Cover Photo Image -->
                            <div class="cover-image position-absolute z-0 top-0 left-0 w-100 bg-img-cover bg-img-center-center pb-100" style="background-image:url('<?php echo $BASE_URL;?>/site-assets/template/assets/sample/300x300.png');"></div>

                            <div class="hover-image position-relative z-1 w-100 bg-img-cover bg-img-center-center pb-100 bg-success" style=""></div>

                        </div>
                        <!-- Artist Name -->
                        <p class="small text-center mt-2 mb-0 text-uppercase text-dark fw-medium"><?php echo $artist['first-name'].' '.$artist['last-name']; ?></p>
                        <p class="x-small text-center mb-4 text-uppercase text-secondary"><?php echo $artist['postnominals']; ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



<section class="container-fluid bg-white">
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-12 col-12 col-md-6 offset-md-3  text-center">
                <h2 class="text-dark fs-4 fw-bold text-center mb-3">Senior Members</h2>
                <p>Senior Members are those who have been a member of the RBA for at least 25 years and who have paid their subscriptions during this time. As a Sen Member they do not pay a subscription, but they are allowed one work exhibited in our Annual exhibition free of charge and may pay the normal entry fee for any further works shown.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach($artists_senior_members as $artist): ?>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <img src="<?php echo $BASE_URL;?>/site-assets/template/assets/sample/300x300.png" class="img-fluid" /> 
                    <p class="small text-center mt-2 mb-0 text-uppercase text-dark fw-medium"><?php echo $artist['first-name'].' '.$artist['last-name']; ?></p>
                    <p class="x-small text-center mb-4 text-uppercase text-secondary"><?php echo $artist['postnominals']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="container-fluid bg-white">
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-12 col-12 col-md-6 offset-md-3  text-center">
                <h2 class="text-dark fs-4 fw-bold text-center mb-3">Honorary Members</h2>
                <p>Honorary Members are artists who have achieved recognition and a high degree of respect within the British artistic community. They are not RBA members, but have been invited to become an Honorary Member and have accepted our invitation.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach($artists_honorary_members as $artist): ?>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <img src="<?php echo $BASE_URL;?>/site-assets/template/assets/sample/300x300.png" class="img-fluid" /> 
                    <p class="small text-center mt-2 mb-0 text-uppercase text-dark fw-medium"><?php echo $artist['first-name'].' '.$artist['last-name']; ?></p>
                    <p class="x-small text-center mb-4 text-uppercase text-secondary"><?php echo $artist['postnominals']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<section class="container-fluid bg-light" id="how-to-join">
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <h2 class="text-royalblue fs-2 fw-bold text-center fst-italic mb-3">How to Join</h2>
                <p class="fs-6 fw-light">
                Before you may apply to become a Candidate it is essential that you have had several pieces of work accepted and shown at 3-4 of our annual exhibitions so members are aware of the quality of your work.
                </p>
                <p class="fs-6 fw-light">
                Should the Membership Committee so decide, you will be contacted by the Membership Secretary, and you will be put forward as a candidate. (3 attempts may be made to obtain membership). You are encouraged to strengthen your application with a portfolio of supporting works and sketchbooks. Election is by a majority ‘blind’ vote of all members present at the AGM which takes place at the close of the annual exhibition.
                </p>
                <p class="fs-6 fw-light">
                Members vote for candidates to membership if they feel confident of the type and quality of work likely to be shown in the future. (You should show both vision and individuality in your work). Once a member you are entitled to show 5 works (or 3 sculptures) at the annual exhibition subject to the veto of the Selection or Hanging Committee.
                </p>

                <p class="fs-6 fw-light">
                Members must pay an annual subscription and it is expected that you, as a member, will play a positive part in the maintenance and development of the society.
                </p>

                <p class="fs-6 fw-light">
                    If you meet the above criteria applications can be made to honsec.rba@gmail.com
                </p>

                <p class="fs-6 fw-light">
                    Find out how to enter our Annual Exhibition by visiting the Mall Galleries website here: 
                    <a href="mallgalleries.org.uk/call-for-entries/open-exhibitions/royal-society-british-artists" target="_blank">Mall Galleries</a>
                </p>

            </div>
        </div>
    </div>
</section>
