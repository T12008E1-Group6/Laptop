@extends('layouts.appIndex')

@section('content')
<div style="height: 90vh;">
    <div style="display:flex;justify-content:center; text-align:center;">
        <div style="font-size:20vh;font-weight:bold;line-height:22vh">
            MESSAGE SENT <br>SUCCESSFULLY!<br>
        </div>
        
    </div>
    <div style="display:flex; justify-content:center;text-align:center">
        <a href="/index" class="h1">
            <i class="fas fa-long-arrow-alt-left"></i> back
        </a>
    </div>
</div>
@endsection