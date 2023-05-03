<?php
$path = "./";
$page = "Installation";
include $path."assets/inc/header.php";
?>
<div id="top" class="container">
    <h1>Installation</h1>
    <h2>How to Install Linux from USB</h2>
    <p>Be careful, changing BIOS can be a bad idea if you don’t follow the instructions completely. If you didn’t make
        copies of your had disk you will loose all data, as the installation deletes everything. INCLUDING WINDOWS! So,
        if you don’t have a copy of Windows, you can’t go back that easily.</p>
    <ul>
        <li>Insert a USB bootable Linux drive.</li>
        <li>Select the Start button. This is the button that looks like the Windows logo in the lower-left corner of
            your screen.</li>
        <li>Then, while clicking Restart, hold down the SHIFT key. You will now be in the Windows Recovery Environment.
        </li>
        <li>Then select Use a Device.</li>
        <li>Look for your device in the list. If your drive isn't listed, select EFI USB Device, then select your drive
            from the next screen.</li>
            <img src="assets\img\biosLinux.png" alt="Bios.">
        <li>Linux will now boot up on your computer. If your computer restarts Windows, there was either a problem with
            your drive or you may need to change BIOS settings.</li>
        <li>Choose Install Linux. Some distributions also allow you to test the OS before installing it.</li>
        <li>Follow the installation instructions. This will vary depending on the distribution you are attempting to
            install. These specifics could include your WiFi network, language, time zone, keyboard layout, and so on.
            You may also be required to set up an account, complete with a username and password. Make a note of any
            pertinent information, as you will most likely require it in the future.</li>
        <li>During the installation process, most distributions will allow you to partition your drive or erase it and
            perform a clean install. That means all your apps and data will be erased.</li>
        <li>When prompted, restart your computer. If your system has more than one operating system, rebooting will take
            you to a GNU GRUB screen. This screen allows you to choose which operating system to boot.</li>
        <li>Try moving your Linux distribution higher on your boot list in BIOS if you don't see a GRUB screen when your
            computer starts up.</li>
    </ul>
    <p>After that, you can perform a hardware check. To make some hardware work, you may need to download additional
        drivers in some cases. The option to download drivers can be found in your new Linux OS's Systems Settings.
        After ensuring that your hardware is operational, you can begin exploring and using your Linux distribution.
        If you are a Mac user who wants a Linux operating system on it. Don’t.
    </p>
    
</div>
<?php
include $path."assets/inc/footer.php";
?>