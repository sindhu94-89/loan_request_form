@include('layouts.header')
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
				<input class="form-check-input" type ="radio" name="loan_used_for" id="loan_used_for" value="business_launching" {{ old('loan_used_for') == 'business_launching' ? 'checked' : ''}} required>
				<label class="form-check-label">Business Launching</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input class="form-check-input" type ="radio" name="loan_used_for" id="loan_used_for" value="house_buying" {{ old('loan_used_for') == 'house_buying' ? 'checked' : ''}}>
				<label class="form-check-label">House Buying</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input class="form-check-input" type ="radio" name="loan_used_for" id="loan_used_for" value="home_improvement" {{ old('loan_used_for') == 'home_improvement' ? 'checked' : ''}}>
				<label class="form-check-label">Home Improvement</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input class="form-check-input" type ="radio" name="loan_used_for" id="loan_used_for" value="investment" {{ old('loan_used_for') == 'investment' ? 'checked' : ''}}>
				<label class="form-check-label">Investment</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input class="form-check-input" type ="radio" name="loan_used_for" id="loan_used_for" value="education" {{ old('loan_used_for') == 'education' ? 'checked' : ''}}>
				<label class="custom-check-label">Education</lable>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input class="form-check-input" type ="radio" name="loan_used_for" id="loan_used_for" value="other" {{ old('loan_used_for') == 'other' ? 'checked' : ''}}>
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
				<input type ="radio" name="marital_status" id="marital_status"  class="form-check-input" value="single" {{ old('marital_status') == 'single' ? 'checked' : ''}} required>
				<label class="custom-check-label">Single</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input type ="radio" name="marital_status" id="marital_status"  class="form-check-input" value="married" value="married" {{ old('marital_status') == 'married' ? 'checked' : ''}}>
				<label class="custom-check-label">Married</lable>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input type ="radio" name="marital_status" id="marital_status"  class="form-check-input" @checked(old('marital_status')) value="other" {{ old('marital_status') == 'other' ? 'checked' : ''}}>
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
			<textarea class="form-control" id="address" name = "address" required>{{old('address')}}</textarea>
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
		<div class="">
			<div class="form-group">
				<input type="submit"  class="btn btn-success float-right" value="Submit Form">
				<a href="/" class="btn btn-primary">Cancel</a>
			</div>
		</div>
	</form>
	
</main>
</body>
</html>