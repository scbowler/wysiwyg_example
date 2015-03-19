<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WYSIWYG editor</title>
</head>
<body>
<?php 
$intro_message = 'This is our editor area';
?>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'#detail_textarea'});</script>
        <textarea name="editor" id='detail_textarea'><?php echo "$intro_message";?></textarea>
</body>
</html>



</body>
</html>