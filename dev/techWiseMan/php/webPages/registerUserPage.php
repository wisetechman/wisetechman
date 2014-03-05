<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<title>Register New Users</title>
<?php
require ('common-external-includes.php');
?>

<link href="../../css/registerPage.css" type="text/css" rel="stylesheet">

</head>
<body id="template" class="background11-white background">
	<div class="site-frame">
		<div id="page">
			<div id="layout" class="pageContentText">

<?php
require ('header.php');
?>

				<div id="layout-content" class="">
					<div id="columns">

						<div id="column1" class="container column1 column column-left border-none">
							<div id="column1-side" class="side">
								<div id="column1-side2" class="side2">

									<div class="container-content">
										<div id="column1-content">



											<div class="container-content-inner" id="column1-content-inner">

												<div class="widget widget-text" id="widget-6a9d8139-8a95-6265-c4a9-819f69bc7c55">
													<div class="widget-content">
														<!--  letf hand box text
														<p>
															<span>we are passionate about technology and what it can do for you when harnessed fully!</span>
														</p>
 -->
													</div>

												</div>


												<div class="widget widget-text" id="widget-960e967b-6786-5812-516b-e333dd49d96d">

													<div class="widget-content">
														<!--  letf hand box image plus over text
														<p>
															<span class="image-block  caption-over-image" style="float: left; margin-right: 20px; width: 131px;"><img
																id="mce-3942" src="../../images/three-wise-man.jpg"
																alt="THe tech wise man can help you harness the full potential of using technology to its fullest"
																width="131" height="90"></img><span>THe tech wise man can help you harness the full potential of using
																	technology to its fullest</span></span>
														</p>
-->
													</div>
												</div>

											</div>
										</div>

									</div>

								</div>
							</div>

						</div>
						<div id="column2" class="container column2 column column-right border-none">

							<div id="column2-side" class="side">
								<div id="column2-side2" class="side2">
									<div class="container-content">
										<div id="column2-content">

											<div class="container-content-inner" id="column2-content-inner">
												<div class="widget widget-text" id="widget-5f05c8d5-64f3-ecf1-334f-33f1dc6253ea">
													<div class="widget-content">
														<!--  right hand box text
														<p>We are unbiased towards any seller of technology and have no hidden agenda.</p>
														<p>WE want technology to work more effectively and cheaper for you</p>
-->
													</div>
												</div>

												<div class="widget widget-text" id="widget-ebbaaae1-cc38-72d7-6cae-8ab777bf7d51">
													<div class="widget-content">
														<!--  right hand box image plus over text
														<p>
															<span class="image-block  caption-over-image" style="float: left; margin-right: 20px; width: 104px;"><img
																id="mce-3712" src="../../images/wiseman1.jpg" alt="Doing repeated laborious tasks that may be automated?"
																width="104" height="150"></img><span>Doing repeated laborious tasks that may be automated?</span></span>
														</p>
-->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="content" class="container content border-none">
							<div id="content-side" class="side">
								<div id="content-side2" class="side2">
									<div class="container-content">
										<div id="content-content">
											<div class="container-content-inner" id="content-content-inner">
												<div class="widget widget-text" id="widget-571b1fea-33bd-0da7-5233-b0210104664c">
													<div class="widget-content">
														<!-- central box text
														<p>
															<span style="font-style: italic;">We are a technology consulting company. </span>
														</p>
														<p>
															<span style="font-style: italic;">We have observed you are experts in your company's core business and
																find it very difficult keeping updated with the latest technology offerings.</span>
														</p>
														<p>
															<span style="font-style: italic;">We have observed that most technology reporting is skewed towards
																selling and at the best marketing. </span>
														</p>
														<p>
															<span style="font-style: italic;">We have nothing to sell other than our expertise and experience and
																want to be your neutral wise technical man. We have no hidden agenda except we are passionate about
																technology and what it can do for you when harnessed fully!</span>
														</p>
														-->
<div class="registerformWrapper">
	<form action="../memberRegistration.php" method="post" class="registration_form">
		<fieldset>
			<legend>Registration Form </legend>

			<p>
				Create A new Account</br></br> <span>Already a member? <a href="loginPage.php">Log in</a></span>
			</p>

			<div class="registerelements">
				<label for="name">Name :</label> <input type="text" id="name" name="name" size="25" />
			</div>
			<div class="registerelements">
				<label for="e-mail">E-mail :</label> <input type="text" id="e-mail" name="e-mail" size="25" />
			</div>
			<div class="registerelements">
				<label for="Password">Password:</label> <input type="password" id="Password" name="Password" size="25" />
			</div>
			<div class="registersubmit">
				<input type="hidden" name="formsubmitted" value="TRUE" /> <input type="submit" value="Register Now" />
			</div>
		</fieldset>
	</form>
	Go Back to
	<a href="#">Account Verification on sign up</a>
	
	<!--
	<h1>Register Your details please</h1>
	<fieldset>
		<form name=registerForm action="registerValidateUserLogin.php" method="post">
			<ul>
				<li><label for="name">Username (Your email)</label>
				<input type="email" name="username" id="username"/></li>

				<li><label for="name">Password</label>
				<input type="password"  name="password" id="password" /></li>

				<li><label for="name">Company Name</label>
				<input type="text" name="company" id="company" /></li>

				<li><label for="name">TelePhone Number</label>
				<input type="text"  name="telephone" id="telephone" /></li>

				<li><label></label>
				<input type="submit" id="register" name="register" value="Register Me" class="registerbutton"></li>
			</ul>
		</form>
	</fieldset>
	  -->
</div>


													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--  footer pah  start -->
<?php
require ('footer.php');
?>

			</div>
		</div>
	</div>

	<script>
siteBuilderJs(document).ready(function ($) {
		$.addImagesAnimation('#widget-571b1fea-33bd-0da7-5233-b0210104664c');	$.addImagesAnimation('#widget-6a9d8139-8a95-6265-c4a9-819f69bc7c55');	$.addImagesAnimation('#widget-960e967b-6786-5812-516b-e333dd49d96d');	$.addImagesAnimation('#widget-5f05c8d5-64f3-ecf1-334f-33f1dc6253ea');	$.addImagesAnimation('#widget-ebbaaae1-cc38-72d7-6cae-8ab777bf7d51');	$.addImagesAnimation('#widget-526dd838-673d-91d7-86ec-b470932bbba8');
});
</script>
</body>
</html>