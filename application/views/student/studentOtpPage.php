<div class="container" id="student-otp-container">
	<div class="row ">
		<div class="ml-auto mr-auto col-lg-6  border shadow-lg p-3">
			<div class="col-lg-12 mb-2 text-justify p-2">
				Please enter the OTP recieved on email address <b><?=$this->session->flashdata("email")?></b> to complete your Registration.
			</div>
			<!-- <div class="col-lg-12 mb-2 text-justify p-2">
				An OTP has been sent to mobile number <b><?=$this->session->flashdata("mobile")?></b>, please enter the OTP down below to complete your Registration.
			</div> -->
			<form method="POST" class="col-lg-12 form-inline p-2" action="<?=base_url()?>student/Student/checkOTP">
				<div class="form-row">
					<input class="form-control form-control-sm " type="password" name="one_time_password" required autofocus placeholder="Enter OTP">
				</div>
				<button type="submit" class="btn btn-sm btn-outline-dark col-sm-3 offset-sm-1 font-weight-light  text-light" style="background-color: #030970;">Submit</button>
				<small class="m-1 text-danger font-italic"><?=$this->session->flashdata("error_otp")?></small>

			</form>
		</div>
	</div>
</div>