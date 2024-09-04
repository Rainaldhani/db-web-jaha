document.getElementById('create-btn').addEventListener('click', function() {
    const num = Math.random()
    console.log("ini ke ${num}")
    // Get the selected file from the file input
    const imageFile = document.getElementById('input-image').files[0];

    // Create a new div element for the content
    const newElement = document.createElement('div');
    newElement.id = `konten-semu ${num}`
    newElement.className = 'article-content';

    const emptyDiv = document.createElement('div')
    const teks = document.createElement('h4')
    teks.className = "article-bottom-content"
    teks.textContent = "ini sub-content"



    // If an image file is selected, create an img element
    if (imageFile) {
        const reader = new FileReader();
        reader.onload = function(e) {
            newElement.style.backgroundImage = `url(${e.target.result})`;
        };
        reader.readAsDataURL(imageFile);
    }

    // Append the new element to the container
    document.getElementById('article-container').appendChild(newElement);
    document.getElementById(`konten-semu ${num}`).appendChild(emptyDiv);
    document.getElementById(`konten-semu ${num}`).appendChild(teks);
    
    document.getElementById('image-input').value = '';
});