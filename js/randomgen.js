/* Random img picker */

const img_array = [
    'taa.jpg',
    'AlissonBecker.jpg',
    'andyrob.jpg',
    'bajcetic.jpg',
    'Cody.jpg',
    'Darwin.jpg',
    'endo.jpg',
    'graven.jpg',
    'harvey.jpg',
    'ian-rush.jpg',
    'Jamie-Carragher.jpg',
    'joe-gomez.jpg',
    'lfcstadion.jpg',
    'sir-kenny-dalglish.jpg',
    'steven-gerrard.jpg',
    'vvd.jpg'
  ];
  
  function getRandomIndex(array) {
    return Math.floor(Math.random() * array.length);
  }
  
  function setRandomImage() {
    const randomIndex = getRandomIndex(img_array);
    const randomImageFilename = img_array[randomIndex];
  
    const imgElement = document.getElementById('randomImage');
  
    imgElement.src = 'img/' + randomImageFilename;
  
  }
  
  setRandomImage();
  