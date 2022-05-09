<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Post Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_date', 'Post Date:') !!}
    {!! Form::text('post_date', null, ['class' => 'form-control','id'=>'post_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#post_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('author_gender', 'Author Gender', ['class' => 'form-check-label']) !!}
    <label class="form-check">
    {!! Form::radio('author_gender', "1", null, ['class' => 'form-check-input']) !!} Male
</label>

<label class="form-check">
    {!! Form::radio('author_gender', "0", null, ['class' => 'form-check-input']) !!} Female
</label>

</div>


<!-- Post Type Field -->
<div class="form-group col-sm-12">
    {!! Form::label('post_type', 'Post Type', ['class' => 'form-check-label']) !!}
    <label class="form-check">
    {!! Form::radio('post_type', "Public", null, ['class' => 'form-check-input']) !!} Public
</label>

<label class="form-check">
    {!! Form::radio('post_type', "Private", null, ['class' => 'form-check-input']) !!} Private
</label>

</div>


<!-- Post Visits Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_visits', 'Post Visits:') !!}
    {!! Form::number('post_visits', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::select('category', ['Technology' => 'Technology', 'LifeStyle' => 'LifeStyle', 'Education' => 'Education', 'Games' => 'Games'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Category Short Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_short', 'Category Short:') !!}
    {!! Form::select('category_short', ['tech' => 'Technology', 'ls' => 'LifeStyle', 'edu' => 'Education', 'game' => 'Games'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Is Private Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_private', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_private', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_private', 'Is Private', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Writer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('writer_id', 'Writer Id:') !!}
    {!! Form::text('writer_id', null, ['class' => 'form-control']) !!}
</div>