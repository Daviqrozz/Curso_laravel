            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img
                  src={{Vite::asset('resources/images/img/user2-160x160.jpg')}}
                  class="user-image rounded-circle shadow"
                  alt="User Image"
                />
                <span class="d-none d-md-inline">{{auth()->user()->name}}</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                  <img
                    src={{Vite::asset('resources/images/img/user2-160x160.jpg')}}
                    class="rounded-circle shadow"
                    alt="User Image"
                  />
                  <p>
                    {{auth()->user()->name}}
                    <small>Member since {{auth()->user()->created_at}}</small>
                  </p>
                </li>
                <li class="user-body">
                
                  <div class="row">
                   
                  </div>
               
                </li>
              
                <div class="d-flex justify-content-between">
                     <li class="user-footer">
                        <button class="btn btn-default btn-flat"><a href="#" class="btn btn-default btn-flat">Profile</a></button>
                    </li>
                    <li>
                      <form action="{{route('logout')}}" method="POST">
                      @csrf
                        <button class="btn btn-default btn-flat" type="submit"><li class="btn btn-default btn-flat">Logout</li></button>
                      </form>
                    </li>
                </div>
                
                <!--end::Menu Footer-->
              </ul>
            </li>