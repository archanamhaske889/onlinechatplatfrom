@extends('layouts.app')

@section('content')
<html>
<head>

<script>
know = {

"hi" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Hi there!",
"hello" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Hello there!",
"HELLO" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Hi there!",
"Who are you?" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp I am Nikhil's Assistant",
"How are you?" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp I am Fine",
"How old are you?" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp I am infinity in age"




};

function talk() {
var user = document.getElementById("userBox").value;
document.getElementById("userBox").value= "";
document.getElementById("chatLog").innerHTML += user+"<br>";

if (user in know) {
document.getElementById("chatLog").innerHTML += know[user] + "<br>";
} else 

{
document.getElementById("chatLog").innerHTML += "I don't understand... <br>";
}
}





</script>



</head>


<body>
 <h1>How Can I Help You</h1>
 <p id="chatLog">let’s chat? - We're online<br> </p>


<input id="userBox" type="text" onkeydown="if(event.keyCode == 13) {talk()}">


</body>



</html>

<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
