<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="register">
        <ul class="register">
            <li>
                <label for="pwd">Enter your password</label>
                <input type="text" name="pwd" id="pwd" required>
            </li>
            <li>
                <input type="submit" method="POST" name="sub">
            </li>
        </ul>
    </form>
    <?php echo "<p>Bonjour le monde</p>"; ?>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis hic soluta ducimus iusto aliquam voluptatibus sit vel accusamus ratione esse earum, quasi neque est id error dolorum suscipit distinctio eligendi dolores?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo fuga nihil numquam, molestiae earum, incidunt, et fugiat unde eum alias eos pariatur quidem animi accusantium odio perferendis quia vel iure.</p>
    <p class="success">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt delectus autem incidunt saepe iste placeat a success dolorum eaque architecto, ex ab sunt porro possimus maiores ad amet! Possimus, odit quisquam!</p>
    <?php if($_POST["pwd"]!= NULL && $_POST["pwd"]=="okay"){
        echo "<p> c'est un début</p>";
    } ?>
    <script src="js/home.js">
        let funct = function(){
            console.log("la vraie fonction");
        };
        if(true){
            funct = function(){
                console.log("normalement je te vois pas toi");
            };
        }
        funct();
        const myObject = {
            myMethod(items) {
                console.log(this); // logs myObject
                const callback = () => {
                    console.log(this); // logs myObject
                };
                items.forEach(callback);
            }
        };
    myObject.myMethod([1, 2, 3]); 
    </script>
</body>

</html>
