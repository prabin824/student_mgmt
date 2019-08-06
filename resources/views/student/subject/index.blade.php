@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Subject List<div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>sn.</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Author</th>
                                <!-- <th>Created At</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sn=1; ?>
                            @foreach($subjects as $subject)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>{{$subject->code}}</td>
                                <td>{{$subject->name}}</td>
                                <td>{{$subject->class}}</td>
                                <td>{{$subject->author}}</td>
                                <!-- <td>{{$subject->created_at}}</td> -->
                            </tr>
                            @endforeach
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
