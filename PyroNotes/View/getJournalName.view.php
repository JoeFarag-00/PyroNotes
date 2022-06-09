<?php
    echo"<script>
    .frame {
        width: 90%;
        margin: 90px;
        text-align: center;
        position: absolute;
      }

      .button {
        margin: 20px;
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
      .btn-16 {
        border: none;
        color: #000;
      }
      .btn-16:after {
        position: absolute;
        content: \"\";
        width: 0;
        height: 100%;
        top: 0;
        left: 0;
        direction: rtl;
        z-index: -1;
        box-shadow:
         -7px -7px 20px 0px #fff9,
         -4px -4px 5px 0px #fff9,
         7px 7px 20px 0px #0002,
         4px 4px 5px 0px #0001;
        transition: all 0.3s ease;
      }
      .btn-16:hover {
        color: #000;
      }
      .btn-16:hover:after {
        left: auto;
        right: 0;
        width: 100%;
      }
      .btn-16:active {
        top: 2px;
      }
      

    </script>";
    echo"
    <div class=\"frame\">
    <form action=\"../Model/addJournal2User.php?userID={$userID}\" method=\"post\">
        <input class=\"journal-name-inpt\" type=\"text\" name=\"Jname\" required placeholder=\"Enter Journal Name\">
        <button class=\"journal-name-btn\" type=\"submit\">Add Journal</button>
    </form>
    </div>";