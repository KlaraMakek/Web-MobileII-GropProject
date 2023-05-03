<?php
$path = "./";
$page = "Unix";
include $path . "assets/inc/header.php";
?>
<div id="top" class="container">
    <h1>Security Linux</h1>
    <h2>Security requirements</h2>
    <p>It is important to think about the aspects of security that are necessary after determining the reasons why
        security is being implemented. The following are the primary security requirements:</p>

    <ul>
        <li><b>Authorisation entails</b>only granting access to those who require it.</li>
        <li><b>Authenticity entails confirming</b>that they are who they claim to be.</li>
        <li><b>Privacy / Confidentiality</b> - Ensure that personal information is not jeopardized.
        </li>
        <li><b>Integrity entails</b>making certain that the data has not been tampered with.
        </li>
        <li><b>Non-repudiation</b> - Proof that data was received. The ability to demonstrate it in court</li>
        <li><b>Availability</b> - Ensure that the system can carry out its function.</li>
    </ul>
    <p>There are some security requirements that you must comply with even though you have no direct control over them.
        These could be legal requirements (such as the Data Protection Act of 1998), standards compliance (such as the
        ISO 7984-2 International Standards Organization Security Standard), or corporate policy. If you process credit
        card transactions, you may be required to meet the Payment Card Industry's minimum security standards (PCI).</p>
    <img src="assets\img\linux-security2.png" alt="Linux penguin security.">
    <p>The Data Protection Act, for example, only states that "appropriate security should be in place" in some of these standards, whereas other ones might be more detailed (e.g. a corporate policy may insist on a minimum length of passwords etc.).</p>

</div>
<?php
include $path . "assets/inc/footer.php";
?>