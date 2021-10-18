@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <a href="{{route('export')}}" class="btn btn-primary"> Click Here to Export </a>
        </div>
            <div class="col-md-12">
                <table class="table table-hover  table-bordered" style="margin-top:20px; background: #fff;">
                    <thead>
                        <th> First Name </th>
                        <th> Last Name </th>
                        <th> Email </th>
                        <th> Date of Birth </th>
                    </thead>
                    <tbody>
                        @foreach ($allvisitors as $visitor)
                        <tr>
                            <td> {{Str::of($visitor->first_name)->title()}} </td>
                            <td> {{Str::of($visitor->last_name)->title()}} </td>
                            <td> {{$visitor->email}} </td>
                            <td> {{$visitor->dob}} </td>

                        </tr>
                        @endforeach
                    </tbody>
                    </table>

                    {{$allvisitors->links()}}
            </div>

    </div>
</div>

@endsection
