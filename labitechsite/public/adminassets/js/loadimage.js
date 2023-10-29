function previewImage(){
    const image = document.querySelector('#formFileSm');
    const imgPreview = document.querySelector('.img-preview');


    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
        imgPreview.classList.add('d-block');
        imgPreview.classList.remove('d-none');
        imgPreview.classList.add('pb-3');
    }
}
function previewImageEdit(){
    const image = document.querySelector('#formFileSmEdit');
    const imgPreview = document.querySelector('.img-previewEdit');


    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.removeAttribute("src");
        imgPreview.setAttribute("src",oFREvent.target.result);
        imgPreview.classList.add('d-block');
        imgPreview.classList.remove('d-none');
        imgPreview.classList.add('pb-3');
    }
}
