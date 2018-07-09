function showNameOpsional() {
    var fi = document.getElementById("opsi"); 
    var totalFileSize = 0;
    var fsize = fi.files.item(0).size;
              totalFileSize = totalFileSize + fsize;
              document.getElementById('tampilopsi').innerHTML = '<small><b>' + fi.files.item(0).name
              +
              '</b> (' + Math.round((fsize / 1024)) //DEFAULT SIZE IS IN BYTES SO WE DIVIDING BY 1024 TO CONVERT IT IN KB
              +
              ' KB)</small>';
  };