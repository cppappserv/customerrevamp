<ul class="navbar-nav ml-auto">
			<div class="user-panel mt-3 pb-3 mb-3 d-flex" style="color: white;top: 20px;height: 75px;font-size: 28px;">
				<span>{{$user->fullname}}</span>
			</div>

			<li class="nav-item dropdown">
				<a class="nav-link" data-toggle="dropdown" href="#">
					<img src="/storeimage/{{ $user->user_id }}" width="50" height="50" class="imglogin"
					style="
								width: 80px;
								height: 80px;
								margin-top: 10px;
								"
						>

				</a>
				<div class="dropdown-menu dropdown-menu-right" >
					<a href="/logout" class="dropdown-item" >
						<!-- Message Start -->
						<div class="media">
							<button type="button" class="btn btn-secondary" style="background: #818882;"><i class="fas fa-sign-out-alt fa-5x" style="background: #818882"></i></button>
						</div>
						<!-- Message End -->
					</a>
				</div>
			</li>
		</ul>