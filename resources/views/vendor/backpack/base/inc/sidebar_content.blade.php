<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li class="treeview">
    <a href="#"><i class="fa  fa-pencil-square-o"></i> <span>Articles</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('article') }}"><i class="fa fa-newspaper-o"></i> Articles</a></li>
        <li><a href="{{ backpack_url('articlecategory') }}"><i class="fa fa-list"></i>Categories</a></li>
    </ul>
</li>
<li><a href="{{ backpack_url('application') }}"><i class="fa fa-file-archive-o"></i> <span> Application </span></a></li>
<li><a href="{{ backpack_url('slider') }}"><i class="fa fa-slideshare"></i> <span> Slider </span></a></li>
<li><a href="{{ backpack_url('faq') }}"><i class="fa fa-question"></i> <span> FAQ </span></a></li>
<li><a href="{{ backpack_url('partner') }}"><i class="fa fa-users"></i> <span> Our Partners </span></a></li>
<li><a href="{{ backpack_url('feedback') }}"><i class="fa fa-star-half-o"></i> <span> Feedbacks </span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li>
<li><a href="{{ backpack_url('page') }}"><i class="fa fa-file"></i> <span> Pages </span></a></li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}'><i class='fa fa-cog'></i> <span>Settings</span></a></li>

@if(backpack_user()->id == 1)
<li><a href="{{ backpack_url('admin') }}"><i class="fa fa-user"></i> <span>Admins</span></a></li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/log') }}'><i class='fa fa-terminal'></i> <span>Logs</span></a></li>
@endif