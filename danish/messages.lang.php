<?php
/**
 * MyBB 1.8 Danish Language Pack
 * Copyright 2014 Doctor Blue, All Rights Reserved
 *
 */

$l['click_no_wait'] = "Klik her hvis du ikke vil vente.";
$l['redirect_return_forum'] = "<br /><br />Du kan også <a href=\"{1}\">vende tilbage til forummet</a>.";
$l['redirect_emailsent'] = "Din e-mail er blevet sendt.";
$l['redirect_loggedin'] = "Du er nu blevet logget ind.<br />Du vil blive sendt tilbage til den side du kom fra.";

$l['error_invalidpworusername'] = "Du har angivet et ugyldigt brugernavn eller password.<br /><br />Hvis du har glemt din adgangskode kan du <a href=\"member.php?action=lostpw\">anmode om en ny</a>.";
$l['error_invalidpworusername1'] = "Du har angivet en ugyldig email eller adgangskode.<br /><br />Hvis du har glemt din adgangskode kan du <a href=\"member.php?action=lostpw\">anmode om en ny</a>.";
$l['error_invalidpworusername2'] = "Du har angivet en ugyldig kombination af brugernavn/email og adganskode.<br /><br />Hvis du har glemt din adgangskode kan du <a href=\"member.php?action=lostpw\">anmode om en ny</a>.";
$l['error_incompletefields'] = "Et eller flere af de påkrævede felter er ikke udfyldt. Gå venligst tilbage og udfyld dem.";
$l['error_alreadyuploaded'] = "Denne besked indeholder en vedhæftet fil med det samme navn. Omdøb venligst din fil og uploade den igen.";
$l['error_alreadyuploaded_perm'] = "Denne besked indeholder en vedhæftet fil med det samme navn. Omdøb venligst din fil og uploade den igen.";
$l['error_nomessage'] = "Du mangler at skrive en besked. Udfyld tekstfeltet og prøv igen.";
$l['error_invalidemail'] = "Du har ikke indtastet en gyldig e-mail addresse.";
$l['error_nomember'] = "Det specificerede medlem eksisterer ikke.";
$l['error_maxposts'] = "Beklager, din daglige beskedgrænse er overskredet. Vent venligst til i morgen og prøv igen.<br /><br />Du kan maksimalt skrive {1} indlæg om dagen.";
$l['error_nohostname'] = "Der blev ikke fundet noget hostname til den indtastede IP-addresse.";
$l['error_invalidthread'] = "Tråden eksisterer ikke.";
$l['error_invalidpost'] = "Beskeden eksisterer ikke.";
$l['error_invalidannouncement'] = "Bekendgørelsen eksisterer ikke.";
$l['error_invalidattachment'] = "Bilaget eksisterer ikke.";
$l['error_invalidforum'] = "Ugyldigt forum";
$l['error_closedinvalidforum'] = "Du kan ikke skrive i dette forum fordi det enten er lukket, er et link til en anden side eller er en kategori.";
$l['error_attachtype'] = "Den uploadede fil har en forbudt filtype. Fjern bilaget eller upload det i et andet format.";
$l['error_attachsize'] = "Bilaget er for stort. Vedhæftede filer må maksimalt fylde {1} KB.";
$l['error_uploadsize'] = "Den uploadede fil er for stor..";
$l['error_uploadfailed'] = "Filen blev ikke uploadet, vælg en gyldig fil og prøv igen. ";
$l['error_uploadfailed_detail'] = "Fejlinformation: ";
$l['error_uploadfailed_php1'] = "PHP returnerede: Uploaded file exceeded upload_max_filesize directive in php.ini.  Please contact your forum administrator with this error.";
$l['error_uploadfailed_php2'] = "Den uploadede fil overskred det tilladte maksimum.";
$l['error_uploadfailed_php3'] = "Filen blev kun delvist uploadet.";
$l['error_uploadfailed_php4'] = "Der blev ikke uploadet nogen fil.";
$l['error_uploadfailed_php6'] = "PHP returnerede: Missing a temporary folder.  Please contact your forum administrator with this error.";
$l['error_uploadfailed_php7'] = "PHP returnerede: Failed to write the file to disk.  Please contact your forum administrator with this error.";
$l['error_uploadfailed_phpx'] = "PHP returnerede fejlkoden {1}.  Please contact your forum administrator with this error.";
$l['error_uploadfailed_nothingtomove'] = "Den specificerede fil var ugyldig, og kunne ikke flyttes til dens nye destination.";
$l['error_uploadfailed_movefailed'] = "Der opstod et problem under flytningen af den uploadede fil.";
$l['error_uploadfailed_lost'] = "Bilaget kunne ikke findes på serveren.";
$l['error_emailmismatch'] = "De indtastede email adresser er ikke ens. Gå venligst tilbage og forsøg igen.";
$l['error_nopassword'] = "Du har ikke indtastet en gyldig adgangskode.";
$l['error_usernametaken'] = "Det valgte brugernavn er allerede i brug. Hvis du allerede er registreret kan du blot <a href=\"member.php?action=login\">logge ind</a>.";
$l['error_nousername'] = "Du har ikke indtastet et brugernavn.";
$l['error_invalidusername'] = "Det indtastede brugernavn er ugyldigt.";
$l['error_invalidpassword'] = "The password you entered is incorrect. If you have forgotten your password, click <a href=\"member.php?action=lostpw\">here</a>. Otherwise, go back and try again.";
$l['error_postflooding'] = "We are sorry but we cannot process your post. The administrator has specified you are only allowed to post once every {1} seconds.";
$l['error_nopermission_guest_1'] = "You are either not logged in or do not have permission to view this page. This could be because one of the following reasons:";
$l['error_nopermission_guest_2'] = "You are not logged in or registered. Please use the form at the bottom of this page to login.";
$l['error_nopermission_guest_3'] = "You do not have permission to access this page. Are you trying to access administrative pages or a resource that you shouldn't be?  Check in the forum rules that you are allowed to perform this action.";
$l['error_nopermission_guest_4'] = "Your account may have been disabled by an administrator, or it may be awaiting account activation.";
$l['error_nopermission_guest_5'] = "You have accessed this page directly rather than using appropriate forms or links.";
$l['login'] = "Login";
$l['need_reg'] = "Need to register?";
$l['forgot_password'] = "Glemt din adgangskoden?";
$l['error_nopermission_user_1'] = "You do not have permission to access this page. This could be because of one of the following reasons:";
$l['error_nopermission_user_ajax'] = "You do not have permission to access this page.";
$l['error_nopermission_user_2'] = "Your account has either been suspended or you have been banned from accessing this resource.";
$l['error_nopermission_user_3'] = "You do not have permission to access this page. Are you trying to access administrative pages or a resource that you shouldn't be? Check in the forum rules that you are allowed to perform this action.";
$l['error_nopermission_user_4'] = "Your account may still be awaiting activation or moderation.";
$l['error_nopermission_user_5'] = "You have accessed this page directly rather than using appropriate forms or link.";
$l['error_nopermission_user_resendactivation'] = "Resend Activation Code";
$l['error_nopermission_user_username'] = "You are currently logged in with the username: '{1}'";
$l['logged_in_user'] = "Logged In User";
$l['error_too_many_images'] = "Too Many Images.";
$l['error_too_many_images2'] = "We are sorry, but we cannot process your post because it contains too many images. Please remove some images from your post to continue.";
$l['error_too_many_images3'] = "<b>Note:</b> The maximum amount of images per post is";
$l['error_attach_file'] = "Error Attaching File";
$l['please_correct_errors'] = "Please correct the following errors before continuing:";
$l['error_reachedattachquota'] = "Sorry, but you cannot attach this file because you have reached your attachment quota of {1}";
$l['error_maxattachpost'] = "Sorry but you cannot attach this file because you have reached the maximum number of attachments allowed per post of {1}";
$l['error_invaliduser'] = "The specified user is invalid or does not exist.";
$l['error_invalidaction'] = "Invalid action";
$l['error_messagelength'] = "Sorry, your message is too long and cannot be posted. Please try shortening your message and try again.";
$l['error_message_too_short'] = "Sorry, your message is too short and cannot be posted.";
$l['failed_login_wait'] = "You have failed to login within the required number of attempts. You must now wait {1}h {2}m {3}s before you can login again.";
$l['failed_login_again'] = "<br />You have <strong>{1}</strong> more login attempts.";
$l['error_max_emails_day'] = "You cannot use the 'Send Thread to a Friend' or the 'Email User' features because you've already used up your allocated quota of sending {1} messages in the past 24 hours.";
$l['attachments_disabled'] = "You cannot use the attachment system as it has been disabled by the Administrator.";

$l['emailsubject_lostpw'] = "Password Reset at {1}";
$l['emailsubject_passwordreset'] = "New password at {1}";
$l['emailsubject_subscription'] = "New Reply to {1}";
$l['emailsubject_randompassword'] = "Your Password for {1}";
$l['emailsubject_activateaccount'] = "Account Activation at {1}";
$l['emailsubject_forumsubscription'] = "New Thread in {1}";
$l['emailsubject_reportpost'] = "Reported post at {1}";
$l['emailsubject_reachedpmquota'] = "Private Messaging Quota Reached at {1}";
$l['emailsubject_changeemail'] = "Change of Email at {1}";
$l['emailsubject_newpm'] = "New Private Message at {1} - {2}";
$l['emailsubject_newjoinrequest'] = "New Join Request at {1}";
$l['emailsubject_sendtofriend'] = "Interesting discussion at {1}";
$l['emailsubject_changepassword'] = "Change of Password at {1}";
$l['emailbit_viewthread'] = "... (visit the thread to read more..)";

$l['email_lostpw'] = "{1},

To complete the phase of resetting your account password at {2}, you will need to go to the URL below in your web browser.

{3}/member.php?action=resetpassword&uid={4}&code={5}

If the above link does not work correctly, go to

{3}/member.php?action=resetpassword

You will need to enter the following:
Username: {1}
Activation Code: {5}

Thank you,
{2} Staff";
$l['email_lostpw1'] = "{1},

To complete the phase of resetting your account password at {2}, you will need to go to the URL below in your web browser.

{3}/member.php?action=resetpassword&uid={4}&code={5}

If the above link does not work correctly, go to

{3}/member.php?action=resetpassword

You will need to enter the following:
Your email address
Activation Code: {5}

Thank you,
{2} Staff";
$l['email_lostpw2'] = "{1},

To complete the phase of resetting your account password at {2}, you will need to go to the URL below in your web browser.

{3}/member.php?action=resetpassword&uid={4}&code={5}

If the above link does not work correctly, go to

{3}/member.php?action=resetpassword

You will need to enter the following:
Username: {1} (Or your email address)
Activation Code: {5}

Thank you,
{2} Staff";


$l['email_reportpost'] = "{1} from {2} has reported this post:

{3}
{4}/{5}

The reason this user gave for reporting this post:
{7}

This message has been sent to all moderators of this forum, or all administrators and super moderators if there are no moderators.

Please check this post out as soon as possible.";

$l['email_passwordreset'] = "{1},

Your password at {2} has been reset.

Your new password is: {3}

You will need this password to login to the forums, once you login you should change it by going to your User Control Panel.

Thank you,
{2} Staff";

$l['email_randompassword'] = "{1},

Thank you for registering on {2}. Below is your username and the randomly generated password. To login to {2}, you will need these details.

Username: {3}
Password: {4}

It is recommended you change your password immediately after you login. You can do this by going to your User CP then clicking Change Password on the left menu.

Thank you,
{2} Staff";

$l['email_randompassword1'] = "{1},

Thank you for registering on {2}. Below is your username and the randomly generated password. To login to {2}, you will need these details.

Your email address
Password: {4}

It is recommended you change your password immediately after you login. You can do this by going to your User CP then clicking Change Password on the left menu.

Thank you,
{2} Staff";

$l['email_randompassword2'] = "{1},

Thank you for registering on {2}. Below is your username and the randomly generated password. To login to {2}, you will need these details.

Username: {3} (Or your email address)
Password: {4}

It is recommended you change your password immediately after you login. You can do this by going to your User CP then clicking Change Password on the left menu.

Thank you,
{2} Staff";

$l['email_sendtofriend'] = "Hello,

{1} from {2} thought you may be interested in reading the following web page:

{3}

{1} included the following message:
------------------------------------------
{4}
------------------------------------------

Thank you,
{2} Staff
";

$l['email_forumsubscription'] = "{1},

{2} has just started a new thread in {3}. This is a forum you have subscribed to at {4}.

The thread is titled {5}

Here is an excerpt of the message:
--
{6}
--

To view the thread, you can go to the following URL:
{7}/{8}

There may also be other new threads and replies but you will not receive anymore notifications until you visit the board again.

Thank you,
{4} Staff

------------------------------------------
Unsubscription Information:

If you would not like to receive any more notifications of new threads in this forum, visit the following URL in your browser:
{7}/usercp2.php?action=removesubscription&type=forum&fid={9}&my_post_key={10}

------------------------------------------";

$l['email_activateaccount'] = "{1},

To complete the registration process on {2}, you will need to go to the URL below in your web browser.

{3}/member.php?action=activate&uid={4}&code={5}

If the above link does not work correctly, go to

{3}/member.php?action=activate

You will need to enter the following:
Username: {1}
Activation Code: {5}

Thank you,
{2} Staff";

$l['email_activateaccount1'] = "{1},

To complete the registration process on {2}, you will need to go to the URL below in your web browser.

{3}/member.php?action=activate&uid={4}&code={5}

If the above link does not work correctly, go to

{3}/member.php?action=activate

You will need to enter the following:
Your email address
Activation Code: {5}

Thank you,
{2} Staff";

$l['email_activateaccount2'] = "{1},

To complete the registration process on {2}, you will need to go to the URL below in your web browser.

{3}/member.php?action=activate&uid={4}&code={5}

If the above link does not work correctly, go to

{3}/member.php?action=activate

You will need to enter the following:
Username: {1} (Or your email address)
Activation Code: {5}

Thank you,
{2} Staff";

$l['email_subscription'] = "{1},

{2} has just replied to a thread which you have subscribed to at {3}. This thread is titled {4}.

Here is an excerpt of the message:
------------------------------------------
{5}
------------------------------------------

To view the thread, you can go to the following URL:
{6}/{7}

There may also be other replies to this thread but you will not receive anymore notifications until you visit the board again.

Thank you,
{3} Staff

------------------------------------------
Unsubscription Information:

If you would not like to receive any more notifications of replies to this thread, visit the following URL in your browser:
{6}/usercp2.php?action=removesubscription&tid={8}&key={9}&my_post_key={10}

------------------------------------------";
$l['email_reachedpmquota'] = "{1},

This is an automated email from {2} to let you know that your Private Messaging inbox has reached its capacity.

One or more users may have tried to send you private messages and were unsuccessful in doing so because of this.

Please delete some of your private messages you currently have stored, remembering to also delete them from the 'Trash Can'.

Thank you,
{2} Staff
{3}";
$l['email_changeemail'] = "{1},

We have received a request on {2} to change your email address (see details below).

Old Email Address: {3}
New Email Address: {4}

If these changes are correct, please complete the validation process on {2} by going to the following URL in your web browser.

{5}/member.php?action=activate&uid={8}&code={6}

If the above link does not work correctly, go to

{5}/member.php?action=activate

You will need to enter the following:
Username: {7}
Activation Code: {6}

If you choose not to validate your new email address your profile will not be updated and will still contain your existing email address.

Thank you,
{2} Staff
{5}";

$l['email_changeemail_noactivation'] = "{1},

We have received a request on {2} to change your email address (see details below).

Old Email Address: {3}
New Email Address: {4}

This change has been automatically processed. If you did not request this change, please get it touch with an Administrator.

Thank you,
{2} Staff
{5}";

$l['email_changepassword'] = "{1},

You are receiving this email because you, or someone with access to your password, recently changed your account password.

Username: {1}
Email address: {2}

If you did not request this change, please get in touch with an Administrator.

Thank you,
{3} Staff
{4}";

$l['email_newpm'] = "{1},

You have received a new private message on {3} from {2}:

------------------------------------------
{5}
------------------------------------------

To view, reply or forward this message, you can follow this link:

{4}/private.php

Please note that you will not receive any further notifications of new messages until you visit {3}.

You can disable new message notifications on your account options page:

{4}/usercp.php?action=options

Thank you,
{3} Staff
{4}";

$l['email_emailuser'] = "{1},

{2} from {3} has sent you the following message:
------------------------------------------
{5}
------------------------------------------

Thank you,
{3} Staff
{4}

------------------------------------------
Don't want to receive email messages from other members?

If you don't want other members to be able to email you please visit your User Control Panel and enable the option 'Hide your email from other members':
{4}/usercp.php?action=options

------------------------------------------";

$l['email_groupleader_joinrequest'] = "{1},

{2} has requested to join {3} on {4} (see below).

Reason: {5}

To accept or decline this request, go to

{6}/managegroup.php?gid={7}

Thank you,
{4} Staff";

$l['email_contact_subject'] = "Contact: {1}";
$l['email_contact'] = "Forum profile: {1}
IP Address: {2}
Message:
{3}";

$l['pmsubject_subscription'] = "New Reply to {1}";
$l['pm_subscription'] = "{1},

{2} has just replied to a thread which you have subscribed to. This thread is titled {3}.

Here is an excerpt of the message:
------------------------------------------
{4}
------------------------------------------

To view the thread, you can go to the following URL:
[url]{5}/{6}[/url]

There may also be other replies to this thread but you will not receive anymore notifications until you visit the thread again.

------------------------------------------
Unsubscription Information:

If you would not like to receive any more notifications of replies to this thread, visit the following URL in your browser:
[url]{5}/usercp2.php?action=removesubscription&tid={7}&key={8}&my_post_key={9}[/url]

------------------------------------------";
