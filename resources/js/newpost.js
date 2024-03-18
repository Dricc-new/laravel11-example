
//input[file] new post
const image = document.getElementById('image');

// on change input[file]
image.onchange = () => {
    var preview = document.getElementById('tumbnail');
    var file = document.getElementById('image').files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.style.display = 'none'
        preview.src = "";
    }

    preview.onload = (event) =>{
        event.target.style.display = 'block'
    }
}