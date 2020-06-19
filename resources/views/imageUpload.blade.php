<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
</head>
<body>
<h1>Let's upload Image</h1>
{{ Form::open(array('url' => array('imageStore',$gallery_id), 'method' => 'PUT', 'name'=>'picture', 'id'=>'myImageDropzone',
 'class'=>'dropzone', 'files' => true)) }}
{{csrf_field()}}
{{ Form::close() }}
</body>
</html>