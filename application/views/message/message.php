<?php
	if(isset($this->session->userdata('auth_user')['user_avtar'])){
		$image = $this->session->userdata('auth_user')['user_avtar'];
		$this->session->userdata('auth_user')['fname'];
	}
?>
<?php
	if(isset($this->session->userdata('auth_user')['user_avtar'])){
		$image = $this->session->userdata('auth_user')['user_avtar'];
		$this->session->userdata('auth_user')['fname'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/message/messagestyle.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/message/loading-bar.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url('style'); ?> style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	
	<title>Realtime Chat Application CI</title>
</head>
<body>
	<section id="main" class="bg-dark">
		<div id="chat_user_list">
			<div id="owner_profile_details">
				<div id="owner_avtar" style="background-image: url('../upload/<= $this->session->userdata('auth_user')['user_avtar'];?>'); background-size: 100% 100%">
					<div>
						<div id="online"></div>
					</div>
				</div>
				<div id="owner_profile_text" class="">
					<h6 id="owner_profile_name" class="m-0 p-0"><?= $this->session->userdata('auth_user')['fname']; ?>  <?= $this->session->userdata('auth_user')['lname']; ?></h6>
					<a class="text-decoration-none" href="<?php echo base_url('Product');?>" style="color:#e86663;"><i class="fa fa-power-off"></i> Return Home</a>
					
				</div>
			</div>
			<div id="search_box_container" class="py-3">
				<input type="text" name="txt_search" class="form-control" autocomplete="off" placeholder="Search User" id="search">
			</div>
			<hr/>
			<div id="user_list" class="py-3">
			</div>
		</div>
		<div id="chatbox">
			<div id="data_container" class="">
				<div id="bg_image"></div>
				<h2 class="mt-0">Chat to Checkout</h2>
				<h2 class="text-center my-2">Negotiate for the best deals</h2>
				<p class="text-center my-2">Connect to your device via Internet. Remember that you <br> must have a stable Internet Connection for a<br> greater experience.</p>
			</div>
			<div class="chatting_section" id="chat_area" style="display: none">
				<div id="header" class="py-2">
					<div id="name_details" class="pt-2">
						<div id="chat_profile_image" class="mx-2" style="background-size: 100% 100%">
							<div id="online"></div>
						</div>
						<div id="name_last_seen">
							<h6 class="m-0 pt-2"></h6>
							<p class="m-0 py-1"></p>
						</div>
					</div>
					<div id="icons" class="px-4 pt-2">
						<div id="send_mail">
							<a href="" id="mail_link"><i class="fas fa-envelope text-dark"></i></a>
						</div>
						<div id="details_btn" class="ml-3">
							<i class="fas fa-info-circle text-dark"></i>
						</div>
					</div>
				</div>
				<div id="chat_message_area">

				</div>
				<div id="messageBar" class="py-4 px-4">
					<div id="textBox_attachment_emoji_container">
						<div id="text_box_message">
							<input type="text" maxlength = "200" name="txt_message" id="messageText" class="form-control" placeholder="Type your message">
						</div>
						<div id="text_counter">
							<p id="count_text" class="m-0 p-0"></p>
						</div>
					</div>
					<div id="sendButtonContainer">
						<button class="btn" id="send_message">
							<span class="material-icons">send</span>
						</button>
					</div>
				</div>
				<p class="text-justify"> Do you want to generate receipt?</p>
			<!--Receipt Button -->
			<a href="<?php echo site_url('welcome/receiptload') ?>">
				<button class="btn btn-danger" id="btn_receipt"  >Generate receipt</button>
			</a>
			</div>
		</div>
		<div   id="details_of_user">
			<div id="user_details_container_avtars" style="background-size: 100% 100%"></div>
			<h5 class="text-justify" id="details_of_name"></h5>
			<p class="text-justify" id="details_of_bio"></p>
			<div id="user_details_container_details">

				<p class="text-justify" id="details_of_created"></p>
				<p class="text-justify" id="details_of_birthday"></p>
				<p class="text-justify" id="details_of_mobile"><span></p>
				<p class="text-justify" id="details_of_email"><span></p>
				<p class="text-justify" id="details_of_location"><span></p>
			</div>
			
		</div>
	</section>
	</section>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/message/main.js"></script>
	  <!-- ===== Mga folder na galing sa chat box===== -->
		<script src="<?php echo base_url(); ?>javascript/pass-show-hide.js"></script>
  <script src="<?php echo base_url(); ?>javascript/login.js"></script>
  <script src="<?php echo base_url(); ?>javascript/users.js"></script>
  <script src="<?php echo base_url(); ?>javascript/signup.js"></script>

  </script>
</body>
</html>