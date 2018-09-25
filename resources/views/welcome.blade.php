<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       
        <style>
            input[type="file"] {
                background-color:#67C2C4;
                border: 1px solid black;
                margin-right: 5px;
            }

            input[type="submit"]{
                border-radius:30px 10px;
	    		color:#fff;
	    		padding:10px 20px 10px 20px;
	    		margin:20px auto;
            }
        </style>

	</head>
	<body class="bg-light">
        
        <div class="container">
            <div class="py-5 text-center">
                <h1>File Upload</h1>
                <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                    <label for="file">Select image to upload:</label>
                    <input type="file" name="file" id="file">
                    <input class="btn btn-primary" type="submit" value="Upload" name="submit">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">
                </form>
            </div>
        </div>

	</body>
</html>
