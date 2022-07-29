<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../../../assets/css/style.css">
    <title>header</title>
  </head>
  <body>
      <header>
        <nav class="navbar navbar-light bg-dark">
          <div class="container-fluid">
            <button class="navbar-toggler boos " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
              <div class="offcanvas-header">
                <br><br><br><br> <br>
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                <img src="./../../../assets/images/cropped-logo-uni2grow-1.png" alt="" >
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div><br><br>
                   <hr>
                   <ul class="navlist">
                    <img src="./../../../assets/bootstrap-icons/house-fill.svg" class="ico1" alt="">
                    <li class="navitems"><a href="" class="navlink">Accueil</a></li>
                    <img src="./../../../assets/bootstrap-icons/people-fill.svg" class="ico2" alt="">
                    <li class="navitems"><a href="" class="navlink">Employe</a></li>
                    <img src="./../../../assets/bootstrap-icons/calendar4-week.svg" class="ico3" alt="">
                    <li class="navitems"><a href="" class="navlink">conge</a></li>
                    <img src="./../../../assets/bootstrap-icons/file-earmark-person.svg" class="ico4" alt="">
                    <li class="navitems"><a href="" class="navlink">contrat</a></li>
                    <img src="./../../../assets/bootstrap-icons/calendar2-event.svg" class="ico5" alt="">
                    <li class="navitems"><a href="" class="navlink">Permission</a></li>
                  </ul>
            </div>
            <div class="dropdown" style="width: 200px;">
              <a class="btn btn-secondary boss" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="./../../../assets/images/photo.png" class="rounded-circle" alt="" width="50px" height="50px" >
              administrateur
              <div class="img"></div>
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li>Demafofranck@gmail.com</a></li><hr>
                <li><a class="dropdown-item" href="#"><img src="./../../../assets/bootstrap-icons/person-fill.svg" class="btn" alt=""> Voir le profil</a></li>
                <li><a class="dropdown-item" href="#"><img src="./../../../assets/bootstrap-icons/calendar-event-fill.svg" class="btn" alt="">Statut</a></li>
                <li><a class="dropdown-item" href="#"><img src="./../../../assets/bootstrap-icons/clipboard-data.svg" class="btn" alt="" style="color:#fff;">congé</a></li>
              </ul>
            </div>
           </div>
          </nav>
       </header>
       <script src="./../../../vendor/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>       