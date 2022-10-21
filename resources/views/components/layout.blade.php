@props(['title'=>'Taung Chun Myae'])
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$title}}</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="icon" type="image/png" href="https://c.cksource.com/a/1/logos/ckeditor5.png">
		<link rel="stylesheet" type="text/css" href="styles.css">
  </head>  
    <body id="home" data-editor="ClassicEditor" data-collaboration="false" data-revision-history="false">
        <x-navbar/> 
        {{$slot}}
        <!-- Footer -->
        <x-footer/>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous">
        </script>
        <script src="/ckeditor/ckeditor.js"></script>
		    <script>
          ClassicEditor.create( document.querySelector( '.editor' ), {
					licenseKey: '',
				} ).then( editor => {
					window.editor = editor;
				} ).catch( error => {
					console.error( 'Oops, something went wrong!' );
					console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
					console.warn( 'Build id: f2mjkdon5y60-1zur1ifpavmn' );
					console.error( error );
				} );
		    </script>
    </body>
</html>
