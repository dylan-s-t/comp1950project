<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <img src="/students/mwerner2/groupproject/images/bcit_1950_logo.gif" alt="bcit 1950 Logo" />
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
            <a class="nav-link" href="/students/mwerner2/groupproject/course_home.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lectures</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item <?php echo ($page == "lecture1" ? "active" : "")?>" href="/students/mwerner2/groupproject/lecture1.html">Lecture 1</a>
              <a class="dropdown-item <?php echo ($page == "lecture2" ? "active" : "")?>" href="/students/mwerner2/groupproject/lecture2.html">Lecture 2</a>
              <a class="dropdown-item <?php echo ($page == "lecture3" ? "active" : "")?>" href="/students/mwerner2/groupproject/lecture3.html">Lecture 3</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.bcit.ca/" target="_blank">BCIT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://learn.bcit.ca/" target="_blank">D2L</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://my.bcit.ca/" target="_blank">myBCIT</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>