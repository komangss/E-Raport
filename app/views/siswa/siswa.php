<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="<?= BASEURL_PUBLIC; ?>/css_2d/style-siswa-2d.css"/>
    <title>Cek Semester</title>
</head>

<body>

    <div class="card uk-card box-shadow position-center"> 
        <h3 class="uk-card-title ">Kolom Siswa</h3>
        <form class="grid" uk-grid>

            <div class="uk-width-1-2@s">

                <select class="uk-input" type="text" >
                    <option value="">Choose Your Class</option>
                    <option value="XI RPL 1">X</option>
                    <option value="XI RPL 2">XI</option>
                    <option value="XI RPL 2">XII</option>
                </select>
            </div>
            
            <div class="uk-width-1-2@s">
                <select class=" uk-input1" type="text">
                    <option value="">Choose Your Semester</option>
                    <option value="XI RPL 1">1</option>
                    <option value="XI RPL 2">2</option>
                </select>
                
               <button    class="button" style="vertical-align:middle" ><span><a href="Show-Raport.php">Next</a></span></!DOCTYPE></button>
            </div>
            
    </div>

    </form>


</body>

</html>