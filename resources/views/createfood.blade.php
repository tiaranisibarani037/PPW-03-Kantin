<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: sans-serif;
  }

  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .food-image {
    width: 300px;
    height: 300px;
    margin-bottom: 20px;
  }

  .food-title {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .food-description {
    margin-bottom: 20px;
  }

  .button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .popup {
    display: block; /*  Change this to block to make the popup visible on load */
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    z-index: 100;
  }

  .popup-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
  }

  .popup-header h2 {
    margin: 0;
  }

  .popup-close {
    cursor: pointer;
  }

  .popup-content {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .popup-input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
 }

  .popup-button {
    padding:  10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .popup-button:hover {
    background-color: #3e8e41;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="popup" id="create-food-popup">
      <div class="popup-header">
        <h2>Create Food</h2>
        <span class="popup-close" id="close-popup">&times;</span>
      </div>
      <div class="popup-content">
        <input type="text" id="food-name" class="popup-input" placeholder="Food Name">
        <input type="file" id="food-image" class="popup-input">
        <textarea id="food-description" class="popup-input" placeholder="Food Description"></textarea>
        <button class="popup-button" id="create-food-submit">Create Food</button>
      </div>
    </div>

  <script>
    const closePopupButton = document.getElementById('close-popup');
    const foodNameInput = document.getElementById('food-name');
    const foodImageInput = document.getElementById('food-image');
    const foodDescriptionInput = document.getElementById('food-description');
    const createFoodSubmitButton = document.getElementById('create-food-submit');

    closePopupButton.addEventListener('click', () => {
      document.getElementById('create-food-popup').style.display = 'none';
    });

    createFoodSubmitButton.addEventListener('click', () => {
      const foodName = foodNameInput.value;
      const foodImage = foodImageInput.files[0];
      const foodDescription = foodDescriptionInput.value;

      // Create a new food card
      const foodCard = document.createElement('div');
      foodCard.className = 'card';
      foodCard.innerHTML = `
        <img src="${URL.createObjectURL(foodImage)}" alt="${foodName}">
        <h2>${foodName}</h2>
        <p>${foodDescription}</p>
        <button>Hapus</button>
      `;

      // Add the food card to the container
      document.querySelector('.container').appendChild(foodCard);

      // Reset the input fields
      foodNameInput.value = '';
      foodImageInput.value = '';
      foodDescriptionInput.value = '';

      // Close the popup
      document.getElementById('create-food-popup').style.display = 'none';
    });
  </script>
</body>
</html>