<div class="row">
    <div class="col-12 col-lg-3">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle border-0" src="{{ $user->avatar }}"
                         alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">{{ $user->name }}</h3>
                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.25"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>
                        {{ $user->phone }}
                    </li>
                    <li class="list-group-item">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.25"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                        {{ $user->address }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-9">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#password" data-toggle="tab">Password</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                        <form class="form-horizontal" action="{{ route('admin.user.profile.update', $user->id) }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <x-upload-file title="Avatar" name="avatar" :value="$user->avatar" />
                            <x-input title="Full Name" type="text" name="name" :value="$user->name" placeholder="" />
                            <x-input title="Username" type="text" name="username" :value="$user->username" placeholder="" />
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}"
                                       disabled>
                            </div>
                            <x-input title="Phone" type="text" name="phone" :value="$user->phone"
                                     placeholder="your phone" />
                            <x-input title="Address" type="text" name="address" :value="$user->address"
                                     placeholder="your address" />
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-check mr-1"></i> Update Profile
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="password">
                        <form class="form-horizontal" action="{{ route('admin.user.profile.password', $user->id) }}"
                              method="POST">
                            @csrf
                            @method('PUT')
                            <x-input title="Current Password" type="password" name="current_password" value=""
                                     placeholder="" />
                            <x-input title="New Password" type="password" name="password" value=""
                                     placeholder="" />
                            <x-input title="Password Confirmation" type="password" name="password_confirmation"
                                     value="" placeholder="" />
                            <div class="form-group row">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-check mr-1"></i> Update Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
