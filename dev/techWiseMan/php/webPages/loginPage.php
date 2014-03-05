<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<title>Login Page</title>
<?php
require ('common-external-includes.php');
include ('../authenicateLogin.php');
?>


<link rel="stylesheet" href="../css/loginPage.css">

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

						<div id="column1"
							class="container column1 column column-left border-none">
							<div id="column1-side" class="side">
								<div id="column1-side2" class="side2">

									<div class="container-content">
										<div id="column1-content">

											<div class="container-content-inner"
												id="column1-content-inner">

												<div class="widget widget-text"
													id="widget-6a9d8139-8a95-6265-c4a9-819f69bc7c55">
													<div class="widget-content">
														<!--  letf hand box text
														<p>
															<span>we are passionate about technology and what it can do for you when harnessed fully!</span>
														</p>
 -->
														<p>As a Guest you may read the messages but not contribute
															with questions or answers</p>
													</div>
												</div>


												<div class="widget widget-text"
													id="widget-960e967b-6786-5812-516b-e333dd49d96d">

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
						<div id="column2"
							class="container column2 column column-right border-none">

							<div id="column2-side" class="side">
								<div id="column2-side2" class="side2">
									<div class="container-content">
										<div id="column2-content">

											<div class="container-content-inner"
												id="column2-content-inner">
												<div class="widget widget-text"
													id="widget-5f05c8d5-64f3-ecf1-334f-33f1dc6253ea">
													<div class="widget-content">
														<!--  right hand box text
														<p>We are unbiased towards any seller of technology and have no hidden agenda.</p>
														<p>WE want technology to work more effectively and cheaper for you</p>
-->
														<a href="registerUserPage.php"> <span
															class="navigation-item-bullet"></span> <span
															class="navigation-item-text">Register</span>
														</a>
													</div>
												</div>

												<div class="widget widget-text"
													id="widget-ebbaaae1-cc38-72d7-6cae-8ab777bf7d51">
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
											<div class="container-content-inner"
												id="content-content-inner">
												<div class="widget widget-text"
													id="widget-571b1fea-33bd-0da7-5233-b0210104664c">
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
														<!--	 old login form												
														<div class="loginformWrapper">
															<h1>Tech Wise Man Login</h1>
															<fieldset>
																<form name=loginForm action="authenticateLogin.php" method="post">
																	<ul>
																		<li><label for="name">Username </label> <input type="text" size="30" name="username" id="username"
																			onclick="ReadCookie()" /></li>
																		<li><label for="name">Password</label> <input type="password" size="30" name="password" id="password"
																			onclick="ReadCookie()" /></li>
																		<li><label></label><input type="submit" id="login" name="login" value="Login" class="loginbutton"></li>
																	</ul>
																</form>
															</fieldset>
														</div>
-->

														<!--	 new login form -->

														<form action="loginPage.php" method="post"
															class="login_form">
															<fieldset>
																<legend>Login Form </legend>

																<p>Enter Your username and Password Below</p>

																<div class="loginelements">
																	<label for="name">Email :</label> <input type="text"
																		id="e-mail" name="e-mail" size="25" />
																</div>

																<div class="loginelements">
																	<label for="Password">Password:</label> <input
																		type="password" id="Password" name="Password"
																		size="25" />
																</div>
																<div class="loginsubmit">
																	<input type="hidden" name="formsubmitted" value="TRUE" />
																	<input type="submit" value="Login" />
																</div>
															</fieldset>
														</form>
														Go Back to <a href="#">Account Verification on sign up</a>
														<!--  end of new login form0 -->

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

	<script type="text/javascript">

function ReadCookie()
{

	if (isset($_COOKIE["username"]))
	{
		/* cookies exist load then into form input fields */
		document.loginForm.username.value = $_COOKIE["username"];
		document.loginForm.password.value = $_COOKIE["password"];

	}else{
		/* cookies do not exist put guest as defualts into  form input fields */
		document.loginForm.username.value = 'guEst';
		document.loginForm.password.value = 'guEst';
	}
}
</script>

</body>
</html>