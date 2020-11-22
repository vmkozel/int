<!--
    Создать 10 классов.
    + У каждого класса должно быть 3 характерных ему свойства.
    + У каждого класса должно быть должны быть описаны типы свойств в аннотациях.
    + У каждого класса должно быть сеттеры и геттеры для всех свойст
    + У каждого класса должны быть 2 публичных метода характерных этому классу и один приватный
    5 классов должны содержать в себе в свойстве другой класс ( например класс клавиатура содержит свойство - массив классов кнопок, или класс машина содержит в себе свойство двигатель(другой класс)
Квартира и комнаты

-->

<?php


class Users
{
    /**
     * @var string
     */
    protected $userName;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $email;

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Users constructor.
     * @param string $userName
     * @param string $password
     * @param string $email
     */
    public function __construct(string $userName, string $password, string $email)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getUserInfo()
    {
        return "У пользователя {$this->getUserName()} email - {$this->getEmail()} и пароль {$this->getPassword()}.";
    }

    /**
     * Validate login, password, userName
     * @return string
     */

    public function checkUserData()
    {
        $pattern_name = '/\w{3,}/';
        $pattern_mail = '/\w+@\w+\.\w+/';
        $pattern_password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';

        if (preg_match($pattern_name, $this->getUserName()) &&
            preg_match($pattern_mail, $this->getEmail()) &&
            preg_match($pattern_password, $this->getPassword())) {
            $out = "Введены корректные данные";
        } else {
            $out = "Данные не корректны";
        }
        return $out;
    }

}

class Moderator extends Users
{

    /**
     * @var int
     */
    protected $wrights;
    /**
     * @var int
     */
    protected $experience;
    /**
     * @var array
     */
    protected $skills;

    /**
     * @return int
     */
    public function getWrights(): int
    {
        return $this->wrights;
    }

    /**
     * @param int $wrights
     */
    public function setWrights(int $wrights): void
    {
        $this->wrights = $wrights;
    }

    /**
     * @return int
     */
    public function getExperience(): int
    {
        return $this->experience;
    }

    /**
     * @param int $experience
     */
    public function setExperience(int $experience): void
    {
        $this->experience = $experience;
    }

    /**
     * @return array
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @param array $skills
     */
    public function setSkills(array $skills): void
    {
        $this->skills = $skills;
    }

    /**
     * Moderator constructor.
     * @param string $userName
     * @param string $password
     * @param string $email
     * @param int $wrights
     * @param int $experience
     * @param array $skills
     */
    public function __construct(string $userName, string $password, string $email, int $wrights, int $experience, array $skills)
    {
        parent::__construct($userName, $password, $email);
        $this->wrights = $wrights;
        $this->experience = $experience;
        $this->skills = $skills;
    }

    public function getModeratorInfo()
    {
        $skills = $this->getSkills();
        $moderatorInfo = parent::getUserInfo();
        $moderatorInfo .= "<br>Модератор имеет права доступа {$this->getWrights()}, опыт работы {$this->getExperience()}, 
        обладает навыками ";
        if ((is_array($skills)) && $skills != 0) {
            foreach ($skills as $skill) {
                $moderatorInfo .= $skill;
            }
        }
        return $moderatorInfo;
    }
}

$user1 = new Users("Ivan", "123584536", "ivan12@gamil.com");
echo $user1->getUserInfo();
$moder1 = new Moderator("Helen", "45236273", "helen@gmail.com", "1", "2",
    ["English level C2", "Polish level A1"]);
echo $moder1->getModeratorInfo();