<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">Logo</div>
            <button class="menu-btn">Dashboard</button>
            <button class="menu-btn">Master Barang</button>
            <button class="menu-btn">Receiving</button>
            <button class="menu-btn">Issuing</button>
        </div>

        <div class="main-content">
            <div class="header">
                <div class="username-container">
                    <span class="username">Qiess</span>
                    <img src="flower.jpeg" alt="User Profile" class="profile-logo">
                </div>
            </div>

            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Pencarian">
            </div>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Pengadaan</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th>Baik</th>
                        <th>Rusak</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td>1</td>
                        <td>Pempes</td>
                        <td>2023-11-01</td>
                        <td>50</td>
                        <td>Baik</td>
                        <td>40</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Susu</td>
                        <td>2023-10-15</td>
                        <td>30</td>
                        <td>Rusak</td>
                        <td>20</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Telur</td>
                        <td>2023-11-12</td>
                        <td>30</td>
                        <td>Rusak</td>
                        <td>20</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Ayam</td>
                        <td>2023-12-15</td>
                        <td>30</td>
                        <td>Rusak</td>
                        <td>20</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
            <div class="footer">
                <span>copyright</span>
                <span>versi: 1.0</span>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>