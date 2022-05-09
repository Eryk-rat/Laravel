<div class="table-responsive">
    <table class="table" id="tests-table">
        <thead>
        <tr>
            <th>Title</th>
        <th>Post Date</th>
        <th>Body</th>
        <th>Email</th>
        <th>Author Gender</th>
        <th>Post Type</th>
        <th>Post Visits</th>
        <th>Category</th>
        <th>Category Short</th>
        <th>Is Private</th>
        <th>Writer Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tests as $test)
            <tr>
                <td>{{ $test->title }}</td>
            <td>{{ $test->post_date }}</td>
            <td>{{ $test->body }}</td>
            <td>{{ $test->email }}</td>
            <td>{{ $test->author_gender }}</td>
            <td>{{ $test->post_type }}</td>
            <td>{{ $test->post_visits }}</td>
            <td>{{ $test->category }}</td>
            <td>{{ $test->category_short }}</td>
            <td>{{ $test->is_private }}</td>
            <td>{{ $test->writer_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tests.destroy', $test->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tests.show', [$test->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tests.edit', [$test->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
