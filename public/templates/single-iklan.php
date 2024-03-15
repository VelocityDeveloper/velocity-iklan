<?php get_header(); ?>

<div class="container py-3">
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    <div class="row">
        <div class="col-md-8">
        <div class="border p-3 bg-white">
            <div class="fs-5 fw-bold"><?php the_title(); ?></div>
            <div class="mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16"> <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0"/> <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1m0 5.586 7 7L13.586 9l-7-7H2z"/> </svg> <?php echo do_shortcode('[velocity-iklan-taxonomy taxonomy="kategori"]');?>
            </div>
            <div class="mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin" viewBox="0 0 16 16"> <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A6 6 0 0 1 5 6.708V2.277a3 3 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354m1.58 1.408-.002-.001zm-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a5 5 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a5 5 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.8 1.8 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14q.091.15.214.271a1.8 1.8 0 0 0 .37.282"/> </svg> <?php echo do_shortcode('[velocity-iklan-taxonomy taxonomy="lokasi"]');?>
                <?php $alamat = do_shortcode('[velocity-iklan-meta key="alamat"]');
                if($alamat){
                    echo ' - '.$alamat;
                } ?>
            </div>
            <div class="mt-2 py-3 border-top border-bottom">
                <?php echo do_shortcode('[velocity-iklan-galeri]'); ?>
            </div>
            <div class="mt-2">
                <?php echo get_the_content(); ?>
            </div>
            <div class="mt-2">
                <?php echo do_shortcode('[velocity-iklan-meta key="detail"]'); ?>
            </div>
        </div>
        </div>
        <div class="col-md-4">
            <div class="py-2 px-3 bg-color-theme mb-3 fs-5 text-white">
                <?php echo do_shortcode('[velocity-iklan-harga]'); ?>
            </div>
            <?php echo do_shortcode('[velocity-iklan-penjual]'); ?>
            <div class="mt-3 py-2 px-3 bg-light border">
                <?php echo 'Iklan ini sudah dilihat <strong>'.do_shortcode('[statistik_kunjungan stat="post"]').'</strong> kali.'; ?>
            </div>
            <?php 
            $iklan = velocitytheme_option('single_iklan_banner', '');
            if($iklan){
                echo '<img class="img-fluid w-100 mt-3" src="'.$iklan.'" loading="lazy">';
            }
            ?>
        </div>
    </div>
    <?php endwhile;
endif; ?>
</div>

<?php
get_footer();