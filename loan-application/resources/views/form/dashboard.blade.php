<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Dashboard</title>
</head>
<body>
	@if (session('success'))
		<div class="row">
		    <div class="col-sm-12">
		        <div class="alert  alert-success alert-dismissible fade show" role="alert">
		            {{ session('success') }}
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		        </div>
		    </div>
		</div>
	@endif
	@if (session('failed'))
		<div class="row">
		    <div class="col-sm-12">
		        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
		            {{ session('failed') }}
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		        </div>
		    </div>
		</div>
	@endif
	<h4 class="text-center"><b>Loan Application</b></h4>
	<a href="{{url('/RequestForm/createRequestForm')}}"> <button type="button" class="btn btn-primary float-left">Create New Loan Request Form</button></a><br/><br/>
	<table class="table">
		<thead>
			<th>Name</th>
			<th>Date of Birth</th>
			<th>Email</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			@foreach($result as $data)
				<tr>
					<td>{{ $data->first_name }}</td>
				    <td>{{ $data->dob }}</td>
				    <td>{{ $data->email }}</td>
				    <td><a href="/RequestForm/editForm/{{$data->id}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
				    <td><a href="/RequestForm/deleteForm/{{$data->id}}" class="btn btn-danger"> Delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>