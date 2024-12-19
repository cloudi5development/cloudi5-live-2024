<section class="new-clients-logo">
    <div class="container-fluid">
        <div class="new-client-logo-details">
            <div class="new-clients-title">
                <h6>Our Clients</h6>
            </div>
            <div class="new-marquee">
                <div class="new-marquee-content">
                <?php foreach ($clients as $our_client) { ?>
                    <div class="new-marquee-item">

                        <img src="<?php echo base_url() . $our_client->image; ?>"  alt="<?php echo $our_client->image_alt_tag ?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="new-clients-title-2">
                <h6>Almost 250+ Clients we have</h6>
            </div>
        </div>
    </div>
</section>