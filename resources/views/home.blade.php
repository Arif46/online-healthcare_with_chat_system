@extends('layouts.master_page')

@section('content')


<div style="background-color:blue">
    <pre>
        


    </pre>

</div>
<h1 style="text-align:center">Welcome Our Live Chat</h1><br><br>
<div class="container" >
    <div class="row">
        
        <div class="col-md-4">
            
            <div class="user-wrapper">
                <ul class="users">
                    @foreach($users as $user)
                    <li class="user" id="{{ $user->id }}">
                        {{--will show unread count notification--}}
                        @if($user->unread)
                        <span class="pending">{{ $user->unread }}</span>
                        @endif
                       <span class="pending">1</span>
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('back_end/doctor_image/16.jpg') }}" alt="" class="media-object">
                            </div>

                            <div class="media-body">
                                <p class="name">{{ $user->name }}</p>
                                <p class="email">{{ $user->email }}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-8" id="messages">
<!--            <div class="message-wrapper">
                <ul class="messages">
                  
                     
                    <li class="message clearfix">
                        <div class="received">
                            <p style="color:#FFF">sssasa</p>
                            <p style="color:#FFF"class="date">7j89</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="sent">
                            <p >sssasa</p>
                            <p class="date">7j89</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="received">
                            <p style="color:#FFF">sssasa</p>
                            <p style="color:#FFF"class="date">7j89</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="sent">
                            <p>sssasa</p>
                            <p class="date">7j89</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="received">
                            <p style="color:#FFF">sssasa</p>
                            <p style="color:#FFF"class="date">7j89</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="sent">
                            <p>sssasa</p>
                            <p class="date">7j89</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="received">
                            <p style="color:#FFF">sssasa</p>
                            <p style="color:#FFF"class="date">7j89</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="sent">
                            <p>sssasa</p>
                            <p class="date">7j89</p>
                        </div>
                    </li>

                </ul>
            </div>-->
<!--
            <div class="input-text">
                <input type="text" name="message" class="submit">
            </div>-->
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
            <h1 style="text-align:center">Welcome Our Live Chat</h1><br><br>


    @endsection
