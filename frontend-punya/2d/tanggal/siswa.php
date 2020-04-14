<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <link rel ="stylesheet" href="style.css"/>
    <title>Cek Semester</title>
</head>

<body>

    <div class="card uk-card box-shadow position-center"> 
        <h3 class="uk-card-title ">Kolom Siswa</h3>
        <form class="grid" uk-grid>

            <div class="uk-width-1-2@s">
            <!-- plih class -->
                <select class="uk-input" type="text" >
                    <option value="">Choose Your Class</option>
                    <option value="XI RPL 1">X</option>
                    <option value="XI RPL 2">XI</option>
                    <option value="XI RPL 2">XII</option>
                </select>
            </div>
            <!-- pilih semester -->
            <div class="uk-width-1-2@s">
                <select class=" uk-input1" type="text">
                    <option value="">Choose Your Semester</option>
                    <option value="XI RPL 1">1</option>
                    <option value="XI RPL 2">2</option>
                </select>
                
              <a type="sumbit" href="Show-Raport.php" class="button"  style="vertical-align:middle" >Next </a>
            </div>
            
    </div>

    </form>


</body>

</html>