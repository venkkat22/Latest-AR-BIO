<head>
    <title>AR-BIO ADMIN </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="{{  asset('js/multiselect-dropdown.js') }}"></script>

      <style>
        .multiselect-dropdown{
          width:100% !important;
        }
      </style>
</head>
<body>
      
      <div class="wrapper d-flex align-items-stretch">
          <nav id="sidebar">
              <div class="custom-menu">
                  <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
      </div>
            <h1><a href="index.html" class="logo">AR BIO</a></h1>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <li class="active">
            <a href="{{ asset('admin/HomeDashboard')}}"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
        <li class="active">
          <a href="{{ asset('admin/readcontentDashboard')}}"><span class="fa fa-sticky-note mr-3"></span> Reading Materials</a>
        </li>
        <li class="active">
            <a href="{{ asset('admin/dashboard')}}"><span class="fa fa-user mr-3"></span> Chapters </a>
        </li>
        <li class="active">
          <a href="{{ asset('admin/exam')}}"><span class="fa fa-sticky-note mr-3"></span> Quiz </a>
        </li>
        <li class="active">
          <a href="{{ asset('admin/marks')}}"><span class="fa fa-check mr-3"></span> Marks for Quiz</a>
        </li>
        <li class="active">
          <a href="{{ asset('admin/qna-ans')}}"><span class="fa fa-question-circle mr-3"></span> Q&A</a>
        </li>
       
        <li>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
    
                <x-responsive-nav-link :href="route('admin.logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();"><span class="fa fa-sign-out mr-3"></span>
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </li>
        
      </ul>

      </nav>

      

      <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
      
      @yield('space-work')
    </div>
      </div>
<!-- Not Working idk why so just go and find another one with google  -->
  {{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
  <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>