<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                <!-- dashboard -->

                  <li>

                      <a href="{{ URL::route('dashboard') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  {{-- Our Mission --}}
                  <li>

                      <a href="{{ URL::route('home.ourMission') }}">
                          <i class="fa fa-tasks"></i>
                          <span>Our Mission</span>
                      </a>
                  </li>

                  {{-- Members list --}}
                  <li>
                      <a href="{{ URL::route('members.all') }}">
                          <i class="fa fa-users"></i>
                          <span>Members List</span>
                      </a>
                  </li>

                  {{-- All news --}}
                  <li>

                      <a href="{{ URL::route('all.news') }}">
                          <i class="fa fa-tasks"></i>
                          <span>All News</span>
                      </a>
                  </li>

                  {{-- Add News --}}
                  <li>

                      <a href="{{ URL::route('add.news') }}">
                          <i class="fa fa-tasks"></i>
                          <span>Add News</span>
                      </a>
                  </li>
                  









              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>