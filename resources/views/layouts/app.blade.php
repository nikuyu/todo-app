<html>
 <head>
    <title>Todo App Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
 </head>
 <body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Nikuyu Todo App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link "  href="/">All Tasks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tasks/create">New Task</a>
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>

   <div class="container">
      @yield('content')
   </div>


 </body>
</html>