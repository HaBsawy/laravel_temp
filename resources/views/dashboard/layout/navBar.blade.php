<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 23-May-19
 * Time: 13:13
 */
?>

<!-- Start NavBar -->

<nav>

    <!-- Left Side -->

    <div class="left-side">
        <h2 class="heading">
            <img src="{{ url('images/logo.png') }}" alt="logo" >
            Magilla
        </h2>
        <div class="sidebar-collabse">
            <i class="fas fa-bars"></i>
        </div>
    </div>

    <!-- Right Side -->

    <div class="right-side">
        <div class="nav-tabs" data-tab="messages">
            <i class="fas fa-cog"></i>
        </div>
        <div class="nav-tabs" data-tab="apps">
            <i class="fas fa-th"></i>
        </div>
        <div class="nav-tabs" data-tab="siteMap">
            <i class="fas fa-ellipsis-v"></i>
        </div>
        <div class="nav-tabs" data-tab="notifications">
            <i class="fas fa-bell"></i>
            <span class="badge badge-pill badge-danger">5</span>
        </div>
        <div class="nav-tabs" data-tab="profile">
            <img class="user" src="{{ url('images/user1.png') }}" alt="user">
            <span class="status active"></span>
        </div>

        <!-- Messages -->

        <div class="nav-tab tab-messages">
            <div class="tabs">
                <div class="tab active" data-tab="chat">Chat</div>
                <div class="tab" data-tab="messages">Messages</div>
                <div class="tab" data-tab="todo">ToDO</div>
            </div>
            <div class="messages-tab chat active">
                <div class="header">
                    <h5 class="text-center">Users</h5>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user1.png') }}" alt="user">
                            <span class="status active"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Clay Masse</h6>
                        <p>No one saves us but ourselves.</p>
                    </div>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user2.png') }}" alt="user">
                            <span class="status offline"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Evie Ono</h6>
                        <p>Unity is strength</p>
                    </div>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user3.png') }}" alt="user">
                            <span class="status busy"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Madalyn Rascon</h6>
                        <p>Respect yourself if you would have others respect you.</p>
                    </div>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user4.png') }}" alt="user">
                            <span class="status active"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Mitsuko Heid</h6>
                        <p>I’m thankful.</p>
                    </div>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user1.png') }}" alt="user">
                            <span class="status offline"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Ezequiel Merideth</h6>
                        <p>Patience is bitter.</p>
                    </div>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user2.png') }}" alt="user">
                            <span class="status active"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Jonnie Metoyer</h6>
                        <p>Genius is eternal patience.</p>
                    </div>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user3.png') }}" alt="user">
                            <span class="status busy"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Angelic Lauver</h6>
                        <p>Every burden is a blessing.</p>
                    </div>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user4.png') }}" alt="user">
                            <span class="status active"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Priscila Shy</h6>
                        <p>Wise to resolve, and patient to perform.</p>
                    </div>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user1.png') }}" alt="user">
                            <span class="status active"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Linda Stack</h6>
                        <p>Our patience will achieve more than our force.</p>
                    </div>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user2.png') }}" alt="user">
                            <span class="status offline"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Evie Ono</h6>
                        <p>Unity is strength</p>
                    </div>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user3.png') }}" alt="user">
                            <span class="status busy"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Madalyn Rascon</h6>
                        <p>Respect yourself if you would have others respect you.</p>
                    </div>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user4.png') }}" alt="user">
                            <span class="status active"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Mitsuko Heid</h6>
                        <p>I’m thankful.</p>
                    </div>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user1.png') }}" alt="user">
                            <span class="status offline"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Ezequiel Merideth</h6>
                        <p>Patience is bitter.</p>
                    </div>
                </div>
                <div class="chat-unit tab" data-tab="chatting">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user2.png') }}" alt="user">
                            <span class="status active"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>Jonnie Metoyer</h6>
                        <p>Genius is eternal patience.</p>
                    </div>
                </div>
            </div>

            <div class="messages-tab chatting">
                <div class="header row">
                    <h6 class="col-2 text-right tab" data-tab="chat"><i class="fas fa-chevron-left"></i></h6>
                    <h5 class="col-8 text-center">Clay Masse</h5>
                    <h6 class="col-2 text-left"><i class="fas fa-ellipsis-h"></i></h6>
                </div>
                <div class="body">
                    <ul>
                        <li class="friend">
                            <div class="row">
                                <div class="col-3">
                                    <div class="user-pic">
                                        <div>
                                            <img class="user" src="{{ url('images/user1.png') }}" alt="user">
                                            <span class="status active"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="msg">
                                        <p>Hello Jason, how are you, it's been a long time since we last met?</p>
                                        <span class="time">2:30 PM</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="self">
                            <div class="msg">
                                <p>Oh, hi Sarah I'm have got a new job now and is going great.</p>
                                <span class="time">2:31 PM</span>
                            </div>
                        </li>
                        <li class="self">
                            <div class="msg">
                                <p>How about you?</p>
                                <span class="time">2:31 PM</span>
                            </div>
                        </li>
                        <li class="friend">
                            <div class="row">
                                <div class="col-3">
                                    <div class="user-pic">
                                        <div>
                                            <img class="user" src="{{ url('images/user1.png') }}" alt="user">
                                            <span class="status active"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="msg">
                                        <p>Hello Jason, how are you, it's been a long time since we last met?</p>
                                        <span class="time">2:30 PM</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="input-group">
                    <input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
                    <div class="input-group-btn emojis">
                        <div class="dropup">
                            <button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown"><i class="far fa-smile"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0)">Action</a></li>
                                <li><a href="javascript:void(0)">Another action</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:void(0)">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="input-group-btn attachment">
                        <div class="fileupload btn  btn-default"><i class="far fa-file"></i>
                            <input type="file" class="upload">
                        </div>
                    </div>
                </div>
            </div>

            <div class="messages-tab messages">
                <div class="header">
                    <h5 class="text-center">Messages</h5>
                </div>
                <div class="chat-unit">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user1.png') }}" alt="user">
                            <span class="status active"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>
                            Clay Masse
                            <span>12:28 AM</span>
                        </h6>
                        <p class="main">message sent via your   market profile</p>
                        <p>Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet</p>
                    </div>
                </div>
                <div class="chat-unit">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user2.png') }}" alt="user">
                            <span class="status offline"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>
                            Evie Ono
                            <span>1 Feb</span>
                        </h6>
                        <p class="main">Pogody theme support</p>
                        <p>Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet</p>
                    </div>
                </div>
                <div class="chat-unit">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user3.png') }}" alt="user">
                            <span class="status busy"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>
                            Madalyn Rascon
                            <span>31 Jan</span>
                        </h6>
                        <p class="main">Congratulations from design nominees</p>
                        <p>Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet</p>
                    </div>
                </div>
                <div class="chat-unit">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user4.png') }}" alt="user">
                            <span class="status active"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>
                            Mitsuko Heid
                            <span>29 Jan</span>
                        </h6>
                        <p class="main">item support message</p>
                        <p>Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet</p>
                    </div>
                </div>
                <div class="chat-unit">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user1.png') }}" alt="user">
                            <span class="status offline"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>
                            Ezequiel Merideth
                            <span>27 Jan</span>
                        </h6>
                        <p class="main">Help with beavis contact form</p>
                        <p>Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet</p>
                    </div>
                </div>
                <div class="chat-unit">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user2.png') }}" alt="user">
                            <span class="status active"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>
                            Jonnie Metoyer
                            <span>19 Jan</span>
                        </h6>
                        <p class="main">Your uploaded theme is been selected</p>
                        <p>Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet</p>
                    </div>
                </div>
                <div class="chat-unit">
                    <div class="user-pic">
                        <div>
                            <img class="user" src="{{ url('images/user3.png') }}" alt="user">
                            <span class="status busy"></span>
                        </div>
                    </div>
                    <div class="user-name">
                        <h6>
                            Angelic Lauver
                            <span>13 Jan</span>
                        </h6>
                        <p class="main">A new rating has been received</p>
                        <p>Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet</p>
                    </div>
                </div>
            </div>

            <div class="messages-tab todo">
                <div class="header">
                    <h5 class="text-center">ToDo</h5>
                </div>
                <div class="chat-unit">
                    <div class="checkbox checkbox-primary">
                        <input id="todo1" type="checkbox" checked="">
                        <div class="checkbox-container primary">

                        </div>
                        <label for="todo1">
                            Record The First Episode
                        </label>
                    </div>
                </div>
                <div class="chat-unit">
                    <div class="checkbox checkbox-primary">
                        <input id="todo2" type="checkbox">
                        <div class="checkbox-container primary">

                        </div>
                        <label for="todo2">
                            Prepare The Conference Schedule
                        </label>
                    </div>
                </div>
                <div class="chat-unit">
                    <div class="checkbox checkbox-primary">
                        <input id="todo3" type="checkbox">
                        <div class="checkbox-container primary">

                        </div>
                        <label for="todo3">
                            Decide The Live Discussion Time
                        </label>
                    </div>
                </div>
                <div class="chat-unit">
                    <div class="checkbox checkbox-primary">
                        <input id="todo4" type="checkbox">
                        <div class="checkbox-container primary">

                        </div>
                        <label for="todo4">
                            Prepare For The Next Project
                        </label>
                    </div>
                </div>
                <div class="chat-unit">
                    <div class="checkbox checkbox-primary">
                        <input id="todo5" type="checkbox">
                        <div class="checkbox-container primary">

                        </div>
                        <label for="todo5">
                            Finish Up AngularJs Tutorial
                        </label>
                    </div>
                </div>
                <div class="chat-unit">
                    <div class="checkbox checkbox-primary">
                        <input id="todo6" type="checkbox">
                        <div class="checkbox-container primary">

                        </div>
                        <label for="todo6">
                            Finish Infinity Project
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Apps -->

        <div class="nav-tab tab-apps">
            <div class="row">
                <div class="col-4">
                    <a href="#">
                        <i class="fas fa-cloud text-info"></i>
                        <span>Weather</span>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        <i class="far fa-envelope-open text-success"></i>
                        <span>E-Mail</span>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        <i class="far fa-calendar-times text-primary"></i>
                        <span>Calender</span>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        <i class="far fa-map text-danger"></i>
                        <span>Map</span>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        <i class="fab fa-facebook-messenger text-warning"></i>
                        <span>Chat</span>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        <i class="fas fa-user-shield text-secondary"></i>
                        <span>Contact</span>
                    </a>
                </div>
            </div>
            <div class="footer">
                <a href="#">More</a>
            </div>
        </div>

        <!-- Site Map -->

        <div class="nav-tab tab-siteMap">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <ul>
                        <li class="active drop-down">
                            <a href="#">
                                <i class="fas fa-home fa-fw"></i>
                                Dashboard
                                <i class="drop fas fa-chevron-right"></i>
                            </a>
                            <ul class="sub-list">
                                <li class="active">
                                    <a href="#">Analytical</a>
                                </li>
                                <li>
                                    <a href="#">Demographic</a>
                                </li>
                                <li>
                                    <a href="#">Project</a>
                                </li>
                                <li>
                                    <a href="#">profile</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-flag fa-fw"></i>
                                Widgets
                                <span class="badge badge-pill badge-warning float-right">8</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-tint fa-fw"></i>
                                Documentation
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-md-6">
                    <ul>
                        <li class="drop-down">
                            <a href="#">
                                <i class="fas fa-shopping-bag fa-fw"></i>
                                E-Commerce
                                <span class="badge badge-pill badge-success float-right">Hot</span>
                            </a>
                            <ul class="sub-list">
                                <li>
                                    <a href="#">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#">Products</a>
                                </li>
                                <li>
                                    <a href="#">Product Detail</a>
                                </li>
                                <li>
                                    <a href="#">Add Product</a>
                                </li>
                                <li>
                                    <a href="#">Orders</a>
                                </li>
                                <li>
                                    <a href="#">Cart</a>
                                </li>
                                <li>
                                    <a href="#">Checkout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-6">
                    <ul>
                        <li class="drop-down">
                            <a href="#">
                                Latest Products
                            </a>
                            <div class="slick siteMap-slick text-center">
                                <div class="item">
                                    <img src="{{ url('images/chair1.jpg') }}">
                                    <span>square chair</span>
                                </div>
                                <div class="item">
                                    <img src="{{ url('images/chair.jpg') }}">
                                    <span>Circle chair</span>
                                </div>
                                <div class="item">
                                    <img src="{{ url('images/chair2.jpg') }}">
                                    <span>square chair</span>
                                </div>
                                <div class="item">
                                    <img src="{{ url('images/chair1.jpg') }}">
                                    <span>square chair</span>
                                </div>
                                <div class="item">
                                    <img src="{{ url('images/chair.jpg') }}">
                                    <span>Circle chair</span>
                                </div>
                                <div class="item">
                                    <img src="{{ url('images/chair2.jpg') }}">
                                    <span>square chair</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Notifications -->

        <div class="nav-tab tab-notifications">
            <h6>
                Notifications
                <a href="#">Clear All</a>
            </h6>
            <div class="notification">
                <div class="note-pic bg-success">
                    <i class="fas fa-flag-checkered"></i>
                </div>
                <div class="note-title">
                    <h6>
                        New subscription created
                        <span>2pm</span>
                    </h6>
                    <p>Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
                </div>
            </div>
            <div class="notification">
                <div class="note-pic bg-warning">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="note-title">
                    <h6>
                        Server #2 not responding
                        <span>1pm</span>
                    </h6>
                    <p>Some technical error occurred needs to be resolved.</p>
                </div>
            </div>
            <div class="notification">
                <div class="note-pic bg-primary">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="note-title">
                    <h6>
                        2 new messages
                        <span>4pm</span>
                    </h6>
                    <p>The last payment for your G Suite Basic subscription failed.</p>
                </div>
            </div>
            <div class="notification">
                <div class="note-pic">
                    <img src="{{ url('images/user3.png') }}" alt="user">
                </div>
                <div class="note-title">
                    <h6>
                        Sandy Doe
                        <span>1pm</span>
                    </h6>
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                </div>
            </div>
            <div class="footer">
                <a href="#">More</a>
            </div>
        </div>

        <!-- Profile -->

        <div class="nav-tab tab-profile">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-user"></i>
                        Profile
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-file"></i>
                        My Balance
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-envelope"></i>
                        Inbox
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        Setting
                    </a>
                </li>
            </ul>
            <ul>
                <li class="drop-down">
                    <a href="#">
                        <i class="fas fa-check text-success"></i>
                        Available
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fas fa-check text-success"></i>
                                Available
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-circle text-warning"></i>
                                Busy
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-minus-circle text-danger"></i>
                                Offline
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#"
                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off"></i>
                        Log Out
                    </a>

                    <form id="logout-form" action="#" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- End NavBar -->
