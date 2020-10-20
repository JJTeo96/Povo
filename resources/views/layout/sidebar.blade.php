<style>
.icon-word{
  color: #000000;
}
.active{
  color:#ED1B2F;
}
.active:hover{
  cursor: default;
  text-decoration: none;
  color:#ED1B2F;
}
.icon-word:hover{
  color:#ED1B2F;
}
</style>
<div class="col-md-3 col-sm-12 d-none d-md-block" style="color:#000000">
    <div class="card" style="width: 240px;border-width:2px;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item ">
            <a class="icon-word {{ (request()->is('dashboard')) ? 'active' : '' }}" href="{{ url('/dashboard') }}">
              <svg width="16px" height="16px" viewBox="0 2 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
                <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
              </svg>&nbsp; Dashboard
            </a>
          </li>
          <li class="list-group-item">
            <a class="icon-word {{ (request()->is('profile')) ? 'active' : '' }}" href="{{ url('/profile') }}">
              <svg width="1em" height="1em" viewBox="0 2 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg> &nbsp; My Profile
            </a>
          </li>
          <li class="list-group-item">
            <a class="icon-word {{ (request()->is('addon')) ? 'active' : '' }}" href="{{ url('/addon') }}">
              <svg width="1em" height="1em" viewBox="0 2 16 16" class="bi bi-bucket" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2.522 5H2a.5.5 0 0 0-.494.574l1.372 9.149A1.5 1.5 0 0 0 4.36 16h7.278a1.5 1.5 0 0 0 1.483-1.277l1.373-9.149A.5.5 0 0 0 14 5h-.522A5.5 5.5 0 0 0 2.522 5zm1.005 0h8.945a4.5 4.5 0 0 0-8.945 0zm9.892 1H2.581l1.286 8.574A.5.5 0 0 0 4.36 15h7.278a.5.5 0 0 0 .494-.426L13.42 6z"/>
              </svg> &nbsp; Buy Add-Ons
            </a>
          </li>
          <li class="list-group-item">
            <a class="icon-word {{ (request()->is('member')) ? 'active' : '' }}" href="{{ url('/member') }}">
              <svg width="1em" height="1em" viewBox="0 2 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
              </svg> &nbsp; My Membership
            </a>
          </li>
          <li class="list-group-item">
            <a class="icon-word" href="/">
              <svg width="1em" height="1em" viewBox="0 2 16 16" class="bi bi-box-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
              </svg> &nbsp; Logout
            </a>
            </li>
        </ul>
    </div>
</div>