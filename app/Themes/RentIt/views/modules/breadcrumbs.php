<style>
    .breadcrumb-section {
        text-align: center; 
        text-transform:uppercase; 
        font-size:36px;
    }

    .title-section {
        color: #fff !important;
        font-weight: bold;
        /* font-family: 'Montserrat, Arial'; */
    }
</style>


<section id="<?php echo $id; ?>" class="page-section pb-module-section" style="background-image: url('http://goldenlease.ae/wp-content/themes/motors/assets/images/title-box-default-bg.jpg'); background-size: cover; background-position: center center;">
    <div class="container">
        <div class="breadcrumb-section">
            <h1 class="title-section"><?php echo e($page->title ?? '') ?></h1>
        </div>
    </div>
</section>
