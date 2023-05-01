<?php
$path = "./";
$page = "Installation";
include $path."assets/inc/header.php";
?>
<div id="top" class="container">
    <h1>Installation</h1>
    <h2>How to make your USB Linux bootable</h2>
    <p>When doing this make sure you use an empty stick, as all the data will erase!</p>
    <ul>
        <li>Download an ISO image of a Linux distribution. A disk image is represented by an ISO file. Some of the best
            choices include Ubuntu, Mint, and Debian. They are available for free download from the main website of each
            distribution. We're going to use Ubuntu, as it is the most beginner friendly, for this article.</li>
        <li>Plug in the USB drive to your computer. You may be asked to format your hard drive. This will erase all of
            the data on your hard drive, so make a backup before you begin.</li>
        <li>Etcher can be downloaded for free. The most recent version of the application can be found here.</li>
        <li>Select your USB drive from the Device list in Etcher. If you are unsure which drive to use, eject all other
            drives until you are left with only one to choose from.</li>
        <li>Click the Select button under Boot Selection and select the ISO file you downloaded earlier. Change none of
            the other default settings.</li>
        <li>Lastly, press Start. If a pop-up window appears asking you to choose a mode for writing the image, select
            ISO.</li>
    </ul>
</div>
<?php
include $path."assets/inc/footer.php";
?>