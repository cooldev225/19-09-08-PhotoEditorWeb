<style>
.form-right input,textarea{
	    width: 100%;
    font-size: 18px;
    border-radius: 4px;
}
.form-row{
	padding: 10px 10px 10px 10px;
}
.form-right button{
	    background-color: #2c3e50;
    float: left;
    padding: 5px 12px;
    margin: 5px;
    color: #fff;
    text-align: center;
    border: 0;
    cursor: pointer;
    border-radius: 3px;
    display: block;
    text-decoration: none;
    font-weight: 400;
    transition: all .3s ease-out !important;
    -webkit-transition: all .3s ease-out !important;
}
}
</style>
<center>
	
</center>

<div class="row" id="content-wrapper" style="transform: none;">
	<div class="container" style="transform: none;">
	<!-- Main Wrapper -->
		<div id="main-wrapper" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
			<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
				<div class="clearfix">
					
					
				</div>
				
				<div class="main section" id="main" name="Main Posts">

					<h1 class="post-title">
						Contact Us
					</h1>
					<p>
						<label>Use this address : </label>
						<label>
							18 Marley Place Leeds LS11 8QW UK &nbsp; &nbsp; &nbsp; &nbsp;<i class="icon-call-end"></i> 07784850000
						</label>
					</p>
					<p>
						<label>
						Monday – Friday: 
						</label>
						<label>8.00am – 8.00pm, Saturday - Sunday: 9.00am – 5.00pm.</label>
					</p>
					<form name="contact-form">
						<center>
							<h2>HAVE SOME QUESTIONS?</h2>
						</center>
						<div style="display: inline-block;width: 90%;">
							<div class="form-left" style="float: left;width: 50%;">
								<img style="margin-top: 15%;    width: 80%;    max-width: 333px;" src="/assets/dist/images/contact_email.png">
							</div>
							<div class="form-right" style="float: left;width: 50%;">
								<div class="form-row">
									<input type="text" placeholder="First name" name="_firstname">
								</div>
								<div class="form-row">
									<input type="text" placeholder="Last name"  name="_lastname">
								</div>
								<div class="form-row">
									<input type="email" placeholder="What's your email"  name="_lastname">
								</div>
								<div class="form-row">
									<textarea style="height: 200px;" placeholder="Your questions..."></textarea> 
								</div>
								<div class="form-row">
									<button type="submit">SEND MESSAGE</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>								
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		form_responsive();
	});
	$(window).resize(function(){
		form_responsive();
	});
	function form_responsive(){
		//$(".form-right").css('width','400px');	
	}
</script>