<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/header-1.scss') }}" />
<style>
    /*
** The Header Media Queries **
** Tweak as per your needs **
*/html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}
table{border-collapse:collapse;border-spacing:0}


.brand {
    font-weight: bold;
    font-size: 20px;
    color: white;
    text-decoration: none;
 }

  .site-header {
    position: relative;
    background-color: #810524;
    color: white;}

  .site-header__wrapper {
    padding-top: 1rem;
    padding-bottom: 1rem; }
    @media (min-width: 600px) {
      .site-header__wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 0;
        padding-bottom: 0; } }
  @media (min-width: 600px) {
    .nav__wrapper {
      display: flex; } }

  @media (max-width: 599px) {
    .nav__wrapper {
      position: fixed;
      top: 0px;
      right: 0;
      text-decoration: none;
      left: 0;
      color: rgb(255, 244, 244);
      z-index: -1;
      background-color: #1b667d;

      visibility: hidden;
      opacity: 0;
      transform: translateY(-100%);
      transition: transform 0.3s ease-out, opacity 0.3s ease-out; }
      .nav__wrapper.active {
        visibility: visible;
        opacity: 1;
        transform: translateY(0); } }

  .nav__item a {
    display: block;
    text-decoration: none;
    color: rgb(255, 244, 244);
    padding: 1.5rem 1rem; }

    .nav_item a:hover {
        background-color: #5bc7d1;

      }


  .nav__toggle {
    display: none; }
    @media (max-width: 599px) {
      .nav__toggle {
        display: block;
        position: absolute;
        right: 1rem;
        top: 1rem; } }
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap");
.wrapper {
  max-width: 1140px;
  padding-left: 1rem;
  padding-right: 1rem;
  margin-left: auto;
  margin-right: auto;
}

*,
*:before,
*:after {
  box-sizing: border-box;
}

a {
  text-decoration: none;
  color: #222;
}

html {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body {
  font-family: "Roboto", sans-serif;
}

.sr-only {
  position: absolute;
  clip: rect(1px, 1px, 1px, 1px);
  padding: 0;
  border: 0;
  height: 1px;
  width: 1px;
  overflow: hidden;
}

.button {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  color: #fff;
  background-color: #2fa0f6;
  min-width: 120px;
  padding: 0.5rem 1rem;
  border-radius: 5px;
  text-align: center;
}

.button svg {
  display: inline-block;
  vertical-align: middle;
  width: 24px;
  height: 24px;
  fill: #fff;
}

.button span {
  display: none;
}

@media (min-width: 600px) {
  .button span {
    display: initial;
  }
}

.button--icon {
  min-width: initial;
  padding: 0.5rem;
}

    </style>
</head>
<body>
 <!-- Header Start -->
 <header class="site-header">
    <div class="wrapper site-header__wrapper">
      <a href="{{ asset('learning_content/') }}" class="brand">Welcome Back Venkkat!</a>
      <nav class="nav">
  <button class="nav__toggle" aria-expanded="false" type="button">
          menu
        </button>

         <ul class="nav__wrapper">
          <li class="nav__item"><a href="{{ asset('learning_content/') }}">Learning Content</a></li>
          <li class="nav__item"><a href="{{ asset('student/') }}">Student</a></li>
          
        
         </ul>
      </nav>
    </div>
  </header>
  <!-- Header End -->

  <script>

  let navToggle = document.querySelector(".nav__toggle");
let navWrapper = document.querySelector(".nav__wrapper");

navToggle.addEventListener("click", function () {
  if (navWrapper.classList.contains("active")) {
    this.setAttribute("aria-expanded", "false");
    this.setAttribute("aria-label", "menu");
    navWrapper.classList.remove("active");
  } else {
    navWrapper.classList.add("active");
    this.setAttribute("aria-label", "close menu");
    this.setAttribute("aria-expanded", "true");
  }
});

  </script>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
   