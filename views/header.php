<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>To-Do List</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Honk&family=Noto+Color+Emoji&family=Pacifico&family=Poetsen+One&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Honk&family=Noto+Color+Emoji&family=Pacifico&family=Poetsen+One&family=Titan+One&display=swap');
    @import url("https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap");
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Fredoka, Arial, sans-serif;
}

body{ 
  width: 100%;
 }

header.retro{
  background: linear-gradient(#28DF99, #D2F6C5);
  padding: 20px;
  text-align: center;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}

header.retro .title{
  text-decoration: none;
  color: #FD3A69;
  font-family: fredoka, arial;
  font-size: 54px;
}

header.retro .catchphrase{
  color: #ffffff;
  font-size: large;
  text-align: center;
}

header.retro .catchphrase:hover{
  color: black;
  transition: color 0.5s ease-in-out;
  font-size: 1.2em;
  transition: font-size 0.3s ease-in-out;
}

.nav-item{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #f8f9fa;
}

.nav-padding{
    flex-grow: 1;
}

.nav-list{
    list-style: none;
    display: flex;
    justify-content: center;
    margin: 0;
    padding: 0;
    gap: 20px;
}

.nav-list li{
    margin: 0 15px;
}

.nav-btn{
    color: #000000;
    text-decoration: none;
    font-size: 18px;
}

.nav-btn i{
    margin-right: 5px;
}

.nav-btn:hover{ 
    color: #00DFA2;
}

.container{
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(2, 2, 2, 0.1);
    width: 600px;
    text-align: center;
    margin: 20px auto;
    color: #69779B;
}

input[type="text"]{
    width: 80%;
    padding: 8px;
    margin: 10px 0;
    border-radius: 8px;
    border: 1px solid #cccccc;
}

button{
    padding: 10px 20px;
    background-color: #28DF99;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

button:hover{
    background-color: #21BF73;
}

ul{
    list-style-type: none;
    padding: 0;
}

li{
    background: #f8f9fa;
    margin: 5px 0;
    padding: 10px;
    border-radius: 8px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-decoration: none;
}
    </style>
</head>
<body>
    <header class="retro">
    <div>
    <h1><a class="title">List It</a></h1>
    <p class="catchphrase">By Luca</p>
  </header>

  <div class="nav-item">
  <nav class="nav-padding">
    <ul class="nav-list">
      <li><a class="nav-btn">🏠 Home</a></li>
      <li><a class="nav-btn">📞 Contact</a></li>
      <li><a class="nav-btn">🔍 About</a></li>
         </ul>
  </nav>
    </hr>
  </div>  
  <div class="container">
        <h1>To-Do List</h1>
  
