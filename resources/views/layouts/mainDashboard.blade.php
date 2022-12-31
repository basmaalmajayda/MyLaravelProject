<!DOCTYPE html>
<html lang="en" class="">
<head>
  <title>Dashboard</title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="{{asset('css/main.css?v=1628755089081')}}">

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6"/>


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

</head>
<body>

<div id="app">

<nav id="navbar-main" class="navbar is-fixed-top">
  
  <div class="navbar-brand is-right">
    <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
      <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
    </a>
  </div>
  <div class="navbar-menu" id="navbar-menu">
    <div class="navbar-end">
      <div class="navbar-item dropdown has-divider">
          <a class="navbar-item" href="{{URL::to('/home')}}">
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>Log Out</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

<aside class="aside is-placed-left is-expanded">
  <div class="aside-tools">
    <div>
      Admin <b class="font-black">DotCom</b>
    </div>
  </div>
  <div class="menu is-menu-main">

    <ul class="menu-list">
      <li class="active">
        <a href="{{URL::to('/dashboard')}}">
          <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
          <span class="menu-item-label">Dashboard</span>
        </a>
      </li>
    </ul>

    <p class="menu-label">Tables</p>
    <ul class="menu-list">

      <li class="--set-active-tables-html">
        <a href="{{URL::to('/showServices')}}">
          <span class="icon"><i class="mdi mdi-table"></i></span>
          <span class="menu-item-label">Services Table</span>
        </a>
      </li>
      <li class="--set-active-tables-html">
        <a href="{{URL::to('/showBlogs')}}">
          <span class="icon"><i class="mdi mdi-table"></i></span>
          <span class="menu-item-label">Blogs Table</span>
        </a>
      </li>
      <li class="--set-active-tables-html">
        <a href="{{URL::to('/showTeam')}}">
          <span class="icon"><i class="mdi mdi-table"></i></span>
          <span class="menu-item-label">Team Table</span>
        </a>
      </li>
      <li class="--set-active-tables-html">
        <a href="{{URL::to('/showFeedback')}}">
          <span class="icon"><i class="mdi mdi-table"></i></span>
          <span class="menu-item-label">Feedback Table</span>
        </a>
      </li>
      <li class="--set-active-tables-html">
        <a href="{{URL::to('/showContacts')}}">
          <span class="icon"><i class="mdi mdi-table"></i></span>
          <span class="menu-item-label">Contact Table</span>
        </a>
      </li>
</ul>

<p class="menu-label">Forms</p>

    <ul class="menu-list">
      <li class="--set-active-forms-html">
        <a href="{{URL::to('/createService')}}">
          <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
          <span class="menu-item-label">Add Service</span>
        </a>
      </li>
      <li class="--set-active-forms-html">
        <a href="{{URL::to('/createBlog')}}">
          <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
          <span class="menu-item-label">Add Blog</span>
        </a>
      </li>
      <li class="--set-active-forms-html">
        <a href="{{URL::to('/createTeam')}}">
          <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
          <span class="menu-item-label">Add Team Member</span>
        </a>
      </li>
      <li class="--set-active-forms-html">
        <a href="{{URL::to('/createFeedback')}}">
          <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
          <span class="menu-item-label">Add Feedback</span>
        </a>
      </li>
</ul>
  </div>
</aside>

@yield('content')


<!-- Scripts below are for demo only -->
<script type="text/javascript" src="{{asset('js/main.min.js?v=1628755089081')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="{{asset('js/chart.sample.min.js')}}"></script>


<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '658339141622648');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1"/></noscript>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
