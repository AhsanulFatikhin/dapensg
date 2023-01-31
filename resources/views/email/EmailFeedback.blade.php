<!DOCTYPE html>
<html>
<head>
    <style>
        .button {
          background-color: #4CAF50;
          border: none;
          color: white;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }
        .button2 {background-color: #f44336;}
    </style>
    <title>websitepercobaan.com</title>
</head>
<body>
    {{-- <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p> --}}\
        
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h4 style="text-align:center;">Terima kasih {{ $nama }}</h4>
                <a href="{{ route('export', ['keyunik' => $keyunik]) }}" class="button"> Download PDF</a>
            </div>
        </div>
    </div>
</body>
</html>