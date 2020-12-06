<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


<div class="plans-flex">
    <div class="wplans-header">
        <h3 class="plans-name">Important things to know</h3>
        <div class="plans-disclaimer">
            <h4>Terms and conditions</h4>
            <p>Unlimited broadband is for residential use only.</p>
            <h4>Set-up Fees</h4>
            <p>No charges apply for standard connections.
                Additional charges may apply for non-standard connections..</p>
            <h4>Modem</h4>
            <p>Fibre, VDSL and ADSL plans on a 12 month term include a modem. $14.95 modem postage and handling charge applies. Terms apply, see connection terms for Fibre, VDSL and ADSL.
                Fibre, VDSL and ADSL plans on an open term include bring your existing modem. Terms apply, see bring your own modem terms.
                UltraFast HFC customers will receive free use of a modem for the duration of their services. $14.95 modem postage and handling charge applies. Terms apply, see modem and connection terms for UltraFast HFC..</p>
        </div>
    </div>
    <?php
    if (have_posts()) { // you never checked to see if no posts were found
        while (have_posts()) { // alt style syntax doesn't work with most IDEs
            the_post(); // individual statement should be on individual line
    ?>
            <div class="plan-box">
                <div class="plan-title">
                    <h2 class="plan-name"> <?php the_title() ?></h2>
                    <h6 class="plan-contract">12 MONTH CONTRACT</h6>
                </div>

                <div class="plan-info">
                    <h2 class="plan-price">$79.99*</h2>
                    <h6 class="plan-dates">Per Month</h6>
                    <div class="plan-deals">
                        <?php the_content() ?>
                    </div><a href="<?php the_permalink(); ?>">
                        <button class="plan-button">Get Now</button>
                    </a>
                </div>
            </div>
    <?php
        }
    } else {
        echo '<p>no posts found</p>';
    }
    ?>
</div>