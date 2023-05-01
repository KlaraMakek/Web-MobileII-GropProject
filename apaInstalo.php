<?php
$path = "./";
$page = "Installation";
include $path . "assets/inc/header.php";
?>
<div id="top" class="container">
    <h1>Installation</h1>
    <h2>APT installation</h2>
    <p>When doing this make sure you use an empty stick, as all the data will erase!</p>
    <ul>
        <li>APT is an abbreviation for Advanced Package Tool; it is more than just a package installer; it is also a full-fledged package manager. APT can be used to install, update, remove, and even search for software packages, among other things.</li>
        <li>Running the command "apt install package name" is the most typical and straightforward way to install packages using apt. Let's take Discord for example. 
This would be the download code: ‘$ sudo snap install discord’
</li>
    </ul>
</div>
<?php
include $path . "assets/inc/footer.php";
?>