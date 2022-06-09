<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../CSS/dashboard.css">
  <title>Dashboard | PyroNotes</title>
    <?php
    session_start();
    /* print_r($_SESSION); */
    /* print_r('<br>'); */
    /* $title = "Dashboard"; */

    //Enter css file name which is inside Styles/
    $css="../CSS/dashboard.css";
    //Enter js file name which is inside Scripts/
    $js="";
    /* require_once "../View/header.php"; */
    require_once "../Model/sayHello.php";
    require_once "../Model/DatabaseFunctions/insertQueries.php";
    require_once "../Model/DatabaseFunctions/selectQueries.php";
    require_once "../Model/DatabaseFunctions/connectToDatabase.php";
    ?>
</head>
<style>
   @import url("https://fonts.googleapis.com/css?family=Raleway:400,400i,700");
@-webkit-keyframes anim-in {
  0% {
    opacity: 0;
    transform: scale(0.5);
  }
  75% {
    opacity: 1;
    transform: scale(1.1);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
@keyframes anim-in {
  0% {
    opacity: 0;
    transform: scale(0.5);
  }
  75% {
    opacity: 1;
    transform: scale(1.1);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
body {
  font-family: "Raleway", sans-serif;
  font-size: 16px;
  line-height: 1.3;
  color: #333333;
  background-color: #D6EFFF;
}

.header__container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: #F1C40F;
  z-index: 100;
  box-shadow: 2px 2px 15px #333333;
  
 
}
.header__content {
  position: relative;
  padding: 0.5em;
  margin-bottom: 0%;
}
.header__title {

  padding-top: 0;
  margin: 0;
  color: #ffffff;
  text-align: center;
  bottom: 10px;
}
.accountInfo {
    padding: 0;
    margin: 0;
    color: #ffffff;
    text-align: center;
    bottom: 10px;
  }
.header__button {
  text-decoration: none;
  color: #ffffff;
  position: absolute;
  border-radius: 100%;
  border: 1px solid #FE654F;
  background-color: #FE654F;
  text-align: center;
  width: 40px;
  height: 40px;
  line-height: 40px;
  font-size: 2em;
  top: 50%;
  right: 0.25em;
  transform: translateY(-50%);
}
@media only screen and (min-width: 32em) {
  .header__button {
    bottom: 0;
    right: 1em;
    top: auto;
    transform: translateY(50%);
  }
}
.header__button:hover {
  background-color: #fe2203;
}

.main {
  margin-top: 5em;
  padding: 0 1em;
}

.notes {
  max-width: 90.063em;
  margin: 0 auto;
  vertical-align: top;
}

.note__container {
  box-shadow: 4px 4px 8px #333333;
  margin-top: 5em;
  width: 100%;
  margin-bottom: 2%;
  vertical-align: top;
  -webkit-animation: anim-in 0.5s forwards;
          animation: anim-in 0.5s forwards;
  transition: all 0.3s ease-out;
  position: relative;
  opacity: 0;
  transform: scale(0);
  display: inline-block;
}
@media only screen and (min-width: 32em) {
  .note__container {
    width: 47%;
    margin-left: 1.5%;
    margin-right: 1.5%;
  }
}
@media only screen and (min-width: 64.063em) {
  .note__container {
    width: 30.33333333%;
  }
}
.note__header {
  position: relative;
  padding: 0.75em 0.5em;
}
.note__title {
  font-size: 70%;
  font-style: italic;
}
.note__delete {
  text-decoration: none;
  color: #ffffff;
  position: absolute;
  border-radius: 100%;
  border: 1px solid #FE654F;
  background-color: #FE654F;
  text-align: center;
  width: 20px;
  height: 20px;
  line-height: 20px;
  font-weight: 700;
  top: 50%;
  right: 1em;
  transform: translateY(-50%);
}
.note__delete:hover {
  background-color: #fe2203;
}
.note__body {
  padding-bottom: 3em;
}
.note__content {
  padding: 0.5em;
  min-height: 4em;
}
.note__content:active, .note__content:focus {
  border: none;
  outline: none;
}
.note__footer {
  padding: 0.5em;
  position: absolute;
  bottom: 0;
  right: 0;
}
.note__colour-picker {
  display: block;
  float: right;
  overflow: hidden;
  text-indent: -999999em;
  border-radius: 100%;
  width: 15px;
  height: 15px;
  border: 1px solid #cbcbcb;
  margin: 0 0.25em;
  box-shadow: 1px 1px 2px #cbcbcb;
}
.note__colour-picker.is--active {
  transform: scale(1.3);
}
.frame {
  width: 50%;
  margin: 0px auto;
  text-align: left;
  margin-left: 0;
}
button {
  margin: 10px;
}
.custom-btn {
  width: 130px;
  height: 40px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}

.btn-12{
  position: relative;
  right: 20px;
  bottom: 10px;
  border:none;
  box-shadow: none;
  width: 130px;
  height: 40px;
  line-height: 42px;
  -webkit-perspective: 230px;
  perspective: 230px;
}
.btn-12 span {
  background: rgb(0,172,238);
background: linear-gradient(0deg, rgba(0,172,238,1) 0%, rgba(2,126,251,1) 100%);
  display: block;
  position: absolute;
  width: 130px;
  height: 40px;
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  border-radius: 5px;
  margin:0;
  text-align: center;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all .3s;
  transition: all .3s;
}
.btn-12 span:nth-child(1) {
  box-shadow:
   -7px -7px 20px 0px #fff9,
   -4px -4px 5px 0px #fff9,
   7px 7px 20px 0px #0002,
   4px 4px 5px 0px #0001;
  -webkit-transform: rotateX(90deg);
  -moz-transform: rotateX(90deg);
  transform: rotateX(90deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12 span:nth-child(2) {
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12:hover span:nth-child(1) {
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
}
.btn-12:hover span:nth-child(2) {
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
 color: transparent;
  -webkit-transform: rotateX(-90deg);
  -moz-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
  
}

#pushdown{
  position: absolute;
  margin: 60px;
}


.journalInfo{
  position: absolute;
  margin: 60px;
} 


/* @import url(https://fonts.googleapis.com/css?family=Roboto);
@import url(https://fonts.googleapis.com/css?family=Handlee);

.paper {
    position: relative;
    width: 90%;
    max-width: 800px;
    min-width: 400px;
    height: 480px;
    margin: 0 auto;
    background: #fafafa;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,.3);
    overflow: hidden;
}
.paper:before {
    content: '';
    position: absolute;
    top: 0; bottom: 0; left: 0;
    width: 60px;
    background: radial-gradient(#575450 6px, transparent 7px) repeat-y;
    background-size: 30px 30px;
    border-right: 3px solid #D44147;
    box-sizing: border-box;
}

.paper-content {
    position: absolute;
    top: 30px; right: 0; bottom: 30px; left: 60px;
    background: linear-gradient(transparent, transparent 28px, #91D1D3 28px);
    background-size: 30px 30px;
}

.paper-content textarea {
    width: 100%;
    max-width: 100%;
    height: 100%;
    max-height: 100%;
    line-height: 30px;
    padding: 0 10px;
    border: 0;
    outline: 0;
    background: transparent;
    color: mediumblue;
    font-family: 'Handlee', cursive;
    font-weight: bold;
    font-size: 18px;
    box-sizing: border-box;
    z-index: 1;
}
#pushdown{
  margin-top:200px ;
} */
</style>
<body>
<?php $username = sayHello($_SESSION["id"]);?>
<div class="app">
  <header class="header__container">
    <div class="header__content">
      <h2 class="header__title"><?php echo "{$username}'s".'&nbsp'."Notes";?></h4>
     <div id="frame">
     <form class="logout" action="../Model/doLogout.php">
        <input type="submit" value="Logout" name="Logout" class="custom-btn btn-12" ></input>
     </form> 
     </div>
          <a class="header__button" id="btnAdd" href="#">&#43;</a>
    </div>
  </header>
  <div class="main" id="main">
    <div class="notes" id="notes"></div>
  </div>
</div>
  

<div id="pushdown">
<?php
    $conn = getConnection();
    $ujQuery = getUserJournal($_SESSION["id"]);
    if(!$ujQuery){
        $userID = $_SESSION["id"];
        require_once "../View/getJournalName.view.php";
        exit;
    }
?>
</div>

<?php

//Get Journal Name And Display it
$journalRecord = getJournal($ujQuery["Journal_ID"]);
    echo '<div class="journalInfo">';
        echo "<h2 class=\"jName\">{$journalRecord["Journal_Name"]}</h2>";
        echo "<a href=\"updateJournalName.control.php?journalID={$ujQuery["Journal_ID"]}\">Rename Journal</a><br><br>";
        echo '<a class="addPage" href="../View/addPageForm.php">Add Page</a>';
    echo '</div>';
echo '</div>';



echo '<div  class="pages-content">';
    require_once "../Model/getJournalPages.php";
    require_once "../View/showPages.php";
    $pageArray = getJournalPages($journalRecord["Journal_ID"]);
    if(!$pageArray){
        exit;
    }
    showPages($pageArray);
echo '</div>';

require_once "../View/footer.php";
?>
<script  src="../JS/AnimateDash.js"></script>
</body>
</html>