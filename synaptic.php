<?php
$path = "./";
$page = "Installation";
include $path . "assets/inc/header.php";
?>
<div id="top" class="container">
    <h1>Installation</h1>
    <h2>Synaptic Package Manager</h2>
    <p>Based on the Advanced Package Tool (APT), the Synaptic Package Manager is a graphical package manager. It is
        one of the most widely used graphical front-ends for Debian and its offshoots' APT package management
        system.</p>
    <p>For two reasons, Synaptic Package Manager is an excellent substitute for the Ubuntu Software Center or any
        other comparable software center. First off, Synaptic gives you access to all the software that would be in
        your software center in addition to additional software. The second benefit is that you have a lot more
        control over the software you install on your computer. Select which packages should be installed in which
        versions, decide which dependencies need to be installed, and more.</p>
    <p>If you do not have synaptic installed on
        your computer, run the following command to install it. ‘$sudo apt-get install synaptic’
    </p>
    <img src="assets\img\Synaptic-Package-Manage.jpg" alt="Synaptic Package Manager">
</div>
<?php
include $path . "assets/inc/footer.php";
?>