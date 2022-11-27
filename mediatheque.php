<!DOCTYPE html>
<html lang="en">
<?php
      require_once "nav.php";
      ?>
        <style>
    .btn{
        float: right;
        margin-top: 1px;

    }

    ol{
       list-style: none;
       display: block;
       justify-content: left;
       width: 300px;
    }

    ol li{
     font-size: 1.0em;
     font-weight: bold;
     margin: 10px 0;
     background: #C0C0C0;
     padding: 5px 10px;
     align-items: center;
     color: black;
     cursor: pointer;
     position: relative;
     transition : all .4s;
     z-index: 5;
    }

    ol li::before{
     content: '';
     position: absolute;
     top:0;
     left: 0;
     height: 100%;
     width: 5px;
     background: red;
     transition : all .4s;
     z-index: -1; // permet de voir l ecriture dans on survole avc la souris 
    }
    ol li:hover::before{
        width: 100%;
    }
    ol li:hover{
        transform : translateX(17px);
    }
    h1{
        font-size: 1.6;
        font-weight: bold;
        text-align: center;
    }
    </style>

        <body>
<!--<h1 style="text-align: center;">Bonjour !<?php echo $_SESSION['user']; ?> </h1>-->
    <ol>
     <li>CD</li>
     <li>DVD</li>
</ol>

</body>
</html>