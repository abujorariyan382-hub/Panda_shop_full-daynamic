@extends('layout.layout')

@section('content')
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">Message</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
				<li class="breadcrumb-item active">Message</li>
			</ol>


			<table class="table">
				<thead>
					<tr>
						<th>S.N</th>
						<th>Name</th>
						<th>Lastname</th>
						<th>email</th>
						<th>need</th>
						<th>message</th>

						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@php
						$i = 1;
					@endphp

					@forelse ($conTactCart as $item)

						<tr>
							<td>{{ $i }}</td>

							<td>{{ $item['name'] }}</td>
							<td>{{ $item['surename'] }}</td>
							<td>{{ $item['email'] }}</td>
							<td>{{ $item['need']}}</td>

							<td>
								{{ $item['message'] }}
							</td>
							<td>
								<a href="{{ route('message.delete', $item['email']) }}" class="btn btn-danger">Delete</a>
							</td>

						</tr>

						@php
							$i++;
						@endphp
					@empty

						<tr>
							<td class="text-center text-danger" colspan="7">Data Not Found</td>
						</tr>

					@endforelse

				</tbody>
			</table>

		</div>
	</main>

@endsection