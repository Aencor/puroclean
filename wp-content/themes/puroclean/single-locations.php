<?php 
    get_header(); 
    $picture = get_field('picture');
    $intro = get_field('intro');
    $name = get_field('name');
    $employees = get_field('employees');
    $address = get_field('address');
    $phone = get_field('phone_contact');
    $email = get_field('email');
    $url = get_field('url');
    $city = get_field('city');
?>

<header class="page-header bg-cover" style="background-color:#f7f7f7;">
    <div class="container mx-auto min-h-96 flex items-center">
        <h1>Franchise Profile <span class="city"><?= get_the_title(); ?></span></h1>
    </div>
</header>

<div class="page-franchise-wrap py-24 container mx-auto">
    <div class="flex flex-col md:flex-row gap-12 items-start md:items-center justify-center md:justify-between">
        <div class="franchise-info basis-2/3 flex flex-col gap-7">
            <div class="breadcrumb">
                <a href="/directory">Franchise Directory</a> / <?= get_the_title(); ?>
            </div>

            <div class="entry lead">
                <?= get_the_excerpt(); ?>
            </div>

            <div class="team">
                <h4>Our Team</h4>

                <?= $name; ?>
            </div>

            <div class="contact">
                <div>
                    <h4>Phone</h4>
                    <a href="tel:<?= $phone ?>">
                        <?= $phone ?>
                    </a>
                </div>
                <div>
                    <h4>Email</h4>
                    <a href="mailto:<?= $email ?>">
                        <?= $email ?>
                    </a>
                </div>
                <div>
                    <h4>Address</h4>
                    <p>
                        <?= $address ?>
                    </p>
                </div>

                <div>
                    <a href="<?= $url ?>" class="btn btn-small btn-primary">Visit Website ></a>
                </div>
            </div>
        </div>

        <div class="photo flex items-start self-start justify-center basis-1/3">
            <img class=" w-2/3 rounded-full" src="<?= $picture['url']; ?>" alt="<?= $picture['name']; ?>">
        </div>
    </div>
</div>
<?php get_footer(); ?>
