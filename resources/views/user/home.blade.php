@extends('frontend.master')
@section('content')
<div class="dashboard">
    <div class="db-left">
        <div class="db-left-1">
            <h4>Jana Novakova</h4>
            <p>Newyork, United States</p>
        </div>
        <div class="db-left-2">
            <ul>
                <li>
                    <a href="dashboard.html"><img src="images/icon/db1.png" alt="" /> All</a>
                </li>
                <li>
                    <a href="db-booking.html"><img src="images/icon/db2.png" alt="" /> My Bookings</a>
                </li>
                <li>
                    <a href="db-new-booking.html"><img src="images/icon/db3.png" alt="" /> New Booking</a>
                </li>
                <li>
                    <a href="db-event.html"><img src="images/icon/db4.png" alt="" /> Event</a>
                </li>
                <li>
                    <a href="db-activity.html"><img src="images/icon/db5.png" alt="" /> Activity</a>
                </li>
                <li>
                    <a href="db-profile.html"><img src="images/icon/db7.png" alt="" /> Profile</a>
                </li>
                <li>
                    <a href="#"><img src="images/icon/db6.png" alt="" /> Payments</a>
                </li>
                <li>
                    <a href="#"><img src="images/icon/db8.png" alt="" /> Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="db-cent">
        <div class="db-cent-1">
            <p>Hi Jana Novakova,</p>
            <h4>Welcome to your dashboard</h4> </div>
        <div class="db-cent-2">
            <div class="db-2-main-1">
                <div class="db-2-main-2"> <img src="images/icon/dbc5.png" alt=""> <span>My Bookings</span>
                    <p>All the Lorem Ipsum generators on the</p>
                    <h2>12</h2> </div>
            </div>
            <div class="db-2-main-1">
                <div class="db-2-main-2"> <img src="images/icon/dbc6.png" alt=""> <span>Events</span>
                    <p>All the Lorem Ipsum generators on the</p>
                    <h2>04</h2> </div>
            </div>
            <div class="db-2-main-1">
                <div class="db-2-main-2"> <img src="images/icon/dbc3.png" alt=""> <span>Payment</span>
                    <p>All the Lorem Ipsum generators on the</p>
                    <h2>16</h2> </div>
            </div>
        </div>
        <div class="db-cent-3">
            <div class="db-cent-table db-com-table">
                <div class="db-title">
                    <h3><img src="images/icon/dbc5.png" alt=""/> My Bookings</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                </div>
                <table class="bordered responsive-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Arrival</th>
                            <th>Departure</th>
                            <th>Members</th>
                            <th>Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Alvin</td>
                            <td>+01 4215 3521</td>
                            <td><span class="db-tab-hi">New york,</span>USA</td>
                            <td>12may</td>
                            <td>20may</td>
                            <td>12</td>
                            <td><a href="#" class="db-success">Success</a>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Liam</td>
                            <td>+01 2484 6521</td>
                            <td><span class="db-tab-hi">Bangalore,</span>India</td>
                            <td>18apr</td>
                            <td>24apr</td>
                            <td>12</td>
                            <td><a href="#" class="db-success">Success</a>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Logan</td>
                            <td>+01 6524 6521</td>
                            <td><span class="db-tab-hi">Los Angeles,</span>USA</td>
                            <td>05dec</td>
                            <td>12dec</td>
                            <td>12</td>
                            <td><a href="#" class="db-not-success">Pending</a>
                            </td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Michael</td>
                            <td>+01 3652 1425</td>
                            <td><span class="db-tab-hi">Bristol,</span>UK</td>
                            <td>14jen</td>
                            <td>24jen</td>
                            <td>12</td>
                            <td><a href="#" class="db-not-success">Pending</a>
                            </td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Alvin</td>
                            <td>+01 4215 3521</td>
                            <td><span class="db-tab-hi">New york,</span>USA</td>
                            <td>12may</td>
                            <td>20may</td>
                            <td>12</td>
                            <td><a href="#" class="db-success">Success</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="db-cent-3">
            <div class="db-cent-table db-com-table">
                <div class="db-title">
                    <h3><img src="images/icon/dbc6.png" alt=""/> My Events</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                </div>
                <table class="bordered responsive-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Arrival</th>
                            <th>Departure</th>
                            <th>Members</th>
                            <th>Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Alvin</td>
                            <td>+01 4215 3521</td>
                            <td><span class="db-tab-hi">New york,</span>USA</td>
                            <td>12may</td>
                            <td>20may</td>
                            <td>12</td>
                            <td><a href="#" class="db-success">Success</a>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Liam</td>
                            <td>+01 2484 6521</td>
                            <td><span class="db-tab-hi">Bangalore,</span>India</td>
                            <td>18apr</td>
                            <td>24apr</td>
                            <td>12</td>
                            <td><a href="#" class="db-success">Success</a>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Logan</td>
                            <td>+01 6524 6521</td>
                            <td><span class="db-tab-hi">Los Angeles,</span>USA</td>
                            <td>05dec</td>
                            <td>12dec</td>
                            <td>12</td>
                            <td><a href="#" class="db-not-success">Pending</a>
                            </td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Michael</td>
                            <td>+01 3652 1425</td>
                            <td><span class="db-tab-hi">Bristol,</span>UK</td>
                            <td>14jen</td>
                            <td>24jen</td>
                            <td>12</td>
                            <td><a href="#" class="db-not-success">Pending</a>
                            </td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Alvin</td>
                            <td>+01 4215 3521</td>
                            <td><span class="db-tab-hi">New york,</span>USA</td>
                            <td>12may</td>
                            <td>20may</td>
                            <td>12</td>
                            <td><a href="#" class="db-success">Success</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="db-cent-3">
            <div class="db-cent-acti">
                <div class="db-title">
                    <h3><img src="images/icon/dbc1.png" alt=""/> My Activity</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                </div>
                <ul>
                    <li>
                        <div class="db-cent-wr-img"> <img src="images/users/3.png" alt=""> </div>
                        <div class="db-cent-wr-con">
                            <h6>Hotel Booking Canceled</h6> <span class="lr-revi-date">21th July, 2016</span>
                            <p>The hotel is clean, convenient and good value for money. Staff are courteous and helpful. However, they need more training to be efficient.</p>
                            <ul>
                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="db-cent-wr-img"> <img src="images/users/3.png" alt=""> </div>
                        <div class="db-cent-wr-con">
                            <h6>Hotel Payment Success</h6> <span class="lr-revi-date">08th August, 2016</span>
                            <p>The hotel is clean, convenient and good value for money. Staff are courteous and helpful. However, they need more training to be efficient.</p>
                            <ul>
                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="db-righ">
        <h4>Notifications(18)</h4>
        <ul>
            <li>
                <a href="#!"> <img src="images/icon/dbr1.jpg" alt="">
                    <h5>Joseph, write a review</h5>
                    <p>All the Lorem Ipsum generators on the</p> <span>2 hours ago</span> </a>
            </li>
            <li>
                <a href="#!"> <img src="images/icon/dbr2.jpg" alt="">
                    <h5>14 New Messages</h5>
                    <p>All the Lorem Ipsum generators on the</p> <span>4 hours ago</span> </a>
            </li>
            <li>
                <a href="#!"> <img src="images/icon/dbr3.jpg" alt="">
                    <h5>Ads expairy soon</h5>
                    <p>All the Lorem Ipsum generators on the</p> <span>10 hours ago</span> </a>
            </li>
            <li>
                <a href="#!"> <img src="images/icon/dbr4.jpg" alt="">
                    <h5>Post free ads - today only</h5>
                    <p>All the Lorem Ipsum generators on the</p> <span>12 hours ago</span> </a>
            </li>
            <li>
                <a href="#!"> <img src="images/icon/dbr5.jpg" alt="">
                    <h5>listing limit increase</h5>
                    <p>All the Lorem Ipsum generators on the</p> <span>14 hours ago</span> </a>
            </li>
            <li>
                <a href="#!"> <img src="images/icon/dbr6.jpg" alt="">
                    <h5>mobile app launch</h5>
                    <p>All the Lorem Ipsum generators on the</p> <span>18 hours ago</span> </a>
            </li>
            <li>
                <a href="#!"> <img src="images/icon/dbr7.jpg" alt="">
                    <h5>Setting Updated</h5>
                    <p>All the Lorem Ipsum generators on the</p> <span>20 hours ago</span> </a>
            </li>
            <li>
                <a href="#!"> <img src="images/icon/dbr8.jpg" alt="">
                    <h5>Increase listing viewers</h5>
                    <p>All the Lorem Ipsum generators on the</p> <span>2 days ago</span> </a>
            </li>
        </ul>
    </div>
</div>
<!--END DASHBOARD SECTION-->
<!--TOP SECTION-->
<div class="hom-footer-section">
    <div class="container">
        <div class="row">
            <div class="foot-com foot-1">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <div class="foot-com foot-2">
                <h5>Phone: (+404) 142 21 23 78</h5> </div>
            <div class="foot-com foot-3">
                <!--<a class="waves-effect waves-light" href="#">online room booking</a>--><a class="waves-effect waves-light" href="booking.html">room reservation</a> </div>
            <div class="foot-com foot-4">
                <a href="#"><img src="images/card.png" alt="" />
                </a>
            </div>
        </div>
    </div>
</div>
</section>
@endsection