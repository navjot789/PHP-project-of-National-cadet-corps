<?php
if($_GET['page']==3 || $_GET['page']==9 || $_GET['page']==13 )
{
  echo "";
}
else
{
?>

<footer class="footer footer-black  footer-white ">
    <div class="container">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="admin/" target="_blank">Admin Login</a>
            </li>
            <li>
              <a href="#" target="_blank">Blog</a>
            </li>
            <li>
              <a href="#" target="_blank">Licenses</a>
            </li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> <a href="#" target="_blank">Ankita rana</a>
          </span>
        </div>
      </div>
    </div>
  </footer>

<?php
}
?>