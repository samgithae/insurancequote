<meta charset="utf-8" />
<title>Insurance Quote</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Get Instant Quotes" name="description" />
<meta content="Hudutech" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

<!-- plugin css -->
<link href="{{asset('assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />


<!-- Layout config Js -->
<script src="{{ asset('assets/js/layout.js') }}"></script>
<!-- Bootstrap Css -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style> 
.vehicle-options {
           display: flex;
            gap: 10px; 
            text-align: center;
            padding: 20px;
            
            }

        .vehicle-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            }
        .vehicle-option img {
        max-width: 70%; /* Make the images responsive */
        height: auto; /* Maintain the aspect ratio */        
            }
        
            .commercial-details,
        .psv-details {
             display: none;
            }
        .form-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;    
          }

        .invalid-feedback {
            color: red;
            margin-top: 5px;
            }
        
        .hidden {
            display: none;
            }
        img {
        cursor: pointer;
        }
</style>
