<!-- <?php 
echo 'hello';
echo 'breg';
?> -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css"><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/index.scss">


	<!-- <script src="./firebase/cdnHeader.js"></script> -->
</head>
<body>

<form class="form">
	<h3 class="form__title">Sign In</h3>
	<div id="user" class="form__box error">
		<label for="email"><i class="fas fa-user"></i></label>
		<input class="form__input" id="email" type="text" placeholder="Email"/>
	</div>
		<p class="form__error email">Invalid Error</p>
		<div class="form__box">
			<label for="password"><i class="fas fa-lock"></i></label>
			<input class="form__input" id="password" type="password" placeholder="Password"/>
	</div>
			<p class="form__error password"></p>
			<button class="form__btn">Submit</button>
			<p class="form__error submit"></p>
</form>




<script src="https://www.gstatic.com/firebasejs/9.6.7/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.7/firebase-firestore-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.7/firebase-auth-compat.js"></script>
<script src="./firebase/firebaseApi.js"></script>
<script src="./js/index.js"></script>
</body>
</html>