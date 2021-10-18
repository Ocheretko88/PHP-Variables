<?php

class GuestBook
{

}
class GuestBookUser extends GuestBook
{
    /**
     * * @var int $userId
     * @param int $userId
     * @throws Exception викидає екзепшн, якщо..
     */
    //приватні атрибути + через try catch підключатись до бд
    private $pdo;
    private $stmt;
    public $error;
    private $userId;
    private function __construct(int $userId, $pdo, $stmt, $error)
    {
        $this->userId = $userId;
        $this->stmt = $stmt;
        $this->pdo = $pdo;
        $this->error = $error;
    }
    // у класа користувач будуть якісь публічні атрибути
    public $avatar;
    public $nickname;

    public function __construct($avatar, $nickname)
    {
        $this->avatar = $avatar;
        $this->nickname = $nickname;
    }

}
    public function addNewUser()
{
    //потрібно перевірити чи існую кристувач та добавити в поля бд нового користувача
}
    public function suspendUser()
{
    //обмежити діі користувача, якщо він/вона порушує правила гостьової книги
}
    public function deleteUser()
{
    //видалити користувача зі сторони сайту або самим користувачем
}
//


class Comment extends GuestBook
{
    // публічні атрибути класу коментар
    public $comment;
    public $like;
    public $dislike;
    public function __construct(string $comment, $like, $dislike)
    {
        $this->comment = $comment;
        $this->like = $like;
        $dislike->dislike = $dislike;
    }
}
    public function comment(int $userId, string $comment): void
    {
        // знайти юзера по його id з таблиці users
        // записати в таблицю comments коментар

    }
    public function addComment()
{
    //добавити новий коментар + записати в таблицю comments коментар
}
    public function deleteComment()
{
    //видалити коментар + видалити в таблиці comments коментар
}
    public function allowComments()
{
    //дозволити користувачам залишати коментарі
}
    public function limitComments()
{
    //дозволити коментарі для певних користувачів
}
