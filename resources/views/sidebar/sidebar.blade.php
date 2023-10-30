<section>
    <div class="AppSider__sider___2QGX3 ant-layout-sider"
        style="flex: 0 0 280px; max-width: 280px; min-width: 280px; width: 280px;">
        <div class="ant-layout-sider-children"><a class="AppSider__logoWrapper___2kvqF"
                href="{{route('booking.index')}}">
                <img src="{{URL::asset('/images/calibee_logo.png')}}" style="width: auto; height: 27px;">
            </a>
            <div class="AppSider__scrollContainer___1CDYa">
                <ul class="ant-menu ant-menu-vertical ant-menu-dark ant-menu-root" role="menu"
                    aria-activedescendant="" tabindex="0">
                    <li class="ant-menu-item" role="menuitem" aria-selected="false">
                        <span> 
                            <span><img src="{{URL::asset('/images/Category.png')}}"> </span>
                            <span class="MenuLabel__menuLabel___1ZtQ6">Dashboard</span>
                        </span>
                    </li>
                    <li class="{{ Request::is('booking') ? 'ant-menu-item-selected' : '' }} ant-menu-item" role="menuitem" aria-selected="true">
                        <a style="{{ Request::is('booking') ? 'color: #005339 !important;' : '' }}" href=" {{ route('booking.index') }}">
                            <span> 
                                @php
                                    $imagePath = Request::is('booking*') ? 'Paper.svg' : 'Paper.png';
                                    $imageUrl = asset('images/' . $imagePath);
                                @endphp
                                <span><img src="{{URL::asset($imageUrl)}}"> </span>
                                <span class="MenuLabel__menuLabel___1ZtQ6">Bookings</span>
                            </span>
                        </a>
                    </li>
                    <li class="ant-menu-item" role="menuitem" aria-selected="false">
                        <a href="">
                            <span> 
                                <span><img src="{{URL::asset('/images/Profile.png')}}" > </span>
                                <span class="MenuLabel__menuLabel___1ZtQ6">Staffs</span>
                            </span>
                        </a>
                    </li>
                    <li class="ant-menu-item" role="menuitem" aria-selected="false">
                        <span> 
                            <span><img src="{{URL::asset('/images/2 User.svg')}}"> </span>
                            <span class="MenuLabel__menuLabel___1ZtQ6">Groups</span>
                        </span>
                    </li>
                    <li class="ant-menu-item" role="menuitem" aria-selected="false">
                        <span> 
                            <span><img src="{{URL::asset('/images/Shield Done.svg')}}"> </span>
                            <span class="MenuLabel__menuLabel___1ZtQ6">Policies</span>
                        </span>
                    </li>
                    <li class="ant-menu-item" role="menuitem" aria-selected="false">
                        <span>
                            <span><img src="{{URL::asset('/images/Setting.svg')}}"> </span>
                            <span class="MenuLabel__menuLabel___1ZtQ6">Settings</span>
                        </span>
                    </li>
                    <li class="{{ Request::is('company') ? 'ant-menu-item-selected' : '' }} ant-menu-item" role="menuitem" aria-selected="false">
                        <a style="{{ Request::is('company') ? 'color: #005339 !important;' : '' }}" href=" {{ route('company.index') }} ">
                            <span>
                                @php
                                    $imagePath = Request::is('company*') ? 'solar_buildings-bold.svg' : 'solar_buildings-outline.svg';
                                    $imageUrl = asset('images/' . $imagePath);
                                @endphp
                                <span><img src="{{URL::asset($imageUrl)}}"></span>
                                <span class="MenuLabel__menuLabel___1ZtQ6">Company profile</span>
                            </span>
                        </a>
                    </li>
                    <li class="ant-menu-item" role="menuitem" aria-selected="false">
                        <span>
                            <span><img src="{{URL::asset('/images/octicon_question-24.svg')}}"></span>
                            <span class="MenuLabel__menuLabel___1ZtQ6">Help Center</span></span>
                        </span>
                    </li>
                    <li class="ant-menu-item" role="menuitem" aria-selected="false">
                        <a href="/">
                            <span>
                                <span><img src="{{URL::asset('/images/Logout.svg')}}"> </span>
                                <span class="MenuLabel__menuLabel___1ZtQ6">Logout</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="AppSider__collapseButton___2rwTh" tabindex="0" role="button">
                <div class="AppSider__collapseIcon___1w1cs" style="background-color: none;">
                    <div style="display: flex;"><img src="{{URL::asset('/images/Group.svg')}}" alt=""></div>
                </div>
                <span style="color: #1a1a1a;" class="AppSider__collapseLabel___fCHfh">Collapse menu</span>
            </div>
        </div>
    </div>
</section>