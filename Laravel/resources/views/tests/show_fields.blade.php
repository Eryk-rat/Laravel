<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $test->title }}</p>
</div>

<!-- Post Date Field -->
<div class="col-sm-12">
    {!! Form::label('post_date', 'Post Date:') !!}
    <p>{{ $test->post_date }}</p>
</div>

<!-- Body Field -->
<div class="col-sm-12">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $test->body }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $test->email }}</p>
</div>

<!-- Author Gender Field -->
<div class="col-sm-12">
    {!! Form::label('author_gender', 'Author Gender:') !!}
    <p>{{ $test->author_gender }}</p>
</div>

<!-- Post Type Field -->
<div class="col-sm-12">
    {!! Form::label('post_type', 'Post Type:') !!}
    <p>{{ $test->post_type }}</p>
</div>

<!-- Post Visits Field -->
<div class="col-sm-12">
    {!! Form::label('post_visits', 'Post Visits:') !!}
    <p>{{ $test->post_visits }}</p>
</div>

<!-- Category Field -->
<div class="col-sm-12">
    {!! Form::label('category', 'Category:') !!}
    <p>{{ $test->category }}</p>
</div>

<!-- Category Short Field -->
<div class="col-sm-12">
    {!! Form::label('category_short', 'Category Short:') !!}
    <p>{{ $test->category_short }}</p>
</div>

<!-- Is Private Field -->
<div class="col-sm-12">
    {!! Form::label('is_private', 'Is Private:') !!}
    <p>{{ $test->is_private }}</p>
</div>

<!-- Writer Id Field -->
<div class="col-sm-12">
    {!! Form::label('writer_id', 'Writer Id:') !!}
    <p>{{ $test->writer_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $test->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $test->updated_at }}</p>
</div>

