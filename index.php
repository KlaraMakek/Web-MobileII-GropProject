<?php
$path = "./";
$page = "Home";
include $path . "assets/inc/header.php";
?>
<div id="top" class="container">
    <main>
        <section id="intro">
            <h2>Welcome to UNIX/LINUX: ESSENTIAL GUIDE</h2>
            <p>This website is designed to provide beginners and intermediate users with the essential knowledge they
                need to get started with UNIX/LINUX.</p>
        </section>
        <section id="featured">
            <h2>Featured Content</h2>
            <div id="indexCenter">

                <a href="index.php">
                    <h2>Home</h2>
                </a>
                <a href="about.php">
                    <h2>About</h2>
                </a>
                <a href="unix.php">
                    <h2>UNIX</h2>
                </a>
                <a href="securityLinux.php">
                    <h2>Security</h2>
                </a>
                <a href="LinuxSecurityPrinciples.php">
                    <h3>Linux Security Principles</h3>
                </a>
                <a href="SecurityRequirements.php">
                    <h3>Security Requirements</h3>
                </a>
                <a href="enemySecurty.php">
                    <h3>Enemy</h3>
                </a>
                <a href="installation.php">
                    <h2>Installation</h2>
                </a>
                <a href="instalWindows.php">
                    <h3>Install Linux on Windows</h3>
                </a>
                <a href="bootable.php">
                    <h3>Bootable Linux USB</h3>
                </a>
                <a href="fromUsb.php">
                    <h3>Install Linux from USB</h3>
                </a>
                <a href="ubuntuSow.php">
                    <h3>Ubuntu Software Center</h3>
                </a>
                <a href="apaInstalo.php">
                    <h3>APT Installation</h3>
                </a>
                <a href="synaptic.php">
                    <h3>Synaptic Package Manager</h3>
                </a>
                <a href="quiz.php">
                    <h2>Quiz</h2>
                </a>
                <a href="tutorials.php">
                    <h2>Tutorials</h2>
                </a>
                <a href="unixTut.php">
                    <h3>UNIX Tutorials</h3>
                </a>
                <a href="linuxTut.php">
                    <h3>Linux Tutorials</h3>
                </a>
                <a href="reference.php">
                    <h2>References</h2>
                </a>
            </div>
        </section>
    </main>
</div>
<?php
include $path . "assets/inc/footer.php";
?>