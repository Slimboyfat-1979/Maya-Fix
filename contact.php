<?php include ('./header.php') ?>
<section>
    <div id="contact">
        <div class="contact-text">
            <h2>Get In Touch With <br> <span>Maya Music</span></h2>
            <p>
                Welcome to Maya Music, your one-stop-shop for all things music in Queenstown, New Zealand! Whether you're a seasoned pro or a budding musician, we've got you covered. Our expert team offers:
                Instrument Sales: Browse our curated selection of top-quality instruments, from guitars to drums and everything in between.
                Teaching: Learn from our experienced instructors, offering private and group lessons for all ages and skill levels.
                Instrument Services: Trust us with your instrument repairs, maintenance, and customizations – we'll get you sounding your best.
                Reach out to us today to inquire about our services, schedule a lesson, or get assistance with your instrument needs. Fill out our contact form and we'll be in touch soon!
            </p>
        </div>
        <div class="contact-form">
            <form action="mailer.php" method="post">
                <label for="">Name</label>
                <input type="text" name="name">
                <label for="">Email</label>
                <input type="email" name="email">
                <label for="">Phone</label>
                <input type="text" name="phone">
                <label for="">Message</label>
                <textarea name="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="button" name="submit">
            </form>
        </div>
    </div>
</section>

<?php include ('./footer.php') ?>
