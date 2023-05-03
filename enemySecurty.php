<?php
$path = "./";
$page = "Unix";
include $path . "assets/inc/header.php";
?>
<div id="top" class="container">
    <h1>Security Linux</h1>
    <h2>Enemy</h2>
    <p>To effectively protect a computer system, you must first understand who is attempting to attack your system and
        what they are attempting to do. I provided some examples by answering a few questions about those who might
        attempt to attack a computer system.</p>
    <h2><i>Who would want to? What are they thinking? What do they hope to achieve? How do they manage it?</i></h2>
    <p>After reviewing the security requirements in the previous section, you can begin developing your own security
        policy. It could entail creating a security policy from scratch or attempting to implement a mandated corporate
        security policy. Even if a security policy is already in place, there may be additional steps that are more
        appropriate for specific systems. There are several factors to consider when developing your own security
        policy.
    </p>
    <img src="assets\img\linux-security3.png" alt="Linux Security.">
    <p>If the principles of Authorization, Authenticity, Privacy / Confidentiality, Integrity, Non-repudiation, and
        Availability apply to your system, you should make sure you have addressed them. Consider how this will be
        implemented by users and system administrators. If a security process is difficult to implement or prevents
        someone from doing their job, the process may be ignored or not followed. It's important to take enforcement and
        auditability into account when creating security policies.</p>
    <p>After the computer has been secured, it should be tested to see if there are any unanticipated potential
        vulnerabilities. This can take the form of network port scanning and/or dedicated security software capable of
        fully analyzing a system from both the local software and networking perspectives. Penetration testing is the
        practice of testing access. Security testing tools are available as either open-source or proprietary software.
        Nmap is a popular open-source network scanner that can be used to detect network vulnerabilities. Only use
        penetration testing tools on systems where you have permission. Running these against other systems may be
        considered a crime.</p>

</div>
<?php
include $path . "assets/inc/footer.php";
?>