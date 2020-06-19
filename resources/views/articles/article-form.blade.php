<h1>Create Articles</h1>
<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>
{!! Form::open(['action' => 'ArticlesController@store', 'method' => 'POST','files'=> 'true', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
</div>
<div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
</div>
<div class="form-group">
    {{Form::file('image')}}
</div>
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
