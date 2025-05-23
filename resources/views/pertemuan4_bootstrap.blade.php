<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidebar Bootstrap</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <style>
    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #135589;
      color: white;
      padding: 20px;
      position: fixed;
      top: 0;
      left: 0;
      transition: margin-left 0.3s ease-in-out;
    display: flex;
    flex-direction: column;

    }
    .sidebar a {
      color: white;
      display: block;
      padding: 8px;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }
    .sidebar a:hover {
      background-color: #073a5d;
      text-decoration: none;
    }
    
    .name-text {
      font-weight: 700;
      font-size: 1.1rem;
      color: #333;
    }
    .contract-text {
      font-size: 0.8rem;
      color: #aaa;
    }
    .logout-btn {
    background-color: #487ba3; 
    color: black;
    padding: 8px;
    
}

.logout-btn img {
    width: 25px;
    height: 20px;
    margin-right: 10px; 
}    

    .content {
      margin-left: 260px;
      margin-top: 30px;
      width: calc(100% - 260px);
      padding: 20px;
      transition: margin-left 0.3s ease-in-out;
    }
    
    body {
    font-family: 'Poppins', sans-serif;
    display: fixed;
    transition: all 0.3s ease;
    }
    
    .toggle-btn {
    position: fixed;
    top: 15px;
    left: 10px;
    font-size: 24px;
    cursor: pointer;
    background: none;
    border: none;
    color: white;
    z-index: 1050;
}

    
    .close-btn {
        left: 200px;
        top: 3px;    }
    
    .open-btn {
      
        display: block;
        background-color: #135589;
        color: white;
        border: none;
        padding: 4px;
        margin-left: auto;
        border-radius: 4px;
        cursor: pointer;
        padding-left: 10px;
        padding-right: 10px;
    }

    .toggle-checkbox:checked ~ .sidebar {
    margin-left: -250px;
}
    
    .toggle-checkbox:checked ~ .sidebar .close-btn {
        display: none;
    }
    
    .toggle-checkbox:checked ~ .open-btn {
        display: block;
    }
    
    .toggle-checkbox:not(:checked) ~ .sidebar .open-btn {
        display: none;
    }
    
    .toggle-checkbox:checked ~ .content {
        margin-left: 40px;
    }
 
    .toggle-checkbox:not(:checked) ~ .open-btn {
        display: none;
    }

    .custom-card {
      border-radius: 15px;
      box-shadow: 0 8px 20px 5px rgba(0, 0, 0, 0.09);
      border: none;
      background-color: #fff;
    }
    

  </style>
</head>
<body>
  
  <input type="checkbox" id="toggleSidebarCheckbox" class="toggle-checkbox" style="display: none;">
  

<div class="sidebar d-flex flex-column">

  <div class="toggle-wrapper" style=" margin-bottom: 15px;">
    <label for="toggleSidebarCheckbox" class="toggle-btn open-btn">
      <i class="fa fa-bars"></i> 
    </label>
    <label for="toggleSidebarCheckbox" class="toggle-btn close-btn">
      <i class="fa fa-angle-double-left"></i> 
    </label>
  </div>

  <div class="d-flex align-items-center mb-4 mt-3">
    <img src="image\icon profil.png" 
         class="rounded-circle me-2" 
         style="width: 40px; height: 40px; object-fit: cover;" 
         alt="User">
    <div>
      <h6 class="mb-1 text-white fw-bold">User</h6>
      <p class="mb-0 text-white small">user@mail.com</p>
    </div>
  </div>

  <div>
    <a href="#" class="d-flex ml-3">
      <img src="image\helperlog.png" 
           class="me-2" 
           style="width: 20px; height: 20px;" 
           alt="Helperlog"> Helperlog
    </a>

    <a href="#" class="d-flex align-items-center mb-2">
      <img src="image\helperfind.png" 
           class="me-2" 
           style="width: 20px; height: 20px;" 
           alt="Helperfind"> 
      Helperfind
    </a>

    <a href="#" class="d-flex align-items-center mb-2">
      <img src="image\helperassistant.png" 
           class="me-2" 
           style="width: 20px; height: 20px;" 
           alt="Helperassist"> Helperassist
    </a>
  </div>

  <div class="mt-auto text-center">
    <a href="#" class="logout-btn btn-sm d-inline-flex align-items-center" style="align-self: center; margin-bottom: 160px;">
      <img src="image\logout.webp" 
           class="mr-2" 
           style="width: 20px; height: 20px;" 
           alt="Logout"> Logout
    </a>
  </div>
</div>

  <div class="content">
        <h2 style="margin-left: 20px; margin-bottom: 60px;"><b>Helperlog Dashboard</b></h2>
        <br> 
    
    <div class="custom-card p-3 mb-3 shadow-sm">
      <div class="row align-items-center">
        <div class="col-auto">
          <img src="image\icon intan.png" 
               class="rounded-circle img-fluid" 
               alt="Intan Permata" 
               style="width: 55px; height: 55px; object-fit: cover;">
        </div>
        <div class="col">
          <h5 class="name-text mb-0">Intan Permata</h5>
          <small class="text-muted font-weight-bold">Baby Sitter</small>
          <p class="contract-text mb-0">Masa Kontrak: 12 bulan</p>
        </div>
        <div class="col-auto text-center">
          <div class="d-flex align-items-center justify-content-center">
            <span class="text-warning h5 m-1">
              <img src="image\bintang nonaktif.png" alt="">
            </span>
            <span class="text-warning h5 m-1">
              <img src="image\bintang nonaktif.png" alt="">
            </span>
            <span class="text-warning h5 m-1">
              <img src="image\bintang nonaktif.png" alt="">
            </span>
            <span class="text-warning h5 m-1">
              <img src="image\bintang nonaktif.png" alt="">
            </span>
            <span class="text-warning h5 m-1">
              <img src="image\bintang nonaktif.png" alt="">
            </span>
          </div>
          <p class="text-muted mb-0">Beri Penilaian untuk Intan <span role="img" aria-label="emoji">🤗</span></p>
        </div>
      </div>
    </div>
    
    <div class="custom-card p-3 mb-3 shadow-sm">
      <div class="row align-items-center">
        <div class="col-auto">
          <img src="image\icon budi.png" 
               class="rounded-circle img-fluid" 
               alt="Budi Dorami" 
               style="width: 55px; height: 55px; object-fit: cover;">
        </div>
        <div class="col">
          <h5 class="name-text mb-0">Budi Dorami</h5>
          <small class="text-muted font-weight-bold">Satpam</small>
          <p class="contract-text mb-0">Masa Kontrak: 6 bulan</p>
        </div>
        <div class="col-auto d-flex align-items-center justify-content-center">
          <span class="text-primary h5 font-weight-bold mr-2">4.3</span>
          <div class="text-center">
            <div class="d-flex align-items-center justify-content-center">
              <span class="text-warning h5 m-1">
                <img src="image\bintang.png" alt="">
              </span>
              <span class="text-warning h5 m-1">
                <img src="bintang.png" alt="">
              </span>
              <span class="text-warning h5 m-1">
                <img src="image\bintang.png" alt="">
              </span>
              <span class="text-warning h5 m-1">
                <img src="image\bintang.png" alt="">
              </span>
              <span class="text-warning h5 m-1">
                <img src="image\bintang nonaktif.png" alt="">
              </span>
            </div>
            <p class="text-muted mb-0">Sudah diberi Penilaian <span role="img" aria-label="emoji">👍</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>
