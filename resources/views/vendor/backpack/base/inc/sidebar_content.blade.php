<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

{{--<li><a href="{{ backpack_url('menu') }}"><i class="fa fa-dashboard"></i> <span>Меню</span></a></li>--}}

<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>Меню</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('menu') }}"><i class="fa fa-list"></i> <span>Разделы меню</span></a></li>
        <li><a href="{{ backpack_url('podmenu') }}"><i class="fa fa-list"></i> <span>Подразделы меню</span></a></li>

    </ul>
</li>

<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>Трек</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('treck') }}"><i class="fa fa-list"></i> <span>Трек</span></a></li>
        <li><a href="{{ backpack_url('podtreck') }}"><i class="fa fa-list"></i> <span>разделы трек</span></a></li>
        <li><a href="{{ backpack_url('treklocation') }}"><i class="fa fa-list"></i> <span>Локаль</span></a></li>

    </ul>
</li>
<li><a href="{{ backpack_url('predlog') }}"><i class="fa fa-dashboard"></i> <span>Особые предложения</span></a></li>
<li><a href="{{ backpack_url('news') }}"><i class="fa fa-dashboard"></i> <span>Новости</span></a></li>
<li><a href="{{ backpack_url('galery') }}"><i class="fa fa-dashboard"></i> <span>Галерея</span></a></li>

<li><a href="{{ backpack_url('tovar') }}"><i class="fa fa-dashboard"></i> <span>Товар</span></a></li>