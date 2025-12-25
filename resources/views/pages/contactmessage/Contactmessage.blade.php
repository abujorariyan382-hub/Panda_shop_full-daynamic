@extends('layout.layout')

@section('content')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Contect</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Message of contact</li>
                </ol>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Range</th>
                            <th>Message</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                       $i = 1;
                        @endphp
                      
                        

                        @forelse ($address as $items)

                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $items['full_name'] }}</td>
                                <td>{{ $items['email'] }}</td>
                                <td>{{ $items['number'] }}</td>
                                <td>{{ $items['radioDefault'] }}</td>
                                <td>{{ $items['message'] }}</td>
                                <td>{{ $items['address'] }}</td> 
                                <td>
                                    <a class="btn btn-danger" href="{{ route('contact.message.delete', $items['email']) }}">Delete</a>
                                </td>
                            </tr>
                                @php
    $i++;
                                @endphp

                                    @endphp
                                    @empty
                                    
                                    <tr>
                                        <td class="text-center text-danger" colspan="9">Data Not Found</td>
                                    </tr>
                    @endforelse


                    </tbody>
                </table>
            </div>
        </main>

@endsection