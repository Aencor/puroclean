<?php get_header(); ?>

<header class="page-header bg-cover" style="background-color:#f7f7f7;">
    <div class="container mx-auto min-h-96 flex items-center">
        <h1>PuroClean offices in <span class="city">New Jersey</span></h1>
    </div>
</header>

<div class="page-directory-wrap py-36 container px-6 xl:px-0 mx-auto">
    <h4 class="h4">It is not only our support and expertise that make our franchises a success, it is also about great people. Take a look at some of our franchises:</h4>

    <div class="mt-12 directory-grid grid grid-cols-1 md:grid-cols-2 gap-9">
        <?php
            $args = array(
                'post_type' => 'locations'
            );
            $query = new WP_Query($args);
            while($query->have_posts()) : $query->the_post();

            $picture = get_field('picture');
            $intro = get_field('intro');
            $name = get_field('name');
            $employees = get_field('employees');
            $address = get_field('address');
            $phone = get_field('phone_contact');
            $email = get_field('email');
            $url = get_field('url');
            $city = get_field('city');
            if($employees){
                $numberOfEmployees = count($employees);
                $employeeLabel = 'Employee';
                if($numberOfEmployees > 1){
                    $employeeLabel = 'Employees';
                }
            }
        ?>
        <div class="grid-item flex flex-col md:flex-row gap-6 items-center justify-center md:justify-between border-solid">
            <div class="image">
                <img class=" rounded-full" src="<?= $picture['url'] ?>" alt="<?= $picture['name']; ?>">
            </div>

            <div class="content">
                <header class="content-head">
                    <?= $intro ? '<p>' . $intro . '</p>' : null; ?>
                    <h2><?= $name; ?></h2>
                </header>

                <div class="inner-content flex flex-col gap-3">
                    <?= $employees ? '<div class="employee">' . $numberOfEmployees . ' ' . $employeeLabel . ' </div>' : null; ?>
                    <?= $address ? '<div class="address">' . $address . '</div>' : null; ?>
                    <?= $url ? '<div class="url"><a href="' . $url . ' ">Visit Website</a></div>' : null; ?>
                    <a href="<?= get_the_permalink(); ?>" class="btn btn-small btn-primary">Read More ></a>
                </div>
            </div>


            <div class="badge flex flex-col items-center">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/dummy/CPR-badge-100x93.png" alt="">

                <div class="states mt-5 font-bold text-center">
                AL, LM, TV, OP, HE, SI, CP
                </div>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(  ); ?>
    </div>
</div>
<?php get_footer(); ?>
