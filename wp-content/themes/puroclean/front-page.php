<?php get_header(); ?>

<header class="page-header bg-cover" style="background-color:#f7f7f7; background-image:url('<?php bloginfo('template_url'); ?>/assets/img/banners/puroclean-franchisees-1440x341.webp');">
    <div class="container mx-auto min-h-96 flex items-center">
        <h1>Franchise Directory</h1>
    </div>
</header>

<div class="page-directory-wrap py-36 container mx-auto">
    <h3>PuroClean Franchise Network</h3>

    <form action="" class="mt-12 flex justify-between items-center forms gap-5">
        <input type="text" placeholder="Search by City, State or Zipcode"> or <input type="text" placeholder="Search by Franchise Owner Name">
    </form>
</div>
<?php get_footer(); ?>
