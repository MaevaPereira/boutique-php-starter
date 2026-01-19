<?php
Class User{
    function __construct(
        public string $name,
        public string $email,
        public DateTime $registrationDate = new DateTime()
    ){}

public function isNewMember()
    {
        $dateJour = new DateTime("now");
        $interval = $this->registrationDate->diff($dateJour);
        if ($interval->days < 30) {
            return true;
        }
    }
}

$userA = new User("A","abcd@mail.com", new DateTime("2025-01-10"))

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p> <?= $userA ->isNewMember() ? "True" : "False"?> </p> 

</body>
</html>