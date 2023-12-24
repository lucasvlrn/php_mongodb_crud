<?php
session_set_cookie_params(['httponly' => true]);
session_start();
session_regenerate_id(true);
?>
<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="crud.css" />
    <title>Rapid Cure | Principal MED</title>
  </head>
  <body>
    <div class="top">
      <div class="profile">
        <p><?php echo $_SESSION['login']; ?></p>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="#557c55"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          id="top-icon"
        >
          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
          <circle cx="12" cy="7" r="4"></circle>
        </svg>
</div>
      <p id="responsive">Bem Vindo, o que deseja fazer?</p>
      <a href="../login/login.html" class="out">
        <p>Sair</p>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="#557c55"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          
        >
          <path d="M15 3h6v18h-6M10 17l5-5-5-5M13.8 12H3" />
        </svg>
      </a>
    </div>
    <div class="container">
      <div class="content responsive-content">
        <div class="content1">
          <a href="create/create.html" class="crud">
            <p>Cadastrar</p>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="80"
              height="80"
              viewBox="0 0 24 24"
              fill="none"
              stroke="#557c55"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="12" y1="8" x2="12" y2="16"></line>
              <line x1="8" y1="12" x2="16" y2="12"></line>
            </svg>
          </a>
          <a href="update/update.html" class="crud">
            <p>Atualizar</p>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="80"
              height="80"
              viewBox="0 0 24 24"
              fill="none"
              stroke="#557c55"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path
                d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"
              ></path>
              <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
            </svg>
          </a>
        </div>
        <div class="content2">
          <a href="read/read.php" class="crud">
            <p>Ver</p>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="80"
              height="80"
              viewBox="0 0 24 24"
              fill="none"
              stroke="#557c55"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>
          </a>
          <a href="delete/delete.html" class="crud">
            <p>Excluir</p>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="80"
              height="80"
              viewBox="0 0 24 24"
              fill="none"
              stroke="#557c55"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="15" y1="9" x2="9" y2="15"></line>
              <line x1="9" y1="9" x2="15" y2="15"></line>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
