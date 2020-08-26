<ul class="navbar-nav ml-auto">
			<div class="user-panel mt-3 pb-3 mb-3 d-flex" style="color: white;top: 20px;height: 75px;font-size: 28px;">
				<span>{{$user->fullname}}</span>
			</div>

			<li class="nav-item dropdown" >
				<a class="nav-link" data-toggle="dropdown" href="#">
					<img src="/storeimage/{{ $user->user_id }}" width="50" height="50" class="imglogin"
					style="
								width: 80px;
								height: 80px;
								margin-top: 10px;
								"
						>

				</a>
				

				<div class="dropdown-menu dropdown-menu-right" style="background-color:white;">
					<a href="/logout" class="dropdown-item" style="background-color:white;">
						<!-- Message Start -->
							<i class="fas fa-sign-out-alt" ></i>
							<!-- <img srv="{{asset('image/logoout.png')}}"> -->
							Logout
						<!-- Message End -->
					</a>
				</div>
			</li>
		</ul>