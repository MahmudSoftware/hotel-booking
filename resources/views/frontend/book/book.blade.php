@extends('frontend.master')
@section('content')

<div style="margin-top: 100px;">

</div>

<div class="check-available">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inn-com-form">

                    <form class="col s12" action="{{ route('submit.book') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col s12 avail-title">
                                <h4>Book now</h4> </div>
                        </div>
                        <input type="hidden" name="hotelId" value="{{ $hotel->id }}">
                        <div class="row">
                           
                            <div class="input-field col s12 m4 l2">
                                <select name="seat">
                                    <option value="" disabled selected>No of seat</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            
                            <div class="input-field col s12 m4 l2">
                                <label for="from">Arrival Date</label>
                                <input type="date" id="" name="from">
                               
                            </div>
                            <div class="input-field col s12 m4 l2">
                                <input type="date" id="" name="to">
                                <label for="to">Departure Date</label>
                            </div>
                            <div class="input-field col s12 m4 l2">
                                <input type="submit" value="submit" class="form-btn"> </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!--END CHECK AVAILABILITY FORM-->
<div class="hom-com hom-com-block">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="hp-section">
                        <div class="hp-sub-tit hp-sub-tit-block">
                            <h4><span>Master Suite</span> Room</h4>
                            <p>Aliquam id tempor sem. Cras molestie risus et lobortis congue. Donec id est consectetur, cursus tellus at, mattis lacus.</p>
                        </div>
                        <div class="hp-amini detai-2p">
                            <p>Maecenas erat lorem, vulputate sed ex at, vehicula dignissim risus. Nullam non nisi congue elit cursus tempus. Nunc vel ante nec libero semper maximus. Donec cursus sed massa eget commodo. Phasellus semper neque id iaculis malesuada. Nulla efficitur dui vitae orci blandit tempor. Mauris sed venenatis nibh, sed sodales risus.</p>
                            <p>Nam sit amet tortor in elit fermentum consectetur et sit amet eros. Sed varius velit at eros tempor sodales. Fusce at enim at lectus sollicitudin pharetra at in risus. Donec ut semper turpis. Maecenas lobortis ante ut eros scelerisque, at semper augue ullamcorper.</p>
                        </div>
                    </div>
                    <div class="hp-section">
                        <div class="hp-sub-tit hp-sub-tit-block">
                            <h4><span>Aminitiese</span> Room</h4>
                            <p>Aliquam id tempor sem. Cras molestie risus et lobortis congue. Donec id est consectetur, cursus tellus at, mattis lacus.</p>
                        </div>
                        <div class="hp-amini hp-amini-block">
                            <ul>
                                <li><img src="images/icon/a1.png" alt=""> Elevator in building</li>
                                <li><img src="images/icon/a2.png" alt=""> Friendly workspace</li>
                                <li><img src="images/icon/a3.png" alt=""> Instant Book</li>
                                <li><img src="images/icon/a4.png" alt=""> Wireless Internet</li>
                                <li><img src="images/icon/a5.png" alt=""> Free parking on premises</li>
                                <li><img src="images/icon/a6.png" alt=""> Free parking on street</li>
                                <li><img src="images/icon/a7.png" alt=""> Elevator in building</li>
                                <li><img src="images/icon/a8.png" alt=""> Friendly workspace</li>
                                <li><img src="images/icon/a9.png" alt=""> Instant Book</li>
                                <li><img src="images/icon/a10.png" alt=""> Wireless Internet</li>
                                <li><img src="images/icon/a11.png" alt=""> Free parking on premises</li>
                                <li><img src="images/icon/a12.png" alt=""> Free parking on street</li>
                            </ul>
                        </div>
                    </div>
                    <div class="hp-section">
                        <div class="hp-sub-tit hp-sub-tit-block">
                            <h4><span>Overview</span> Room</h4>
                            <p>Aliquam id tempor sem. Cras molestie risus et lobortis congue. Donec id est consectetur, cursus tellus at, mattis lacus.</p>
                        </div>
                        <div class="hp-over">
                            <ul class="nav nav-tabs hp-over-nav hp-over-nav-block">
                                <li class="active">
                                    <a data-toggle="tab" href="#home"><img src="images/icon/a9.png" alt=""> <span class="tab-hide">Food Menu</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#menu1"><img src="images/icon/a8.png" alt=""> <span class="tab-hide">Overview</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#menu2"><img src="images/icon/a10.png" alt=""> <span class="tab-hide">Facilities</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#menu3"><img src="images/icon/a11.png" alt=""> <span class="tab-hide">Other Features</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active tab-space">
                                    <div class="res-menu res-menu-block"> <img src="images/menu/1.jpg" alt="">
                                        <h3>salted fried chicken <span>$45</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
                                    <div class="res-menu res-menu-block"> <img src="images/menu/2.jpg" alt="">
                                        <h3>salted fried chicken <span>$64</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
                                    <div class="res-menu res-menu-block"> <img src="images/menu/3.jpg" alt="">
                                        <h3>salted fried chicken <span>$45</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
                                    <div class="res-menu res-menu-block"> <img src="images/menu/4.jpg" alt="">
                                        <h3>salted fried chicken <span>$64</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
                                    <div class="res-menu res-menu-block"> <img src="images/menu/5.jpg" alt="">
                                        <h3>salted fried chicken <span>$45</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
                                    <div class="res-menu res-menu-block"> <img src="images/menu/6.jpg" alt="">
                                        <h3>salted fried chicken <span>$64</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
                                    <div class="res-menu res-menu-block"> <img src="images/menu/7.jpg" alt="">
                                        <h3>salted fried chicken <span>$45</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
                                    <div class="res-menu res-menu-block mar-bot-0"> <img src="images/menu/8.jpg" alt="">
                                        <h3>salted fried chicken <span>$64</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
                                </div>
                                <div id="menu1" class="tab-pane fade tab-space">
                                    <div class="hp-main-overview hp-main-overview-block">
                                        <ul>
                                            <li>Occupancy: <span>Max four Persons</span>
                                            </li>
                                            <li>Size : <span>800 sq. feet</span>
                                            </li>
                                            <li>View : <span>Sea or Garden view</span>
                                            </li>
                                            <li>Room Service : <span>Available per request</span>
                                            </li>
                                            <li>Terraces : <span>Balcony</span>
                                            </li>
                                            <li>Free Pickup Facility : <span>Yes</span>
                                            </li>
                                            <li>Internet Free <span>Yes</span>
                                            </li>
                                            <li>Gym : <span class="ov-yes">Yes</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade tab-space">
                                    <div class="row">
                                        <div class="col-md-6 hp-ov-fac"> <img src="images/hotel/1.jpg" alt=""> </div>
                                        <div class="col-md-6">
                                            <p>Maecenas erat lorem, vulputate sed ex at, vehicula dignissim risus. Nullam non nisi congue elit cursus tempus. Nunc vel ante nec libero semper maximus. Donec cursus sed massa eget commodo. Phasellus semper neque id iaculis malesuada. Nulla efficitur dui vitae orci blandit tempor. Mauris sed venenatis nibh, sed sodales risus.</p>
                                            <p>Nam sit amet tortor in elit fermentum consectetur et sit amet eros. Sed varius velit at eros tempor sodales. Fusce at enim at lectus sollicitudin pharetra at in risus. Donec ut semper turpis. Maecenas lobortis ante ut eros scelerisque, at semper augue ullamcorper.</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu3" class="tab-pane fade tab-space">
                                    <p>Maecenas erat lorem, vulputate sed ex at, vehicula dignissim risus. Nullam non nisi congue elit cursus tempus. Nunc vel ante nec libero semper maximus. Donec cursus sed massa eget commodo. Phasellus semper neque id iaculis malesuada. Nulla efficitur dui vitae orci blandit tempor. Mauris sed venenatis nibh, sed sodales risus.</p>
                                    <p>Nam sit amet tortor in elit fermentum consectetur et sit amet eros. Sed varius velit at eros tempor sodales. Fusce at enim at lectus sollicitudin pharetra at in risus. Donec ut semper turpis. Maecenas lobortis ante ut eros scelerisque, at semper augue ullamcorper.</p>
                                    <p>Maecenas erat lorem, vulputate sed ex at, vehicula dignissim risus. Nullam non nisi congue elit cursus tempus. Nunc vel ante nec libero semper maximus. Donec cursus sed massa eget commodo. Phasellus semper neque id iaculis malesuada. Nulla efficitur dui vitae orci blandit tempor. Mauris sed venenatis nibh, sed sodales risus.</p>
                                    <p>Nam sit amet tortor in elit fermentum consectetur et sit amet eros. Sed varius velit at eros tempor sodales. Fusce at enim at lectus sollicitudin pharetra at in risus. Donec ut semper turpis. Maecenas lobortis ante ut eros scelerisque, at semper augue ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hp-section">
                        <div class="hp-sub-tit hp-sub-tit-block">
                            <h4><span>Photo Gallery</span> Master Suite</h4>
                            <p>Aliquam id tempor sem. Cras molestie risus et lobortis congue. Donec id est consectetur, cursus tellus at, mattis lacus.</p>
                        </div>
                        <div class="">
                            <div class="h-gal">
                                <ul>
                                    <li><img class="materialboxed" data-caption="Hotel Captions" src="images/room/1.jpg" alt="">
                                    </li>
                                    <li><img class="materialboxed" data-caption="Hotel Captions" src="images/room/2.jpg" alt="">
                                    </li>
                                    <li><img class="materialboxed" data-caption="Hotel Captions" src="images/room/3.jpg" alt="">
                                    </li>
                                    <li><img class="materialboxed" data-caption="Hotel Captions" src="images/room/4.jpg" alt="">
                                    </li>
                                    <li><img class="materialboxed" data-caption="Hotel Captions" src="images/room/5.jpg" alt="">
                                    </li>
                                    <li><img class="materialboxed" data-caption="Hotel Captions" src="images/room/6.jpg" alt="">
                                    </li>
                                    <li><img class="materialboxed" data-caption="Hotel Captions" src="images/room/1.jpg" alt="">
                                    </li>
                                    <li><img class="materialboxed" data-caption="Hotel Captions" src="images/room/2.jpg" alt="">
                                    </li>
                                    <li><img class="materialboxed" data-caption="Hotel Captions" src="images/room/3.jpg" alt="">
                                    </li>
                                    <li><img class="materialboxed" data-caption="Hotel Captions" src="images/room/4.jpg" alt="">
                                    </li>
                                    <li><img class="materialboxed" data-caption="Hotel Captions" src="images/room/5.jpg" alt="">
                                    </li>
                                    <li><img class="materialboxed" data-caption="Hotel Captions" src="images/room/6.jpg" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="hp-section">
                        <div class="hp-sub-tit hp-sub-tit-block">
                            <h4><span>Ratings</span> Suite Room</h4>
                            <p>Aliquam id tempor sem. Cras molestie risus et lobortis congue. Donec id est consectetur, cursus tellus at, mattis lacus.</p>
                        </div>
                        <div class="hp-review">
                            <div class="hp-review-left">
                                <div class="hp-review-left-1">
                                    <div class="hp-review-left-11">Excellent</div>
                                    <div class="hp-review-left-12">
                                        <div class="hp-review-left-13"></div>
                                    </div>
                                </div>
                                <div class="hp-review-left-1">
                                    <div class="hp-review-left-11">Good</div>
                                    <div class="hp-review-left-12">
                                        <div class="hp-review-left-13 hp-review-left-Good"></div>
                                    </div>
                                </div>
                                <div class="hp-review-left-1">
                                    <div class="hp-review-left-11">Satisfactory</div>
                                    <div class="hp-review-left-12">
                                        <div class="hp-review-left-13 hp-review-left-satis"></div>
                                    </div>
                                </div>
                                <div class="hp-review-left-1">
                                    <div class="hp-review-left-11">Below Average</div>
                                    <div class="hp-review-left-12">
                                        <div class="hp-review-left-13 hp-review-left-below"></div>
                                    </div>
                                </div>
                                <div class="hp-review-left-1">
                                    <div class="hp-review-left-11">Below Average</div>
                                    <div class="hp-review-left-12">
                                        <div class="hp-review-left-13 hp-review-left-poor"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hp-review-right">
                                <h5>Overall Ratings</h5>
                                <p><span>4.5 <i class="fa fa-star" aria-hidden="true"></i></span> based on 242 reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="hp-section">
                        <div class="hp-sub-tit hp-sub-tit-block">
                            <h4><span>USER</span> REVIEWS</h4>
                            <p>Aliquam id tempor sem. Cras molestie risus et lobortis congue. Donec id est consectetur, cursus tellus at, mattis lacus.</p>
                        </div>
                        <div class="lp-ur-all-rat lp-ur-all-rat-block">
                            <ul>
                                <li>
                                    <div class="lr-user-wr-img"> <img src="images/users/2.png" alt=""> </div>
                                    <div class="lr-user-wr-con lr-user-wr-con-block">
                                        <h6>Jacob Michael <span>4.5 <i class="fa fa-star" aria-hidden="true"></i></span></h6> <span class="lr-revi-date">19th January, 2017</span>
                                        <p>Good service... nice and clean rooms... very good spread of buffet and friendly staffs. Located in heart of city and easy to reach any places in a short distance. </p>
                                        <ul>
                                            <li><a href="#!"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="lr-user-wr-img"> <img src="images/users/3.png" alt=""> </div>
                                    <div class="lr-user-wr-con lr-user-wr-con-block">
                                        <h6>Gabriel Elijah <span>5.0 <i class="fa fa-star" aria-hidden="true"></i></span></h6> <span class="lr-revi-date">21th July, 2016</span>
                                        <p>The hotel is clean, convenient and good value for money. Staff are courteous and helpful. However, they need more training to be efficient.</p>
                                        <ul>
                                            <li><a href="#!"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="lr-user-wr-img"> <img src="images/users/4.png" alt=""> </div>
                                    <div class="lr-user-wr-con lr-user-wr-con-block">
                                        <h6>Luke Mason <span>4.2 <i class="fa fa-star" aria-hidden="true"></i></span></h6> <span class="lr-revi-date">21th March, 2018</span>
                                        <p>Too much good experience with hospitality, cleanliness, facility and privacy and good value for money... To keep mind relaxing... Keep it up... </p>
                                        <ul>
                                            <li><a href="#!"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="lr-user-wr-img"> <img src="images/users/5.png" alt=""> </div>
                                    <div class="lr-user-wr-con lr-user-wr-con-block">
                                        <h6>Kevin Jack <span>3.6 <i class="fa fa-star" aria-hidden="true"></i></span></h6> <span class="lr-revi-date">21th Aug, 2018</span>
                                        <p>I am deaf. Bar is closed and Restaurant is okay ... It should be more decoration as beautiful. I enjoyed swimming top floor and weather is good</p>
                                        <ul>
                                            <li><a href="#!"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="lr-user-wr-img"> <img src="images/users/6.png" alt=""> </div>
                                    <div class="lr-user-wr-con lr-user-wr-con-block">
                                        <h6>Nicholas Tyler <span>4.4 <i class="fa fa-star" aria-hidden="true"></i></span></h6> <span class="lr-revi-date">21th Aug, 2018</span>
                                        <p>Overall, it was good experience. Rooms were spacious and they were kept very clean and tidy. Room service was good.</p>
                                        <ul>
                                            <li><a href="#!"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                            <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul> <a class="waves-effect waves-light wr-re-btn" href="!#" data-toggle="modal" data-target="#commend"><i class="fa fa-edit"></i> Write Review</a> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!--=========================================-->
                <div class="hp-call hp-right-com hp-right-com-block">
                    <div class="hp-call-in"> <img src="images/icon/dbc4.png" alt="">
                        <h3><span>Check Availability. Call us!</span> +01 4214 4214</h3> <small>We are available 24/7 Monday to Sunday</small> <a href="#">Call Now</a> </div>
                </div>
                <!--=========================================-->
                <!--=========================================-->
                <div class="hp-book hp-right-com hp-right-com-block">
                    <div class="hp-book-in">
                        <button class="like-button"><i class="fa fa-heart-o"></i> Bookmark this listing</button> <span>159 people bookmarked this place</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i> Share</a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i> Tweet</a>
                            </li>
                            <li><a href="#"><i class="fa fa-google-plus"></i> Share</a>
                            </li>
                            <!-- <li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a></li> -->
                        </ul>
                    </div>
                </div>
                <!--=========================================-->
                <!--=========================================-->
                <div class="hp-card hp-right-com hp-right-com-block">
                    <div class="hp-card-in">
                        <h3>We Accept</h3> <span>159 people bookmarked this place</span> <img src="images/card.png" alt=""> </div>
                </div>
                <!--=========================================-->
            </div>
        </div>
    </div>
</div>
<div class="">
    <div>
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
    </div>
</div>				
</section>
@endsection