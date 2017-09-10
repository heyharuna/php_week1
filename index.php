<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <header>Week 1</header>
        <div class="border">
            <h4>PHP</h4>
            <?php
                class Person {
                    protected $name;
                    protected $sex;
                    protected $age;
                    static $num = 1;

                    public function __construct($name, $sex, $age) {
                        $this -> name = $name;
                        $this -> sex = $sex;
                        $this -> age = $age;
                    }

                    public function showName() {
                        return $this -> name;
                        echo "I am ". $this -> name. "</br>";
                    }

                    public function showSex() {
                        return $this -> sex;
                    }

                    public function showAge() {
                        return $this -> age;
                    }
                }

                $haruna = new Person('Haruna', 'Female', '21');
                $harunaName = $haruna -> showName();
                $harunaSex = $haruna->showSex();
                $harunaAge = $haruna->showAge();
                echo "I am ". $harunaName. "</br>";
                echo "I am ". $harunaSex. "</br>";
                echo "I am ". $harunaAge. "years old</br>";
            ?>
        </div>

        <div class="border">
            <h4>Javascript</h4>
            <script src="js/main.js" text="type/javascript"></script>
        </div>
    </body>
</html>
