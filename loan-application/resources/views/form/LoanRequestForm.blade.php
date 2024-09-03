<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Loan Request Form</title>
	<h2 class="text-center"><b>Loan Request Form</b></h2>
</head>
<body>
<main class="py-4 container">
	<form method="post" name="RequestForm" action="/RequestForm/createForm">
		@csrf
		<div class="form-row row">
			<div class="form-group col-md-6">
				<label for="desired_loan_amount">Desired Loan Amount INR </label>
				<input type="number" name = "desired_loan_amount" min="0" value="{{old('desired_loan_amount')}}" class="form-control" required>
				@error('desired_loan_amount')<div class="alert alert-danger">{{ $message }}</div>@enderror
			</div>

			<div class="form-group col-md-6">
				<label for="annual_income">Annual Income INR</label>
				<input type="number" name = "annual_income" min="0" value="{{old('annual_income')}}" class="form-control" required>
				@error('annual_income')<div class="alert alert-danger">{{ $message }}</div>@enderror
			</div>
		</div>
		<div class="form-group">
			<label for="loan_used_for">Loan will be used for</label>
			<div class="custom-control customLoanFormRequest-radio custom-control-inline">
				<input class="form-check-input" type ="radio" name="loan_used_for" id="loan_used_for" @checked(old('business_launching')) value="business_launching" required>
				<label class="form-check-label">Business Launching</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input class="form-check-input" type ="radio" name="loan_used_for" id="loan_used_for" @checked(old('house_buying')) value="house_buying">
				<label class="form-check-label">House Buying</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input class="form-check-input" type ="radio" name="loan_used_for" id="loan_used_for" @checked(old('home_improvement')) value="home_improvement">
				<label class="form-check-label">Home Improvement</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input class="form-check-input" type ="radio" name="loan_used_for" id="loan_used_for" @checked(old('investment')) value="investment">
				<label class="form-check-label">Investment</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input class="form-check-input" type ="radio" name="loan_used_for" id="loan_used_for" @checked(old('education')) value="education">
				<label class="custom-check-label">Education</lable>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input class="form-check-input" type ="radio" name="loan_used_for" id="loan_used_for" @checked(old('other')) value="other">
				<label class="custom-check-label">Other</label>
			</div>
			@error('loan_used_for')<div class="alert alert-danger">{{ $message }}</div>@enderror
		</div>
		<h4><b>Contact Information</b></h4>
		<div class="form-row row">
			<div class="form-group col-md-6">
				<label for="first_name">First Name </label>
				<input type="text" name = "first_name" value="{{old('first_name')}}" class="form-control" required>
				@error('first_name')<div class="alert alert-warning">{{ $message }}</div>@enderror
			</div>

			<div class="form-group col-md-6">
				<label for="last_name">Last Name</label>
				<input type="text" name = "last_name" value="{{old('last_name')}}" class="form-control">
				
			</div>
		</div>
		<div class="form-group">
			<label for="dob">Date of Birth</label>
			<input type="date" class="form-control" name = "dob" value="{{old('dob')}}" required>
			@error('dob')<div class="alert alert-danger">{{ $message }}</div>@enderror
		</div>
		<div class="form-group">
			<label for="marital_status" class="form-label">Martial Status</label><br/>
			<div class="custom-control custom-radio custom-control-inline">
				<input type ="radio" name="marital_status" id="marital_status"  class="form-check-input" @checked(old('marital_status')) value="single" required>
				<label class="custom-check-label">Single</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input type ="radio" name="marital_status" id="marital_status"  class="form-check-input" @checked(old('marital_status')) value="married">
				<label class="custom-check-label">Married</lable>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input type ="radio" name="marital_status" id="marital_status"  class="form-check-input" @checked(old('marital_status')) value="other">
				<label class="custom-check-label">Other</label>
			</div>
			@error('marital_status')<div class="alert alert-danger">{{ $message }}</div>@enderror
		</div>
		<div class="form-row row">
			<div class="form-group col-md-6">
				<label for="email">Email</label>
				<input type="email" class="form-control" name = "email" value="{{old('email')}}" required>
				@error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
			</div>
			<div class="form-group col-md-6">
				<label for="phone_number">Phone Number </label>
				<input type="text" class="form-control" name = "phone_number" value="{{old('phone_number')}}" required>
				@error('phone_number')<div class="alert alert-danger">{{ $message }}</div>@enderror
			</div>
		</div>
		<div class="form-group">
			<label for="address">Address </label>
			<textarea class="form-control" id="address" name = "address" value="{{old('address')}}" required></textarea>
			@error('address')<div class="alert alert-danger">{{ $message }}</div>@enderror
		</div>
		<h4><b>Employment Information</b></h4>
		<div class="form-row row">
			<div class="form-group col-md-6">
				<label for="occupation">Occupation</label>
				<input type="text" name = "occupation" value="{{old('occupation')}}" class="form-control" required>
				
			</div>
			<div class="form-group col-md-6">
				<label for="down_payment_amount">Down Payment Amount</label>
				<input type="number" name = "down_payment_amount" min="0" value="{{old('down_payment_amount')}}" class="form-control" required>
				@error('down_payment_amount')<div class="alert alert-danger">{{ $message }}</div>@enderror
			</div>
		</div>
		<h4><b>Bank References</b></h4>
		<div class="form-row row">
			<div class="form-group col-md-6">
				<label for="institution_name">Institution Name</label>
				<input type="text" name = "institution_name" value="{{old('institution_name')}}" class="form-control" required>
				@error('institution_name')<div class="alert alert-danger">{{ $message }}</div>@enderror
			</div>
			<div class="form-group col-md-6">
				<label for="saving_account_number">Saving Account#</label>
				<input type="text" name = "saving_account_number" value="{{old('saving_account_number')}}" class="form-control" required>
				@error('saving_account_number')<div class="alert alert-danger">{{ $message }}</div>@enderror
			</div>
		</div>
		<div class="form-group">
			<input type="checkbox" name="agree_information" value="yes" required><label>  &nbsp;I hereby agree that the information given is true, accurate and complete as of the date of this application submission.</label><br/>
		</div>
		<div class="container d-flex align-items-center justify-content-center">
			<input type="submit"  class="btn btn-primary" value="Register">
			<a href="/" class="btn btn-danger">Cancel </a>
		</div>
	</form>
	
</main>
</body>
</html>