<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Jquery User Input and Validation Experiments</title>
<script src="../jquery/jquery-1.10.2.min.js"></script>

<script>
$(document).ready(function() {
	alert("Guest page");
	 $('.userLoginFormClass').change(function() {
// 	var theName1= $(this).attr("name");
	var theValue1 =  $(this).val();
	alert(theValue1);
	 });
});
</script>

</head>
<body>
	<div class=loginWrapper>
		<ul>
			<li>
				<label class="LoginInputText">Your Name:</label>
				<input type="text" name="userName" id="userName" class="userLoginFormClass"><br />
			</li>

			<li>
				<label class="LoginInputText">Password Please:</label>
				<input type="text" name="userPassowrd" id="userPassowrd" class="userLoginFormClass"><br />
			</li>
		</ul>
	</div>

</body>

<style type="text/css">
.loginWrapper {
    background: none repeat scroll 0 0 PaleGreen;
    border: 1px solid #D6E5F5;
    border-radius: 10px 10px 10px 10px;
    height: 345px;
    margin: auto;
    padding: 0;
    width: 460px;
}

.loginWrapper ul {
    border-bottom: 1px solid #EFEFEF;
    margin: 20px auto;
    padding: 0 0 10px;
    width: 87%;
}

.loginbutton {
    background: -moz-linear-gradient(center top , #F1F1F1, #E0E0E0) repeat scroll 0 0 transparent;
    border: 1px solid #A7A7A7;
    border-radius: 3px 3px 3px 3px;
    color: #444444;
    cursor: pointer;
    font-family: "Helvetica Neue";
    font-size: 13px;
    font-weight: normal;
    height: 29px;
    letter-spacing: 1px;
    width: 92px;
}

.loginWrapper label {
    color: #7006F7;
    float: left;
    font-family: "Helvetica Neue";
    font-size: 16px;
    font-weight: bold;
    padding: 8px 0 0;
    width: 140px;
}

.loginWrapper input[type="text"], input[type="password"], fieldset select {
    border: 1px solid #EC0F21;
    border-radius: 6px 6px 6px 6px;
    float: left;
    height: 33px;
    padding: 1px 1px 1px 3px;
    width: 250px;
}
</style>
</html>
