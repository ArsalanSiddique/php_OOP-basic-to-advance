<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pets</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php # Script 5.3 - pets2.php
    // This page defines and uses the Pet, Cat, and Dog classes.

    # ***** CLASSES ***** #

    /* Class Pet.
* The class contains one attribute: name.
 * The class contains four methods:
 * - _ _construct()
 * - eat()
 * - sleep()
 * - play()
 */
    class Pet
    {
        public $name;
        function __construct($pet_name)
        {
            $this->name = $pet_name;
            self::sleep();
        }
        function eat()
        {
            echo "<p>$this->name is eating.</p>";
        }
        function sleep()
        {
            echo "<p>$this->name is sleeping.</p>";
        }

        // Pets can play:
        function play()
        {
            echo "<p>$this->name is playing.</p>";
        }
    } // End of Pet class.

    /* Cat class extends Pet.
 * Cat overrides play().
 */
    class Cat extends Pet
    {
        function climb()
        {
            echo "<p>$this->name is climbing.</p>";
        }

        function play()
        {
            echo "<p>$this->name is playing.</p>";
            
            // Call the Pet::play() method:
            parent::play();     //========> you can use  Pet::play();
        }
    } // End of Cat class.

    /* Dog class extends Pet.
 * Dog overrides play().
 */
    class Dog extends Pet
    {
        function fetch()
        {
            echo "<p>$this->name is fetching.</p>";
        }

        function play() {
            echo "<p>$this->name is playing.</p>";
            
            // Call the Pet::play() method:
            parent::play();
        }

    } // End of Dog class.

    # ***** END OF CLASSES ***** #

    // Create a dog:
    $dog = new Dog('DOG');

    // Create a cat:
    $cat = new Cat('CAT');

    // Create an unknown type of pet:
    $pet = new Pet('PET');

    // Feed them:
    $dog->eat();
    $cat->eat();
    $pet->eat();

    // Nap time:
    $dog->sleep();
    $cat->sleep();
    $pet->sleep();

    // Have them play:
    $dog->play();
    $cat->play();
    $pet->play();

    // $cat->climb();
    // $dog->fetch();

    // Delete the objects:
    unset($dog, $cat, $pet);

    ?>
</body>

</html>