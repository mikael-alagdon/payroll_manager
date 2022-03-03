@extends("layouts.app")
@section('content')
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>Employee Number</th>
                <th>Full Name</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->emp_no }}</td>
                    <td>{{ $employee->last_name . ', ' . $employee->first_name }}</td>
                    <td>{{ $employee->salary }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('scripts')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endsection