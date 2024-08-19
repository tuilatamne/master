<?php
$slider_list = $db->getRaw("SELECT * FROM images WHERE type = 'slide'");
$effects = [
    'animate__fadeInDown',
    'animate__backInUp',
    'animate__rollIn',
    'animate__backInRight',
    'animate__zoomInUp',
    'animate__backInLeft',
    'animate__rotateInDownLeft',
    'animate__backInDown',
    'animate__zoomInDown',
    'animate__fadeInUp',
    'animate__zoomIn'
];
?>
<section id="slideshow">
    <div class="slide1">
        <?php foreach ($slider_list as $index => $slide): ?>
            <div class="slick-slide">
                <img src="assets/images/upload/<?php echo $slide['image']; ?>" alt="Slide <?php echo $index + 1; ?>"
                    class="animate__animated <?php echo $effects[$index % count($effects)]; ?>">
            </div>
        <?php endforeach; ?>
    </div>
</section>