@if(Request::path() == 'frontadmin')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Dashboard</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="index.html">Home</a></li>
        <li><span>Dashboard</span></li>
    </ul>
</div>
@elseif(Request::path() == 'frontadmin/home')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Pages</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="{{url('frontadmin')}}">Home</a></li>
        @if(Request::get('id') == 1)   
        <li><span>Home</span></li>
        @elseif(Request::get('id') == 2)   
        <li><span>About</span></li>
        @elseif(Request::get('id') == 3)   
        <li><span>Conatct</span></li>
        @elseif(Request::get('id') == 4)   
        <li><span>{{__('messages.Mobile_Accessories')}}</span></li>
        @elseif(Request::get('id') == 5)   
        <li><span>{{__('messages.Recharges')}}</span></li>
        @elseif(Request::get('id') == 6)   
        <li><span>{{__('messages.Photocopies')}}</span></li>
        @elseif(Request::get('id') == 7)   
        <li><span>{{__('messages.Electricals_Servies')}}</span></li>
        @elseif(Request::get('id') == 8)   
        <li><span>{{__('messages.Office_Use')}}</span></li>
        @elseif(Request::get('id') == 9)   
        <li><span>{{__('messages.All_Types_Books')}}</span></li>
        @elseif(Request::get('id') == 10)   
        <li><span>{{__('messages.Aarohan_Classes')}}</span></li>
        @endif
    </ul>
</div>
@endif