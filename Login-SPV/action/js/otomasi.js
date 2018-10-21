function yesnoGedung() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
        document.getElementById('ifYesla').style.display = 'block';
    }
    else 
        { document.getElementById('ifYes').style.display = 'none';
         document.getElementById('ifYesla').style.display = 'none';}
}