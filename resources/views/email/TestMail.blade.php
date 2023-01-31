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
                <h4 style="text-align:center;">{{ $nama }}</h4>
            </div>
        </div>
    </div>

                <a href="{{ route('feedback', ['keyunik' => $keyunik]) }}" class="button"> Approved</a>

                <form action="{{ route('feedback', ['keyunik' => $keyunik]) }}" method="get" class="d-inline md">
                    @csrf
                {{-- <label for="floatingTextarea2" class="mb-3">Feedback</label> --}}
                {{-- <div align = "center">
                    <textarea id="feedback" name="feedback" rows="10" cols="80" placeholder="Masukkan feedback"></textarea>
                </div> --}}
                <div align = "center">
                    <button class="button" type="submit">Approved</button>
                    <input type="submit">
                    {{-- <button class="button button2" onclick="return confirm('Are you sure ?')">Rejected</button> --}}
                </div>
                </form>
</body>
</html>