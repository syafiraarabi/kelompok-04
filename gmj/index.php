<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PT Gunung Mitra Jaya</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
scroll-behavior:smooth;
}

body{
background:#0b0f19;
color:white;
overflow-x:hidden;
transition:.4s;
}

body.light{
background:#f4f4f4;
color:#111;
}

#particles-js{
position:fixed;
inset:0;
z-index:-1;
}

.loader{
position:fixed;
inset:0;
background:#0b0f19;
display:flex;
justify-content:center;
align-items:center;
z-index:99999;
}

.loader::after{
content:'';
width:70px;
height:70px;
border:7px solid #333;
border-top:7px solid #ff9800;
border-radius:50%;
animation:spin 1s linear infinite;
}

@keyframes spin{
100%{transform:rotate(360deg);}
}

nav{
position:fixed;
top:0;
width:100%;
padding:20px 8%;
display:flex;
justify-content:space-between;
align-items:center;
background:rgba(0,0,0,.4);
backdrop-filter:blur(10px);
z-index:999;
}

.logo{
font-size:24px;
font-weight:700;
}

.logo span{
color:#ff9800;
}

nav ul{
display:flex;
list-style:none;
gap:30px;
}

nav ul li a{
text-decoration:none;
color:white;
transition:.3s;
}

nav ul li a:hover{
color:#ff9800;
}

.hamburger{
display:none;
font-size:28px;
cursor:pointer;
}

.hero{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
text-align:center;
padding:0 10%;
}

.hero-content h1{
font-size:75px;
margin-bottom:20px;
}

.hero-content h1 span{
color:#ff9800;
}

.hero-content p{
max-width:700px;
margin:auto;
line-height:1.8;
color:#ccc;
}

.hero-btn{
display:inline-block;
margin-top:35px;
padding:15px 40px;
background:#ff9800;
border-radius:50px;
text-decoration:none;
color:white;
transition:.3s;
}

.hero-btn:hover{
transform:translateY(-5px);
}

section{
padding:120px 10%;
}

.section-title{
text-align:center;
margin-bottom:60px;
}

.section-title h2{
font-size:45px;
}

.about-grid,
.services-grid,
.portfolio-grid,
.stats-grid,
.chart-grid{
display:grid;
gap:30px;
}

.about-grid{
grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
align-items:center;
}

.about-grid img{
width:100%;
border-radius:20px;
}

.services-grid{
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
}

.service-card,
.stat-card,
.chart-box,
.table-container{
background:#121826;
padding:30px;
border-radius:20px;
}

.service-card{
transition:.3s;
}

.service-card:hover{
transform:translateY(-10px);
border:1px solid #ff9800;
}

.service-card i{
font-size:50px;
color:#ff9800;
margin-bottom:20px;
}

.portfolio-grid{
grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
}

.portfolio-card{
overflow:hidden;
border-radius:20px;
position:relative;
}

.portfolio-card img{
width:100%;
height:350px;
object-fit:cover;
transition:.5s;
}

.portfolio-card:hover img{
transform:scale(1.1);
}

.overlay{
position:absolute;
inset:0;
background:linear-gradient(to top,rgba(0,0,0,.9),transparent);
display:flex;
align-items:flex-end;
padding:30px;
}

.contact-box{
background:#121826;
padding:40px;
border-radius:20px;
text-align:center;
line-height:2;
}

.admin-btn{
text-align:center;
}

.admin-btn button{
padding:16px 35px;
border:none;
background:#ff9800;
color:white;
border-radius:12px;
cursor:pointer;
font-size:16px;
}

.login-modal,
.modal{
position:fixed;
inset:0;
background:rgba(0,0,0,.7);
display:none;
justify-content:center;
align-items:center;
z-index:9999;
}

.login-box,
.modal-content{
width:400px;
background:#121826;
padding:40px;
border-radius:20px;
}

.login-box input,
.modal-content input,
.modal-content select{
width:100%;
padding:15px;
margin-top:15px;
border:none;
border-radius:10px;
background:#1a2235;
color:white;
}

.login-box button,
.modal-content button,
.topbar button{
width:100%;
padding:15px;
margin-top:20px;
border:none;
border-radius:10px;
background:#ff9800;
color:white;
cursor:pointer;
}

#dashboardPage{
display:none;
}

.dashboard-container{
display:flex;
gap:30px;
}

.sidebar{
width:250px;
background:#121826;
padding:30px;
border-radius:20px;
}

.sidebar ul{
list-style:none;
margin-top:30px;
}

.sidebar ul li{
padding:15px;
margin-bottom:10px;
border-radius:10px;
cursor:pointer;
transition:.3s;
}

.sidebar ul li:hover{
background:#ff9800;
transform:translateX(8px);
}

.main-dashboard{
flex:1;
}

.topbar{
display:flex;
justify-content:space-between;
gap:20px;
margin-bottom:30px;
flex-wrap:wrap;
}

.search-box input{
padding:12px 18px;
border:none;
border-radius:10px;
background:#121826;
color:white;
}

.stats-grid{
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
margin-bottom:30px;
}

.stat-card h2{
font-size:40px;
color:#ff9800;
}

table{
width:100%;
border-collapse:collapse;
}

table th,
table td{
padding:15px;
text-align:left;
}

table th{
color:#ff9800;
}

.project-img{
width:70px;
height:50px;
object-fit:cover;
border-radius:8px;
}

.edit-btn,
.delete-btn{
padding:8px 12px;
border:none;
border-radius:8px;
cursor:pointer;
color:white;
}

.edit-btn{
background:#ff9800;
}

.delete-btn{
background:red;
}

.chart-grid{
grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
margin-top:30px;
}

.notification{
position:fixed;
top:20px;
right:20px;
background:#ff9800;
padding:15px 25px;
border-radius:10px;
transform:translateX(400px);
transition:.4s;
z-index:999999;
}

.notification.show{
transform:translateX(0);
}

footer{
padding:30px;
text-align:center;
color:#888;
}

@media(max-width:900px){

nav ul{
position:absolute;
top:80px;
left:-100%;
width:100%;
background:#121826;
flex-direction:column;
padding:30px;
transition:.4s;
}

nav ul.active{
left:0;
}

.hamburger{
display:block;
}

.hero-content h1{
font-size:45px;
}

.dashboard-container{
flex-direction:column;
}

.sidebar{
width:100%;
}

}
</style>
</head>

<body>

<div id="particles-js"></div>
<div class="loader"></div>

<div class="notification" id="notification">
Success
</div>

<nav>
<div class="logo">PT <span>Gunung Mitra Jaya</span></div>

<ul id="menu">
<li><a href="#home">Home</a></li>
<li><a href="#about">About</a></li>
<li><a href="#services">Services</a></li>
<li><a href="#portfolio">Portfolio</a></li>
<li><a href="#contact">Contact</a></li>
</ul>

<div class="hamburger" onclick="toggleMenu()">
<i class="fa-solid fa-bars"></i>
</div>
</nav>

<div id="publicWebsite">

<section class="hero" id="home">
<div class="hero-content">
<h1>PT <span>Gunung Mitra Jaya</span></h1>

<p>
Perusahaan modern di bidang konstruksi,
mekanikal, minyak & gas, serta transportir BBM/LPG.
</p>

<a href="#about" class="hero-btn">Explore More</a>
</div>
</section>

<section id="about">

<div class="section-title">
<h2>About Us</h2>
</div>

<div class="about-grid">

<div>
<img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1200">
</div>

<div>
<p style="line-height:1.9;color:#ccc;">
PT Gunung Mitra Jaya merupakan perusahaan profesional
yang bergerak di bidang konstruksi,
instalasi mekanikal, transportir BBM/LPG,
dan penyedia tenaga kerja profesional.
</p>
</div>

</div>
</section>

<section id="services">

<div class="section-title">
<h2>Services</h2>
</div>

<div class="services-grid">

<div class="service-card">
<i class="fa-solid fa-building"></i>
<h3>Konstruksi</h3>
</div>

<div class="service-card">
<i class="fa-solid fa-gears"></i>
<h3>Mekanikal</h3>
</div>

<div class="service-card">
<i class="fa-solid fa-gas-pump"></i>
<h3>Transportir BBM</h3>
</div>

</div>
</section>

<section id="portfolio">

<div class="section-title">
<h2>Portfolio</h2>
</div>

<div class="portfolio-grid">

<div class="portfolio-card">
<img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1200">
<div class="overlay">
<div>
<h3>Pengecoran Jalan</h3>
<p>Natuna</p>
</div>
</div>
</div>

<div class="portfolio-card">
<img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1200">
<div class="overlay">
<div>
<h3>Interior Kantor</h3>
<p>Selat Lampa</p>
</div>
</div>
</div>

</div>
</section>

<section id="contact">

<div class="section-title">
<h2>Contact</h2>
</div>

<div class="contact-box">
<p>📍 Ranai, Natuna</p>
<p>📞 +62 812-5029-2990</p>
<p>✉️ gunungmitrajaya@gmail.com</p>
</div>

</section>

<section>
<div class="admin-btn">
<button onclick="openLogin()">
Open Admin Dashboard
</button>
</div>
</section>

<footer>
© 2026 PT Gunung Mitra Jaya
</footer>

</div>

<div class="login-modal" id="loginModal">

<div class="login-box">

<h2>Admin Login</h2>

<input type="text" id="username" placeholder="Username">
<input type="password" id="password" placeholder="Password">

<button onclick="login()">
Login
</button>

</div>

</div>

<div id="dashboardPage">

<section>

<div class="section-title">
<h2>Admin Dashboard</h2>
</div>

<div class="dashboard-container">

<aside class="sidebar">

<h2>GMJ Admin</h2>

<ul>

<li>Dashboard</li>

<li onclick="toggleTheme()">
Dark / Light
</li>

<li onclick="logout()">
Logout
</li>

</ul>

</aside>

<div class="main-dashboard">

<div class="topbar">

<div class="search-box">
<input type="text" id="searchInput" placeholder="Search Project..." onkeyup="searchProject()">
</div>

<button onclick="openModal()">
+ Add Project
</button>

</div>

<div class="stats-grid">

<div class="stat-card">
<h2 id="totalProjects">0</h2>
<p>Total Project</p>
</div>

<div class="stat-card">
<h2>85</h2>
<p>Clients</p>
</div>

<div class="stat-card">
<h2>240</h2>
<p>Workers</p>
</div>

<div class="stat-card">
<h2>15B</h2>
<p>Revenue</p>
</div>

</div>

<div class="table-container">

<table id="projectTable">

<thead>

<tr>
<th>Image</th>
<th>Project</th>
<th>Location</th>
<th>Status</th>
<th>Action</th>
</tr>

</thead>

<tbody></tbody>

</table>

</div>

<div class="chart-grid">

<div class="chart-box">
<canvas id="projectChart"></canvas>
</div>

<div class="chart-box">
<canvas id="revenueChart"></canvas>
</div>

</div>

</div>

</div>

</section>

</div>

<div class="modal" id="modal">

<div class="modal-content">

<h2>Add Project</h2>

<input type="text" id="projectName" placeholder="Project Name">
<input type="text" id="projectLocation" placeholder="Location">

<select id="projectStatus">
<option>Completed</option>
<option>Progress</option>
<option>Pending</option>
</select>

<input type="file" id="projectImage">

<button onclick="saveProject()">
Save Project
</button>

</div>

</div>

<script>

// ========================
// LOADER
// ========================
window.addEventListener("load", () => {
    setTimeout(() => {
        document.querySelector(".loader").style.display = "none";
    }, 1000);

    // Init particles saat halaman load
    tsParticles.load("particles-js", {
        particles: {
            number: { value: 60 },
            color: { value: "#ff9800" },
            links: {
                enable: true,
                color: "#ff9800"
            },
            move: {
                enable: true,
                speed: 2
            }
        }
    });
});

// ========================
// NAV
// ========================
function toggleMenu() {
    document.getElementById("menu").classList.toggle("active");
}

// ========================
// LOGIN / LOGOUT
// ========================
function openLogin() {
    document.getElementById("loginModal").style.display = "flex";
}

function login() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (username === "admin" && password === "admin123") {
        document.getElementById("loginModal").style.display = "none";
        document.getElementById("publicWebsite").style.display = "none";
        document.getElementById("dashboardPage").style.display = "block";
        showNotification("Login berhasil!");
        loadProjects();
        initCharts();
    } else {
        alert("Username atau password salah!");
    }
}

function logout() {
    location.reload();
}

// ========================
// THEME
// ========================
function toggleTheme() {
    document.body.classList.toggle("light");
}

// ========================
// NOTIFIKASI
// ========================
function showNotification(text) {
    const notif = document.getElementById("notification");
    notif.innerText = text;
    notif.classList.add("show");
    setTimeout(() => {
        notif.classList.remove("show");
    }, 3000);
}

// ========================
// MODAL PROJECT
// ========================
function openModal() {
    document.getElementById("modal").style.display = "flex";
}

// ========================
// DATA PROJECTS
// ========================
let projects = [];

function loadProjects() {
    fetch("get_projects.php")
        .then(res => res.json())
        .then(data => {
            projects = data;
            renderProjects();
        })
        .catch(err => {
            console.error("Gagal load projects:", err);
        });
}

function renderProjects() {
    const tbody = document.querySelector("#projectTable tbody");
    tbody.innerHTML = "";

    projects.forEach(project => {
        tbody.innerHTML += `
        <tr>
            <td><img src="uploads/${project.image}" class="project-img"></td>
            <td>${project.name}</td>
            <td>${project.location}</td>
            <td>${project.status}</td>
            <td>
                <button class="edit-btn" onclick="editProject(${project.id})">Edit</button>
                <button class="delete-btn" onclick="deleteProject(${project.id})">Delete</button>
            </td>
        </tr>`;
    });

    document.getElementById("totalProjects").innerText = projects.length;
}

function saveProject() {
    const name     = document.getElementById("projectName").value;
    const location = document.getElementById("projectLocation").value;
    const status   = document.getElementById("projectStatus").value;
    const file     = document.getElementById("projectImage").files[0];

    if (!name || !location) {
        alert("Nama dan lokasi wajib diisi!");
        return;
    }

    if (!file) {
        alert("Upload gambar terlebih dahulu!");
        return;
    }

    const formData = new FormData();
    formData.append("name",     name);
    formData.append("location", location);
    formData.append("status",   status);
    formData.append("image",    file);

    fetch("add_project.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        if (data.trim() === "success") {
            loadProjects();
            document.getElementById("modal").style.display = "none";
            showNotification("Project berhasil ditambahkan!");
        } else {
            alert("Gagal menyimpan project. Response: " + data);
        }
    })
    .catch(err => {
        alert("Error: " + err);
    });
}

function deleteProject(id) {
    if (!confirm("Yakin hapus project ini?")) return;

    fetch("delete_project.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "id=" + id
    })
    .then(res => res.text())
    .then(data => {
        if (data.trim() === "success") {
            loadProjects();
            showNotification("Project dihapus!");
        }
    });
}

function editProject(id) {
    const project = projects.find(p => p.id == id);
    if (!project) return;

    const newName = prompt("Edit nama project:", project.name);
    if (!newName) return;

    fetch("edit_project.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `id=${id}&name=${encodeURIComponent(newName)}`
    })
    .then(res => res.text())
    .then(data => {
        if (data.trim() === "success") {
            loadProjects();
            showNotification("Project berhasil diupdate!");
        }
    });
}

function searchProject() {
    const value = document.getElementById("searchInput").value.toLowerCase();
    const rows  = document.querySelectorAll("tbody tr");

    rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        row.style.display = text.includes(value) ? "" : "none";
    });
}

// ========================
// CHARTS
// ========================
function initCharts() {
    new Chart(document.getElementById("projectChart"), {
        type: "bar",
        data: {
            labels: ["Jan","Feb","Mar","Apr","May"],
            datasets: [{
                label: "Projects",
                data: [4, 6, 8, 10, 12],
                backgroundColor: "#ff9800",
                borderWidth: 1
            }]
        },
        options: {
            plugins: { legend: { labels: { color: "#fff" } } },
            scales: {
                x: { ticks: { color: "#fff" } },
                y: { ticks: { color: "#fff" } }
            }
        }
    });

    new Chart(document.getElementById("revenueChart"), {
        type: "line",
        data: {
            labels: ["Jan","Feb","Mar","Apr","May"],
            datasets: [{
                label: "Revenue (M)",
                data: [2, 5, 4, 8, 15],
                borderColor: "#ff9800",
                borderWidth: 2,
                fill: false
            }]
        },
        options: {
            plugins: { legend: { labels: { color: "#fff" } } },
            scales: {
                x: { ticks: { color: "#fff" } },
                y: { ticks: { color: "#fff" } }
            }
        }
    });
}

</script>

</body>
</html>