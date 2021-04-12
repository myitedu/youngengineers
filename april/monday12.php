<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to April 12, 2021</title>
</head>
<body>
<h3>Jon's Photo Album</h3>
<hr>
<p>Hello, my name is Jon Toshmatov and I live in New York</p>
<p>Here is the list of my photos</p>
<hr>
<a href="https://images.youracclaim.com/images/1ebc3d57-1dcb-4918-85fe-ebde58e08ff0/jon.jpg">
    <img alt="My image" title="My first photo" class="photo" src="https://images.youracclaim.com/images/1ebc3d57-1dcb-4918-85fe-ebde58e08ff0/jon.jpg">
</a>

<img alt="My image" title="My second photo with headset on" class="photo" src="https://avatars.githubusercontent.com/u/3628405?s=400&u=5cda8646f23059bc3bf68627901f2add8c116603&v=4">
<img alt="My image" title="My third photo" class="photo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Jon_Toshmatov.jpg/597px-Jon_Toshmatov.jpg">
<img alt="My image" title="My fourth photo with my ring on" class="photo" src="https://yt3.ggpht.com/ytc/AAUvwngznM0_yl8yfl9KZ_hkLVZC9kCCqOUZPX64uWbwNA=s900-c-k-c0x00ffffff-no-rj">
<hr>

<nav>
    <a target="_blank" href="http://google.com">Google</a>  |
    <a target="_blank" href="http://instagram.com">Instagram</a> |
    <a title="Click to send email to Jon" href="mailto:info@myitedu.us">Send Email</a>
</nav>

<!-- ul is an unordered list -->
<ul>
    <li>Have breakfast</li>
    <li>Do homework</li>
    <li>Watch morning news</li>
    <li>Go to school</li>
    <li>Pick up my sister</li>
    <li>Help my parents</li>
</ul>
<hr>
<ol>
    <li>Have breakfast</li>
    <li>Do homework</li>
    <li>Watch morning news</li>
    <li>Go to school</li>
    <li>Pick up my sister</li>
    <li>Help my parents</li>
</ol>
<hr>

<table class="mytable">
    <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Points</th>
        <th>Team</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Domenic</td>
        <td>88,110</td>
        <td>dcode</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Sally</td>
        <td>72,400</td>
        <td>Students</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Nick</td>
        <td>52,300</td>
        <td>dcode</td>
    </tr>
</table>


<style>
    th{
        background-color: darkred;
        color: yellow;
        text-align: left;
    }
    .mytable{
        width: 90%;
        border: 1px solid black;
    }

    td, th{
      border: 1px solid darkgrey;
    }

    .photo:hover{
        opacity: 1;
        cursor: pointer;
        border: 5px dotted #05a3c0;
    }
    .photo{
        width: 200px;
        border: 5px solid darkred;
        border-radius: 20px;
        margin: 5px;
        box-shadow: 5px 5px 5px 5px black;
        opacity: 0.5;
    }
</style>

</body>
</html>