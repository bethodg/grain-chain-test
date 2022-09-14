

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    <title>GrainChainTest</title>
    <link href="/assets/css/app.css" rel="stylesheet">
    <link href="/assets/dropify/dist/css/dropify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body class="gc-bg">
    <nav class="navbar bg-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="https://www.grainchain.io/assets/images/logo.webp" alt="Logo" width="30" height="24" class="d-inline-block bg-icon align-text-top">
                GrainChainTest
            </a>
        </div>
    </nav>

    <div class="container">
        <br>
        <div class="row">
            <div class="col-12 rooms-content">

            </div>
            <div class="col-12 rooms-lights-content d-none">

            </div>
        </div>  
        <div class="row">
            <form method="POST" action="{{route('home.get_matrix')}}" id="form-file" enctype="multipart/form-data"> 

                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="col-12 mb-2 center">
                    <label  class="control-label mb-1" for="input-file-now">Cargar Archivo (.txt)</label>
                    <input accept=".txt" type="file" id="file" class="dropify" data-default-file="" data-allowed-file-extensions="txt"/>
                    <input type="hidden" name="file" value="">
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button id="btn-submit-lights" class="btn btn-primary me-md-2" type="button">Calcular Focos</button>
                    <button id="btn-submit" class="btn btn-primary disabled" type="button"> Enviar Archivo</button>
                  </div>
            </div>
        </div> 
      

        

    </div>
    
        
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="/assets/dropify/dist/js/dropify.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="/assets/js/functions.js"> </script>

    
  </body>
</html>
