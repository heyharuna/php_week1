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
                    public $name;
                    protected $sex;
                    protected $age;
                    static $num = 1;

                    public function __construct($name, $sex, $age) {
                        $this -> name = $name;
                        $this -> sex = $sex;
                        $this -> age = $age;
                    }

                    public function showPerson() {
                        static $num = 0;
                        $num ++;
                        echo $num. "</br>";
                        echo "My name is " .$this -> name. " </br> I am " .$this -> sex. " </br> I am " .$this -> age. "years old </br></br>" ;
                    }
                }

                $haruna = new Person("Haruna", "Female", "21");
                $haruna -> showPerson();
                // $property = 'name';
                // echo $haruna -> name;
                // echo $haruna -> $property;

                $tak = new Person("Takeshi", "Male", "25");
                $tak -> showPerson();


            ?>
        </div>

        <div class="border">
            <h4>Javascript</h4>
            <script src="js/main.js" text="type/javascript"></script>
        </div>
    </body>
</html>
