<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Voting</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-wrap: wrap;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            text-align: center;
            width: 300px;
        }

        .image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .title {
            font-size: 1.5rem;
            margin-top: 10px;
        }

        .rating {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .rating-star {
            color: #ffc107;
            font-size: 1.5rem;
        }

        .button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10 px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #512da8;
        }

        .vote-section {
            margin-top: 20px;
        }

        .vote-button {
            background-color: #673ab7;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .vote-button:hover {
            background-color: #512da8;
        }
    </style>
 </head>

<body>
<nav class="navbar navbar-expand-lg">
<button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" id="navbar-toggler">
      <i class="fas fa-bars navbar-toggler-icon"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="home">
            <i class="fas fa-home"></i>
            Beranda
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-search"></i>
            Cari
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-plus"></i>
            Tulis
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-bell"></i>
            Notifikasi
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img alt="User Profile" class="d-inline-block align-top rounded-circle" height="30" src="https://storage.googleapis.com/a1aa/image/Lfq93qG3G7xrNqGtr0QA0LAtnPHGl3cByPpfZ7GCQZPztfJnA.jpg" width="30" />
            <div>Profil</div>
          </a>
        </li>
      </ul>
    </div>
  </nav>
    <div class="container">
    <button class="button create-food-button" onclick="window.location.href='{{ route('createfood') }}'">Create Food</button>
        <div class="card">
            <img src="https://i.imgur.com/5u5nW2y.jpg" alt="Ayam Geprek" class="image">
            <h2 class="title">Ayam Geprek</h2>
            <div class="rating">
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <span>(10)</span>
            </div>
            <div class="vote-section">
                <button class="vote-button">Vote Rasa Makanan</button>
                <button class="vote-button">Vote Porsi Makanan</button>
                <div class="vote-rating">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <span>(10)</span>
                </div>
            </div>
            <button class="button">Hapus</button>
        </div>

        <div class="card">
            <img src="https://i.imgur.com/5u5nW2y.jpg" alt="Sup Ayam" class="image">
            <h2 class="title">Sup Ayam</h2>
            <div class="rating">
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <span>(5)</span>
            </div>
            <div class="vote-section">
                <button class="vote-button">Vote Rasa Makanan</button>
                <button class="vote-button">Vote Porsi Makanan</button>
                <div class="vote-rating">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <span>(5)</span>
                </div>
            </div>
            <button class="button">Hapus</button>
        </div>

        <div class="card">
            <img src="https://i.imgur.com/5u5nW2y.jpg" alt="Sate" class="image">
            <h2 class="title">Sate</h2>
            <div class="rating">
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <span>(8)</span>
            </div>
            <div class="vote-section">
                <button class="vote-button">Vote Rasa Makanan</button>
                <button class="vote-button">Vote Porsi Makanan</button>
                <div class="vote-rating">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <span>(8)</span>
                </div>
            </div>
            <button class="button">Hapus</button>
        </div>

        <div class="card">
            <img src="https://i.imgur.com/5u5nW2y.jpg" alt="Gado-Gado" class="image">
            <h2 class="title">Gado-Gado</h2>
            <div class="rating">
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <span>(12)</span>
            </div>

            <div class="vote-section">
                <button class="vote-button">Vote Porsi Makanan</button>
                <div class="vote-rating">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <span>(12)</span>
                </div>
            </div>
            <button class="button">Hapus</button>
        </div>
    </div>

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>