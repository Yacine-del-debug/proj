<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
.day{
  text-align:center;
  font-size: 2em;
  font-family: arial;

}
.cards {
    margin: 0 auto;
    max-width: 1000px;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(225px, 1fr));
    grid-auto-rows: auto;
    gap: 20px;
    font-family: sans-serif;
    padding-top: 30px;
}

.cards * {
    box-sizing: border-box;
}

.card__image {
    width: 100%;
    height: 150px;
    object-fit: cover;
    display: block;
    border-top: 2px solid #333333;
    border-right: 2px solid #333333;
    border-left: 2px solid #333333;
}

.card__content {
    line-height: 1.5;
    font-size: 0.9em;
    padding: 15px;
    background: #fafafa;
    border-right: 2px solid #333333;
    border-left: 2px solid #333333;
}

.card__content > p:first-of-type {
    margin-top: 0;
}

.card__content > p:last-of-type {
    margin-bottom: 0;
}

.card__info {
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #555555;
    background: #eeeeee;
    font-size: 0.8em;
    border-bottom: 2px solid #333333;
    border-right: 2px solid #333333;
    border-left: 2px solid #333333;
}

.card__info i {
    font-size: 0.9em;
    margin-right: 8px;
}

.card__link {
    color: #64968c;
    text-decoration: none;
}

.card__link:hover {
    text-decoration: underline;
}
button[type="button"] {
            background-color: #4caf50;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
</style>
<?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the selected goal from the form data
        if (isset($_POST['calintake'])) {
            header("Location: page111.php");
            exit();
        }
    }
    ?>
<h2 class="day">Monday</h2>
<div class="cards">
  <div class="card">
    <img class="card__image" src="https://media.tenor.com/q0Sisfl_0V4AAAAd/bb-back-squats.gif" alt="">
    <div class="card__content">
      <h3>
      High Bar Back Squats 8x3
</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
      
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="https://fakeimg.pl/400x300/252c6a/fff/" alt="">
    <div class="card__content">
      <h3>
      Deadlifts 8x3
</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
      
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="https://fakeimg.pl/400x300/f1db26/000/" alt="">
    <div class="card__content">
      <h3>
        Lunges 8x3
</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
      
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="https://fakeimg.pl/400x300/252c6a/fff/" alt="">
    <div class="card__content">
      <h3>
        Calf Leg Press Toe Press 15x3
</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
     
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
</div>

<h2 class="day">Wednesday</h2>
<div class="cards">
  <div class="card">
    <img class="card__image" src="https://media.tenor.com/q0Sisfl_0V4AAAAd/bb-back-squats.gif" alt="">
    <div class="card__content">
      <h3>
      Bench Press 8x3
</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
     
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="https://fakeimg.pl/400x300/252c6a/fff/" alt="">
    <div class="card__content">
      <h3>
      Pullups 8x3
</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
      
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="https://fakeimg.pl/400x300/f1db26/000/" alt="">
    <div class="card__content">
      <h3>
        Chinups 8x3
</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="https://fakeimg.pl/400x300/252c6a/fff/" alt="">
    <div class="card__content">
      <h3>
Cable Row 8x3</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
      
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="https://fakeimg.pl/400x300/252c6a/fff/" alt="">
    <div class="card__content">
      <h3>
        Barbell Shoulder Press 8x3
</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
      
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
</div>

<h2 class="day">Friday</h2>
<div class="cards">
  <div class="card">
    <img class="card__image" src="https://media.tenor.com/q0Sisfl_0V4AAAAd/bb-back-squats.gif" alt="">
    <div class="card__content">
      <h3>
      Incline Bench Press 8x3
</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
      
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="https://fakeimg.pl/400x300/252c6a/fff/" alt="">
    <div class="card__content">
      <h3>
      Deadlifts 8x3
</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
      
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="https://fakeimg.pl/400x300/f1db26/000/" alt="">
    <div class="card__content">
      <h3>
        Barbell Curls 8x3
</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
      
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="https://fakeimg.pl/400x300/252c6a/fff/" alt="">
    <div class="card__content">
      <h3>
        Close Grip Bench 8x3
</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
      
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="https://fakeimg.pl/400x300/252c6a/fff/" alt="">
    <div class="card__content">
      <h3>
        Seated Barbell Shoulder Press 8x3
</h3>
      <p>
        Alias itaque praesentium eum, pariatur consequatur ducimus asperiores accusantium velit minima?
      </p>
    </div>
    <div class="card__info">
      
      <div>
        <a href="./" class="card__link">View More</a>
      </div>
    </div>
  </div>
</div>
<button type="button" name="regimenplan">View your Regimen</button>
<button type="button" name="calintake">View your reccomended Calorie and Protein Intake</button>
