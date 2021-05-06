<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ejemplo MVC con PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<style>
    .navbar {
        padding: 1em;
        box-shadow: 0 2px 13px -1px #efefef, 0 0 1px 0 #efefef, 0 1px 6px 0 #efefef;
    }

    .outline-shadow {
        box-shadow: 0 3px 16px 2px #bcbdc0;
        border-radius: 8px;
        border: 1px solid #a7a9ac;
    }

    label {
        display: inline-block;
        color: #a7a9ac;
        font-weight: 500;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gestión de Servicios</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

            </div>
        </div>
    </nav>
    <div class="container my-5">