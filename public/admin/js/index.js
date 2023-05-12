var imgInput = document.getElementById("imgInput");
var imgsrc = document.getElementById("imgsrc");

imgInput.onchange = (event) => {
    const [file] = imgInput.files;
    if (file) {
        imgsrc.src = URL.createObjectURL(file);
    }
};
