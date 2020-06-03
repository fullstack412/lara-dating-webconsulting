@extends('layouts.app')

@section('content')
<div class="container">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a href="#message" class="nav-link active" data-toggle="tab">Messages</a>
    </li>
    <li class="nav-item">
      <a href="#spam" class="nav-link" data-toggle="tab">Spam</a>
    </li>
    <li class="nav-item">
      <a href="#universal" class="nav-link" data-toggle="tab">Universal Messages</a>
    </li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane fade show active" id="message">
      <div class="row">
        <div class="col-md-12">
          <div class="chat_container">
            <div class="job-box">
              <!-- <div class="job-box-filter">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <label>Show
                      <select name="datatable_length" class="form-control input-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select>
                      entries</label>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="filter-search-box text-right">
                      <label>Search:<input type="search" class="form-control input-sm" placeholder=""></label>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="inbox-message">
                <ul>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="unread">Unread</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="unread">Unread</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="pending">Pending Work</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="unread">Unread</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="business">Business</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="important">Important</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="unread">Unread</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="spam">
      <div class="row">
        <div class="col-md-12">
          <div class="chat_container">
            <div class="job-box">
              <!-- <div class="job-box-filter">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                    <label>Show 
                                    <select name="datatable_length" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    </select>
                                    entries</label>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="filter-search-box text-right">
                                            <label>Search:<input type="search" class="form-control input-sm" placeholder=""></label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
              <div class="inbox-message">
                <ul>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="unread">Unread</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="unread">Unread</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="pending">Pending Work</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="unread">Unread</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="business">Business</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="important">Important</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="unread">Unread</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="universal">
      <div class="row">
        <div class="col-md-12">
          <div class="chat_container">
            <div class="job-box">
              <!-- <div class="job-box-filter">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                    <label>Show 
                                    <select name="datatable_length" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    </select>
                                    entries</label>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="filter-search-box text-right">
                                            <label>Search:<input type="search" class="form-control input-sm" placeholder=""></label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
              <div class="inbox-message">
                <ul>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="unread">Unread</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="unread">Unread</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="pending">Pending Work</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="unread">Unread</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="business">Business</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="important">Important</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="message-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                      </div>
                      <div class="message-body">
                        <div class="message-body-heading">
                          <h5>Daniel Dock <span class="unread">Unread</span></h5>
                          <span>7 hours ago</span>
                        </div>
                        <p>Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore et dolor....</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection