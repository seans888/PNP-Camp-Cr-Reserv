<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $lastname;
    public $firstname;
    public $middlename;
    public $birthdate;
    public $contact_number;
    public $street_address;
    public $city_address;
    public $zipcode_address;
    public $state_address;
    public $gender;
    public $position;



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['firstname', 'required'],
            ['lastname', 'required'],
            ['middlename', 'required'],
            ['birthdate', 'required'],
            ['street_address', 'required'],
            ['city_address', 'required'],
            ['zipcode_address', 'required'],
            ['state_address', 'required'],
            ['gender', 'required'],
            ['contact_number', 'required'],
            ['position', 'required'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        //============================//
        $user->firstname = $this->firstname;
        $user->lastname = $this->lastname;
        $user->middlename = $this->middlename;
        $user->birthdate = $this->birthdate;
        $user->street_address = $this->street_address;
        $user->state_address = $this->state_address;
        $user->zipcode_address = $this->zipcode_address;
        $user->city_address = $this->city_address;
        $user->gender = $this->gender;
        $user->contact_number = $this->contact_number;
        $user->position = $this->position;
        
        return $user->save() ? $user : null;
    }
}
