<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title> Web-Bootstrap </title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/myStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }
    </style>
</head>

<body>
   <script src="https://cdn.socket.io/4.7.2/socket.io.min.js"></script>
<script>
  const socket = io('http://localhost:3000');
  socket.on('update', rows => {
    const cont = document.getElementById('realtime-container');
    if (!cont) return;
    cont.innerHTML = '';
    rows.forEach(r => {
      const h = document.createElement('h1'); h.textContent = r.judul;
      const p = document.createElement('p'); p.textContent = r.keterangan;
      cont.appendChild(h); cont.appendChild(p);
    });
  });
</script>

    <script>
        window.addEventListener('scroll', function () {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 100) { // Ubah angka sesuai kebutuhan
                navbar.classList.add('sidebar');
            } else {
                navbar.classList.remove('sidebar');
            }
        });
    </script>

    <div id="section1" class="container-fluid p-2 bg-secondary text-white text-center body">
        <pre>
                <img src="asset/img/pulau2.jpg" alt="pulau2" class="bulat">
                </pre>
        <h1>Selamat Datang Di Portofolio Saya</h1>
        <p></p>
    </div>
    <nav id="navbar" class="navbar navbar-expand-sm bg-dark navbar-dark fixed-buttom">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item"></li>
                <a class="nav-link" href="#section1">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section2">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section3">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section4">Skill</a>
                <li class="nav-item">
                    <a class="nav-link" href="#section5">Contact</a>
                </li>
                </li>
            </ul>
        </div>
    </nav>




    <div>
        
    
        <div id="section2" class="container-fluid p-4 ungu text-color text-center">
            <div class="container mt-3">
              
                  </div>
                <?php 
                 include 'init.koneksi.db.php'; 
                 $sql = "SELECT judul, keterangan FROM web1;";
                 $data = $conn->query($sql);

                 if ($data->num_rows > 0) {
                     while($row = $data->fetch_assoc()) {
                         echo "<h1>" . $row["judul"]. "</h1>";
                         echo "<p>" . $row["keterangan"]. "</p>";
                     }
                 }
                    $conn->close();
              ?>
                <img src="asset/img/pulau2.jpg" class="img-thumbnail polaroid" alt="Cinque Terre" width="304"
                    height="236">
                 
            </div>
        </div>


        <div id="section3">
            <div class="col p-2 kuning text-white text-center ">
                <h2>History</h2>
                <div class="row">
                    <div class="col-sm-6 text-white p-3 ">
                        <a target="_blank" href="asset/img/pulau2.jpg">
                            <img src="asset/img/pulau2.jpg" class="img-thumbnail polaroid" alt="Cinque Terre"
                                width="304" height="236">
                        </a>
                        <h6 class=" text-color selector">SCHOOL</h6>

                        <P class="text-white">SD dan SMP saya berada di salah satu sekolah negri di wonogiri,Setelahsaya
                            menyelesaikan pendidikan SD dan SMP saya di wionogiri saya melanjutkan bersekolah dengan
                            tingkat yang lebih tinggi di Surakarta yaitu SMK 5 Surakarta </P>
                    </div>
                    <div class="col-sm-6  text-white p-3 ">
                        <a target="_blank" href="asset/img/pulau2.jpg">
                            <img src="asset/img/pulau2.jpg" class="img-thumbnail polaroid" alt="Cinque Terre"
                                width="304" height="236">
                        </a>
                        <h6 class=" text-color selector ">HOBY</h6>
                        <p class="text-white">Hoby saya adalah bermain game, fotografi, dan desain. Saya sudah belajar
                            fotografi sejak saya masih duduk di bangku sekolah menengah pertama. Saya juga sangat
                            menyukai dunia desain, saya sudah belajar desain sejak saya masih duduk di bangku sekolah
                            menengah pertama.</p>
                    </div>
                </div>
            </div>
            <div>
                <div id="section4" class="col p-5 transparan text-white text-center ">
                    <h2>Skill</h2>
                    <div id="myPlot" style="width:100%; width:100px center"></div>

                    <script>
                        var data = [{
                            x: ['HTML', 'CSS', 'JavaScript', 'Python', 'Java'],
                            y: [90, 80, 70, 60, 50],
                            type: 'bar'
                        }];

                        var layout = {
                            title: 'Skill Level',
                            xaxis: {
                                title: 'Skills'
                            },
                            yaxis: {
                                title: 'Proficiency (%)'
                            }
                        };

                        Plotly.newPlot('myPlot', data, layout);
                    </script>

                </div>
            </div>
            <div id="section5" class="col p-5 bg-dark text-white text-center ">
                <h2>Contact</h2>
                <div class="container">
                    <form action="/action_page.php">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                            <option value="usa">Indonesia</option>
                        </select>

                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.."
                            style="height:200px"></textarea>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>