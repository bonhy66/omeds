<div class="dashboard-header">


    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="index.html">Equipments</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                
                
        </div>
        </li>
      
        </ul>
        </li>

        <li class="nav-item dropdown nav-user" style="list-style:none;">
            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" style="font-size:36px"></i> <span>{{ auth()->user()->name }}</span></i></a>
            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                <div class="nav-user-info">
                
                </div>
                <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="fas fa-power-off mr-2"></i>Logout</a>
            </div>
        </li>
        </ul>
</div>
</nav>
</div>
