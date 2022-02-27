<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency | Atraksione</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Shalimar&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Air Travel</h1>
        </div>
        <div class="nav-bar">
    
            <nav>
                <ul class="nav-list">
                    <li> <?php echo '<a href="index.php">Ballina</a>'?></li>
                    <li> <?php echo '<a href="atraksione.php"><span class="currentPage">Atraksione</span></a>'?></li>
                    <li> <?php echo '<a href="destinacionet.php">Destinacione</a>'?></li>
                    <li> <?php echo '<a href="rrethnesh.php">Rreth Nesh</a>'?></li>
                </ul>
            </nav>
        </div>
    </header>
<div class="atraksione-background">
    <div class="carousel-container">
    
        <div class="navigation">
            <div class="prev nav-btn"><</div>
            <div class="next nav-btn">></div>
          </div>
    
        <div class="carousel">
            <div class="item main">
                <p>Amsterdam is the Netherland's capital, known for its artistic heritage, 
                    elaborate canal system and narrow houses with gabled facades, legacies of the city's 17th-century Golden Age. 
                    Its Museum District houses the Van Gogh Museum, works by Rembrandt and Vermeer at the Rijksmuseum, 
                    and modern art at the Stedelijk. Cycling is key to the city's character, and there are numerous bike paths.</p>
              <img src="images/Amsterdam.jpg" alt="Amsterdam" />
              <div class="caption">Amsterdam</div>
            </div>
        <div class="item">
            <p>Berlin, Germany's capital, dates to the 13th century. Reminders of the city's turbulent 20th-century history include its Holocaust memorial and the Berlin Wall's graffitied remains. 
                Divided during the Cold War, its 18th-century Brandenburg Gate has become a symbol of reunification. 
                The city's also known for its art scene and modern landmarks like the gold-colored, swoop-roofed Berliner Philharmonie, built in 1963.</p>
              <img src="images/Berlin.jpg" alt="Berlin" />
              <div class="caption">Berlin</div>
            </div>
        <div class="item">
            <p>The City of Brussels is the largest municipality and historical centre of the Brussels-Capital Region, 
                as well as the capital of Belgium. It is also the administrative centre of the European Union, 
                and is thus often dubbed, along with the region, the EU's capital city.</p>
              <img src="images/Brusselss.jpg" alt="Brussels" />
              <div class="caption">Brussels</div>
            </div>      
        <div class="item">
            <p>London, the capital of England and the United Kingdom, is a 21st-century city with history stretching back to Roman times. 
                At its centre stand the imposing Houses of Parliament, the iconic 'Big Ben' clock tower and Westminster Abbey, 
                site of British monarch coronations. Across the Thames River, 
                the London Eye observation wheel provides panoramic views of the South Bank cultural complex, and the entire city.</p>
              <img src="images/London.jpg" alt="London" />
              <div class="caption">London</div>
            </div>      
        <div class="item">
            <p>New York City comprises 5 boroughs sitting where the Hudson River meets the Atlantic Ocean. 
                At its core is Manhattan, a densely populated borough that's among the world's major commercial, 
                financial and cultural centers. 
                Its iconic sites include skyscrapers such as the Empire State Building and sprawling Central Park. 
                Broadway theater is staged in neon-lit Times Square</p>
              <img src="images/NewYork.jpg" alt="New York" />
              <div class="caption">New York</div>
            </div>      
          </div>
       </div>
       <button class="sbmBtn atraksBtn">Rezervo</button>
    </div>
    <footer>Sky Travel &copy 2022</footer>
    <script src="main.js"></script>
</body>
</html>