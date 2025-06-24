@extends('website.main.layout.main')

@section('main_content')




<div class="container mt-5">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Project Name</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>

                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->project_name}}</td>
                <td>
                    <!-- Delete Form -->
                    <form action="{{ route('contact.delete', $d->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this contact?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>



                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection