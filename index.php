<!DOCTYPE html>
<html>
<head>
    <title>Mon site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body { 
          font-family: Arial, sans-serif; 
          margin: 0;
          padding: 0;
          background: #f4f4f4;
      }
      .container { 
          width: 80%;
          margin: auto;
          overflow: hidden;
      }
      header { 
          background: #50b3a2;
          color: white;
          padding-top: 30px;
          min-height: 70px;
          border-bottom: #e8491d 3px solid;
      }
      header a { 
          color: #ffffff;
          text-decoration: none;
          font-size: 16px;
      }
      header li { 
          display: inline;
          padding: 0 20px 0 20px;
      }
      header ul { 
          margin: 0;
          padding: 0;
          display: flex;
          justify-content: space-around;
      }
      header #branding { 
          float: left;
      }
      header #branding h1 { 
          margin: 0;
      }
      
      header nav { 
          margin-top: 10px;
      }
      header .highlight { 
          color: #e8491d;
      }
      header a:hover { 
          color: #cccccc;
          font-weight: bold;
      }
  
      /* Media Query for smaller screens */
      @media (max-width: 600px) {
          header ul {
              flex-direction: column;
              align-items: center;
          }
          header li {
              padding: 10px;
          }
      }
    </style>

</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">
                  <h1><span class="highlight">Mon</span> Site</h1>
              </a>
          </div>
            <nav>
                <ul>
                    <li><a href="index.php?page=home.php">Accueil</a></li>
                    <li><a href="index.php?page=about.php">À propos</a></li>
                    <li><a href="index.php?page=contact.php">Contact</a></li>
                    <li><a href="index.php?page=upload.php">Upload</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <?php
            error_reporting(0);
            ini_set('display_errors', 'Off');
            if (isset($_GET['page'])){
              $page = $_GET['page'];
              include($page);
            } else {
              include('home.php');
            }
        ?>
    </div>

</body>
</html>
