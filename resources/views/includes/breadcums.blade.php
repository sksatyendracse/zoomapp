<!-- Page Heading/Breadcrumbs -->
@if(Request::path() == 'about')
<h1 class="mt-4 mb-3">About
    <small>Us</small>
</h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="{{url('/')}}">Home</a>
    </li>
    <li class="breadcrumb-item active">About</li>
</ol>
@elseif(Request::path() == 'contact')
<h1 class="mt-4 mb-3">Contact
    <small>Us</small>
</h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="{{url('/')}}">Home</a>
    </li>
    <li class="breadcrumb-item active">Contact Us</li>
</ol>

@elseif(Request::path() == 'mobile_accessories')
<h1 class="mt-4 mb-3">
    <small>{{ __('messages.Mobile_Accessories') }}</small>
</h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="{{url('/')}}">Home</a>
    </li>
    <li class="breadcrumb-item active">{{ __('messages.Mobile_Accessories') }}</li>
</ol>
@elseif(Request::path() == 'recharges')
<h1 class="mt-4 mb-3">
    <small>{{ __('messages.Recharges') }}</small>
</h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="{{url('/')}}">Home</a>
    </li>
    <li class="breadcrumb-item active">{{ __('messages.Recharges') }}</li>
</ol>
@elseif(Request::path() == 'photocopies')
<h1 class="mt-4 mb-3">
    <small>{{ __('messages.Photocopies') }}</small>
</h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="{{url('/')}}">Home</a>
    </li>
    <li class="breadcrumb-item active">{{ __('messages.Photocopies') }}</li>
</ol>

@elseif(Request::path() == 'electricals_services')
<h1 class="mt-4 mb-3">
    <small>{{ __('messages.Electricals_Servies') }}</small>
</h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="{{url('/')}}">Home</a>
    </li>
    <li class="breadcrumb-item active">{{ __('messages.Electricals_Servies') }}</li>
</ol>

@elseif(Request::path() == 'office_use')
<h1 class="mt-4 mb-3">
    <small>{{ __('messages.Office_Use') }}</small>
</h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="{{url('/')}}">Home</a>
    </li>
    <li class="breadcrumb-item active">{{ __('messages.Office_Use') }}</li>
</ol>
@elseif(Request::path() == 'all_types_books')
<h1 class="mt-4 mb-3">
    <small>{{ __('messages.All_Types_Books') }}</small>
</h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="{{url('/')}}">Home</a>
    </li>
    <li class="breadcrumb-item active">{{ __('messages.All_Types_Books') }}</li>
</ol>
@elseif(Request::path() == 'aarhoan')
<h1 class="mt-4 mb-3">
    <small>{{ __('messages.Aarohan_Classes') }}</small>
</h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="{{url('/')}}">Home</a>
    </li>
    <li class="breadcrumb-item active">{{ __('messages.Aarohan_Classes') }}</li>
</ol>

@endif