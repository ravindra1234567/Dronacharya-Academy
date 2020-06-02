<?php $this->load->view("include/student/header")?>



<style type="text/css">
	.carousel {
		margin: 1.5rem;
	}
	.carousel-inner {
		height: auto;
		/*background-color: red;*/
	}

	.carousel-control-prev {
		margin-left: -50px;
	}

	.carousel-control-next {
		margin-right: -50px;
	}
</style>
<?php
if ($this->session->flashdata('change_password') !== null) {
	echo "<script>Swal.fire({type: 'success',title: 'Password Changed Successfully!',text:'Please login to continue'});</script>";
}
?>
<div class="container" id="student-login-container"  >
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="row">
				<div  class="border shadow rounded  m-1 mb-5 col-lg-12 rounded"  id="hidelogin"><!-- login window-->

					<div class=" p-3 h3 font-weight-light rounded-top  text-center" style="margin-left: -15px;margin-right:-15px;background-color: #cdafdb; ">Student Login</div>
					<form method="POST" class="login " action="<?= base_url()?>student/Student/studentLogin">

						<div class="form-row">
							<div class="form-group col-lg-12">
								<label class="small font-weight-bolder" for="login-mobile">Mobile Number</label>
								<input type="text" id="login-mobile" class="form-control form-control-sm" placeholder="Enter mobile number" required autofocus name="login-mobile" autocomplete="off" value="<?=$this->session->flashdata('mobile_number')?>">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group  col-lg-12 mt-0">
								<label class="small font-weight-bolder" for="login-password">Password</label>
								<input type="password" id="login-password" class="form-control form-control-sm" placeholder="Enter password" required name="login-password">
								<small class="text-danger font-italic"><?=($this->session->flashdata('authenticate') == 'f')?"Wrong credentials entered!":""?></small>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group ">
								<button class="btn btn-sm  btn-block m-1   font-weight-light   text-center "  type="submit" style="background-color: #cdafdb;">
									Login <i class="fas fa-sign-in-alt"></i>
								</button>
								<a href="<?=base_url().'forgotpassword'?>">
									<span class="text-primary ml-2">
										Forgot Password ?
									</span>
									<span class="text-primary sign-up" style="cursor:pointer"></span>
								</a>
							</div>
						</div>

					</form>
					<hr>
					<div class="row">
						<h6 class="col-lg-12  font-weight-bolder " style="text-align: center;">If you are First time user</h6> 
					</div>
					<div class="row p-2">
						<p class="text-primary sign-up btn  col-lg-12  text-center" style="cursor:pointer;background-color: #cdafdb;color:#080505;" onclick="$('div.sign-up').show();$('#hidelogin').hide();" id="showSign">
							Sign Up/Register
							<i class='fas fa-user-plus'></i>
						</p>
					</div>
				</div>

				<!-- login window end -->

				<div class="col-sm-12 m-1 sign-up shadow-lg" style="display: none;">
					<form method="POST"  class="sign-up" action="<?= base_url()?>student/Student/studentSignUp">
						<div class="row">
							<div class="col-sm-12 p-3 h3 rounded-top font-weight-light  text-center" style="background-color:#cdafdb ">
								Student Sign Up
								<button type="button" class="close text-white" onclick="$('div.sign-up').hide();$('#hidelogin').show();">&times;</button>
							</div>
							<div class="ml-2 mr-2 row">
								<div class="col-sm-6 p-1">
									<label for="student-name"><small>Full Name<sup class="text-danger">*</sup></small></label>
									<input type="text" id="student-name" class="form-control" placeholder="Enter full name" required autofocus name="student-name"  autocomplete="off">
								</div>
								<div class="col-sm-6 p-1">
									<label for="student-mobile"><small>Mobile Number<sup class="text-danger">*</sup></small></label>
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">+91</div>
										</div>
										<input type="number" id="student-mobile" class="form-control small" placeholder="Mobile number" required name="student-mobile"  autocomplete="off">
									</div>
									<small class="text-danger font-italic mobile-warning" style="display: none;">Incorrect Mobile Number</small>
								</div>
								<div class="col-sm-6 p-1">
									<label for="password"><small>Password<sup class="text-danger">*</sup></small></label>
									<input type="password" id="password" class="form-control p-2" placeholder="Enter password" required name="password">
									<small class="text-danger font-italic password-length-warning" style="display: none;">Password must be alteast 6 characters long!</small>
								</div>
								<div class="col-sm-6 p-1">
									<label for="re-password"><small>Confirm Password<sup class="text-danger">*</sup></small></label>
									<input type="password" id="re-password" class="form-control" placeholder="Re-enter password" required name="re-password">
									<small class="text-danger font-italic password-warning" style="display: none;">Passwords DO NOT match!</small>
								</div>
								<div class="col-sm-6 p-1">
									<label for="student-state"><small>Select State<sup class="text-danger">*</sup></small></label>
									<select id="student-state" name="student-state" class="form-control">
									</select>
								</div>
								<div class="col-sm-6 p-1">
									<label for="student-city"><small>Select City<sup class="text-danger">*</sup></small></label>
									<select id="student-city" name="student-city" class="form-control">
									</select>
								</div>

								<div class="col-sm-6 p-1">
									<label for="student-class"><small>Select Class<sup class="text-danger">*</sup></small></label>
									<select id="student-class" name="student-class" class="form-control">
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="BSC">BSC</option>
										<option value="MSC">MSC</option>
										<option value="BE">BE</option>
										<option value="LLB">LLB</option>
										<option value="BA">BA</option>
										<option value="MA">MA</option>
										<option value="BCOM">BCOM</option>
										<option value="MCOM">MCOM</option>
										<option value="Diploma">Diploma</option>
									</select>
								</div>
								<div class="col-sm-6 p-1">
									<label for="student-medium"><small>Select Medium<sup class="text-danger">*</sup></small></label>
									<select id="student-medium" name="student-medium" class="form-control">
										<option value="1">English</option>
										<option value="0">Hindi</option>
									</select>
								</div>
								<!-- <div class="col-sm-4 p-1">
									<label for="student-stream"><small>Select Stream<sup class="text-danger">*</sup></small></label>
									<div class="small text-danger font-italic" id="no-stream-for-9-10" style="display: none;">Stream does not apply for <b>9&#x1D57;&#x02B0;</b> &  <b>10&#x1D57;&#x02B0;</b> class students.</div>
									<select id="student-stream" name="student-stream" class="form-control">
										<option value="1">Mathematics</option>
										<option value="0">Biology</option>
									</select>
								</div> -->
							</div>
							<div class="col-sm-12">
								<label class="checkbox-inline small">
									<input class="test-result-date" type="checkbox" required>
									I accept the <a href="#" target="_blank">Terms and Conditions</a> of Dronacharya-Academy.
								</label>
							</div>
							<div class="col-sm-12 pl-4 pr-4 mt-2 mb-2">
								<button type="submit" class="btn  btn-block sign-up font-weight-light " type="submit" style="background-color: #cdafdb">Sign Up/Register <i class='fas fa-user-plus'></i></button>

							</div>
						</div>
					</form>
				</div> 
			</div>
		</div>

		<!-- sign up window end -->
		<!-- <div class="col-sm-7">
			<!-- Carausel start-->
			<!-- <div class="container">

				<div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="2000">
					<div class="carousel-inner row w-100 mx-auto" role="listbox">
							<?php $i = 0; foreach ($ad as $img) { ?>
								<div class="carousel-item <?= $i==0 ? 'active' : '' ?>">
									<img src="<?= base_url() ?>poster_img/<?= $img?>" alt="IIT-PULSE" class="img-fluid">
								</div>
								<?php $i++;
							} ?>
					</div>
					<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
						<i style="color:#030970; text-decoration: none;" class="fa fa-chevron-circle-left fa-2x"></i>

						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
						<i style="color:#030970; text-decoration: none;" class="fa fa-chevron-circle-right fa-2x"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!-- <div class="clearfix"></div> -->

		<!-- </div> -->
	<!-- </div> -->
</div>
<!-- Carausel End-->
<script type="text/javascript">
	$(document).ready(function () {

		$("input#student-mobile").focusout(function() {
			if ($(this).val().length != 10) {
				$("small.mobile-warning").show();
				$("button.sign-up").attr('disabled', "");
			}
			else {
				$("small.mobile-warning").hide();
				$("button.sign-up").removeAttr('disabled');
			}
		});

		$("select#student-class").change(function () {
			if ($(this).find("option:selected").val() <= 10) {
				$("select#student-stream").hide();
				$("div#no-stream-for-9-10").show();
			}
			else {
				$("select#student-stream").show();
				$("div#no-stream-for-9-10").hide();
			}
		});

		$("input#password").focusout(function() {
			if ($(this).val().length < 6) {
				$("small.password-length-warning").show();
				$("button.sign-up").attr('disabled', "");
			}
			else {
				$("small.password-length-warning").hide();
				$("button.sign-up").removeAttr('disabled');
			}
		});

		$("input#password").keyup(function() {
			if (($("input#re-password").val().length > 0) && ($(this).val() != $("input#re-password").val())) {
				$("small.password-warning").show();
				$("button.sign-up").attr('disabled', "");
			}
			else {
				$("small.password-warning").hide();
				$("button.sign-up").removeAttr('disabled');
			}

		});

		$("input#re-password").keyup(function() {
			if ($(this).val() != $("input#password").val()) {
				$("small.password-warning").show();
				$("button.sign-up").attr('disabled', "");
			}
			else {
				$("small.password-warning").hide();
				if (($("input#re-password").val().length < 6)) {
					$("small.password-length-warning").show();
				}
				else {
					$("small.password-length-warning").hide();
					$("button.sign-up").removeAttr('disabled');
				}
			}
		});

		var cities = [];
		function loadStatesCities (s_id, c_id) {
			$.get('<?=base_url()?>StateCityList/getStateCityList?type=state', function(data) {
				for (e of data) {
					$("select#student-state").append(`<option value=${e.id}>${e.state_name}</option>`);
				}
				$("select#student-state").val(s_id);
				cities = [];
				$.get(`<?=base_url()?>StateCityList/getStateCityList?type=city`, function(data) {
					for (state_id in data) {
						var city = ``;
						for (city_data of data[state_id]) {
							city += `<option value="${city_data.id}">${city_data.city_name}</option>`;
						}
						cities[state_id] = city;
					}
					$('select#student-city').html(cities[s_id]).val(c_id);
				}, 'json');
			}, 'json');
		}

		$("select#student-state").on("change", function () {
			var id = $("select#student-state").children('option:checked').val();
			$("select#student-city").html(cities[id]);
		});

		<?php
		$success = $this->session->flashdata('new_signup');
		if ($success == null) {
			echo "loadStatesCities('21', '2229');$('select#student-class').val(12);";
		}
		else if ($success == "s") {
			echo "loadStatesCities('21', '2229');$('select#student-class').val(12);";
			echo "Swal.fire({type: 'success',title: 'Sign Up successful', text: 'You have been successfully registered, please Login to continue.'});";
		}
		else if ($success == "f") {
			echo "loadStatesCities('21', '2229');$('select#student-class').val(12);";
			echo "Swal.fire({type: 'error', title: 'Sign Up failed!', text: 'Something went wrong. Maybe your browser doesnot support JavaScript'});";
		}
		else if ($success == "a") {
			echo "loadStatesCities('".$this->session->flashdata('student-state')."', '".$this->session->flashdata('student-city')."');";
			echo "Swal.fire({type: 'warning', title: 'Mobile number already exists', text: 'Someone is already registered with the same mobile number.'});";
			echo "$('#student-name').val('".$this->session->flashdata('student-name')."');";
			echo "$('#student-mobile').val('".$this->session->flashdata('student-mobile')."');";
			echo "$('#password').val('".$this->session->flashdata('password')."');";
			echo "$('#re-password').val('".$this->session->flashdata('re-password')."');";
			echo "$('#student-address').val('".$this->session->flashdata('student-address')."');";
			echo "$('#student-school').val('".$this->session->flashdata('student-school')."');";
			echo "$('#student-class').val('".$this->session->flashdata('student-class')."');";
			echo "$('#student-medium').val('".$this->session->flashdata('student-medium')."');";
			echo "$('#student-stream').val('".$this->session->flashdata('student-stream')."');";
			echo "$('div.login').hide();$('div.sign-up').show();$('form.login').trigger('reset');";
		}
		if ($this->session->flashdata('logout') !== null) {
			echo "Swal.fire({type: 'success',title: 'Successfully Logged Out', text: 'Hope to see you soon :)'});";
		}

		?>
	});
</script>
<?php //$this->load->view("include/student/footer")?>

