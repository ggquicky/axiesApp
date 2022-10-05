const priceText = document.querySelector('.pricetext');
const titleText = document.querySelector('.titletext');
const imageOnLoad  = document.querySelector('input[type="file"]')


const reader = new FileReader();

const previewPrice = document.querySelector('.price');
const previewTitle = document.querySelector('.imgName');
const imagePreview = document.querySelector('.image')

priceText.addEventListener('input', function(e){
    previewPrice.textContent = e.target.value + 'eTH' ;
});

titleText.addEventListener('input', function(e){
    previewTitle.textContent = e.target.value  ;
});





function handleEvent(event) {


    if (event.type === "load") {
        console.log(reader.result);
        imagePreview.src = reader.result;
    }
}

function addListeners(reader) {
    reader.addEventListener('loadstart', handleEvent);
    reader.addEventListener('load', handleEvent);
    reader.addEventListener('loadend', handleEvent);
    reader.addEventListener('progress', handleEvent);
    reader.addEventListener('error', handleEvent);
    reader.addEventListener('abort', handleEvent);
}

function handleSelected(e) {
    console.log( 'part1' );
    const selectedFile = imageOnLoad.files[0];
    if (selectedFile) {
        console.log( 'part2' );
        addListeners(reader);
        reader.readAsDataURL(selectedFile);
    }
}



imageOnLoad.addEventListener('change', handleSelected);
