<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Maintenance Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
      body {
        background: url('https://images.unsplash.com/photo-1516455207990-7a41ce80f7ee') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        width: 100%;
      }
      
      .overlay {
        background-color: rgba(0, 0, 0, 0.5);
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
      }
      
      .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
      }
      
      h1 {
        color: #fff;
        font-size: 4rem;
        text-align: center;
        margin-bottom: 2rem;
      }
      
      p {
        color: #fff;
        font-size: 2rem;
        text-align: center;
        margin-bottom: 2rem;
      }
      
      .fa {
        color: #fff;
        font-size: 5rem;
        margin-bottom: 2rem;
      }
      
      @media (max-width: 576px) {
        h1 {
          font-size: 2rem;
        }
        
        p {
          font-size: 1.5rem;
        }
        
        .fa {
          font-size: 3rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="overlay">
      <div class="container">
        <i class="fas fa-tools"></i>
        <h1>Under Maintenance</h1>
        <p>We're sorry, but our site is currently undergoing maintenance.</p>
        <p>Please check back soon.</p>
      </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  </body>
</html>